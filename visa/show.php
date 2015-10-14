<?php 

  require_once(dirname(__FILE__)."/../include/common.inc.php");
  require_once(dirname(__FILE__)."/../data/webinfo.php");
  require_once(dirname(__FILE__)."/visa.func.php");
  $typeid=8; //签证栏目
  
  require_once SLINEINC."/view.class.php";
  
  $pv = new View($typeid);
  
  if(!isset($aid)) exit('Wrong Id');
  $aid=RemoveXSS($aid);//防止跨站攻击
  updateVisit($aid,$typeid);//更新访问次数
  $row=getVisaInfo($aid);
  if(empty($row['id']))head404();


   $row['seotitle']=!empty($row['seotitle']) ? $row['seotitle'] : $row['title'];
   $row['seodescription']=!empty($row['description'])?"<meta name=\"description\" content=\"".$row['description']."\"/>":"";
   $row['seokeyword']=!empty($row['keyword'])?"<meta name=\"keywords\" content=\"".$row['keyword']."\"/>":"";
   $row['litpic']=getUploadFileUrl($row['litpic']);
   $row['visatype']=getVisaType($row['visatype']);
   $row['interview'] = !empty($row['needinterview']) ? '需要': '不需要';
   $row['letter'] = !empty($row['needletter']) ? '需要': '不需要';

  //是否显示
    $GLOBALS['condition']['_hasjieshao']= !empty($row['content']) ? 1 : 0;
    $GLOBALS['condition']['_hasnotice']= !empty($row['booknotice']) ? 1 : 0;
    $GLOBALS['condition']['_hascircuit']= !empty($row['circuit']) ? 1 : 0;
    $GLOBALS['condition']['_hasfriendtip']= !empty($row['friendtip']) ? 1 : 0;

   foreach($row as $k=>$v)
   {
	  $pv->Fields[$k] = $v;
   }

  $typename=GetTypeName($typeid);//获取栏目名称.
  $pv->Fields['typename'] = $typename;  
  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."visa/visa_show.htm");
  $pv->Display();
  exit();





	 
   

?>
