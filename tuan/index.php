<?php
require_once(dirname(__FILE__)."/../include/common.inc.php");
$typeid=13; //线路栏目
require_once SLINEINC."/view.class.php";
require_once(dirname(__FILE__).'/tuan.func.php');

$html = dirname(__FILE__).'/index.html';
if(file_exists($html) && $genpage != 1 && empty($dest_id) && empty($attrid))
{
    include($html);
    exit;
}
foreach($_GET as $key=>$value)
{
    $_GET[$key]=RemoveXSS($value);
}
foreach($_POST as $key=>$value)
{
    $_POST[$key]=RemoveXSS($value);
}

$pv = new ListView($typeid);

$pv->GetChannelKeywords($typeid);//根据栏目类型获取关键词.介绍,栏目名称

$pv->Fields['seokeyword']=!empty($pv->Fields['seokeyword'])?"<meta name=\"keywords\" content=\"".$pv->Fields['seokeyword']."\"/>":"";
$pv->Fields['seodescription']=!empty($pv->Fields['seodescription'])?"<meta name=\"description\" content=\"".$pv->Fields['seodescription']."\"/>":"";

$where="ishidden = 0 ";


if(!is_numeric($dest_id)&&!empty($dest_id)) //如果dest_id不是数字,则用户使用拼音访问需要获取相应的目的地id,否则,则直接赋值
   {
       $d_id = Helper_Archive::getDestIdByPinYin($dest_id);
       $dest_id = !empty($d_id) ? $d_id : $dest_id;
	   if($dest_id=='all')
	   {
		   $dest_id=0;
	   }
   }
if(!empty($dest_id))
{
	$where.=" and find_in_set($dest_id,kindlist)";
}
if(!empty($attrid))
{   
    $attrid_arr=explode(',',$attrid);
	foreach($attrid_arr as $k=>$v)
	$where.=" and find_in_set($v,attrid)";
}
$mianbao=getTuanMianBao($dest_id);

$destlist=getTuanChildDest($dest_id);

//获取上级开启了导航的目的地
getTopNavDest($dest_id);

$virtual_arr=$dsql->GetOne("select sum(ifnull(virtualnum,0)) as number from #@__tuan");

$booknum=Helper_Archive::getSellNum(0,13)+$virtual_arr['number'];
$sql="select * from #@__tuan where $where";
$pv->pagesize=16;//分页条数.

$pv->SetSql($sql);
$pv->SetParameter('dest_id',$dest_id);
$pv->SetParameter('attrid',$attrid);

$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."tuan/" ."tuan_index.htm");

$pv->Display();

exit();
?>