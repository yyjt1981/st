<?php 
  require_once(dirname(__FILE__)."/../include/common.inc.php");
  require_once(dirname(__FILE__)."/../data/webinfo.php");
  require_once(dirname(__FILE__)."/../include/email.class.php");
  require_once SLINEINC."/view.class.php";
  
  //防止跨站脚本攻击
  foreach($_POST as $key=>$value)
  {
	 $_POST[$key]=RemoveXSS($value);
  }
  foreach($_GET as $key=>$value)
  {
	 $_GET[$key]=RemoveXSS($value);
  }
  
  $typeid=2; //栏目id
  $typename=GetTypeName($typeid);//获取栏目名称
  $pv = new View($typeid);
  
 if(empty($dopost))
 {
	
	 
   
  $info=getHotelInfo($hotelid);

  $roominfo = getRoomInfo($roomid);

  if(!isset($info))
  {
     head404();
  }
  $info['series']=getSeries($info['id'],'02');//编号
  $info['title'] = $info['hotelname']."({$roominfo['roomname']})";
  $info['roomname'] = $roominfo['roomname'];//房型名称
  //$info['price'] = $roominfo['price'];

  if(!empty($info['dingjin']))$GLOBALS['condition']['_djsupport']=1;//是否支持定金
  if(!empty($roominfo['jifentprice']))$GLOBALS['condition']['_has_jifentprice']=1;
  if(!empty($roominfo['jifencomment']))$GLOBALS['condition']['_has_jifencomment']=1;
  if(!empty($roominfo['jifenbook']))$GLOBALS['condition']['_has_jifenbook']=1;
  
  $udateArr = explode('|',$udate);
  $dnumArr = explode('|',$dnum);
  $dpriceArr = explode('|',$dprice);
  
  $roomdinginfo = getRoomArr($udateArr,$dnumArr,$dpriceArr);//已经选择了房型间数与入住日期.
  
  //如果用户是登陆状态,获取用户信息
  if($User->uid)
  {
	 $userinfo = $User->getInfoByMid($User->uid);//获取用户信息 
	 $info['linkman'] = $userinfo['truename'];
	 $info['linktel'] = $userinfo['mobile'];
	 $info['linkemail'] = $userinfo['linkemail'];
	 
  }
  
  foreach($info as $k=>$v) 
  {
	  $pv->Fields[$k] = $v;
  }
  foreach($roominfo as $k=>$v) 
  {
	  $pv->Fields[$k] = $v;
  }
 $pkname = get_par_value($info['kindlist'],$typeid);//上一级
 //获取上级开启了导航的目的地
  getTopNavDest($info['kindlist']);

  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."hotels/" ."hotel_booking.htm");

  $pv->Display();
  exit();
 }
//保存订单
else if($dopost=="savebooking")
{
   $udate = explode("|",$udate);
   $dnum = explode("|",$dnum);
   $dprice = explode('|',$dprice);
   $memberid = $User->uid ? $User->uid : 0;
   $arr = array(
           'ordersn'=>$ordersn,
		   'webid'=>$webid,
		   'typeid'=>$typeid,
		   'productautoid'=>$productautoid,
		   'productaid'=>$productaid,
		   'productname'=>$productname,
		   'childprice'=>$childprice,
		   'childnum'=>$childnum,
		   'linkman'=>$linkman,
		   'linktel'=>$linktel,
		   'linkemail'=>$linkemail,
		   'linkqq'=>$linkqq,
		   'jifentprice'=>$jifentprice,
		   'jifenbook'=>$jifenbook,
		   'jifencomment'=>$jifencomment,
		   'addtime'=>time(),
		   'memberid'=>$memberid,
		   'dingjin'=>$dingjin,
		   'suitid'=>$suitid,
           'paytype'=>$paytype
   );
  
   for($i=0;isset($udate[$i]);$i++)
   {
	   $ordersn=get_order_sn('02');//订单号
       $arr['dingnum']=$dnum[$i];
       $arr['price'] = $dprice[$i];
       $arr['usedate'] = $udate[$i];
       $arr['ordersn'] = $ordersn;
       $flag = Helper_Archive::addOrder($arr);
   }
   
  
   if($flag)
   {
	  $url = "{$GLOBALS['cfg_basehost']}/member/";
	
	  
		 $mailto = $cfg_Email139;
		 $title   = $linename . "酒店订单";
		 
		 $content = $linkman . "预定" . $usedate  . $productname . "(价格:".$price.")"."酒店" ."联系电话:".$linktel."-----".$GLOBALS['cfg_webname'];
         if(!empty($mailto))ordermaill($mailto,$title,$content);
	    // Helper_Archive::showMsg('订单提交成功!',$url,1,3); 
		echo $url; 
		 
		 exit();
   }
   else
   {
	   echo 'no';
	  //Helper_Archieve::showMsg('订单提交失败!',-1,0,3);   
   }

    //在线支付
    if($dopost == 'payonline')
    {
        $order = Helper_Archive::getOrderInfo($id);
        $price = intval($order['dingnum']) * $order['price'];
        if(empty($price)) return ;
        echo Helper_Archive::payOnline($order['ordersn'],$order['productname'],$paytype,$price);
    }
 
	    
		
	

}

    /**
     *  获得预订酒店的基本信息
     *
     * @access    private
     * @return    array
     */
function getHotelinfo($id)
{
   global $dsql;
   $sql="select *,id as productid,aid as productaid from #@__hotel where id=$id";
   $row=$dsql->GetOne($sql);
   return $row;
}

function getRoomInfo($ticketid)
{
	global $dsql;
	$sql="select * from #@__hotel_room where id=$ticketid";
    $row=$dsql->GetOne($sql);
    return $row;
	
}
//生成所预订的房间数组
function getRoomArr($udate,$dnum,$dprice)
{
	$out = array();
	for($i=0 ;isset($udate[$i]);$i++)
	{
		$total = $dnum[$i] * $dprice[$i];
		$out[]=array('usedate'=>$udate[$i],'dingnum'=>$dnum[$i],'totalprice'=>$total,'singleprice'=>$dprice[$i]);
		
	}
	return $out;
	
}
?>
