<?php
require_once(dirname(__FILE__)."/../include/common.inc.php");
$typeid=0; 
require_once SLINEINC."/view.class.php";
if(empty($tid))return'';
  $themeid=$tid;
  $seoarr=getThemeInfo($tid);
  $seoarr['keyword']=!empty($seoarr['keyword'])?"<meta name=\"keywords\" content=\"".$seoarr['keyword']."\"/>":"";
  $seoarr['description']="<meta name=\"description\" content=\"".$seoarr['description']."\"/>"; 
//各栏目数量
  $seoarr['linenum']=getThemeCount(1,$themeid);
  $seoarr['hotelnum']=getThemeCount(2,$themeid);
  $seoarr['carnum']=getThemeCount(3,$themeid);
  $seoarr['raidernum']=getThemeCount(4,$themeid);
  $seoarr['spotnum']=getThemeCount(5,$themeid);
  $seoarr['photonum']=getThemeCount(6,$themeid);
//是否显示条件.
if($seoarr['hotelnum']!=0)
  $GLOBALS['condition']['_hasthemehotel']=1;
if($seoarr['carnum']!=0)
  $GLOBALS['condition']['_hasthemecar']=1;
if($seoarr['raidernum']!=0)
  $GLOBALS['condition']['_hasthemeraider']=1;
if($seoarr['spotnum']!=0)
  $GLOBALS['condition']['_hasthemespot']=1;
if($seoarr['linenum']!=0)
  $GLOBALS['condition']['_hasthemeline']=1;

 $seoarr['logo']=!empty($seoarr['logo']) ? "{$GLOBALS['cfg_basehost']}{$seoarr['logo']}" : "{$GLOBALS['cfg_templets_skin']}/images/specialtopic.jpg";
  
  $pv = new View($typeid);
  //seo变量赋值
   foreach($seoarr as $k=>$v)
   {
      $pv->Fields[$k] = $v;
   }
  $pv->Fields['themeid']=$themeid;
  
  
  
  $templet=!empty($seoarr['templetpath']) ? $seoarr['templetpath'].'/index.htm' : 'index.htm';
    
  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."zhuanti/" .$templet);
  
  $pv->Display();


  function getThemeInfo($tid)
  {
	  global $dsql;
	  $sql="select * from #@__theme where id='$tid'";
	  $row=$dsql->GetOne($sql);
	  return $row;
  }
  function getThemeCount($typeid,$tid)
  {
	  global $dsql;
	  $channeltable=array("1"=>"#@__line","2"=>"#@__hotel","3"=>"#@__car","4"=>"#@__article","5"=>"#@__spot","6"=>"#@__photo","10"=>"#@__leave");
	  $table=$channeltable[$typeid];
	  $sql="select count(*) as num from {$table} where FIND_IN_SET($tid,themelist)";
	  $row=$dsql->GetOne($sql);
	  return $row['num'];
	  
	  
	  
  }
?>