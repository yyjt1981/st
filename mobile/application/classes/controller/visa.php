<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Visa extends Controller {
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
		
		$visalist=ORM::factory('visa')->order_by('displayorder')->limit(10)->find_all()->as_array();
		
		foreach($visalist as $k=>$v)
		{
			$visalist[$k]=$v->as_array();
			
			
			$visalist[$k]['lit160']=Common::imagePath($v->litpic,'lit160');
			
			$visalist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/visa/show/'.$v->id;
		}
		$view=View::factory($this->cfg_tpl_dir.'/visa/visa_list');
		$view->set('visalist',$visalist);
        $html = $view->render();
        $this->response->body($html);
	}
	public function action_ajax_search()
	{

		$kindid=Arr::get($_POST, 'kindid');
		$visacity=Arr::get($_POST,'visacity');
		$visatype=Arr::get($_POST, 'visatype');
	    $page=Arr::get($_POST, 'page');
		$page=empty($page)?1:$page;
		$limit=($page-1)*10; 
		
		$where="id is not null";
	  //签证国家判断
		if(!empty($kindid))
		{
			//$kindlist=ORM::factory('visa_area')->where('pid','=',$kindid)->find_all()->as_my_array();
			$where.=" and nationid=$kindid";
		}
		//签证类型条件
		if(!empty($visatype))
		{
		   $where.=" and visatype='$visatype'";	
		}
		//签证城市条件
		if(!empty($visacity))
		{
		   $where.=" and cityid='$cityid'";	
		} 
		$sql="select * from sline_visa where $where order by displayorder limit $limit,10";
		$sqlcount="select count(*) as num from sline_visa where $where";
		
		$totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->get('num');
		$visalist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	    foreach($visalist as $k=>$v)
	    {
			
		    $visalist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
			$visalist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/visa/show/'.$v['id'];
	    }
		if($kindid==0)
		{
			$kindlist=ORM::factory('visa_area')->where('pid','=',0)->find_all()->as_my_array();
		}
		else
		{
			$kindlist=ORM::factory('visa_area')->where('pid','=',$kindid)->find_all()->as_my_array();
		}
		echo json_encode(array('visalist'=>$visalist,'kindlist'=>$kindlist,'totalcount'=>$totalcount));
		
	}
	public function action_show()
	{
		$id=$this->request->param('stuff');
		
		$visa=ORM::factory('visa',$id)->as_array();
		
		
		$visa['lit240']=Common::imagePath($visa['litpic'],'lit240');
		$visa['seotitle']=empty($visa['seotitle'])?$visa['title']:$visa['seotitle'];
		$view=View::factory($this->cfg_tpl_dir.'/visa/visa_show');
		$view->set('visa',$visa);
        $html = $view->render();
        $this->response->body($html);
	}

} // End Welcome
