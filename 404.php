<?php 
header("HTTP/1.1 404 Not Found");
header("Status: 404 Not Found");
require_once(dirname(__FILE__)."/include/common.inc.php");
require_once(dirname(__FILE__)."/data/webinfo.php");
$sql="select webname,weburl from #@__weblist where webid=$sys_webid";
$row=$dsql->GetOne($sql);
if(is_array($row))
{
  $webname=$row['webname'];
   if(!preg_match("/http:\/\//",$row['weburl']))
     {
	    $weburl="http://".$row['weburl'];
     }
  else
    {
	   $weburl=$row['weburl'];
	}


}


$pv = new View();


$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" . "/public/404.htm");

$pv->Display();