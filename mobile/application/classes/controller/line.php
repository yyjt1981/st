<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Line extends Controller {
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
		$kindid=Arr::get($_GET,'kindid');
		if(empty($kindid))
		{
		  $params=array('flag'=>'recommend','row'=>10);
		}
		else 
		{
		  $dest=ORM::factory('destinations',$kindid);
		  $params=array('flag'=>'recommend','type'=>'mdd','kindid'=>$kindid);  
		} 
 
		$linelist=Model_Line::getLineList($params);
		$view=View::factory($this->cfg_tpl_dir.'/line/line_list');
		$view->set('linelist',$linelist);
		$view->set('kindname',$dest->kindname);
        $this->response->body($view);		
	}
	public function action_ajax_search()
	{
		$type=Arr::get($_POST, 'type');
		$flag=Arr::get($_POST, 'flag');
		$kindid=Arr::get($_POST, 'kindid');
		$day=Arr::get($_POST,'day');
		$page=Arr::get($_POST, 'page');
		$order=Arr::get($_POST,'order');
		$page=empty($page)?1:$page;
		$limit=($page-1)*10; 
		
		$_order=empty($order)?"order by b.isjian desc,b.displayorder asc":"order by a.lineprice $order, b.displayorder asc";
		//$params=array('type'=>$type,'flag'=>$flag,'kindid'=>$kindid,'row'=>18,'limit'=>$limit);
		
		$where="a.id is not null";
		$where.=empty($day)?'':" and a.lineday ='$day'";
		$where.=empty($kindid)?'':" and find_in_set('$kindid',a.kindlist)";
		
	    
		if(!empty($kindid))
		   {
		     $sql="select a.* from sline_line as a left join sline_kindorderlist as b on (b.classid=$kindid and a.id=b.aid  and b.typeid=1) where $where $_order limit $limit,10";
			 $sqlcount="select count(*) as num from sline_line as a left join sline_kindorderlist as b on (b.classid=$kindid and a.id=b.aid  and b.typeid=1) where $where";
		   }
		else
		   {
		    $sql="select a.* from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1) where $where $_order  limit {$limit},10";
		    $sqlcount="select count(*) as num from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1) where $where";
		   }
		   
		$totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->get('num');
     

		$linelist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	    foreach($linelist as $k=>$v)
	    {
			 
			$url=$GLOBALS['cfg_phoneurl']. "/line/show/{$v['id']}";;
			$linelist[$k]['url']= $url;
			$linelist[$k]['title']="{$v['linename']}";
			$real=Model_Line::getLineRealPrice($v['aid'],$v['webid']);
			$linelist[$k]['lineprice']=$real ? $real : $v['lineprice'];
			
		
			if(!empty($row['lineprice'])&&!empty($v['storeprice']))
			   $linelist[$k]['discount']=abs((int)$v['storeprice']-(int)$v['lineprice']);
			 else
			   $linelist[$k]['discount']=0; 
			 
		
			$linelist[$k]['price'] = empty($v['lineprice'])?'电询':"&yen;".$v['lineprice'];
			
			$linelist[$k]['sellprice'] = empty($v['lineprice'])?'0':$v['lineprice']; //没有HTML标识的价格
			
			$linelist[$k]['storeprice']=!empty($v['storeprice'])?"<span class=\"rmb_2\">&yen;</span>".$v['storeprice']:"<span class=\"rmb_1\">电询</span>";
			
			if(empty($v['linepic']))
			{
				$linelist[$k]['litpic']=$linelist[$k]['lit240']=$linelist[$k]['lit160']=$GLOBALS['cfg_deskurl'].$GLOBALS['cfg_df_img'];
			}
			else
			{
				$linelist[$k]['litpic']=$GLOBALS['cfg_deskurl'].$v['linepic'];
		     	$linelist[$k]['lit240']=Common::imagePath($v['linepic'],'lit240');
			    $linelist[$k]['lit160']=Common::imagePath($v['linepic'],'lit160');
			}
			  
	   }
		if($kindid==0)
		{
			$kindlist=Model_Destinations::navDestList(array('flag'=>'line'));
		}
		else
		{
			$kindlist=Model_Destinations::getDestList(array('item'=>'line','flag'=>'next','row'=>10,'kindid'=>$kindid));
		}
		echo json_encode(array('linelist'=>$linelist,'kindlist'=>$kindlist,'totalcount'=>$totalcount));
	}
	public function action_show()
	{
		$id=$this->request->param('stuff');
		
	    $row=ORM::factory('line',$id)->as_array();	
		$startdateinfo=Model_Line::getLineStartDate($row);
	    $row['startdatestr'] = trim($startdateinfo['monthstr'],',');

	   $row['transport']=Common::getTransport($row['transport']);
	  $row['litpic']=Common::imagePath($row['linepic']);;
	  $row['lit240']=Common::imagePath($row['linepic'],'lit240');
	  $row['price']=!empty($row['lineprice'])?'￥'.$row['lineprice']:"电询";
	  $row['storeprice']=!empty($row['storeprice'])?$row['storeprice']:"无";
	  $row['linecontent']=Model_Line::getLineContent($row);
	 
	  $row['seotitle']=empty($row['seotitle'])?$row['linename']:$row['seotitle'];
		
			
		
		
		
		
		$view=View::factory($this->cfg_tpl_dir.'/line/line_show');
		$view->set('line',$row);
        $html = $view->render();
        $this->response->body($html);	
	}
	
} // End Welcome
