<?php 

require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/../data/webinfo.php");
require_once(dirname(__FILE__)."/../stourtravel/inc/email.class.php");
require_once SLINEINC."/view.class.php";
require_once "car.func.php";
$typeid=3; //线路栏目

if($dopost=='save')
{
	 
	if(empty($suitid))
	{
	  showMsg("请选择套餐",-1,3);
	  exit;
	}
    $row=$dsql->getOne("select a.*,b.aid,b.carname from #@__car_suit a inner join #@__car b on a.carid=b.id  where a.id=$suitid");
   	if(empty($row))
	 {
	  showMsg("定购错误,请重试",-1,3);   
	  exit;
	 }
   $ordersn=get_order_sn('03');//订单号
   $memberid = $User->uid ? $User->uid : 0;
   $arr = array(
           'ordersn'=>$ordersn,
		   'webid'=>$webid,
		   'typeid'=>$typeid,
		   'productautoid'=>$row['carid'],
		   'productaid'=>$row['aid'],
		   'productname'=>$row['carname'].'('.$row['suitname'].')',
		   'price'=>$price,
		   'dingnum'=>$dingnum,
		   'linkman'=>$linkman,
		   'linktel'=>$linktel,
		   'linkemail'=>$linkemail,
		   'linkqq'=>$linkqq,
		   'jifentprice'=>$row['jifentprice'],
		   'jifenbook'=>$row['jifenbook'],
		   'jifencomment'=>$row['jifencomment'],
		   'addtime'=>time(),
		   'memberid'=>$memberid,
		   'dingjin'=>$row['dingjin'],
           'paytype'=>$paytype
   );
  
   if(Helper_Archive::addOrder($arr))
   {
       $model = new CommonModule('#@__member_order');
       $orderid = $model->getField('id',"ordersn='$ordersn'");
       //判断是否开启在线支付
       if(!empty($choosepay) AND $paytype!='3')
       {
           $url = $GLOBALS['cfg_basehost'].'/cars/booking.php?dopost=payonline&id='.$orderid."&paytype=".$choosepay;
       }
       else
       {
           $url = "{$GLOBALS['cfg_basehost']}/member/";
       }
	
	//   if($cfg_lineEmail != '')
		// {
		//     $mailto = $cfg_lineEmail;
		// }
		// else
		// {
		//     $mailto = $cfg_Email139;
		// }
		// $title   = $linename . "线路订单";
		 
		// $content = $linkman . "预定" . $usedate  . $productname . "(成团报价:".$price.")"."旅游线路,成人数:" . $dingnum . "人" . ";儿童数:" . $childnum . "人;联系电话:".$linktel."-----".$GLOBALS['cfg_webname'];
        // if(!empty($mailto))ordermaill($mailto,$title,$content);
		 
	    // Helper_Archive::showMsg('订单提交成功!',$url,1,3); 
		echo $url; 
		 
		 exit();
   }
   else
   {
	   echo 'no';
	  //Helper_Archieve::showMsg('订单提交失败!',-1,0,3);   
   }
	
	exit;
}
//在线支付
if($dopost == 'payonline')
{
    $order = Helper_Archive::getOrderInfo($id);
    $price = !empty($order['dingjin']) ? $order['dingjin'] * $order['dingnum'] : intval($order['dingnum']) * $order['price'];

    if(empty($price)) return ;
    echo Helper_Archive::payOnline($order['ordersn'],$order['productname'],$price,$paytype);
}

foreach($_GET as $key=>$value)
{
  $_GET[$key]=RemoveXSS($value);
}
foreach($_POST as $key=>$value)
{
  $_POST[$key]=RemoveXSS($value);
}


  $pv = new View($typeid);
  
  if(empty($suitid))
  {
	  Helper_Archive::showMsg("请选择套餐",-1,0);
  }
  
  $row=$dsql->GetOne("select a.*,a.id as suitid,a.unit as suitunit, b.* from #@__car_suit a left join #@__car b on a.carid=b.id where a.id='$suitid'");

  $userinfo=$User->getInfoByMid($Use->mid);
      
  
  $row['carkind']=getCarKind($row['carkindid'],0);
  $row['carbrand']=getCarBrand($row['carbrandid'],0);
  $row['carnumber']=getSeries($row['id'],'03');//编号
  $row['typename']=GetTypeName($typeid); 
  //$price = $row['price'];
  $price = getSuitPriceByDay($suitid,$usedate);
  $row['singleprice'] = $price;

  if(!empty($price))
  {
	  $row['price']= $price;
	  if(!empty($row['suitunit']))
	  {
		  $row['price'] .= '  '. $row['suitunit'];
	  }
	  else
	  {
		  $row['price'];
	  }
  }
  else
  {
	  $row['price'] = "电询";
  }
    if(is_array($row))
    {
        foreach($row as $k=>$v)
        {
            $pv->Fields[$k] = $v;
        }

    }
    if(is_array($userinfo))
    {
        foreach($userinfo as $k=>$v)
        {
            $pv->Fields[$k] = $v;
        }
    }
  if(!empty($row['dingjin']))$GLOBALS['condition']['_djsupport']=1;//是否支持定金
  if(!empty($row['jifentprice']))$GLOBALS['condition']['_has_jifentprice']=1;
  if(!empty($row['jifencomment']))$GLOBALS['condition']['_has_jifencomment']=1;
  if(!empty($row['jifenbook']))$GLOBALS['condition']['_has_jifenbook']=1;
if(empty($row['jifentprice'])&&empty($row['jifencomment'])&&empty($row['jifenbook']))$GLOBALS['condition']['_no_youhui']=1;
  $pv->Fields['nowprice']=$row['price'];
  $pv->Fields['tprice']=$price;

  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."cars/" ."car_booking.htm");
  $pv->Display();
  exit;



