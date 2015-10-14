<?php

//车务搜索页面.
require_once (dirname(__FILE__) . "/../include/common.inc.php");
require_once(SLINEDATA."/webinfo.php");
require_once SLINEINC."/listview.class.php";
require_once (dirname(__FILE__) . "/car.func.php");
$file=SLINEDATA."/autotitle.cache.inc.php"; //载入智能title配置
if(file_exists($file))
{
  require_once($file);	
}
if(isset($totalresult)) $totalresult = intval(preg_replace("/[^\d]/", '', $totalresult));//总记录数

if(isset($pageno)) $pageno = intval(preg_replace("/[^\d]/", '', $pageno));//当前页
///没有设置,则默认为全部


//属性分类


foreach($_GET as $key=>$value)
{
    $_GET[$key]=RemoveXSS($value);
}
foreach($_POST as $key=>$value)
{
    $_POST[$key]=RemoveXSS($value);
}


$dest_id=RemoveXSS($dest_id);
$carkindid=RemoveXSS($carkindid);
$brandid=RemoveXSS($brandid);
$priceid=RemoveXSS($priceid);
//$seatnum=RemoveXSS($seatnum);
$attrid=RemoveXSS($attrid);
$startplaceid=RemoveXSS($startplaceid);


$typeid=3;
$carkindname='';
$carbrandname='';
$priceinfo=''; //初始化
$getmonth=GetMonthHandle();
//获取价格最小,最大值.


//
if(!empty($startplace))
{
	$startcity=$dsql->GetOne("select id from #@__startplace where cityname like '%{$startplace}%'");
	$startplaceid=$startcity['id'];
}




$sql="select distinct a.aid,a.* from #@__car a where a.webid is not null";


if($carkindid!=0) //车型分类
{

  $sql=$sql." and a.carkindid=$carkindid "; 
  $where.=" and a.carkindid=$carkindid ";
}

if($brandid!=0) //品牌
{

  $sql=$sql." and a.carbrandid=$brandid ";
  $where.=" and a.carbrandid=$brandid ";
}
if($priceid!=0) //价格范围
{

  $sql=$sql." and (b.minprice>$pricemin and b.minprice<$pricemax) ";
  $where.=" and (b.minprice>$pricemin and b.minprice<$pricemax) ";
}

if($attrid!=0)//租车类型
{
 // $sql=$sql." and find_in_set($attrid,a.attrid) ";
  $attrid_arr=explode('_',$attrid);
  foreach($attrid_arr as $v)
  {
	  $attr_where.=" and find_in_set($v,a.attrid)";
  }
  $sql.=$attr_where;
  $where.=$attr_where;
}

if($seatnum!=0)//座位
{
   $sear_arr=explode('_',$seatnum);
   $sear_arr[1]=empty($sear_arr[1])?100:$sear_arr[1];
   $sql=$sql." and a.seatnum>={$sear_arr[0]} and a.seatnum<={$sear_arr[1]} ";
   $where.=" and a.seatnum>={$sear_arr[0]} and a.seatnum<={$sear_arr[1]} ";
}

if($startplaceid!=0)//出发城市
{
	$sql.=" and a.startplaceid=$startplaceid ";
	$where.=" and a.startplaceid=$startplaceid ";
    $startcityname = getStartCityName($startplaceid);
}

	
	switch($displayorder)
	{
	 case '3':
	   $sql.=" order by a.shownum desc,a.displayorder asc, a.modtime desc";
	   break;
	 case '2':
	   $sql.=" order by b.minprice asc,a.displayorder asc,a.modtime desc";
	   break;
	 case '1':    
       $sql.=" order by a.isjian desc,a.displayorder asc,a.modtime desc";
	   break;
	 default:
	   $sql.=" order by a.displayorder asc,a.modtime desc";
	   break;  	
	}

//针对名称搜索
if(isset($dopost)&&$dopost=='searchname')
{
	$where="where a.carname like '%$searchkey%'";
	$sql="select distinct a.aid, a.*,b.$getmonth  from #@__car a left join (select carid,min(price) as minprice from #@__car_suit group by carid) as b on a.id=b.carid $where";
	$seoarr['searchkey']=$searchkey;

}

$temparr=getCarCount($where);

