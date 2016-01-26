<?php
if(!defined('SLINEINC'))
{
    exit("Request Error!");
}
/**
 * 调用线路数据标签
 *
 * @version        $Id: loop.lib.php netman
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2011, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */
 
/* >>sline>>
<name>按类型读取线路列表</name>
<demo>
{sline:getlinelist row=5,flag='recommend'}
  <a href='[field:url/]'>[field:linename/]</a>
{/sline:getlinelist}
   
	
	<iterm>row:记录条数</iterm>
	
	<iterm>type:顶级栏目或者子栏目(top,son)</iterm>
	
	<iterm>flag:recommend:推荐线路 specials:特价线路 hot:热点线路</iterm>
	
	<iterm>sonid:子栏目id,当type=son时此项必须设置</iterm>
</demo>

>>sline>>*/
 

function lib_getlinelist(&$ctag,&$refObj)
{
	global $startcity;
    global $dsql;
	include(SLINEDATA."/webinfo.php");
    $attlist="row|8,flag|,type|top,sonid|,limit|0,";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
    $webid=0;
    $innertext = trim($ctag->GetInnertext());
    $revalue = '';
	$basefield = "a.aid,a.id,a.webid,a.linename,a.lineicon,a.seotitle,a.sellpoint,a.linepic,a.storeprice,a.lineprice,a.linedate,a.features,a.transport,a.lineday,a.startcity,a.overcity,a.shownum,a.satisfyscore,a.bookcount,a.jifentprice,a.jifenbook,a.jifencomment,a.attrid,a.kindlist";
	
	
	
    if($type=='top' && empty($flag)) return '';
	//如果调用二级栏目则必须在显示类里指定sonid
	$limit=!empty($limit)?$limit:0;
	if($type=='startcity')
	{
		$sql="select  {$basefield},c.isjian,c.istejia,c.isding  from #@__line as a left join #@__allorderlist as c on (c.classid=$sonid and a.id=c.aid  and c.typeid=1) where a.ishidden=0 and and startcity='{$startcity}' and FIND_IN_SET($sonid,a.kindlist) and a.ishidden=0 {$orderby}  limit {$limit},{$row}";
	}
	if($type=='mdd') //指定目的地时关联文章调用.
	{  
	   if($flag=='hot')
	   {
		  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
	   }
	   else if($flag=='recommend')
	   {
		  $orderby='order by c.isding desc,c.isjian desc,case when c.displayorder is null then 9999 end,c.displayorder asc,a.addtime desc';   
	   }
	   else if($flag=='specical')
	   {
		  $orderby='and  c.istejia = 1';
	   }
       else if($flag =='new')
       {
           $orderby = 'order by a.addtime desc';
       }
	   else
	   {
		   $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';
	   }
	   $sonid=isset($definekind) ? $definekind : $refObj->Fields['kindid'];
	   $shownum=isset($row) ? $row : $refObj->Fields['shownum'];
	   $shownum = empty($shownum) ? 6 : $shownum;
	  
	
	   if(isset($sonid))
	   {
	        
			$number=isset($refObj->Fields['shownumber']) ? $refObj->Fields['shownumber'] : $row;//如果模块设置了显示数量则使用.
			$sql="select {$basefield},c.isjian,c.istejia,c.isding  from #@__line as a left join #@__allorderlist as c on (c.classid=$sonid and a.id=c.aid  and c.typeid=1) where a.ishidden=0 and  FIND_IN_SET($sonid,a.kindlist) {$orderby}  limit {$limit},{$shownum}";

		   
		
	   }
	  
	   else return '';
	}
	//搜索页面推荐.
	else if($type=='searchrec')
	{
		if($GLOBALS['childid']!=0)
		{
		  $kchild=$GLOBALS['childid'];
		  $sql="select  distinct {$basefield}  from #@__line as a left join #@__allorderlist as c on (c.classid=$kchild and a.id=c.aid  and c.typeid=1) where a.ishidden=0 and c.isjian=1 and FIND_IN_SET($kchild,a.kindlist) order by case when c.displayorder is null then 9999 end,c.displayorder asc   limit 0,4";
		}
		else
		{
		   $sql="select {$basefield} a from #@__line where a.ishidden=0 and a.isjian=1  order by a.isding desc,a.displayorder asc,a.addtime desc limit {$limit},{$row}";
		
		}
	
	}
	//目的地推荐
	else if($type=='destsearchrec')
	{
		if($GLOBALS['destid']!=0)
		{
		  $kchild=$GLOBALS['destid'];
		  $sql="select {$basefield} from #@__line as a left join #@__allorderlist as c on (c.classid=$kchild and a.id=c.aid  and c.typeid=1) where  a.ishidden=0 and FIND_IN_SET($kchild,a.kindlist) {$orderby}  limit 0,4";
		}
		else
		{
		   $sql="select {$basefield} from #@__line a where a.ishidden=0 and a.isjian=1  order by a.isding desc,a.displayorder asc,a.addtime desc limit {$limit},{$row}";
		
		}
	
	}
	
	
	//普通调用
	else if($type=='top')
	{
	   
		if($flag=='recommend') //排序规则:置顶》排序》最新更新
		{
		   $sql="select {$basefield},b.isding,b.istejia,b.displayorder from #@__line as a left join #@__allorderlist b on (a.id=b.aid and b.typeid=1) where a.ishidden=0 order by b.isding desc,b.displayorder asc limit {$limit},{$row}";
		}
		else if($flag=='specical')
		{
		  
		    $sql="select {$basefield},b.isding,b.istejia,b.displayorder from #@__line as a left join #@__allorderlist b on (a.id=b.aid and b.typeid=1) where a.ishidden=0 order by b.istejia desc,b.displayorder asc limit {$limit},{$row}";
		}
		else if($flag=='hot')
		{
		   $sql="select {$basefield} from #@__line a where a.ishidden=0  order by a.shownum desc,a.displayorder asc limit {$limit},{$row}";
		   
		}
		else if($flag=='attribute')
		{
		   	 $sql="select {$basefield} from #@__line a where FIND_IN_SET('$attrid',a.attrid) and a.ishidden=0  order by a.addtime desc,a.displayorder asc limit {$limit},{$row}";
			
		}
		else if($flag=='relative')
		{
		   
		   $kindlist=$refObj->Fields['kindlist'];
		   $maxkindid=array_remove_value($kindlist);//最后一级.
		   $maxkindid = empty($maxkindid) ? 0 : $maxkindid;
		   $where=" FIND_IN_SET($maxkindid,a.kindlist) ";
		   $sql="select {$basefield} from #@__line a where {$where} and a.ishidden=0 order by a.shownum desc,a.displayorder asc limit 0,{$row}";
		}
		else if($flag=='listexcept')
		{
			$sql="select aid from #@__line where isjian=1 and a.ishidden=0 order by isjian desc,displayorder asc limit 0,5";
			$dsql->Execute("list",$sql);
			$a="";
			 while($str=$dsql->GetArray("list"))
			 {    
				 $a.=$str["aid"].",";
			 }
			 $a=substr($a,0,-1);
			 if(!$a=="")
			 {
				$a="and aid not in ($a)";
			 }
			$sql="select {$basefield} from #@__line a where {$a} order by  a.isjian desc, a.displayorder asc, a.shownum desc limit {$limit},{$row}";
			
			};
    }
	
	else if($type=='theme')
	{
	   	$themeid=$refObj->Fields['themeid'];
		if(empty($themeid))return '';
		$sql="select {$basefield} from #@__line a where a.ishidden=0 and FIND_IN_SET($themeid,a.themelist) order by a.isding desc,a.displayorder asc limit 0,{$row}";
		
	}
	
	
    $dsql->SetQuery($sql);
    $dsql->Execute();
    $ctp = new DedeTagParse();
    $ctp->SetNameSpace("field","[","]");
    $ctp->LoadSource($innertext);
    $GLOBALS['autoindex'] = 0;
	$num=0;
    while($row = $dsql->GetArray())
    {
        $GLOBALS['autoindex']++;
		$webroot=GetWebURLByWebid($row['webid']);
		$url= $webroot . "/lines/show_{$row['aid']}.html";;
		$row['url']= $url;
		$row['bookurl']= "{$webroot}/lines/booking_{$row['aid']}.html";
        $startcity = getStartCityName($row['startcity']);
        $startcity = !empty($startcity) ? "[{$startcity}出发]" : '';
		$row['title']="{$row['linename']}";
		$real=getLineRealPrice($row['aid'],$row['webid']);
		$row['lineprice']=$real ? $real : $row['lineprice'];
		
		$row['commentnum']=Helper_Archive::getCommentNum($row['id'],1); //评论次数
		$row['sellnum']=Helper_Archive::getSellNum($row['id'],1)+$row['bookcount']; //销售数量
		$row['satisfyscore']=Helper_Archive::getSatisfyScore($row['id'],1); //满意度
		
		if(!empty($row['lineprice'])&&!empty($row['storeprice']))
		   $row['discount']=abs((int)$row['storeprice']-(int)$row['lineprice']);
		 else
		   $row['discount']=0; 
		 
	
		$row['price'] = empty($row['lineprice'])?'<span class="rmb_1">电询</span>':"<span class='rmb_1'>&yen;</span><span class='rmb_2'>".$row['lineprice'].'</span>';
        $row['price2'] = empty($row['lineprice'])?'<span>电询</span>' : '<span>&yen;</span><strong>'.$row['lineprice'].'</strong><i>起</i>';

        $row['agentprice'] = $row['storeprice'];
		
		$row['sellprice'] = empty($row['lineprice'])?'0':$row['lineprice']; //没有HTML标识的价格
		
		$row['storeprice']=!empty($row['storeprice'])?"<span class=\"rmb_2\">&yen;</span>".$row['storeprice']:"<span class=\"rmb_1\">电询</span>";


		
		$row['lineseries']=getSeries($row['id'],'01');
		//$row['lit240']=getPicByName($row['linepic'],'lit240');
		//$row['lit160']=getPicByName($row['linepic'],'lit160');
		
		$row['litpic']=getUploadFileUrl($row['linepic']);
		$row['lit240']=getUploadFileUrl(str_replace('litimg','lit240',$row['linepic']));
		$row['lit160']=getUploadFileUrl(str_replace('litimg','lit160',$row['linepic']));
        $row['jifentprice'] = !empty($row['jifentprice']) ? '&yen;'.$row['jifentprice'] : '无';
        $row['startdate'] = getLine_StartDate($row);//团期
        $row['tuijianimg'] = !empty($row['isjian']) ?  "<img src='/templets/smore/images/hot_pic.gif' />" : '';
        $row['tejiaimg'] = !empty($row['istejia']) ? "<img src='/templets/smore/images/te_pic.gif' />" : '';
        $row['zhidingimg'] = !empty($row['isding']) ? "<img src='/templets/smore/images/top_pic.gif' />" : '';
        //$row['startcity'] = !empty($row['startcity']) ? '['.$row['startcity'].'出发]' : '';
		
	
		$row['list']=$num;

		
        foreach($ctp->CTags as $tagid=>$ctag)
        {
                if($ctag->GetName()=='array')
                {
                        $ctp->Assign($tagid, $row);
                }
                else
                {
                   $ctp->Assign($tagid,$row[$ctag->GetName()]); 
                }
        }
        $revalue .= $ctp->GetResult();
		
    }
    return $revalue;
}

