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
  
  $typeid=5; //景点栏目
  $typename=GetTypeName($typeid);//获取栏目名称
  $pv = new View($typeid);
  
 if(empty($dopost))
 {
	
	 
   
  $info=getSpotInfo($spotid);
 
  $ticketinfo = getTicketInfo($ticketid);

  if(!isset($info))
  {
     head404();
  }
  $info['series']=getSeries($info['id'],'05');//编号
  $info['title'] = $info['spotname']."({$ticketinfo['title']})";
  $info['ticketname'] = $ticketinfo['title'];//票的名称
  $info['price'] = $ticketinfo['ourprice'];

  if(!empty($info['dingjin']))$GLOBALS['condition']['_djsupport']=1;//是否支持定金
  if(!empty($ticketeinfo['jifentprice']))$GLOBALS['condition']['_has_jifentprice']=1;
  if(!empty($ticketeinfo['jifencomment']))$GLOBALS['condition']['_has_jifencomment']=1;
  if(!empty($ticketeinfo['jifenbook']))$GLOBALS['condition']['_has_jifenbook']=1;
  
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
  foreach($ticketeinfo as $k=>$v) 
  {
	  $pv->Fields[$k] = $v;
  }
 $pkname = get_par_value($info['kindlist'],$typeid);//上一级
 //获取上级开启了导航的目的地
  getTopNavDest($info['kindlist']);

  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."spots/" ."spot_booking.htm");

  $pv->Display();
  exit();
 }
//保存订单
else if($dopost=="savebooking")
{
 
  
   $ordersn=get_order_sn('05');//订单号
   $memberid = $User->uid ? $User->uid : 0;
   $arr = array(
           'ordersn'=>$ordersn,
		   'webid'=>$webid,
		   'typeid'=>$typeid,
		   'productautoid'=>$productautoid,
		   'productaid'=>$productaid,
		   'productname'=>$productname,
		   'price'=>$price,
		   'childprice'=>$childprice,
		   'dingnum'=>$dingnum,
		   'usedate'=>$usedate,
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
  
   if(Helper_Archive::addOrder($arr))
   {

       $model = new CommonModule('#@__member_order');
       $orderid = $model->getField('id',"ordersn='$ordersn'");
       //判断是否开启在线支付
       if(!empty($choosepay)  && $paytype!='3')
       {
           $url = $GLOBALS['cfg_basehost'].'/spots/booking.php?dopost=payonline&id='.$orderid."&paytype=".$choosepay;
       }
       else
       {
           $url = "{$GLOBALS['cfg_basehost']}/member/";
       }


	
	  
		 $mailto = $cfg_Email139;
		 $title   = $productname . "门票订单";
		 
		 $content = $linkman . "预定" . $usedate  . $productname . "(价格:".$price.")"."门票,数量:" . $dingnum . "张" ."联系电话:".$linktel."-----".$GLOBALS['cfg_webname'];
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

    
	    
		
	

}
//在线支付
else if($dopost == 'payonline')
{
        $order = Helper_Archive::getOrderInfo($id);
        $price = intval($order['dingnum']) * $order['price'];
        if(empty($price)) return ;
        echo Helper_Archive::payOnline($order['ordersn'],$order['productname'],$price,$paytype);
}
 

    /**
     *  获得预订景点的基本信息
     *
     * @access    private
     * @return    array
     */
function getSpotinfo($id)
{
   global $dsql;
   $sql="select *,id as productid,aid as productaid from #@__spot where id=$id";
   $row=$dsql->GetOne($sql);
   return $row;
}

function getTicketInfo($ticketid)
{
	global $dsql;
	$sql="select * from #@__spot_ticket where id=$ticketid";
    $row=$dsql->GetOne($sql);
    return $row;
	
}
?>
