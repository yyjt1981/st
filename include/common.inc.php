<?php
  /* -----
 * @version        $Id: common.inc.php 3 17:44 2011-04-30 netman
 * @package        Sline.Libraries
 * @copyright      Copyright (c) 2011 - 2013, Stourweb, Inc.
 * @link           http://www.stourweb.com
 --------- */// 


ini_set('display_errors','0' );
error_reporting(E_ERROR |E_CORE_ERROR | E_COMPILE_ERROR | !E_WARNING | E_PARSE | !E_NOTICE); 
//error_reporting(E_ALL);
define('SLINEINC', str_replace("\\", '/', dirname(__FILE__) ) );
define('SLINEROOT', str_replace("\\", '/', substr(SLINEINC,0,-8) ) );
define('SLINEDATA', SLINEROOT.'/data');
define('SLINETEMPLATE', SLINEROOT.'/templets');
define('SLINEIISROOT',str_replace("\\", '/', dirname(dirname(dirname(__FILE__))) ));
 
 

define('DEBUG_LEVEL', TRUE); //
 

if (version_compare(PHP_VERSION, '5.3.0', '<'))  
{
    set_magic_quotes_runtime(0);
}

$cfg_is_mb = $cfg_is_iconv = FALSE;
if(function_exists('mb_substr')) $cfg_is_mb = TRUE;
if(function_exists('iconv_substr')) $cfg_is_iconv = TRUE; 

function _RunMagicQuotes(&$svar)
{
   
	if(!get_magic_quotes_gpc())
    {
        if( is_array($svar) )
        {
         
			foreach($svar as $_k => $_v) $svar[$_k] = _RunMagicQuotes($_v);
        }
        else
        {
          
			$svar=addslashes($svar); 
		  
			
			
        }
    }
	
    return $svar;
}

if (!defined('SLINEREQUEST')) 
{
 
   
    //检查和注册外部提交的变量
    foreach($_REQUEST as $_k=>$_v)
    {
        if( strlen($_k)>0 && preg_match('/^(cfg_|GLOBALS)/',$_k) )
        {
            exit('Request var not allow!');
        }
    }
    foreach(Array('_GET','_POST') as $_request)
    {
       
		foreach($$_request as $_k => $_v) 
		{	
         
		  ${$_k} = _RunMagicQuotes($_v);
		}
    }
}

//系统相关变量检测
if(!isset($needFilter))
{
    $needFilter = false;
}
$registerGlobals = @ini_get("register_globals");
$isUrlOpen = @ini_get("allow_url_fopen");
$isSafeMode = @ini_get("safe_mode");
if( preg_match('/windows/i', @getenv('OS')) )
{
    $isSafeMode = false;
}

//Session存储路径
$sessSavePath = SLINEDATA."/sessions/";
if(is_writeable($sessSavePath) && is_readable($sessSavePath))
{  
    session_save_path($sessSavePath);
	
}

//系统配置文件
require_once(SLINEDATA."/config.cache.inc.php");


//上传安全
if($_FILES)
{
    require_once(SLINEINC.'/uploadsafe.inc.php');
}

//数据库连接
require_once(SLINEDATA.'/common.inc.php');

//php5.1版本以上时区设置
//由于这个函数对于是php5.1以下版本并无意义，因此实际上的时间调用，应该用MyDate函数调用��
if(PHP_VERSION > '5.1')
{
    $time51 = $cfg_cli_time * -1;
    @date_default_timezone_set('Etc/GMT'.$time51);
}
$cfg_isUrlOpen = @ini_get("allow_url_fopen");

//网站host
$cfg_clihost = 'http://'.$_SERVER['HTTP_HOST'];

$cfg_domain_cookie=substr($_SERVER['HTTP_HOST'],strpos($_SERVER['HTTP_HOST'],'.'));
$cfg_basehost=$cfg_clihost;
//根目录
$cfg_basedir = preg_replace('#'.$cfg_cmspath.'\/include$#i', '', SLINEINC);





$cfg_mainsite = '';

