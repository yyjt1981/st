<?php
 require_once(dirname(__FILE__)."/../include/common.inc.php");
 require_once(dirname(__FILE__).'/../include/view.class.php');

 $starttime=strtotime($starttime);
 $addtime=time();
foreach($_GET as $key=>$value)
{
    $_GET[$key]=RemoveXSS($value);
}
foreach($_POST as $key=>$value)
{
    $_POST[$key]=RemoveXSS($value);
}
 
 $sql="insert into #@__customize(dest,starttime,startplace,days,adultnum,
 childnum,planerank,hotelrank,room,food,sex,address,phone,email,contacttime,addtime,content,contactname) values(
 '$dest','$starttime','$startplace','$days','$adultnum','$childnum','$planerank','$hotelrank',
 '$room','$food','$sex','$address','$phone','$email','$contacttime','$addtime','$content','$contactname')";
 
 $result=$dsql->ExecuteNoneQuery($sql);
  if($result)
    Helper_Archive::showMsg('提交成功','/customize/index.php',1,2);
  else
    Helper_Archive::showMsg('提交失败','/customize/index.php',0,2);	
	