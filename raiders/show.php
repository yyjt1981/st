<?php 
require_once(dirname(__FILE__)."/../include/common.inc.php");
require_once(dirname(__FILE__)."/article.func.php");
$typeid=4; //文章栏目
require_once SLINEINC."/view.class.php";
$pv = new View($typeid);
if(!isset($aid)) exit('Wrong Id');
$aid=RemoveXSS($aid);//防止跨站攻击
updateVisit($aid,$typeid);//更新访问次数
$row = getArticleInfo($aid);

if(empty($row['id']))
{
  head404();
}

$prenext=GetPreNext($aid);//获取上一条,下一条
foreach($prenext as $k=>$v)
{
   $pv->Fields[$k] = $v;
}

if(is_array($row))
{
    $row['litpic']=!empty($row['litpic'])? $row['litpic']:getDefaultImage();
    $row['taglook']=GetTagsLink($row['tagword']);
    $row['description']=!empty($row['description'])?"<meta name=\"description\" content=\"".$row['description']."\"/>":"";
    $row['keyword']=!empty($row['keyword'])?"<meta name=\"keywords\" content=\"".$row['keyword']."\"/>":"";
    $row['subname']=$row['articlename'];
	
	$row['commentnum']=Helper_Archive::getCommentNum($row['id'],4);
	$row['commenthomeid']=$row['id'];
    $row['id']=strlen($row['id'])==1?"0".$row['id']:$row['id'];
	
	$row['pkname'] = get_par_value($row['kindlist'],$typeid);
	$row['yesjian']=is_null($row['yesjian'])? 0 : $row['yesjian'];
	
	$row['destid']=array_remove_value($row['kindlist']);
	
	$row['pinyin']=Helper_Archive::getDestPinyin($row['destid']);
	$row['destname']=!empty($row['destid'])?'[<a href="/raiders/'.$row['pinyin'].'">'.Helper_Archive::getBelongDestName($row['kindlist']).'</a>]':'';//所属目的地
	$row['destarcnum']=getArticleNum($row['destid']);
	$row['attrlist']=getArticleAttrlist($row['attrid']);
	$row['summary']=cutstr_html($row['content'],60);
	$row['kindid']=$row['destid'];
	$row['dest_html']=!empty($row['destid'])?"<div class=\"page_top\">"."<a href=\"/raiders/{$row['pinyin']}\">".Helper_Archive::getBelongDestName($row['kindlist'])."</a><span>旅游攻略</span>共{$row['destarcnum']}篇</div>":'';

    //是否设置了目的地条件,便于展示推荐线路
    if(!empty($row['destid']))
    {
        $GLOBALS['condition']['_hasdest']=1;
    }
    foreach($row as $k=>$v)
    {
	   $pv->Fields[$k] = $v;
    }
}
 //获取上级开启了导航的目的地
getTopNavDest($row['kindlist']);
$typename=GetTypeName($typeid);//获取栏目名称.
$pv->Fields['typename'] = $typename;
$pv->Fields['title']=!empty($row['seotitle'])?$row['seotitle']:$row['articlename'];
$pv->Fields['addtime']=empty($row['modtime'])?$row['addtime']:$row['modtime'];	
$pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."raiders/" ."article_show.htm");
$pv->Display();
exit();

	 
?>
