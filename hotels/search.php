<?php 
/**----
酒店搜索
search.php 参数

  参数1:$dest_id 即目的地id
  参数2:$rankid.即星级
  参数3:$priceid.即价格id
  参数4:$attrid,即属性id,用逗号分隔。
  参数5:$totalresult,总页数.
  参数6:$pageno,当前页 

*------*/
@session_start();
require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/hotel.func.php");
require_once SLINEINC."/listview.class.php";
$file=SLINEDATA."/autotitle.cache.inc.php"; //载入智能title配置
if(file_exists($file))
{
   require_once($file);	
}
$typeid = 2;
foreach($_GET as $key=>$value)
{
    $_GET[$key]=RemoveXSS($value);
}
foreach($_POST as $key=>$value)
{
    $_POST[$key]=RemoveXSS($value);
}

$encode = mb_detect_encoding($keyword);

if($encode != 'UTF-8')
{
    $keyword = iconv($encode,'utf-8',$keyword);
}


if(isset($pageno)) $pageno = intval(preg_replace("/[^\d]/", '', $pageno));//当前页

//关键词搜索
if(!empty($dest_keyword))
{
	$sqldest="select id from #@__destinations where kindname like '%{$dest_keyword}%'";
	$destall=$dsql->getAll($sqldest);
	foreach($destall as $v)
	{
		$destwhere.=" find_in_set({$v['id']},a.kindlist)";
		if(empty($dest_id))
		{
			//$_REQUEST['dest_id']=$v['id'];
			$dest_id=$v['id'];
		}
	}
}


$dest_id=isset($dest_id) ? $dest_id : 0;
if(!is_numeric($dest_id)) //如果dest_id不是数字,则用户使用拼音访问需要获取相应的目的地id,否则,则直接赋值
{
    if($dest_id!='all')
    {
        $d_id = Helper_Archive::getDestIdByPinYin($dest_id);
        $dest_id = !empty($d_id) ? $d_id : $dest_id;
    }
    else
    {
        $dest_id = 0;
    }

}

$pkname = get_par_value($dest_id,$typeid);//上一级
//获取上级开启了导航的目的地
getTopNavDest($dest_id);

$day=isset($day) ? $day: 0;

$priceid=isset($priceid) ? RemoveXSS($priceid): 0;

$attrid=isset($attrid) ? ($attrid): 0;

$rankid = isset($rankid) ? ($rankid): 0;

$sorttype=isset($sorttype) ? RemoveXSS($sorttype):1;








if(!empty($keyword))
{
    $where="where a.ishidden='0'  and hotelname like '%".$keyword."%'";
}
else
{
    $where=" where a.ishidden='0'" ;
    $where.= !empty($dest_id) ? "and FIND_IN_SET($dest_id,a.kindlist)" : '';
}



if(!empty($rankid) && $rankid!=0) $where.=" and a.mainrankid=$rankid";
if(!empty($priceid)&& $priceid!=0)
{
   $pricearr=getMinMaxprice($priceid);//取得价格范围的最小与最大值 .
   $where.=" and a.hotelprice >= '{$pricearr['min']}' and a.hotelprice <= '{$pricearr['max']}' ";
}
//属性
if($attrid)
{ 
   $attrwhere = Helper_Archive::getAttrWhere($attrid);//属性条件
   $where.= $attrwhere;
  
}
  

if(!empty($sorttype) && $sorttype!=0)
{
	if($sorttype==1)//特价排序
	{
	
	   $orderby = "order by b.istejia desc";
	}
	else if($sorttype==1) //推荐排序
	{
	
	   $orderby = "order by b.isjian desc";	
		
    }
	else if($sorttype==2) //价格
	{
	    $orderby=" order by a.hotelprice asc";	
	}

	else if($sorttype==3) //销量
	{
		$orderby=" order by a.shownum desc";
	}
	else if($sorttype==4)//人气
	{
	    $orderby=" order by a.shownum desc";
	}
	
	
	else if($sorttype==5) //满意度
	{
		$orderby=" order by a.shownum desc";
	}
}

 
   
