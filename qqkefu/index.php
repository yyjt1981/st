<?php 
    
	
    require '../include/common.inc.php';
	//$webid = !empty($webid) ? $webid : 0;
	//$prefix = $webid == 0  ? 'main' : getPrefix($webid);
	$configfile ='config.main.php';
	
	include ($configfile);
	$path='tl'.$qqcl;
    if($display==0) exit;
	//echo getUrlContent($path,$webid);
	include $path.'/kefu.php';
	
	

 function getPrefix($webid)
 {
	 global $dsql;
	 $sql="select webprefix from #@__weblist where webid=$webid";
     $row=$dsql->GetOne($sql);
	 if(is_array($row))
	 {
	  $root=$row['webprefix'];
	 }
	 return $root;
	 
 }
 
 function getUrlContent($path,$webid)
{
	ob_start();
	include $path.'/kefu.php';
	$data=ob_get_contents();
	ob_clean();
	return $data;
}