//模板路径
$cfg_templets_dir = $cfg_cmspath.'/templets';
$cfg_templeturl = $cfg_mainsite.$cfg_templets_dir;
$cfg_templets_skin = empty($cfg_df_style)? $cfg_mainsite.$cfg_templets_dir."/standard" : $cfg_mainsite.$cfg_templets_dir."/$cfg_df_style";


//cmsurl
$cfg_cmsurl = $cfg_mainsite.$cfg_cmspath;



$cfg_data_dir = $cfg_cmspath.'/data';
$cfg_dataurl = $cfg_mainsite.$cfg_data_dir;




//ssmall特殊修改
//$cfg_medias_dir = $cfg_medias_dir;
$cfg_mediasurl = $cfg_medias_dir;



//大图
$cfg_image_dir = '/allimg';

//缩略图
$ddcfg_image_dir = '/litimg';

//广告图
$cfg_ad_dir="/adimg";

//行程
$cfg_doc_dir="/doc";


//开发版本
$cfg_version = 'SMORE2.0_UTF8';
$cfg_soft_lang = 'utf-8';
$cfg_soft_public = 'base';

$cfg_softname = '思途旅游系统';
$cfg_soft_enname = '思途';
$cfg_soft_devteam = '思途技术开发团队';

if(isset($cfg_ftp_mkdir) && $cfg_ftp_mkdir=='Y')
{
    $cfg_dir_purview = '0755';
}
else
{
    $cfg_dir_purview = 0755;
}

$cfg_mb_lit = 'N';

$_sys_globals['curfile'] = '';
$_sys_globals['typeid'] = 0;
$_sys_globals['typename'] = '';
$_sys_globals['aid'] = 0;


if($cfg_sendmail_bysmtp=='Y' && !empty($cfg_smtp_usermail))
{
    $cfg_adminemail = $cfg_smtp_usermail;
}

if(!isset($cfg_NotPrintHead)) {
    header("Content-Type: text/html; charset={$cfg_soft_lang}");
}

//自动加载类库处理
function __autoload($classname)
{
    global $cfg_soft_lang;
    $classname = preg_replace("/[^0-9a-z_]/i", '', $classname);
    if( class_exists ( $classname ) )
    {
        return TRUE;
    }
	$classname=strtolower($classname);
	
    $classfile = $classname.'.php';
    $libclassfile = $classname.'.class.php';
        if ( is_file ( SLINEINC.'/'.$libclassfile ) )
        {
            require SLINEINC.'/'.$libclassfile;
        }
       
        else
        {
            if (DEBUG_LEVEL === TRUE)
            {
                echo '<pre>';
				echo $classname.'类找不到';
				echo '</pre>';
				exit ();
            }
            else
            {
                header ( "location:/404.php" );
                die ();
            }
        }
}
 
//数据库类
require_once(SLINEINC.'/slinesql.class.php');
//全局常用函数
require_once(SLINEINC.'/common.func.php');

//载入小助手配置,并对其进行默认初始化
if(file_exists(SLINEDATA.'/helper.inc.php'))
{
    require_once(SLINEDATA.'/helper.inc.php');
    // 若没有载入配置,则初始化一个默认小助手配置
   if (!isset($cfg_helper_autoload))
    {
        $cfg_helper_autoload = array('util', 'charset', 'string', 'time', 'cookie');
		
    }
      // 初始化小助手  
    helper($cfg_helper_autoload);  
}
//会员信息
require_once(SLINEINC.'/member.class.php');
$keeptime = isset($keeptime) && is_numeric($keeptime) ? $keeptime : -1;
$User = new Member($keeptime);

//手机跳转
//判断是否是手机浏览
if($cfg_mobile_open == '1')
{
    if(Helper_Archive::isMobile() && $computerversion == 0)
    {
        $currentUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $model = new Mobile();
        $url = $model->getMobileUrl($currentUrl);
        //$url = $cfg_basehost.'/mobile/';
        header("Location:$url");//跳转到手机页面
        exit();
    }
}