$sql="select a.*,b.isjian ,b.isding,b.istejia from #@__hotel a left join #@__kindorderlist b on (a.id=b.aid and b.typeid={$typeid} and a.webid=b.webid and b.classid='$dest_id') {$where} order by b.isding desc,b.displayorder asc  ";


$destinfo = getDestInfo($typeid,$dest_id);//目的地优化信息;
$searchtitle = getSearchTitle($destinfo,$rankid,$priceid,$attrid);
$seoarr=array(); //seo信息数组
//当前页数->title里面使用
$seoarr['pageno']=(!empty($pageno))?'第'.$pageno.'页-':"";
//父级与当前级信息
$seoarr['pkname'] = getCurkind($dest_id);
$seoarr['dest_id']=$destid;



$seoarr['typename']= getTypeName($typeid);
;
$pv = new ListView($typeid);

$pv->pagesize=15;//分页条数.


$pv->SetSql($sql);

//seo变量赋值
  foreach($destinfo as $k=>$v)
   {
      $pv->Fields[$k] = $v;
   }
  foreach($seoarr as $k=>$v)
   {
      $pv->Fields[$k] = $v;
   }
//搜索标题赋值  
$pv->Fields['searchtitle'] = $searchtitle;

//下级目的地
$destlist = Helper_Archive::getChildDest($dest_id,$typeid);

//注意以下这两句与伪静态规则有关系,不能写反了.

	$pv->SetParameter('dest_id',$dest_id);
	
	$pv->SetParameter('rankid',$rankid);
  
	$pv->SetParameter('priceid',$priceid);

    $pv->SetParameter('sorttype',$sorttype);

    $pv->SetParameter('keyword',$keyword);

    $pv->SetParameter('attrid',$attrid);


//其他栏目URL
if(empty($dest_id))
{
    $dest_url=$GLOBALS['cfg_basehost'].'/destination/';
    $hotel_url=$GLOBALS['cfg_basehost'].'/hotels/';
    $raider_url=$GLOBALS['cfg_basehost'].'/raiders/';
    $photo_url=$GLOBALS['cfg_basehost'].'/photos/';
}else
{
    $pinyin=Helper_Archive::getDestPinyin($dest_id);
    $pinyin = !empty($pinyin) ? $pinyin : $dest_id;
    $dest_url=$GLOBALS['cfg_basehost'].'/'.$pinyin.'/';
    $hotel_url=$GLOBALS['cfg_basehost'].'/hotels/'.$pinyin.'/';
    $raider_url=$GLOBALS['cfg_basehost'].'/raiders/'.$pinyin.'/';
    $photo_url=$GLOBALS['cfg_basehost'].'/photos/'.$pinyin.'/';

}


$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."hotels/" ."hotel_search.htm");

$pv->Display();

exit();
/**
     *  获得档目名称
     *
     * @access    private
     * @return    arr
     */

function getDestInfo($typeid,$childid=0)
{ 
   
  global $dsql,$cfg_hotel_title,$cfg_hotel_desc;
  
  $arr=array();
 
   $sql="select a.kindname,b.seotitle,a.pinyin,b.jieshao,b.keyword,b.tagword,b.description from #@__destinations as a inner join #@__hotel_kindlist as b on a.id=b.kindid where a.id={$childid} ";

  $row=$dsql->GetOne($sql);
  
   $cfg_hotel_title=str_replace('XXX',$row['kindname'],$cfg_hotel_title);
   $cfg_hotel_desc=str_replace('XXX',$row['kindname'],$cfg_hotel_desc);
   if(empty($row['seotitle']))
   {
	   $arr['seotitle']=empty($cfg_hotel_title) ? $row['kindname'] : $cfg_hotel_title;
   }
   else
   {
       $arr['seotitle']=$row['seotitle'];   
   }
    if(empty($row['description']))
   {
	    
	   $arr['description']=empty($cfg_hotel_desc) ? $row['description'] : $cfg_hotel_desc;
   }
   else
	{
       $arr['description']=$row['description'];
    }
   
 
  $arr['typename']=$row['kindname'];
  $arr['dest_jieshao']=$row['jieshao'];
  $arr['dest_name'] = $row['kindname'];
  $arr['kindid'] = $childid;
  $arr['dest_id'] = $childid;
  $arr['dest_pinyin'] = $row['pinyin'];
  $arr['tagword']=$row['tagword'];
  $arr['seokeyword']=!empty($row['keyword'])?"<meta name=\"keywords\" content=\"".$info['keyword']."\"/>":"";
  $arr['seodescription']=!empty($info['description'])?"<meta name=\"description\" content=\"".$info['description']."\"/>":"";
  $arr['pinyin'] = $row['pinyin'];
  return $arr;
}

