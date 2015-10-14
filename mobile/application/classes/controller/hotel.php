<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hotel extends Controller {
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
		
		$view=View::factory($this->cfg_tpl_dir.'/hotel/hotel_list');
        $result = $view->render();
        $this->response->body($result);
	}
	public function action_show()
	{
		$id=$this->request->param('stuff');
		
        $hotel=ORM::factory('hotel',$id)->as_array();
		
		$hotel['rank']=ORM::factory('hotel_rank',$hotel['hotelrankid'])->hotelrank;
		$hotel['opentime']=empty($hotel['opentime'])?'暂无':$hotel['opentime'];
		$hotel['service']=Model_Hotel_Attr::getAttrNames(202,$hotel['attrid']);
		$hotel['seotitle']=empty($hotel['seotitle'])?$hotel['hotelname']:$hotel['seotitle'];
		
		$hotel['lit240']=Common::imagePath($hotel['litpic'],'lit240');
		$hotel['roomlist']=ORM::factory('hotel_room')->where('hotelid','=',$hotel['id'])->find_all()->as_array();
		$view=View::factory($this->cfg_tpl_dir.'/hotel/hotel_show');
		$view->set('hotel',$hotel);
        $result = $view->render();
        $this->response->body($result);
	}
	public function action_ajax_search()
	{	
		$kindid=Arr::get($_POST, 'kindid');
		$priceid=Arr::get($_POST,'priceid');
		$rankid=Arr::get($_POST,'rankid');
		$page=Arr::get($_POST, 'page');
		$page=empty($page)?1:$page;
		$limit=($page-1)*10; 
		$where=" where a.ishidden='0'";
		if(!empty($rankid)) $where.=" and a.mainrankid=$rankid";
		if(!empty($kindid)) $where.=" and find_in_set($kindid,a.kindlist)";
		if(!empty($priceid))
		{
		   $pricearr=Model_Hotel_Pricelist::getMinMaxprice($priceid);//取得价格范围的最小与最大值 .
		   $where.=" and a.hotelprice >= {$pricearr['min']} and a.hotelprice <= {$pricearr['max']} ";
		}
		
		if(!empty($kindid))
		{
          $sql="select a.*,b.isjian ,b.isding,b.istejia from sline_hotel a left join sline_kindorderlist b on (a.id=b.aid and b.typeid=2 and a.webid=b.webid and b.classid='$kindid') {$where} order by b.isding desc,b.displayorder asc  limit $limit,10 ";       
		  $sqlcount="select count(*) as num from sline_hotel a left join sline_kindorderlist b on (a.id=b.aid and b.typeid=2 and a.webid=b.webid and b.classid='$kindid') {$where}"; 
		}
		else
		{
		  $sql="select a.*,b.displayorder,b.isding,b.isjian,b.istejia as istehui from sline_hotel a left join sline_allorderlist b on(a.id=b.aid and b.typeid=2) $where  order by b.isding desc,b.istejia desc,case when b.displayorder is null then 9999 end,b.displayorder asc  limit {$limit},10";	
		  $sqlcount="select count(*) as num from sline_hotel a left join sline_allorderlist b on(a.id=b.aid and b.typeid=2) $where";
		}
		
	
		$hotellist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		$totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->get('num');
		foreach($hotellist as $k=>$v)
		{
			$hotellist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/hotel/show/'.$v['id'];
			$hotellist[$k]['price']=empty($v['price'])?Model_Hotel::GetHotelMinPrice($v['webid'],$v['id']):$v['price'];
			$hotellist[$k]['price']=empty($hotellist[$k]['price'])?'电询':'&yen;'.$hotellist[$k]['price'];
			if(empty($v['litpic']))
			{
				$hotellist[$k]['litpic']=$hotellist[$k]['litpic']=$hotellist[$k]['lit160']=$GLOBALS['cfg_deskurl'].$GLOBALS['cfg_df_img'];
			}
			else
			{
			  $hotellist[$k]['litpic']=$GLOBALS['cfg_deskurl'].($v['litpic']);
			  $hotellist[$k]['litpic']=$GLOBALS['cfg_deskurl'].str_replace('litimg','lit240',$v['litpic']);
			  $hotellist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
			  
			}
		}
		if($kindid==0)
		{
			$kindlist=Model_Destinations::navDestList(array('flag'=>'hotel'));
		}
		else
		{
			$kindlist=Model_Destinations::getDestList(array('item'=>'hotel','flag'=>'next','row'=>10,'kindid'=>$kindid));
		}
		echo json_encode(array('hotellist'=>$hotellist,'kindlist'=>$kindlist,'totalcount'=>$totalcount));
		
	}

} // End Welcome
