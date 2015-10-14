<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Car extends Controller {
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
		 
        $view=View::factory($this->cfg_tpl_dir.'/car/car_list');
        $html = $view->render();
        $this->response->body($html);

	}
	public function action_show()
	{
		$_carModel=new Model_Car();
		
		$id=$this->request->param('stuff');
		$row=ORM::factory('car',$id)->as_array();
	    $row['title']=!empty($row['seotitle'])?$row['seotitle']:$row['carname'];
	    $row['subname']=$row['carname'];
	    $row['startcity']=ORM::factory('startplace',$row['startplaceid'])->cityname;//($_startModule->
	    $row['carkind'] = ORM::factory('car_kind',$row['carkindid'])->kindname;
	    $row['brandname'] = ORM::factory('car_brand',$row['carbrandid'])->kindname;
	    $row['attrname']=ORM::factory('car_attr')->getAttrName($row['attrid'],1);
	    $row['tanknum']=ORM::factory('car_attr')->getAttrName($row['attrid'],2);
		
		$row['seotitle']=empty($row['seotitle'])?$row['carname']:$row['seotitle'];
	    $row['lit160']=Common::imagePath($row['litpic'],'lit160');
		
		$row['taocan']=ORM::factory('car_suit')->where('carid','=',$row['id'])->find_all()->as_array(); 
		
	 
	    $view=View::factory($this->cfg_tpl_dir.'/car/car_show');
        $view->set('car',$row);
		$html = $view->render();
        $this->response->body($html);
		
		
	}
	public function action_ajax_search()
	{
		
		$priceid=Arr::get($_POST, 'priceid');
		$startplace=Arr::get($_POST, 'startplace');
		$kindid=Arr::get($_POST, 'kindid');
		$brandid=Arr::get($_POST, 'brandid');
		$page=Arr::get($_POST, 'page');
		
		
	    //获取价格区间	
		if(!empty($priceid))
		{
		
		  $pricearr=ORM::factory('car_pricelist',$priceid)->as_array(); //获取最小,最大值
		  $pricemax=$pricearr['max']>99999999?99999999:$pricearr['max'];
		  $pricemin=($pricearr['min']<0 || empty($pricearr['min']))? 0 :$pricearr['min'];
		  if(empty($pricemax)) $pricemax=999999;
		  if($pricearr['min']==0)
		  {
			$priceinfo=$pricearr['min'].'元以下';
		  }
		  if($max==99999999)
		  {
			$priceinfo=$pricearr['max'].'元以上';
		  }
		  if($min!=0&&$max!=99999999)
		  {
			$priceinfo="价格范围在{$pricearr['min']}元-{$pricearr['max']}元之间";
		  }
		}

    $sql1="select distinct a.aid,a.*,b.minprice ";
    $sql2="select count(*) as num";
     $sql.=" from sline_car a left join (select carid,min(price) as minprice from sline_car_suit group by carid) as b on a.id=b.carid  $le where a.webid is not null";
	  if($kindid!=0) //车型分类
	    {
		  $sql=$sql." and a.carkindid=$kindid "; 
		}
		if($brandid!=0) //品牌
		{
		  $sql=$sql." and a.carbrandid=$brandid ";
		}
		if($priceid!=0) //价格范围
		{
		  $sql=$sql." and (b.minprice>$pricemin and b.minprice<$pricemax) ";
		}
		if($startplace!=0)//出发城市
		{
			$sql.=" and a.startplaceid=$startplace ";
		}
	  
	  $sql2=$sql2.$sql;
	  $page=empty($page)?1:$page;
	  $sql.=" limit 0,".$page*10;
       
      $count=DB::query(Database::SELECT,$sql2)->execute()->get('num');  	   
	  $carlist=DB::query(Database::SELECT,$sql1.$sql)->execute()->as_array();
	  foreach($carlist as $k=>$v)
	  {
		  $carlist[$k]['url']=$GLOBALS['cfg_phoneurl']."/car/show/{$v['id']}";
		 
		  $carlist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
		  
		  $carlist[$k]['satisfy']=Model_Comment::getSatisfyScore(array('articleid'=>$v['id'],'typeid'=>3));
		  $carlist[$k]['minprice']=empty($v['minprice'])?'电询':'&yen;'.$v['minprice'];
	  }
	  if($count>($page*10))
	    $carlist['count']=$count;
	  
	  echo json_encode($carlist);	    
		
	}
	
	
	
} // End Welcome
