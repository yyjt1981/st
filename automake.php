<?php
require_once (dirname(__FILE__) . "/include/common.inc.php");
require_once SLINEINC."/httpdown.class.php";
$fpath = SLINEDATA."/last_time.inc";//记录更新时间文件。
include($fpath);
$time = time();//当前时间
$autotime = empty($cfg_auto_time) ? 3600 : $cfg_auto_time;//自动更新时间(秒)
$lasttime = empty($lasttime) ? 0 : $lasttime;//上次更新时间

if(($time-$lasttime)>=$autotime)//如果满足更新时间
{
	makeHtml();//进行自动更新
	writeupdateTime($time,$fpath);
	
}

//自动更新
function makeHtml()
{
	$storage = array(
	             '/',
				 '/lines/',
//				 '/hotels/',
//				 '/cars/',
//				 '/raiders/',
//				 '/spots/',
//				 '/visa/',
				 '/tuan/',
//				 '/destination/'
				 );

	$http = new HttpDown();//实例化下载类
	foreach($storage as $value)
	{
		$url = $GLOBALS['cfg_basehost'].$value.'index.php?genpage=1';
		$savepath = SLINEROOT.$value.'index.html';
		$http->OpenUrl($url);
        $http->SaveToBin($savepath);
		
	}
	
}

//写更新时间

function writeUpdateTime($time,$fpath)
{
	
	$file = fopen( $fpath, "w");
	fwrite( $file, "<?php\n");
	fwrite( $file,"\$lasttime=".$time.";\n");
	fwrite( $file, '?>' );
	fclose( $file );
}