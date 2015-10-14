<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Raider extends Controller {
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
	
		$view=View::factory($this->cfg_tpl_dir.'/article/article_list');
        $result = $view->render();
        $this->response->body($result);
	}
	public function action_show()
	{
	    $id=$this->request->param('stuff');
		$article=ORM::factory('article',$id)->as_array();
		$article['seotitle']=empty($article['seotitle'])?$article['articlename']:$article['seotitle'];
		
		
		
	    $view=View::factory($this->cfg_tpl_dir.'/article/article_show');
        $view->set('article',$article);
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
		$limit=($page-1)*9; 
		$params=array('type'=>$type,'flag'=>$flag,'kindid'=>$kindid,'row'=>9,'limit'=>$limit);
		
		$list=Model_Article::getArticleList($params);
		echo json_encode($list);
	}

} // End Welcome
