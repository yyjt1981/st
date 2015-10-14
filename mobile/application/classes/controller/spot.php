<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Spot extends Controller {
	private $cfg_tpl_dir=null;
    public function before()
	{
		$config = Kohana::$config->load('webinfo');
		$value  = $config->get('theme');
		$value=empty($value)?'default':$value;
		$this->cfg_tpl_dir=$value;
		View::bind_global('cfg_tpl_dir', $value);
		
	}
	public function action_index()
	{
		
		$view=View::factory($this->cfg_tpl_dir.'/spot/spot_list');
        $html = $view->render();
        $this->response->body($html);	
	}
	public function action_show()
	{
		$id=$this->request->param('stuff');
		$spot=ORM::factory('spot',$id)->as_array();
		
		
		
		$tickets=ORM::factory('spot_ticket')->where('spotid','=',$spot['id'])->find_all()->as_array();
		foreach($tickets as $k=>$v)
		{
		   $v=$v->as_array();
		   $tickets[$k]=$v;	
		   $tickets[$k]['typename']=ORM::factory('spot_ticket_type',$v['tickettypeid'])->kindname;	
		}
		$spot['tickets']=$tickets;
		$spot['seotitle']=empty($spot['seotitle'])?$spot['spotname']:$spot['seotitle'];
		
		 $spot['lit240']=Common::imagePath($spot['litpic'],'lit240');
		 $spot['litpic']=Common::imagePath($spot['litpic']);
		
		$view=View::factory($this->cfg_tpl_dir.'/spot/spot_show');
		$view->set('spot',$spot);
        $html = $view->render();
        $this->response->body($html);	
	}
	public function action_ajax_search()
	{

		$kindid=Arr::get($_POST, 'kindid');
		$day=Arr::get($_POST,'priceid');
		$page=Arr::get($_POST, 'page');
		$attrid=Arr::get($_POST,'attrid');
		$priceid=Arr::get($_POST,'priceid');
		$page=empty($page)?1:$page;
		$limit=($page-1)*10; 
		
		$minmax=ORM::factory('spot_pricelist')->getSpotMinMaxprice($priceid);
		
		$where="a.id is not null";
		$where.=empty($kindid)?'':" and find_in_set('$kindid',a.kindlist)";
		
		if(!empty($minmax))
		{
			$where.=" and a.doorprice>{$minmax['min']} and a.doorprice<{$minmax['max']}";
		}
		if(!empty($attrid))
		{
			$attr_arr=explode(',',$attrid);
			foreach($attr_arr as $v)
			{
				if(!empty($v))
				  $where.=" and find_in_set($v,a.attrid)";
			}
		}
		
		
	    
		if(!empty($kindid))
		{
		     $sql="select a.* from sline_spot as a left join sline_kindorderlist as b on (b.classid=$kindid and a.id=b.aid  and b.typeid=5) where $where  limit $limit,10";
			 $sqlcount="select count(*) as num from sline_spot as a left join sline_kindorderlist as b on (b.classid=$kindid and a.id=b.aid  and b.typeid=5) where $where";
		}
		else
		{
		   $sql="select a.* from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where $where $order  limit {$limit},10";
		   $sqlcount="select count(*) as num from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) where $where";
		}
		$spotlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		$totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->get('num');
	    foreach($spotlist as $k=>$v)
	    {
			$spotlist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/spot/show/'.$v['id'];
			$spotlist[$k]['price'] = ORM::factory('spot_ticket')->getMinPrice($v['id']);
			$spotlist[$k]['price']=empty($spotlist[$k]['price'])?'暂无':'&yen;'.$spotlist[$k]['price'];
			
		
			 $spotlist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');; 
			
			  
	    }
		if($kindid==0)
		{
			$kindlist=Model_Destinations::navDestList(array('flag'=>'line'));
		}
		else
		{
			$kindlist=Model_Destinations::getDestList(array('item'=>'line','flag'=>'next','row'=>10,'kindid'=>$kindid));
		}
		echo json_encode(array('spotlist'=>$spotlist,'kindlist'=>$kindlist,'totalcount'=>$totalcount));
		
		//echo  $this->request->param('stuff');
	}

} // End Welcome