//新增线路处理函数
//处理出发日期列表和出发日期下拉选择
function getLine_StartDate($row)
{
    global $dsql;
    $today=time();
    $montharr=getMonthPrice_List($row['webid'],$row['aid'],date('Y',$today),date('m',$today));
    $monthstr='';
    $monthli='';
    $curday=(int)date('d',$today);
    if(empty($montharr))
    {
        $monthstr=empty($row['linedate'])?'电询' : $row['linedate'];
    }
    else
    {
        //$monthstr=!empty($montharr)? date('m').'月':'';
        foreach($montharr as $key=>$value)
        {

            $monthstr.=$key.'、';
            $weekday=date('w',strtotime(date('Y',$today).'-'.$key));
           // $text = $key.'(周'.getCnWeek($weekday).')成人价'.$value.' 儿童价'.$row['childprice'];
            //$monthli.='<option value="'.$key.'" data-price="'.$value.'" data-childprice="'.$row['childprice'].'">'.$text.'</option>';

            //$monthli.='<li class="a1" adult="'.$value.'" content="'.date('m',$today).'-'.$key.'周'.getCnWeek($weekday).'出发,&lt;b&gt;'.'&lt;/b&gt;元/成人,&lt;b&gt;'.$value.'&lt;/b&gt;元/儿童" date="'.date('Y-m',$today).'-'.$key.'" childprice="'.$row['childprice'].'" personchildren="'.$row['childprice'].'" jounerygroupid="0">'.date('m',$today).'-'.$key.'周'.getCnWeek($weekday).',<b>'.$value.'</b>元/成人,<b>'.$row['childprice'].'</b>元/儿童</li>';

        }
        if(!empty($monthstr))
        {
            $monthstr=trim($monthstr,'、');
            $monthstr.='日,';
        }

    }
    return $monthstr;

}
//获取最近报价
function getMonthPrice_List($webid,$lineid,$year,$month)
{
    global $dsql;
    $thisyear=date('Y');
    $thismonth=date('m');
    $nextmonth=date('m',strtotime('+1 month'));
    $nextyear=$nextmonth=='01' ? $thisyear+1 : $thisyear;
    $arr=$dsql->getAll("select price,monthnum from #@__line_month where ((yearnum='{$thisyear}' and monthnum={$thismonth}) or (yearnum='$nextyear' and monthnum = '$nextmonth')) and webid={$webid} and lineid={$lineid}");
    $monthprice=array();
    $index = 0;
    $today = time();
    foreach($arr as $row)
    {
        $dasprice_arr=explode("||", $row['price']);


        $curday=(int)date('d',$today);
        foreach($dasprice_arr  as $dayprice)
        {
            $p=explode(' ',trim($dayprice));
            if(!empty($p[1]) && $index < 6 && (int)($p[0]) > $curday) //这里限制读取6个日期.
            {
                $key = $row['monthnum'].'-'.$p[0];
                $monthprice[$key]=$p[1];
                $index++;
            }

        }

    }

    return $monthprice;

}

//获取出发城市

function getStartPlace($placeid)
{
    global $dsql;
    $sql = "select cityname from #@__startplace where id='$placeid'";
    $row = $dsql->GetOne($sql);
    return !empty($row['cityname']) ? '['.$row['citname'].']' : '';
}
