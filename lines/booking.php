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
  
  $typeid=1; //线路栏目
  $typename=GetTypeName($typeid);//获取栏目名称
  $pv = new View($typeid);
 if(empty($dopost))
 {
	
	 
   
  $lineinfo=getLineInfo($lineid);
  $suitinfo=getLineSuitInfo($suitid);
  if(!isset($lineinfo))
  {
     head404();
 
  }
  $lineinfo['lineseries']=getSeries($lineinfo['id'],'01');//线路编号
  $lineinfo['usedate']=date("Y")."-".$usedate;//出团日期
  $lineinfo['title'] = $lineinfo['linename']."({$suitinfo['suitname']})";
  $lineinfo['price'] = $price;
  $lineinfo['childprice'] = $childprice;
  $lineinfo['dingnum'] = $adultnum;//数量
  $lineinfo['childnum'] = $childnum;
  $lineinfo['oldnum'] = $oldnum;
  $lineinfo['suitid'] = $suitid;
  $lineinfo['totalprice'] = $price * $adultnum + $childprice * $childnum;//总价格
  if(!empty($suitinfo['dingjin']))$GLOBALS['condition']['_djsupport']=1;//是否支持定金
  if(!empty($suitinfo['jifentprice']))$GLOBALS['condition']['_has_jifentprice']=1;
  if(!empty($suitinfo['jifencomment']))$GLOBALS['condition']['_has_jifencomment']=1;
  if(!empty($suitinfo['jifenbook']))$GLOBALS['condition']['_has_jifenbook']=1;

     $lineinfo['dingjin'] = $suitinfo['dingjin'];
     $lineinfo['jifentprice'] = $suitinfo['jifentprice'];
     $lineinfo['jifencomment'] = $suitinfo['jifencomment'];
     $lineinfo['jifenbook'] = $suitinfo['jifenbook'];

     //如果用户是登陆状态,获取用户信息
  if($User->uid)
  {
	 $userinfo = $User->getInfoByMid($User->uid);//获取用户信息 
	 $lineinfo['linkman'] = $userinfo['truename'];
	 $lineinfo['linktel'] = $userinfo['mobile'];
	 $lineinfo['linkemail'] = $userinfo['linkemail'];
	 
  }


  
  
	
  
  
  
  
  foreach($lineinfo as $k=>$v) //线路基本信息
  {
	  $pv->Fields[$k] = $v;
  }
 $pkname = get_par_value($lineinfo['kindlist'],$typeid);//上一级
 //获取上级开启了导航的目的地
  getTopNavDest($lineinfo['kindlist']);

  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."lines/" ."line_booking.htm");

  $pv->Display();
  exit();
 }
//保存订单
else if($dopost=="savebooking")
{

  
   $ordersn=get_order_sn('01');//订单号
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
           'oldnum'=>$oldnum,
           'oldprice'=>$oldprice,
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
           'paytype'=>$paytype,
           'suitid'=>$suitid
   );
  
   if(Helper_Archive::addOrder($arr))
   {
       //成人信息
       for($i=1;$i<=$dingnum;$i++){
           $dingArr = array(
               'memberorderid'=>  $arr['ordersn'],
               'tourertype'=> 'adult',
               'name'=> ${"adultName".$i},
               'mobile'=>${"adultMobile".$i},
               'cardnum'=>${"adultCardNum".$i}
           );
           Helper_Archive::addTourers($dingArr);
       }

       //儿童信息
       for($i=1;$i<=$childnum;$i++){
           $childArr = array(
               'memberorderid'=>  $arr['ordersn'],
               'tourertype'=> 'child',
               'name'=> ${"childName".$i},
               'mobile'=>${"childMobile".$i},
               'cardnum'=>${"childCardNum".$i}
           );
           Helper_Archive::addTourers($childArr);
       }

       //老人信息
       for($i=1;$i<=$oldnum;$i++){
           $childArr = array(
               'memberorderid'=>  $arr['ordersn'],
               'tourertype'=> 'old',
               'name'=> ${"childName".$i},
               'mobile'=>${"childMobile".$i},
               'cardnum'=>${"childCardNum".$i}
           );
           Helper_Archive::addTourers($childArr);
       }

       $model = new CommonModule('#@__member_order');
       $orderid = $model->getField('id',"ordersn='$ordersn'");
       //判断是否开启在线支付且不是二次确认付款

       if(!empty($choosepay) && $paytype!='3')
       {
           $url = $GLOBALS['cfg_basehost'].'/lines/booking.php?dopost=payonline&id='.$orderid.'&paytype='.$choosepay;
       }
       else
       {
           $url = "{$GLOBALS['cfg_basehost']}/member/";
       }

	
	   if($cfg_lineEmail != '')
		 {
		     $mailto = $cfg_lineEmail;
		 }
		 else
		 {
		     $mailto = $cfg_Email139;
		 }
		 $title   = $linename . "线路订单";
		 
		 $content = $linkman . "预定" . $usedate  . $productname . "(成团报价:".$price.")"."旅游线路,成人数:" . $dingnum . "人" . ";儿童数:" . $childnum . "人;联系电话:".$linktel."-----".$GLOBALS['cfg_webname'];
         if(!empty($mailto))ordermaill($mailto,$title,$content);
	    // Helper_Archive::showMsg('订单提交成功!',$url,1,3); 
		 echo $url;

        //预订送积分
        $jifen = $jifenbook ? $jifenbook : 0 ;
        $sql = "update #@__member set jifen=jifen+".$jifen." where mid='$memberid'";
        $dsql->ExecNoneQuery($sql);
		exit();
   }
   else
   {
	   echo 'no';
	  //Helper_Archieve::showMsg('订单提交失败!',-1,0,3);   
   }

   
 
	    
		
	

}
//在线支付
if($dopost == 'payonline')
{
    $order = Helper_Archive::getOrderInfo($id);
    $price = intval($order['dingnum']) * $order['price'] +intval($order['childnum']) * $order['childprice'];
    if(empty($price)) return ;
    echo Helper_Archive::payOnline($order['ordersn'],$order['productname'],$price,$paytype);
}

    /**
     *  获得预订线路的基本信息
     *
     * @access    private
     * @return    array
     */
function getlineinfo($id)
{
   global $dsql;
   $sql="select id,aid,webid,linename,kindlist,jifentprice,jifenbook,jifencomment,dingjin,paytype from #@__line where id=$id";
   $row=$dsql->GetOne($sql);
   return $row;
}

/**
 *  获得预订线路套餐基本信息
 *
 * @access    private
 * @return    array
 */
function getLineSuitInfo($suitid)
{
    global $dsql;
    $sql="select * from #@__line_suit where id=$suitid";
    $row=$dsql->GetOne($sql);
    return $row;
}





?>