$pv = new ListView($typeid);

$pv->pagesize=10;//分页条数.

$pv->SetSql($sql);


$channelname=GetTypeName($typeid);


if($carkindid!=0)
{
   $carkindname=getCarKind($carkindid);
   $carkindtitle = getCarKindTitle($carkindid);
}
if($brandid!=0)
{
   $carbrandname=getCarbrand($brandid);
}
$seoarr=Generateinfo();

$seoarr['channelname']=$channelname;//栏目名称
$seoarr['totalcar']=$temparr[0];
$seoarr['totalvisit']=$temparr[1];//总访问次数
//当前页数->title里面使用
$seoarr['pageno']=(!empty($pageno))?'第'.$pageno.'页-':"";


//订单总数 
$temp_ordernum=$dsql->GetOne("select count(*) as num from #@__member_order where typeid=3");
$pv->Fields['sellnum']=$temp_ordernum['num'];

//seo变量赋值

foreach($seoarr as $k=>$v)
{
$pv->Fields[$k] = $v;

}
if(empty($searchkey))
{
  $pv->SetParameter('startplaceid',$startplaceid);

  $pv->SetParameter('carkindid',$carkindid);
  
  $pv->SetParameter('brandid',$brandid);
  $pv->SetParameter('seatnum',$seatnum);
  $pv->SetParameter('attrid',$attrid);
  $pv->SetParameter('priceid',$priceid);
  $pv->SetParameter('displayorder',$displayorder);

}
else
{
   $pv->SetParameter('searchkey',$searchkey);
}

getTopNavDest($dest_id);





$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."cars/" ."car_search.htm");


$pv->Display();




/**
*  生成searchtitle,keyword,description等信息.
*
* @access    private
* @return    array
*/
function GenerateInfo()
{

            global $carkindname,$carbrandname,$searchkey,
                   $startcityname,$carkindtitle,$attrid,$seatnum;

            $arr=array();
            /*if($GLOBALS['dest_id']==0)
            {
               $searchtitle=$channelname;
            }*/
            $seo = array();
            $keyword = array();
            if(!empty($startcityname))
            {
                array_push($seo,$startcityname.'出发'); //出发地
                array_push($keyword,$startcityname.'出发');
            }
            if(!empty($carkindname))
            {
                if(!empty($carkindtitle)) //如果车型优化信息不为空,则使用优化信息标题.
                {
                    array_push($seo,$carkindtitle);
                }
                else
                {
                    array_push($seo,$carkindname);//车型信息
                }
                array_push($keyword,$carkindname);

            }

            if(!empty($carbrandname))
            {
                array_push($seo,$carbrandname);//品牌信息
                array_push($keyword,$carbrandname);
            }
            if(!empty($attrid))
            {
                $out = getCarAttrName3($attrid); //属性信息
                array_push($seo,implode('_',$out));
                array_push($keyword,implode(',',$out));
            }
            if(!empty($seatnum))
            {
                $sear_arr=explode('_',$seatnum); //座位数量
                array_push($seo,$sear_arr[0].'~'.$sear_arr[1].'座');
                array_push($keyword,$sear_arr[0].'~'.$sear_arr[1].'座');

            }

           /*  if(!empty($priceinfo))
            {
                array_push($seo,$priceinfo);//价格信息
            }*/

            if(!empty($searchkey))
            {
                array_push($seo,$searchkey.'列表');//按名称搜索
            }
            if(empty($seo))
            {
                $info = getCarChannelSeo();
                array_push($seo,$info['seotitle']);
                array_push($keyword,$info['keyword']);
                $descrition = $info['description'];
            }

            //$subtitle=$carkindnavtitle.$carbrandname.$carkindname."{$priceinfo}"; //导航标题

            $searchtitle = implode("_",$seo);

            //$descrition="{$GLOBALS['cfg_webname']}提供的{$carbrandname}{$carkindname}租车列表";
            //$keywords="{$carkeywords}";
            $arr['searchtitle'] = $searchtitle;
            $arr['keyword'] = "<meta name=\"keywords\" content=\"".implode(',',$keyword)."\"/>";
            $arr['description'] = !empty($descrition) ? "<meta name=\"description\" content=\"".$descrition."\"/>" : '';

            return $arr;
}



?>﻿