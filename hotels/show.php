<?php 
  require_once(dirname(__FILE__)."/../include/common.inc.php");
  require_once SLINEINC."/view.class.php";
  require_once "hotel.func.php";
  $typeid=2; //酒店栏目
  $pv = new View($typeid);
  if(!isset($aid)) head404();;
  $aid=RemoveXSS($aid);//防止跨站攻击
  updateVisit($aid,$typeid);//更新访问次数
  $row = getHotelInfo($aid);//获取酒店信息
  if(empty($row['id']))
  {
	head404();
  }
  $row['litpic']= getUploadFileUrl($row['litpic']);

  $row['seodescription']=!empty($row['description'])?"<meta name=\"description\" content=\"".$row['description']."\"/>":"";
  $row['seokeyword']=!empty($row['keyword'])?"<meta name=\"keywords\" content=\"".$row['keyword']."\"/>":"";
  $row['subname']=$row['hotelname'];
  $row['hotelprice']=$row['hotelprice'] == 0 ? "电询" : '<span>&yen;</span><strong>'.$row['hotelprice'].'</strong><s>起</s>';
  //$row['imagecount']=GetImageCount($row['hotelpics']);
  $row['pkname'] = get_par_value($row['kindlist'],$typeid);//上级目的地
  if(empty($row['telephone']))
  {
	$tel=getHotelNumber($row['webid']);
	$row['telephone']=$tel;
  }
  $row['commenthomeid']=$row['id']; //读取评论用
	
    //获取上级开启了导航的目的地
    getTopNavDest($row['kindlist']);
  
	foreach($row as $k=>$v)
	{
	   $pv->Fields[$k] = $v;
	}
  
  
  //是否显示条件.
  if(!empty($row['fuwu']))
  $GLOBALS['condition']['_hasfuwu']=1;
  if(!empty($row['traffic']))
  $GLOBALS['condition']['_hastraffic']=1;
  
  if(!empty($row['aroundspots']))
  $GLOBALS['condition']['_hasaroundspots']=1;
  if(!empty($row['notice']))
  $GLOBALS['condition']['_hasnotice']=1;
  if(!empty($row['equipment']))
  $GLOBALS['condition']['_hasequipment']=1;
  //图片获取
  $picArr = getPiclistArr($row['piclist']);

  $biglist = !empty($picArr['big']) ? $picArr['big'] : array(array('0'=>$row['litpic']));//大图
  $thumblist =!empty($picArr['thumb']) ? $picArr['thumb'] : array(array('0'=>$row['l                                                                                                                                                                                                                                                                                                                  itpic']));//大图 $picArr['thumb'];//小图
  //特色服务项目
  $service = getHotelService($row['attrid'],202);
  
  
  $typename=GetTypeName($typeid);//获取栏目名称.
  $pv->Fields['typename'] = $typename;
  $pv->Fields['service'] = $service;
  $pv->Fields['title']=!empty($row['seotitle'])?$row['seotitle']:$row['hotelname'];
  
	
  $pv->SetTemplet(SLINETEMPLATE ."/".$cfg_df_style ."/" ."hotels/" ."hotel_show.htm");
  
  $pv->Display();
  
  exit();



?>
