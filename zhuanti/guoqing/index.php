<?php
require_once(dirname(__FILE__)."/../../include/common.inc.php");
$typeid=0; 
require_once SLINEINC."/view.class.php";

$pv = new View($typeid);

$pv->GetChannelKeywords($typeid);//根据栏目类型获取关键词.介绍,栏目名称
	
$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."zhuanti/guoqing/" ."index.htm");

$pv->Display();
?>