<?php 

require_once(dirname(__FILE__)."/../include/common.inc.php");
$typeid=8; //签证栏目
require_once SLINEINC."/view.class.php";
require_once SLINEDATA."/webinfo.php";
$html = dirname(__FILE__).'/index.html';
if(file_exists($html) && $genpage != 1)
{
    include($html);
    exit;
}

//获取上级开启了导航的目的地
getTopNavDest($dest_id);

$pv = new View($typeid);

$pv->GetChannelKeywords($typeid);//根据栏目类型获取关键词.介绍,栏目名称

$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."visa/visa_index.htm");

$pv->Display();



exit;
   

?>
