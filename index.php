<?php
if(!file_exists(dirname(__FILE__).'/data/common.inc.php'))
{
     header('Location:install/index.php');
     exit();
}

require_once (dirname(__FILE__) . "/include/common.inc.php");
/*require_once (dirname(__FILE__) . "/cloudsq.php");*/

require_once SLINEINC."/view.class.php";

$html = dirname(__FILE__).'/index.html';
if(file_exists($html) && $genpage != 1)
{
    include($html);
    exit;
}
else
{
    $pv = new View();

    $temp_num=$dsql->GetOne("select count(*) as num from #@__member_order");

    $pv->Fields['sellnum']=$temp_num['num'];

    $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" . "index.htm");

    $pv->Display();
}


?>