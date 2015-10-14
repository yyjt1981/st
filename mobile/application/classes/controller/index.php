<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {
	private $cfg_tpl_dir=null;
    public function before()
	{
		//默认模板配置
		$config = Kohana::$config->load('webinfo');
		$value  = $config->get('theme','default');
		$this->cfg_tpl_dir=$value;
		View::bind_global('cfg_tpl_dir', $value);
		//默认数据库
		
		
	}
	public function action_index()
	{        
		$view=View::factory($this->cfg_tpl_dir.'/index');
        $html = $view->render();
        $this->response->body($html);
	}
	public function action_search()
	{
		
		$typeid=Arr::get($_REQUEST,'typeid');
		$keyword=Arr::get($_REQUEST,'keyword'); 
		$typeid = !empty($typeid) ? $typeid : 0;
		$w = $typeid != 0 ? " and typeid={$typeid}" : '';		
		require MODPATH."cloudsearch/pscws4.class.php";
		$pscws = new PSCWS4('utf-8');
		
		$pscws->set_charset('utf-8');
		$pscws->set_rule(MODPATH.'cloudsearch/rules.utf8.ini');
		$pscws->set_dict(MODPATH.'cloudsearch/dict.utf8.xdb');
		$pscws->send_text($keyword);
		while ($some = $pscws->get_result())
		{
		   foreach ($some as $word)
		   {
		   
			  $words[]=$word['word'];
		   } 
		}
		$where="title is not null";
		foreach($words as $k=>$v)
		{
			$where.=" and title like '%$v%'";
		  if(mb_strlen($v,'utf-8')>1)
			$whereor.=" or title like '%$v%'";
		}
		$whereor=trim(trim($whereor),'or');
		
		
		$wh=!empty($whereor)? "(($where) or ($whereor))":$where;
		
		
		
		//$sql="select * from #@__search where $where";
		$wh.=$w;
		
		$whereor=empty($whereor)?$where:$whereor;
		
		$sql="select a.* from (select *,case when $where then 1 when $whereor then 2 end as neworder from sline_search where $wh) a order by neworder limit 10";
		
		
		
		
        if(!empty($typeid)||!empty($keyword))
        $list=DB::query(Database::SELECT,$sql)->execute()->as_array();
        foreach($list as $k=>$v)
		{
			$list[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
			
			switch($v['typeid'])
			{
				case 1:
				   $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/line/show/'.$v['tid'];
				   break;
				case 2:
				   $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/hotel/show/'.$v['tid'];
				   break;
			    case 3:
				   $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/car/show/'.$v['tid']; 	
				  break;
				case 4:
				   $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/raider/show/'.$v['tid'];
				   break;
				case 5:
				 $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/spot/show/'.$v['tid'];
				 break;
				case 6:
				   $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/photo/show/'.$v['tid'];
				   break;  
				case 8:
				   $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/visa/show/'.$v['tid'];
				   break;
				case 13:
				    $list[$k]['url']=$GLOBALS['cfg_phoneurl'].'/tuan/show/'.$v['tid'];
					break;      	      
			}
		}
	    $view=View::factory($this->cfg_tpl_dir.'/search');
		$view->set('list',$list);
		$view->set('keyword',$keyword);
		$view->set('typeid',$typeid);
		$this->response->body($view);
	}

} // End Index
