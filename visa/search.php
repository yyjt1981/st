<?php 

/**----
search.php 可接收5个参数


countryid:签证国家id
cityid:签发城市
visatypeid:签证类型id
totalresult,总页数.
pageno,当前页

*------*/
@session_start();
require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/../data/webinfo.php");
require_once(dirname(__FILE__)."/visa.func.php");
$typeid=8; //签证栏目
require_once SLINEINC."/listview.class.php";

if(isset($totalresult)) $totalresult = intval(preg_replace("/[^\d]/", '', $totalresult));//总记录数

if(isset($pageno)) $pageno = intval(preg_replace("/[^\d]/", '', $pageno));//当前页

foreach($_GET as $key=>$value)
{
    $_GET[$key]=RemoveXSS($value);
}
foreach($_POST as $key=>$value)
{
    $_POST[$key]=RemoveXSS($value);
}


$countryid = !empty($countryid) ? RemoveXSS($countryid) : 0;
$visatypeid = !empty($visatypeid) ? RemoveXSS($visatypeid) : 0;
$cityid = !empty($cityid) ? RemoveXSS($cityid) : 0;

//签证国家判断
if(!empty($countryid))
{
     $countryname = getAreaName($countryid);
  
     $where.=" and nationid='$countryid'";
	 $navtitle.=$countryname;
   
   
}
//签证类型条件
if(!empty($visatypeid))
{
   $where.=" and visatype='$visatypeid'";	
   $navtitle.=getVisaType($visatypeid);
}
//签证城市条件
if(!empty($cityid))
{
   $where.=" and cityid='$cityid'";	
   $navtitle = getVisaCity($cityid).'签发'.$navtitle;
	
}

$sql="select * from #@__visa where id!='' {$where} order by displayorder asc";


$seoarr=array(); //seo信息数组
$seoarr['navtitle']=$seoarr['searchtitle']=$navtitle."签证列表";

$seoarr['pageno']=(!empty($pageno))?'第'.$pageno.'页-':"";
$pv = new ListView($typeid);

$pv->pagesize=10;//分页条数.
$pv->SetSql($sql);

//seo变量赋值

  foreach($seoarr as $k=>$v)
   {
      $pv->Fields[$k] = $v;
   }
$pv->SetParameter('countryid',$countryid);
$pv->SetParameter('cityid',$cityid);
$pv->SetParameter('visatypeid',$visatypeid);
$pv->SetParameter('temppara',0);
$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."visa/visa_search.htm");

$pv->Display();
  
exit();
   
//搜索Url
function getSearchUrl($val=null,$key=null,$exclude=null,$arr=array('countryid','cityid','visatypeid'),$url="/visa/",$table="")
{
    
	return Helper_Archive::getUrlStatic($val,$key,$exclude,$arr,$url,$table,0);
}

?>
