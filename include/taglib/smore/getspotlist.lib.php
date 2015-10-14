<?php
if(!defined('SLINEINC'))
{
    exit("Request Error!");
}

/* >>sline>>
<name>按类型获取景点列表</name>
<demo>
{sline:getspotlist row=5,flag='recommend'}
  <a href='[field:url/]'>[field:title/]</a>
{/sline:getlinelist}
   
	
	<iterm>row:记录条数</iterm>
	
	<iterm>type:顶级栏目或者子栏目(top,son)</iterm>
	
	<iterm>flag:recommend:推荐景点 hot:热门景点</iterm>
	
	<iterm>sonid:子栏目id,当type=son时此项必须设置</iterm>
</demo>

>>sline>>*/
 

function lib_getspotlist(&$ctag,&$refObj)
{
    global $dsql;
	include(SLINEDATA."/webinfo.php");
    $attlist="row|8,flag|,type|top,sonid|,limit|0,kindid|";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);

    $innertext = trim($ctag->GetInnertext());
    $revalue = '';
	$basefield = 'a.aid,a.id,a.spotname,a.litpic,a.area,a.tagword,a.kindlist,a.webid,a.attrid,a.shownum,a.want,a.went';
    if($type=='top' && empty($flag)) return '';
	//如果调用二级栏目则必须在显示类里指定sonid
	//加目的地页面显示条件
	$destwhere=(isset($refObj->Fields['kindid'])) ? "and FIND_IN_SET({$refObj->Fields['kindid']},kindlist) " : ''; 
	
	
	if($type=='mdd')
	{  
	   
	   if($flag=='recommend')
	   {
		  $orderby=' order by c.isjian desc,case when c.displayorder is null then 9999 end,c.displayorder asc'; 
	   }
	   else if($flag=='hot')
	   {
		  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
	   }
	   else
	   {
		  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';
	   }
	   
	   if(!empty($refObj->Fields['kindid'])||$kindid)
	   {
	        $sonid=$refObj->Fields['kindid'];
			$sonid=empty($sonid)?$kindid:$sonid;
			$where="where  FIND_IN_SET($sonid,a.kindlist) {$orderby}  limit {$limit},{$row}";
			$sql="select a.* from #@__spot as a left join #@__kindorderlist as c on (c.classid=$sonid and a.id=c.aid and c.typeid=5)  $where";
			
			//echo $sql;
			
	   }
	   else
		   $sql="select {$basefield},b.isding as isding,b.isjian,b.displayorder from #@__spot as a left join #@__allorderlist b on (a.id=b.aid and b.typeid=5) order by isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";;
	 
	 
	  
	} 
	
	//周边景点
	else if($type=='aroundspot')
	{
		$kindid=array_remove_value($refObj->Fields['kindlist']);
		$sql="select * from #@__spot where FIND_IN_SET($kindid,kindlist) order by isding,isjian desc,displayorder asc limit {$limit},{$row}";
		
		
	}
	
	else if($type=='top')
	{
		if($flag=='recommend')
		{
		   $sql="select {$basefield},b.isding as isding,b.isjian,b.displayorder from #@__spot as a left join #@__allorderlist b on (a.id=b.aid and b.typeid=5) order by isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";
		  
		}
	
		else if($flag=='hot')
		{
		   $sql="select {$basefield} from #@__spot a where webid is not null {$destwhere}  order by a.isjian desc,a.shownum desc limit {$limit},{$row}";

		

		  
		}
		else if($flag=='want')//想去
		{
			
			$sql="select {$basefield} from #@__spot a where a.webid is not null {$destwhere}  order by a.want desc,a.shownum desc limit {$limit},{$row}";
			
			
	    }
		else if($flag=='went')//去过
		{
			
			$sql="select {$basefield} from #@__spot a where a.webid is not null {$destwhere}  order by a.went  desc limit {$limit},{$row}";
	
	    }
		else if($flag=='attr')
		{
		   $attrid=$refObj->Fields['attrid'];
		   $sql="select {$basefield} from #@__spot a where FIND_IN_SET($attrid,a.attrid) order by a.isding,a.isjian desc,a.displayorder asc limit {$limit},{$row}";
			
		}
		
		else if($flag=='relative')
		{
		  
		   $kindlist=$refObj->Fields['kindlist'];
		   $maxkindid=array_remove_value($kindlist);//最后一级.
		   $where=" FIND_IN_SET($maxkindid,a.kindlist) ";
		   $sql="select {$basefield} from #@__spot a where {$where}  order by a.isding desc,a.displayorder asc,a.shownum desc limit {$limit},{$row}";
		
		}
		else return '';
    }
	
	//专题
	else if($type=='theme')
	{
	    $themeid=$refObj->Fields['themeid'];
		if(empty($themeid))return '';
		$sql="select {$basefield} from #@__spot a where FIND_IN_SET($themeid,a.themelist) order by a.isding desc,a.displayorder asc limit {$limit},{$row}";	
		
	}
    
	
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
		$url = $webroot."/spots/show_{$row['aid']}.html";
		$row['url']=$url;
		$price = getSpotPrice($row['id']);
		
		$row['title']=$row['spotname'];
		$row['lit240']=getUploadFileUrl(str_replace('litpic','lit240',$row['litpic']));
	    $row['lit160']=getUploadFileUrl(str_replace('litpic','lit160',$row['litpic']));
		$row['litpic']=getUploadFileUrl($row['litpic']);	
		$row['sellprice']=$price;
		$row['price']=!empty($price) ? "<b>&yen;".$price."</b>起" : '电询';
        $row['price2'] = empty($price)?'电询': '<span>&yen;</span><strong>'.$price.'</strong><i>起</i>';//目的地页面用
		
        foreach($ctp->CTags as $tagid=>$ctag)
        {
                if($ctag->GetName()=='array')
                {
                        $ctp->Assign($tagid, $row);
                }
                else
                {
                    if( !empty($row[$ctag->GetName()]) || $row[$ctag->GetName()] =='0' ) $ctp->Assign($tagid,$row[$ctag->GetName()]); 
                }
        }
        $revalue .= $ctp->GetResult();
		
    }
    return $revalue;
	
	
	
}

//获取景点报价
function getSpotPrice($spotid)
{
	global $dsql;
	$sql = "select min(ourprice) as price from #@__spot_ticket where spotid='$spotid'";
	$row = $dsql->GetOne($sql);
	return $row['price'] ? $row['price'] : 0;
	
}