//获取当前级
function getCurkind($id)
{
	global $dsql;
	$sql = "select id,kindname,pinyin from #@__destinations where id='$id'";
	$pname = $dsql->GetOne($sql);
	$str = getParKind($id);//上一级信息
	if(is_array($pname))
	{
	
		$str .= ' &raquo; <a href="' . $GLOBALS['cfg_cmsurl'] . '/hotels/search.php?dest_id='.$id.'" rel="nofollow">' . $pname['kindname'] . '酒店</a>';
	}
	else
	{
		$str .= '';
	}
	
	return $str;
}
//获取上一级
function getParKind($id)
{
	global $dsql;
	$sql = "select pid from #@__destinations where id='$id'";
	
	$pre = $dsql->GetOne($sql);
	$pid = $pre['pid'];
	//上一级信息
	$sql = "select id,kindname from #@__destinations where id='$pid'";
	
	$pname = $dsql->GetOne($sql);
	
	if(is_array($pname))
	{
	
		$str = ' &raquo; <a href="' . $GLOBALS['cfg_cmsurl'] . '/hotels/search.php?dest_id='.$pname['id'].'" rel="nofollow">' . $pname['kindname'] . '酒店</a>';
	}
	else
	{
		$str = '';
	}
	return $str;
	
}
   


/**
 *  生成searchtitle,keyword,description等信息.
 *
 * @access    private
 * @return    array
 */
function getSearchTitle($info,$rankid,$priceid,$attrid)
{
   	global $searchkey,$dest_id;
	$arr=array();
	$rankname = getRank($rankid);
	
	$searchtitle="{$info['seotitle']}|";
	
   	if($priceid!=0)
   	{
     	$pricearr=getMinMaxprice($priceid);
	 
		if($pricearr['min']!=""&&$pricearr['max']=="")
		{
			$price.="价格在{$pricearr['min']}以上";
		}
		else
		{
	     	$price.="价格范围在{$pricearr['min']}-{$pricearr['max']}之间";
	    }
		$searchtitle.=$price;
   	}
   	if($rankname!="")
   	{
	    $searchtitle.="{$rankname}|"; 
   	}
	if(!empty($attrid))
	{
	   $searchtitle.= getHotelAttrName($attrid) ; 	
	}
  
   
    //$arr['searchtitle']=$searchtitle;
   
   // if(!empty($searchkey)) //如果针对的是名称搜索
	//{
		//$arr['searchtitle']="{$searchkey}酒店列表";
   	   // $arr['subtitle']="{$searchkey}酒店列表";
	//}

   //	return $arr;
   return $searchtitle;
}
//获取满意度
function getSatisfyScore($id)
{
	$rand = mt_rand(3,5);
	$score = Helper_Archive::getSatisfyScore($id,2);
	return $score;
}
//获取attrname
function getHotelAttrName($attrid)
{
	global $dsql;
	$arr = explode(',',$attrid);
	foreach($arr as $id)
	{
	  $sql = "select attrname from #@__hotel_attr where id='$id'";
	  $row = $dsql->GetOne($sql);
	  $namelist.=$row['attrname'].'|'; 	
	}
	
	return $namelist;
}
//搜索Url
function getSearchUrl($val=null,$key=null,$exclude=null,$arr=array('rankid','priceid','sorttype','hotelname','attrid'),$url="/hotels/",$table="#@__hotel_attr")
{
    
	return Helper_Archive::getUrlStatic($val,$key,$exclude,$arr,$url,$table);
}
?>