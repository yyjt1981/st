<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tuan extends Controller {
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
		
		  $view=View::factory($this->cfg_tpl_dir.'/tuan/tuan_list');
        $html = $view->render();
        $this->response->body($html);

	}
	public function action_show()
	{
		$id=$this->request->param('stuff');
		$tuan=ORM::factory('tuan',$id)->as_array();
		
		$kindid=Model_Destinations::getMaxKindid($tuan['kindlist']);
		$tuan['destname']=ORM::factory('destinations',$kindid)->kindname;
		$tuan['lit240']=Common::imagePath($tuan['litpic'],'lit240');
		$tuan['seotitle']=empty($tuan['seotitle'])?$tuan['title']:$tuan['seotitle'];
		$view=View::factory($this->cfg_tpl_dir.'/tuan/tuan_show');
        $view->set('tuan',$tuan);
		$html = $view->render();
        $this->response->body($html);
	}
	public function action_ajax_search()
	{
		$type=Arr::get($_POST, 'type');
		$flag=Arr::get($_POST, 'flag');
		$kindid=Arr::get($_POST, 'kindid');
		$page=Arr::get($_POST, 'page');
		
		$page=empty($page)?1:$page;
		$limit=($page-1)*18;
		 
		$params=array('type'=>$type,'flag'=>$flag,'kindid'=>$kindid,'row'=>18,'limit'=>$limit);	
		$tuanlist=Model_Tuan::getTuanList($params);
		if($kindid==0)
		{
			$kindlist=Model_Destinations::navDestList(array('flag'=>'tuan'));
		}
		else
		{
			$kindlist=Model_Destinations::getDestList(array('item'=>'tuan','flag'=>'next','row'=>10,'kindid'=>$kindid));
		}
		
		echo json_encode(array('tuanlist'=>$tuanlist,'kindlist'=>$kindlist));
		//echo  $this->request->param('stuff');
	}

} // End Welcome
