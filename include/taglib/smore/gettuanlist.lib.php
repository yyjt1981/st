<?php
if(!defined('SLINEINC'))
{
    exit("Request Error!");
}

/**
 * 调用文章显示数据标签
 *
 * @version        $Id: getarclist.lib.php netman
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2011, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */

function lib_gettuanlist(&$ctag,&$refObj)
{
	
    global $dsql;
	include(SLINEDATA."/webinfo.php");
    $attlist="row|8,flag|,type|top,limit|0,haspic|1";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);

    $innertext = trim($ctag->GetInnertext());
    $revalue = '';
	$basefield ='a.*';
   
	
	
	if($type=='mdd')
	{  
	   if($flag=='recommend')
	   {
		  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
	   }
	   else if($flag=='hot')
	   {
		  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';
	   }
	   else if($flag=='new')
	   {
		  $orderby='order by a.addtime desc'; 
		   
	   }
	   else if($flag=='imagehot')
	   {
		   
		  $orderby=" and a.litpic!='' order by case when c.displayorder is null then 9999 end,c.displayorder asc"; 
	   }
	   else
	   {
		  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
	   }
	   if(isset($refObj->Fields['kindid']))
	   {
	        $sonid=$refObj->Fields['kindid'];
			$number=isset($refObj->Fields['shownumber']) ? $refObj->Fields['shownumber'] : $row;//如果模块设置了显示数量则使用.
		    
			$where="a.ishidden=0 and FIND_IN_SET($sonid,a.kindlist)";
			$where.=!empty($haspic)?" and a.litpic is not null":''; 
		  
			$sql="select {$basefield} from #@__tuan as a left join #@__tuan_kindlist as c on (c.classid=$sonid and a.id=c.aid and c.typeid=4)  where $where  {$orderby}  limit {$limit},{$number}";
			
			
	   }
	   else return '';
	} 
	else if($flag=='specical')
	{
	   
	   $sql="select {$basefield} from #@__tuan a where a.ishidden=0 and isindex =1    order by  displayorder asc,addtime desc limit {$limit},{$row}";
	}
	else if($flag=='recommend')
	{
	   $sql="select {$basefield},b.isjian,b.isding as isding,b.displayorder from #@__tuan a left join #@__allorderlist b on (a.id=b.aid and b.typeid=13) where a.ishidden=0  order by b.isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";

	 
	}
	else if($flag=='isindex')
	{
	   $sql="select {$basefield} from #@__tuan a where a.isindex=1 where a.ishidden=0   order by a.displayorder asc, a.addtime desc limit {$limit},{$row}";
	}
	else if($flag=='new')
	{
	   $sql="select {$basefield} from #@__tuan a where a.ishidden=0   order by a.addtime desc limit {$limit},{$row}";
	  
	}
	else if($flag=='hot')
	{
	   $sql="select {$basefield} from #@__tuan a where a.ishidden=0  order by a.shownum desc,a.addtime asc limit {$limit},{$row}";

	}
	
	else if($flag=='photo') //幻灯显示
	{
	   	$sql="select {$basefield} from #@__tuan a where a.ishidden=0 and a.litpic !=''  order by a.addtime desc limit {$limit},{$row}";
		
	}
	
	else if($flag=='jieban')
	{
		$getsql="select id from #@__tuan_attr where aid=0 and webid=0";
		$arr=$dsql->GetOne($getsql);
		$jiebanid=$arr['id'];//获取id
		
		
		$sql="select {$basefield},b.isding,b.displayorder,b.isjian from #@__tuan a left join #@__attrorderlist b on a.aid=b.aid and a.webid=b.webid where a.ishidden=0 and FIND_IN_SET($jiebanid,a.attrid)  order by b.isding desc,b.isjian desc, b.displayorder asc, a.addtime desc,a.modtime desc limit {$limit},{$row}";
		
	}
	else if($flag=='relative')
	{
		$kindlist=$refObj->Fields['kindlist'];
		$maxkindid=get_exist_kind($kindlist);//最后一级.
		$maxkindid = empty($maxkindid) ? 0 : $maxkindid;
		$where=" FIND_IN_SET($maxkindid,a.kindlist) ";
	    //排序顺序：置顶+tag关联》排序+ tag关联》最新更新+tag关联
	    $sql="select a.* from #@__tuan a where find_in_set('$attrid',a.attrid) where a.ishidden=0  order by a.isding desc,a.displayorder asc,a.addtime desc limit {$limit},{$row} ";
		
	
	}
	else if($type=='theme')
	{
	    $themeid=$refObj->Fields['themeid'];
		if(empty($themeid))return '';
		$sql="select a.* from #@__tuan a where a.ishidden=0 and FIND_IN_SET($themeid,a.themelist)  order by a.isding desc,a.displayorder asc limit {$limit},{$row}";
		
	}
	else if($flag=='attr')
	{
		$attrid=$refObj->Fields['attrid'];
		$sql="select a.* from #@__tuan a where {$where}  order by a.isding desc,a.displayorder asc,a.addtime desc limit {$limit},{$row}";
	}
	else return '';
	
	
	

    $dsql->SetQuery($sql);
    $dsql->Execute();
    $ctp = new STTagParse();
    $ctp->SetNameSpace("field","[","]");
	
    $ctp->LoadSource($innertext);
    
    $GLOBALS['autoindex'] = 0;

    while($row = $dsql->GetArray())
    {
		$GLOBALS['autoindex']++;
		$webroot=GetWebURLByWebid($row['webid']);
		$sonid=$refObj->Fields['sonid'];
		
		$row['url']=$GLOBALS['cfg_cmsurl']."/tuan/show_{$row['aid']}.html";
		
		$row['litpic']=getUploadFileUrl($row['litpic']);
	    $row['lit240']=str_replace('litimg','lit240',$row['litpic']);
	    $row['lit160']=str_replace('litimg','lit160',$row['litpic']);
		
		$row['attrname']=getTuanAttrname($row['attrid']);
		$row['attrnamearr']=getTuanAttrname($row['attrid'],true);
		$row['destname']=Helper_Archive::getBelongDestName($row['kindlist']);//所属目的地
		$row['destid']=array_remove_value($row['kindlist']);
		$row['discount']=floor($row['ourprice']/$row['sellprice']*100)/10; //折扣
        $row['booknum']=Helper_Archive::getSellNum($row['id'],13)+$row['virtualnum'];
		$row['satisfyscore']=Helper_Archive::getSatisfyScore($row['id'],13); //满意度
        foreach($ctp->CTags as $tagid=>$ctag)
        {
                if($ctag->GetName()=='array')
                {
                        $ctp->Assign($tagid, $row);
                }
                else
                {
                    if(isset($row[$ctag->GetName()])) $ctp->Assign($tagid,$row[$ctag->GetName()]); 
                }
        }
        $revalue .= $ctp->GetResult();
		
    }
    return $revalue;
}
function getTuanAttrname($attrid,$isarr=false)
{
   global $dsql;
   
   //如果需要的是数组
   if($isarr)
   {
	 $sql="select id,attrname from #@__tuan_attr where id in ($attrid)";
     $result=$dsql->getAll($sql);
	  foreach($result as $v)
	  {
		$newresult[$v['id']]=$v['attrname'];
	  }
	  return $newresult;      
   }
   
   //如果需要的不是数组
   $name='其它';
   if(!empty($attrid))
   {
     $sql="select attrname from #@__tuan_attr where id in ($attrid)";
     $row=$dsql->GetOne($sql);
	 $name=$row['attrname'];
   }
   return $name;

}

