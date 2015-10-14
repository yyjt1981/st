<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Photo extends Controller {
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

		$view=View::factory($this->cfg_tpl_dir.'/photo/photo_list');
        $result = $view->render();
        $this->response->body($result);
	}
	public function action_show()
	{
	    $id=$this->request->param('stuff');
		$photo=ORM::factory('photo',$id)->as_array();
		$p_webid=$photo['webid'];
		$p_aid=$photo['aid'];
		$picture=ORM::factory('photo_picture')->where('webid','=',$p_webid)->where('pid','=',$p_aid)->find_all()->as_my_array();
		

	    $photo['seotitle']=empty($photo['seotitle'])?$photo['photoname']:$photo['seotitle'];
		$photo['picture']=$picture; 
	    
	  
	    $view=View::factory($this->cfg_tpl_dir.'/photo/photo_show');
        $view->set('photo',$photo);
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
		
		$photolist=Model_Photo::getPhotoList($params);
		if($kindid==0)
		{
			$kindlist=Model_Destinations::navDestList(array('flag'=>'photo'));
		}
		else
		{
			$kindlist=Model_Destinations::getDestList(array('item'=>'photo','flag'=>'next','row'=>10,'kindid'=>$kindid));
		}
		
		echo json_encode(array('photolist'=>$photolist,'kindlist'=>$kindlist));
		
	}

}
