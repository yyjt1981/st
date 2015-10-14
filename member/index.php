<?php
/**
 * @version        $Id: index.php 1 8:24 2014年2月17日 netman $
 * @package        Smore.User
 */
require_once(dirname(__FILE__)."/config.php");


if(!$User->isLogin())
{
	header("Location: " . $cfg_cmsurl . "/member/login.php");
	exit;
}

$uid=empty($uid)? "" : RemoveXSS($uid);

$pv = new View(0);

//会员中心首页
if(!isset($dopost))
{
	
        Helper_Archive::loadModule('common');
	    $_model = new CommonModule('#@__member_order');
		$pv->Fields['unpinlun'] = $_model->getCount("memberid='$uid' and ispinlun=0 and status=2");//未评论订单数量
		$pv->Fields['unpay'] = $_model->getCount("memberid='$uid' and ispay=0");//未付款
		$pv->Fields['complete'] = $_model->getCount("memberid='$uid' and status=2");//已完成
	
	    $userinfo = $User->getInfoByMid($uid);
		
		foreach($userinfo as $key=>$value)
		{
		  $pv->Fields[$key] = $value;  
		}
		$pv->Fields['litpic'] = empty($pv->Fields['litpic']) ? $GLOBALS['cfg_templets_skin'].'/images/member_default.gif' : $pv->Fields['litpic'];
		$pv->SetTemplet(MEMBERTEMPLET . "index.htm");

		$pv->Display();
		
		exit();
	
} 
if($dopost == 'uploadfacepage')
{
	$pv->SetTemplet(MEMBERTEMPLET . "uploadface.htm");

	$pv->Display();
	
	exit();
	
}

/*-----------------------------
//用户资料设置

------------------------------*/
if($dopost == 'userinfo')
{
  $userinfo = $User->getInfoByMid($uid);
 
  $pagename = $dopost;//当前页面,用于左侧导航选中
   
  $pv->Fields['pagename'] = $pagename;
  $userinfo['face'] = getUploadFileUrl($userinfo['litpic']);
  
  foreach($userinfo as $key=>$value)
  {
	$pv->Fields[$key] = $value;  
  }
   
  $pv->SetTemplet(MEMBERTEMPLET . "userinfo.htm");
  $pv->Display();
  exit;
	
}
/*-----------------------------
//保存用户资料设置

------------------------------*/
if($dopost == 'saveuserinfo')
{
  Helper_Archive::loadModule('common');
  $_model = new CommonModule('#@__member');
  $arr = array(
        'nickname'=>$nickname,
		'sex'=>$sex,
		'email'=>$email,
		'mobile'=>$mobile,
		'truename'=>$truename,
		'cardid'=>$cardid,
		'address'=>$address,
		'postcode'=>$postcode,
		'litpic'=>$litpic
  );
  $where = array('mid'=>$uid);
  $url = $GLOBALS['cfg_basehost'].'/member/index.php?dopost=userinfo';
  if($_model->update($arr,$where))
  {
	 Helper_Archive::showMsg('资料更新成功!',$url,1,3);
	 exit();   
  }
  
}
/*-----------------------------
//用户密码修改

-----------------*/
if($dopost == 'changepass')
{
  $userinfo = $User->getInfoByMid($uid);
 
  $pagename = $dopost;//当前页面,用于左侧导航选中
  foreach($userinfo as $key=>$value)
  {
	$pv->Fields[$key] = $value;  
  }
   
  $pv->Fields['pagename'] = $pagename;
  $pv->SetTemplet(MEMBERTEMPLET . "changepass.htm");
  $pv->Display();
  exit;	
}
/*-----------------------------
//用户新密码保存

-----------------*/
if($dopost == 'savenewpass')
{
  
 
  Helper_Archive::loadModule('common');
  $_model = new CommonModule('#@__member');
  $oldpwd = md5($oldpwd);
  $newpwd = md5($newpwd1);
  $usermid =$_model->getField('mid',"mid='$uid' and pwd='$oldpwd'");
  if($usermid == $uid)
  {
	  $arr = array(
        'pwd'=>$newpwd
		
	  );
	  $where = array('mid'=>$uid);
	  $url = $GLOBALS['cfg_basehost'].'/member/index.php';
	  if($_model->update($arr,$where))
	  {
		 ShowMsg('密码修改成功!',$url);
		 exit();   
	  }
	  
  }
  else
  {
	  ShowMsg('旧密码输入错误,请检查','-1');
	  exit();
  }
  
  
}
/*-----------------------------
//我的咨询管理
------------------------------*/
if($dopost == 'myquestion')
{
   $pagename = $dopost;//当前页面,用于左侧导航选中
   
   $pv->Fields['pagename'] = $pagename;
	
   $pv->SetTemplet(MEMBERTEMPLET."myquestion.htm");

   $pv->Display();
   
   exit();
	
}



/*-----------------------------
//订单列表页面

------------------------------*/
if($dopost == 'orderlist')
{
  
   $pagename = $dopost;
   
   $ordername = getOrderName($typeid);
   
   $pv->Fields['ordername'] = $ordername;
   
   $pv->Fields['typeid'] = $typeid; //当前页面,用于左侧导航选中
   
   //$pv->Fields['pagename'] = $pagename;
	
   $pv->SetTemplet(MEMBERTEMPLET."order_list.htm");

   $pv->Display();
   
   exit();
}

/*-----------------------------
//查看订单详细

------------------------------*/

if($dopost == 'vieworder')
{
	$pagename = $dopost;
	Helper_Archive::loadModule('common');
	$_model = new CommonModule('#@__member_order');
	$orderinfo = $_model->getOne("id='$orderid'");
	$orderinfo['orderstatus'] = strip_tags(getOrderStatus($orderinfo['status'],$orderinfo['paytype']));//订单状态
    $orderinfo['dingjin'] = $orderinfo['dingjin'] * $orderinfo['dingnum'];

     $orderinfo['totalprice'] = $orderinfo['dingnum'] * $orderinfo['price'] + $orderinfo['childnum'] * $orderinfo['childprice']+$orderinfo['oldnum']*$orderinfo['oldprice'];//总价格



	$userinfo = $User->getInfoByMid($uid);// 会员相关信息

	//是否存在赠送奖励(先取消)
    //$GLOBALS['condition']['_has_jiefenbook'] = $orderinfo['jifenbook'];
	//$GLOBALS['condition']['_has_jiefentprice'] = $orderinfo['jifentprice'];
	//$GLOBALS['condition']['_has_jiefencomment'] = $orderinfo['jifencomment'];
    $GLOBALS['condition']['_has_dingjin'] = $dingjin;
	foreach($orderinfo as $key=>$value)
		{
		  $pv->Fields[$key] = $value;  
		}
	foreach($userinfo as $key=>$value)
		{
		  $pv->Fields[$key] = $value;  
		}
	$pv->SetTemplet(MEMBERTEMPLET . 'order_detail.htm');

	$pv->Display();
	
	exit();
}

/*-----------------------------
//在线支付

------------------------------*/

if($dopost == 'payonline')
{
    $price = !empty($dingjin) ? $dingjin : $price;
	echo Helper_Archive::payOnline($ordersn,$subject,$price,$choosepay);
}








