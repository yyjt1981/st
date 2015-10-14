<?php 
require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/linecontent.php");
$typeid=1; //线路栏目
require_once SLINEINC."/view.class.php";

$pv = new View($typeid);
if(!isset($aid)) exit('Wrong Id');

$aid=RemoveXSS($aid);//防止跨站攻击

updateVisit($aid,$typeid);//更新访问次数

$row = getStandardInfo($aid);//基本信息


$rowext = getExtendInfo($aid);////扩展信息表

//如果不存在则跳转至404页面
if(empty($row['id']))
{
	head404();
}

$templets = $row['templet'];//使用的模板

loadUserFunc($templets);//载入用户自定义函数类

if(is_array($row))
{

   Helper_Archive::setHistoryCookie($row['id'],'line');
			  

   $real=getLineRealPrice($row['aid'],$row['webid']);
   $row['lineprice']=!empty($real) ? $real : $row['lineprice'];//线路报价
   $row['transport']=getTransport($row['transport']);
   $row['score'] = Helper_Archive::getSatisfyScore($row['id'],$typeid);//分数
   $row['commentnum'] = Helper_Archive::getCommentNum($row['id'],$typeid);//点评数
   $row['commenthomeid'] = $row['id'];
   if(!empty($row['storeprice']) || $row['storeprice'] > $row['lineprice'])
   {
	 $row['cheap']=$row['storeprice']-$row['lineprice'];//优惠
   }
   else
   {
	  $row['cheap']=0; 
   }	   
   $pic_arr=getPiclistArr($row);//读取图片
   $row['bigpiclist']=$pic_arr[0];//大图
   $row['thumblist']=$pic_arr[1];
   $row['price']=!empty($row['lineprice'])?"<span class=\"rmb_1\">￥</span>".$row['lineprice']."</span>":"电询</span>";
   
   $row['storeprice']=!empty($row['storeprice'])?$row['storeprice']:"<span>无</span>";
   $row['seodescription']=!empty($row['description'])?"<meta name=\"description\" content=\"".$row['description']."\"/>":"";
   $row['seokeyword']=!empty($row['keyword'])?"<meta name=\"keywords\" content=\"".$row['keyword']."\"/>":"";
   $row['seotitle']=!empty($row['seotitle']) ? $row['seotitle'] : $row['linename'];


   $row['lineseries']=getSeries($row['id'],'01');//编号
   $row['pkname'] = get_par_value($row['kindlist'],$typeid);//上一级
   foreach($row as $k=>$v)
   {
	  $pv->Fields[$k] = $v;//模板变量赋值
   }
	
}
//$linecontent = getLineContent($row,$rowext['istemplets']);//线路介绍分类

 //获取上级开启了导航的目的地
getTopNavDest($row['kindlist']);
$typename=GetTypeName($typeid);//获取栏目名称.
$pv->Fields['typename'] = $typename;
	
$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."lines/" . $templets);

$pv->Display();

exit();


//加载自定义函数(用于用户上传模板
function loadUserFunc($templet)
{
    $templet_path = explode('/',$templet);

    array_pop($templet_path);

    array_push($templet_path,'php/function.php');
    $function_file = SLINETEMPLATE.'/smore/lines/'.implode('/',$templet_path);
    if(file_exists($function_file))
    {
        include($function_file);
    }

}

function getLineAttrName2($attrid)
{
    $arr = getLineAttrArr($attrid);
    foreach($arr as $v)
    {
        $out.="<span>{$v}</span>";
    }
    return $out;

}

function getLineAttrArr($attrid,$esplit=',')
{
    global $dsql;
    $arr = explode($esplit,$attrid);
    $out = array();
    $i = 0;
    foreach($arr as $id)
    {
        $sql = "select attrname from #@__line_attr where id='$id' and pid!=0";
        $row = $dsql->GetOne($sql);
        if(!empty($row['attrname']) && $i<6)
            array_push($out,$row['attrname']);
        $i++;

    }

    return $out;
}

?>
