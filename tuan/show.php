<?php 
require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/tuan.func.php");
$typeid=13; //团购栏目`

require_once SLINEINC."/view.class.php";


$pv = new View($typeid);
if(!isset($aid)) exit('Wrong Id');

$aid=RemoveXSS($aid);//防止跨站攻击

updateVisit($aid,$typeid);//更新访问次数


$row = getTuanInfo($aid);//基本信息

//如果不存在则跳转至404页面
if(empty($row['id']))
{

	head404();
}

$templets ='tuan_show.htm'; //定义模板

if(is_array($row))
{
   $row['enddatetime']=date('Y/m/d H:i:s',$row['endtime']); //截止时间
   $row['discount']=floor($row['ourprice']/$row['sellprice']*100)/10; //折扣
   $row['piclist']=getImgList($row['piclist']); //获取轮播图片
   $row['seokeyword']=empty($row['keyword'])?'':"<meta name=\"keywords\" content=\"{$row['keyword']}\"/>";
   $row['seodescription']=empty($row['description'])?'':"<meta name=\"description\" content=\"{$row['description']}\"/>";
   $row['seotitle'] = empty($row['seotitle']) ? $row['title'] : $row['seotitle'];
   $row['booknum']=Helper_Archive::getSellNum($row['id'],13)+$row['virtualnum'];
   		
   foreach($row as $k=>$v)
   {
	  $pv->Fields[$k] = $v;//模板变量赋值
   }
	
}


	
$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."tuan/" . $templets);

$pv->Display();

exit();




?>
