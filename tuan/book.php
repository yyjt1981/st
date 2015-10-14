<?php 

require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/../data/webinfo.php");
require_once SLINEINC."/view.class.php";
require_once "tuan.func.php";
$typeid=13; 
  

if($dopost=='save')
{
	 
	if(empty($tuanid))
	{
	  showMsg("请选择团",-1,3);
	  exit;
	}
    $row=$dsql->getOne("select * from #@__tuan where id=$tuanid");
   	if(empty($row))
	 {
	  showMsg("定购错误,请重试",-1,3);   
	  exit;
	 }
   $ordersn=get_order_sn('13');//订单号
   $memberid = $User->uid ? $User->uid : 0;
   $paytype = 1;
   $arr = array(
           'ordersn'=>$ordersn,
		   'webid'=>$webid,
		   'typeid'=>$typeid,
		   'productautoid'=>$tuanid,
		   'productaid'=>$row['aid'],
		   'productname'=>$row['title'],
		   'price'=>$row['ourprice'],
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
           'paytype'=>$paytype,
		   'dingjin'=>$row['dingjin']
   );
  
   if(Helper_Archive::addOrder($arr))
   {

       $model = new CommonModule('#@__member_order');
       $orderid = $model->getField('id',"ordersn='$ordersn'");
       //判断是否开启在线支付
       if(!empty($choosepay) && $paytype!='3')
       {
           $url = $GLOBALS['cfg_basehost'].'/tuan/book.php?dopost=payonline&id='.$orderid."&paytype=".$choosepay;
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
		 
	     //Helper_Archive::showMsg('订单提交成功!',$url,1,3);
		 echo $url;  
		 
		 exit();
   }
   else
   {
	   echo 'no';
	 // Helper_Archieve::showMsg('订单提交失败!',-1,0,3);   
   }
	
	exit;
}
//在线支付
if($dopost == 'payonline')
{
    $order = Helper_Archive::getOrderInfo($id);
    $price = intval($order['dingnum']) * $order['price'];
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
  
  if(empty($tuanaid))
  {
	  Helper_Archive::showMsg("请选择团购",-1,0);
  }
  
    
  $row=$dsql->GetOne("select * from #@__tuan where aid='$tuanaid' and webid=0");
  
  
  $row['tuannumber']=getSeries($row['id'],'13');//编号
  foreach($row as $k=>$v)
  {
	  $pv->Fields[$k]=$v;
  }
  
  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."tuan/" ."tuan_book.htm");
  $pv->Display();

