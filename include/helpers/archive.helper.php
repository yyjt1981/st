<?php  if(!defined('SLINEINC')) exit('sline');
/**
 * 文档小助手
 *
 * @version        $Id: archive.helper.php 2 netman$
 * @package        Sline.Helpers
 * @copyright      Copyright (c) 2007 - 2010, stourweb, Inc.
 * @link           http://www.Stourweb.com
 */
/**
     *  获得档目名称
     *
     * @access    private
     * @return    string
     */
if ( ! function_exists('GetTypeName'))
{
	function GetTypeName($typeid,$childid=0)
	{ 
	  global $dsql,$sys_webid;
	  if($childid==0)
	  {
	   $sql="select shortname from #@__nav where typeid={$typeid} and webid='0'";
	  }
	  else
	  {
	   $sql="select shortname from #@__nav where id={$childid} and webid='0'";
	  }
	  $row=$dsql->GetOne($sql);
	 
	  $typename=$row['shortname']; //栏目名称
	  return $typename;
	} 
} 
 

/**
 *  拆分Tag词,返回带链接的tag词列表
 *
 * @param     int  $tagword  tag词
 * @return    string
 */
if ( ! function_exists('GetTagsLink'))
{
   function GetTagsLink($tags)
   {
      global $dsql;
	 $tagwords='';
	 $row='';
	 if($tags!='')
     {
       $tag=explode(",",$tags);
      
      for($i=0;isset($tag[$i]);$i++)
      {
	      $sql="select id from #@__tmptag where `tagname`='$tag[$i]' and webid='0'";
	      $row=$dsql->GetOne($sql);
	   if(empty($row['id']))
	   {
		  $sql="select id from #@__tmptag where tagname like '%$tag[$i]%' and webid='0'";
	      $row=$dsql->GetOne($sql);
	   }
	   $row['id']=!empty($row['id'])?$row['id']:0;
		   if($row['id']!='0')
		   {
		   $tagwords.="&nbsp;&nbsp;&nbsp;<a href='".$GLOBALS['cfg_cmsurl']."/raiders/arctag_".urlencode($row['id'])."_0.html' rel='nofollow'>".$tag[$i]."</a>";
		   }
      }
	 }
	return $tagwords;
  }

}

/**
 * 车务功能函数--获取月份
 *
 * @param     int  $tagword  tag词
 * @return    string
 */
if ( ! function_exists('GetMonthHandle'))
{
	function GetMonthHandle($offset=0)
	{
		$month=date('n')+$offset;
		$output="";
		switch($month)
		{
			case 1:
				$output="one";
			break;
			case 2:
				$output="two";
			break;
			case 3:
				$output="three";
			break;
			case 4:
				$output="four";
			break;
			case 5:
				$output="five";
			break;
			case 6:
				$output="six";
			break;
			case 7:
				$output="seven";
			break;
			case 8:
				$output="eight";
			break;
			case 9:
				$output="nine";
			break;
			case 10:
				$output="ten";
			break;
			case 11:
				$output="eleven";
			break;
			case 12:
				$output="twelve";
			break;
			case 13:
				$output="one";
			break;
			case 14:
				$output="two";
			break;
		}
		//echo $output;
		return $output;
	}
	function GetPicture($picstr)//return $pic[0] 报错 但程序正常 不知道咋回事
	{
		//$pic=array();
		//$output='';
		if(!isset($picstr)||$picstr=='')
		{
			return '';
		}
		else
		{
			$pic=split(',',$picstr);
			return $pic[0];
			//echo $pic[0];		
			//$output= $pic[0];
		}
		//return $output;
	}
}


if(!function_exists('ordermaill'))
{

     function ordermaill($maillto,$title,$content){
    //##########################################
		include_once(SLINEINC.'/email.class.php');
		
		$smtpserver = "smtp.163.com";//SMTP服务器
		$smtpserverport =25;//SMTP服务器端口
		$smtpusermail = "Stourweb@163.com";//SMTP服务器的用户邮箱
		$smtpemailto =$maillto;//发送给谁
		$smtpuser = "Stourweb@163.com";//SMTP服务器的用户帐号
		$smtppass = "kelly12345";//SMTP服务器的用户密码
		$mailsubject = iconv('UTF-8','GB2312',$title);//邮件主题
		$mailbody = iconv('UTF-8','GB2312',$content);//邮件内容
		$mailtype = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件
		##########################################
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		
		$smtp->debug = false;//是否显示发送的调试信息
		$status=$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
		
		return $status;
		}
}

if(!function_exists('strfilter'))
{

     function strfilter($string)
	 {
           $string=trim($string);  
		   $replace=''; 
		   $string=str_replace('，',',',$string); 
		   $string=str_replace('、',',',$string); 
           $string=str_replace('?',',',$string);
		   $string=str_replace('？',',',$string);
		   $string=str_replace('；',',',$string);
		   $string=str_replace(';',',',$string);
		   $string=str_replace('。','',$string);

		   $string=str_replace(',',',',$string); 
		   $string=str_replace('.',',',$string); 
		   $string=str_replace('\'',',',$string);
		    $string=str_replace('\'',',',$string);

		   if(substr($string, -1)==',')
		   {
			 $string=substr($string,0,strlen($string)-1); //去掉最后一个逗号.
		   }


      
		   return $string;
		}
}
/**
 * 获取父ID功能函数
 *
 * @param     string  $typeid  栏目类型
 * @return    int aid
 */
//获取父ID
if(!function_exists('GetParentId'))
{
    function GetParentId($webid,$typeid)
	{
	   global $dsql,$sys_webid;
	   $pid=0;//初始值
	   $sql="select id from #@__nav where webid={$webid} and typeid={$typeid}";
	   $row=$dsql->GetOne($sql);
	   if(is_array($row))
	   {
	       $pid=$row['id'];
	   }
	   return $pid;
	
	}


}

function blogdates($year,$month,$type,$id)
  {  
    
	//echo $year."</br>".$month;
	$str='';
	$str.="<div class=\"pic\">";
	$str.= "<div><strong>".$year."</strong>年<strong style=\"color:#ff0000;\">".$month."</strong>月"."报价"."</div>";
	$str.= "<table border=0 width=\"650\" height=\"265\" cellpadding=\"5\" cellspacing=\"1\" style=\"background:#dcdcdc;\">";
	$str.= "<tr height=\"30\" style=\"background:#fff;\">";
	$str.= "<td align=\"center\">星期日</td>";
	$str.= "<td align=\"center\">星期一</td>";
	$str.= "<td align=\"center\">星期二</td>";
	$str.= "<td align=\"center\">星期三</td>";
	$str.= "<td align=\"center\">星期四</td>";
	$str.= "<td align=\"center\">星期五</td>";
	$str.= "<td align=\"center\">星期六</td>";
	$str.= "</tr>";
	//$time=$year."-0".$month."-1";
	$timestamp = mktime(0,0,0,$month,1,$year);

  //  echo $timestamp;
	
	$daysnum=date("t",$timestamp);
	$firstday=date("w",$timestamp);//当前星期几。
	
	
	for($n=1;$n<=6;$n++)
	{ 
	   $str.= "<tr height=\"35\" style=\"background:#fff;\">";
	    for($i=1;$i<=7;$i++)
	     {
		     
			$thisday=0;
		     if ($i>$firstday)
			  {
			      $thisday=$i-$firstday;
			   }
			 if ($n>1)
			  {
			      $thisday=7*($n-1)+$i-$firstday;
			   
			  }
			if($thisday>$daysnum)
			 {
			     $thisday=0;
			 }
			if ($thisday==0)
			 {
				$display="&nbsp;";
			 }
			else
			 {
			    if($type=="display")
				{
				   $display="<div class=\"ldate\">".$thisday."</div>"."<div class=\"ldate\" style='color:#ff0000;'>".GetPrices($year,$month,$thisday,$id)."元</div>";
				}
				else if($type=="modify")
				{
				   $price=GetPrices($year,$month,$thisday,$id);
				   $display=$thisday."</br>"."<input type=\"text\" align=\"center\" id=\"day$thisday\" value=\"$price\"  name=\"day$thisday\" size='6'/>";
				}
				else if($type=="add")
				{
				
				   $display=$thisday."<br/><input type='text' id=\"day$thisday\"  name=\"day$thisday\" size='6'/>";
				}
			 }
			
			$str.= "<td align=\"center\" onmouseover=\"this.style.backgroundColor='#edffd0'\" onmouseout=\"this.style.backgroundColor='#ffffff'\">".$display."</td>";
		   
		 }
		
		$str.= "</tr>";
		if (($n==5 && $thisday==$daysnum) || $thisday==0)
			 {
			   $n=$n+1;
			 
			 }
	
	}
	$str.= "</table>";
	$str.="</div>";
  return $str;
  
  }
  
  //根据年，月。日获取报价
  
  function GetPrices($year,$month,$day,$id)
  {
     global $sys_webid,$dsql;
	 $sql="select day$day as price from #@__line_month where yearnum=$year and monthnum=$month and webid=$sys_webid and lineid=$id";
	 
	 $row=$dsql->GetOne($sql);
	 $price=$row['price'];
	 
	 return $price;
	 
  
  
  }

 







//字符串截取
if(!function_exists("cutword"))
{
	function cutword($string, $sublen, $start = 0, $code = 'UTF-8')  
       {  
		  if($code == 'UTF-8')  
		  {  
		  $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";  
		  preg_match_all($pa, $string, $t_string);  
			
		  if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";  
		  return join('', array_slice($t_string[0], $start, $sublen));  
		  }  
		  else  
		  {  
		  $start = $start*2;  
		  $sublen = $sublen*2;  
		  $strlen = strlen($string);  
		  $tmpstr = '';  
			
		  for($i=0; $i<$strlen; $i++)  
			 {  
				if($i>=$start && $i<($start+$sublen))  
				   {  
							if(ord(substr($string, $i, 1))>129)  
							{  
							$tmpstr.= substr($string, $i, 2);  
							}  
							else  
							{  
							$tmpstr.= substr($string, $i, 1);  
							}  
					}  
				if(ord(substr($string, $i, 1))>129) $i++;  
			 }  
		   if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";  
		  return $tmpstr;  
		  }  
      }  
}

/**
 * 根据AID评论数
 *
 * aid:hotel表的AID值
 */
//
if(!function_exists("GetHotelComment"))
{
	function GetHotelComment($aid,$webid)
	{
		global $dsql;
		$conments="select count(id) as looknum from #@__allcomments where typeid=2 and postid={$aid} and webid=$webid";
		$looknum=$dsql->Getone($conments);
		$num = $looknum['looknum'] == 0 ? mt_rand(20,99) : $looknum['looknum'];
		return $num;
	}
}

/**
 * 根据AID获取房型
 *
 * aid:hotel表的AID值
 */
//
if(!function_exists("GetHotelHouse"))
{
	function GetHotelHouse($aid,$webid)  
       {  
		    global $dsql;
		    $str="";
			$hotelsql="select * from #@__hotel_room where hotelid={$aid} and webid=$webid order by displayorder asc limit 0,2"; 
			$dsql->SetQuery($hotelsql);
			//$ssql=mysql_query($hotelsql);

			$dsql->Execute("hlist");
			while($hotellist=$dsql->GetArray("hlist"))
                {
					if($hotellist['breakfirst']==0)
				        $hotellist['breakfirst']='不含';
				    else if($hotellist['breakfirst']==1)
				        $hotellist['breakfirst']='含';
				    else if($hotellist['breakfirst']==2)
				        $hotellist['breakfirst']='双早';
				    else if($hotellist['breakfirst']==3)
				        $hotellist['breakfirst']='单早';
					else if($hotellist['breakfirst']==4)
				        $hotellist['breakfirst']='早餐';
				    else if($hotellist['breakfirst']==5)
				        $hotellist['breakfirst']='早晚餐';
				    else if($hotellist['breakfirst']==6)
				        $hotellist['breakfirst']='三餐';
					else if($hotellist['breakfirst']==7)
				        $hotellist['breakfirst']='一价全包';
				    else if($hotellist['breakfirst']==8)
				        $hotellist['breakfirst']='用晚含早';
					
					
					if($hotellist['computer']==0)
					    $hotellist['computer']='无';
				    else if($hotellist['computer'])
					    $hotellist['computer']='含';
				    else if($hotellist['computer'])
					    $hotellist['computer']='有线';
				    else if($hotellist['computer'])
					    $hotellist['computer']='无线';
					$roomname=getRoomName($hotellist);	
					$str.=" <li class=\"hotel_fl_bz\"><b>{$roomname}</b><span class=\"h_jg_1\">￥{$hotellist['sellprice']}</span><span class=\"h_jg_2\">￥{$hotellist['price']}</span><span class=\"h_jg_3\">{$hotellist['breakfirst']}</span><span class=\"h_jg_3\">{$hotellist['computer']}</span><span><a href=\"" . GetWebURLByWebid($webid) . "/hotels/booking_{$aid}_{$hotellist['id']}.html\"><img src=\"../templets/standard/images/yd_an.gif\" /></a></span></li>";
				}
		    return $str;
		}  
}

if(!function_exists("get_order_sn"))
{
  function get_order_sn($kind)
  {
	  /* 选择一个随机的方案 */
	  mt_srand((double) microtime() * 1000000);
  
	  return $kind.date('md') . str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
  }
}

/*
 *获取网站js文件
 *$file  js文件
 *方法：{sline:php}GetScript('**.js,**.js','');{/sline:php}
 */
if ( ! function_exists('GetScript'))
{
	function GetScript($file,$version='')
	{
		$tskin = substr($GLOBALS['cfg_templets_skin'],1);//当前
		$default = '/templets/smore';//默认
		$filelist = analyzeFile('js',$file);
        $version = !empty($version) ? '?v='.$version : '';
		if(!empty($filelist['has']))
		{
			//$script = "<script language=\"javascript\" src=\"{$GLOBALS['cfg_cmsurl']}/min/index.php?b={$tskin}/js&f={$filelist['has']}\" type=\"text/javascript\"></script>";
            $hasfile = explode(',',$filelist['has']);
            foreach($hasfile as $file)
            {
                $script .= "<script type=\"text/javascript\" language=\"javascript\" src=\"".$GLOBALS['cfg_templets_skin']."/js/".$file.$version.
                    "\"></script>\r\n";
            }

		}
		if(!empty($filelist['no']))
		{
		   //$script .= "<script language=\"javascript\" src=\"{$GLOBALS['cfg_cmsurl']}/min/index.php?b={$default}/js&f={$filelist['no']}\" type=\"text/javascript\"></script>";
            $nofile = explode(',',$filelist['no']);
            foreach($nofile as $file)
            {

                $script .= "<script type=\"text/javascript\" language=\"javascript\" src=\"".$default."/js/".$file.$version.
                    "\"></script>\r\n";
            }

		}
		
		
	/*	$files=explode(',',$file);
		for($i=0;isset($files[$i]);$i++)
		{
			$Script .= "<script type=\"text/javascript\" language=\"javascript\" src=\"".$GLOBALS['cfg_templets_skin']."/js/".$files[$i]."?v=".$version.
			           "\"></script>\r\n";
		}*/
		echo $script;
	}
}

/*
 *获取网站css文件
 *$file  css文件
 *方法：{sline:php}GetCss('**.css,**.css','');{/sline:php}
 */
if ( ! function_exists('GetCss'))
{
	function GetCss($file,$version='')
	{
		$tskin = substr($GLOBALS['cfg_templets_skin'],1);
		$default = '/templets/smore';//默认
		
		$filelist = analyzeFile('css',$file);
		/*if(!empty($filelist['has']))
		{
			$css.= "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$GLOBALS['cfg_cmsurl']}/min/index.php?b={$tskin}/css&f={$filelist['has']}\" />";
		}
		if(!empty($filelist['no']))
		{
		    $css.= "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$GLOBALS['cfg_cmsurl']}/min/index.php?b={$default}/css&f={$filelist['no']}\" />";
		}*/
        $version = !empty($version) ? '?v='.$version : '';
        if(!empty($filelist['has']))
        {
            $hasfile = explode(',',$filelist['has']);
            foreach($hasfile as $file)
            {
                $css .= "<link href=\"" . $GLOBALS['cfg_templets_skin'] . "/css/" . $file . $version .
                    "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\r\n";
            }
        }
        if(!empty($filelist['no']))
        {
            $nofile = explode(',',$filelist['no']);
            foreach($nofile as $file)
            {
                $css .= "<link href=\"" . $default . "/css/" . $file .$version .
                    "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\r\n";
            }
        }

		/*$files=explode(',',$file);
		for($i=0;isset($files[$i]);$i++)
		{
			$Css .= "<link href=\"" . $GLOBALS['cfg_templets_skin'] . "/css/" . $files[$i] . "?v=" . $version .
			        "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\r\n";
		}*/
		echo $css;
	}
}
/*
 *分析加载的文件在当前模板目录是否存在,不存在则直接从默认模板加载.
 *$filelist  文件列表
 *$type   js/css
 *方法：{sline:php}GetCss('**.css,**.css','');{/sline:php}
 */
if( ! function_exists('analyzeFile'))
{
	function analyzeFile($type,$filelist)
	{
		$filearr = explode(',',$filelist);
		
		$has = array();
		$no  = array();
		$out = array();
		if($type == 'js')
		{
			$path = $GLOBALS['cfg_basedir'].$GLOBALS['cfg_templets_skin'].'/js/';
		}
		else
		{
			$path = $GLOBALS['cfg_basedir'].$GLOBALS['cfg_templets_skin'].'/css/';
		}
		foreach($filearr as $file)
		{
			  $f = $path.$file;
			  if(file_exists($f))
			  {
				   array_push($has,$file);
			  }
			  else
			  {
				   array_push($no,$file);  
			  }
		}
		$out['has'] = implode(',',$has);
		$out['no'] = !empty($no) ? implode(',',$no) : '';

		return $out;
		
	}
	
}



//根据webid获取URL
function GetWebURLByWebid($webid)
{
  global $dsql;
  $root='';
  $sql="select weburl from #@__weblist where webid='$webid'";
  $row=$dsql->GetOne($sql);
  if(is_array($row))
  {
    $root=$row['weburl'];
  }
  return $root;
}

/**
 * 文章获取Aid功能函数
 *
 * @param     string  $tablename  表名
 * @return    int aid
 */
//获取上一篇文章aid

if(!function_exists('GetLastAid'))
{
    function GetLastAid($tablename,$webid=0)
	{
	   global $dsql,$sys_webid;
	   $aid=1;//初始值
	   $sql="select max(aid) as aid from {$tablename} where webid=$webid order by id desc";
	   $row=$dsql->GetOne($sql);
	   if(is_array($row))
	   {
	      $aid=$row['aid']+1;
	   }
	   return $aid;
	
	}
}
//去除php数组空值
if(!function_exists('RemoveEmpty'))
{
  function RemoveEmpty($arr)
  {
	  $newarr=array_diff($arr,array(null,'null','',' '));
	  return $newarr;
  }
}

//获取条数
function getLiCount($kindid)
{
	global $dsql;
	$sql="select count(*) as num from #@__line where FIND_IN_SET($kindid,kindlist)";
	$row=$dsql->GetOne($sql);
	if($row['num']==0) $num=0;
	else $num=$row['num'];
	return $num;
	
	
}

//检测是否存在搜索页面用

function CheckExistDest($typeid,$kindid)
{
   global $dsql;
   $flag=0;
   $channeltable=array("1"=>"#@__line","2"=>"#@__hotel","3"=>"#@__car","4"=>"#@__article","5"=>"#@__spot","6"=>"#@__photo","10"=>"#@__leave");
   $table=$channeltable[$typeid];
   $hidden=$typeid<=3 ? 'ishidden=0 and ' : '';
   $sql="select count(*) as num from {$table} where {$hidden} FIND_IN_SET($kindid,kindlist)";
   
   $row=$dsql->GetOne($sql);
   if($row['num']>0)
   $flag=1;	
   return $flag;
	
}

//检测属性是否存值在搜索页面用

function CheckExistAttr($typeid,$kindid,$attrid)
{
   global $dsql;
   $flag=0;
   $channeltable=array("1"=>"#@__line","2"=>"#@__hotel","3"=>"#@__car","4"=>"#@__article","5"=>"#@__spot","6"=>"#@__photo","10"=>"#@__leave");
   $table=$channeltable[$typeid];
   if($kindid != 0)
   {
       $sql="select 1 from {$table} where FIND_IN_SET($kindid,kindlist) and FIND_IN_SET($attrid,attrid) limit 1";
   }
   else
   {
	   $sql="select 1 from {$table} where FIND_IN_SET($attrid,attrid) limit 1";
   }
   //echo $sql;
   $row=$dsql->ExecuteNoneQuery2($sql);
   if($row)
   $flag=1;	
   return $flag;
	
}


//检测属性是否存值在搜索页面用

function CheckExistAttrGuide($typeid,$destid,$attrid)
{
   global $dsql;
   $flag=0;
   $channeltable=array("1"=>"#@__line","2"=>"#@__hotel","3"=>"#@__car","4"=>"#@__article","5"=>"#@__spot","6"=>"#@__photo","10"=>"#@__leave");
   $table=$channeltable[$typeid];
   if($destid != 0)
   {
       $sql="select 1 from {$table} where FIND_IN_SET($destid,kindlist) and FIND_IN_SET($attrid,attrid) limit 1";
   }
   else
   {
	   $sql="select 1 from {$table} where FIND_IN_SET($attrid,attrid) limit 1";
   }
   //echo $sql;
   $row=$dsql->ExecuteNoneQuery2($sql);
   if($row)
   $flag=1;	
   return $flag;
	
}

//根据kindid获取线路数量
function getKindLineNum($kindid)
{
	global $dsql;
	$sql = "select count(*) as dd from #@__line where ishidden='0' and FIND_IN_SET($kindid,kindlist)";
	$row = $dsql->GetOne($sql);
	return $row['dd'];
}

//取kindlist最大值
function array_remove_value($kindlist)
{
	global $dsql;
	$arr = explode(",", $kindlist);
	if(count($arr)==1)
             return $kindlist;

	$arr_new = array();
	foreach($arr AS $val)
	{
		if($val != '36' && $val != '37')
		{
			$is_arr=$dsql->GetOne("select id from #@__destinations where id='$val'");
			if(!empty($is_arr))
			$arr_new[] = $val;
		}
	}
	return @max($arr_new);
}

//获取父级目的地链接信息.
function get_par_value($kindlist, $typeid)
{
	global $dsql;
	$arr = array('1'=>'线路','2'=>'酒店','3'=>'租车','4'=>'攻略','5'=>'景点','6'=>'相册');
	$arrType = array('1'=>'lines','2'=>'hotels','3'=>'cars','4'=>'raiders','5'=>'spots','6'=>'photos');
	$kid = array_remove_value($kindlist);
	$sql = "select id,kindname,pinyin from #@__destinations where isopen='1' and id='$kid'";

	$pname = $dsql->GetOne($sql);
	if(is_array($pname))
	{
		$py = !empty($pname['pinyin']) ? $pname['pinyin'] : $pname['id'];
        $str = ' &raquo; <a href="' . $GLOBALS['cfg_cmsurl'] . '/' . $arrType[$typeid] . '/' . $py.'/">' . $pname['kindname'] . $arr[$typeid] . '</a>';
	}
	else
	{
		$str = '';
	}
	
	return $str;
}
//获取上级导航信息

function getTopNavDest($kindlist)
{
	global $dsql,$destnavid,$destnavname,$destnavpy;
	$maxid = array_remove_value($kindlist);
	$sql = "select id,pid,pinyin,kindname,istopnav from #@__destinations where id = '$maxid'";

	
	$row = $dsql->GetOne($sql);
    $k = 1;
    while($row['istopnav'] == 0 && $row['pid'] != 0)
    {
        $sql = "select id,pid,pinyin,kindname,istopnav from #@__destinations where id = '{$row['pid']}'";
        $row = $dsql->GetOne($sql);
        $k++;
        if($k >4)
        {
            break;
        }

    }
    //$sql = "select id,pid,pinyin,kindname,istopnav from #@__destinations where id = '{$row['pid']}'";
    //$row = $dsql->GetOne($sql);

    //$sql = "select id,pid,pinyin,kindname,istopnav from #@__destinations where id = '{$row['pid']}'";
    //$row = $dsql->GetOne($sql);
	$destnavid = $row['istopnav'] !=0 ? $row['id'] : 0;
	$destnavname = $row['istopnav'] !=0 ? $row['kindname'] : 0;
	$destnavpy = $row['istopnav'] !=0 ? $row['pinyin'] : '';
	
	//return array($destid,$kindname);
	
	
}

function getTip($helpid)
{
	$str = '<script type="text/javascript">';
	$str .= 'var murl = "' . $GLOBALS['cfg_basehost'] . $GLOBALS['cfg_cmsurl'] . '";';
	$str .= 'Common.dom.getTip(' . $helpid . ');';
	$str .= '</script>';
	echo $str;
}

function getIcon($aid)
{
	global $dsql;
	$sql = "select lineicon from #@__line where aid='$aid' and webid='0'";
	$icon = $dsql->GetOne($sql);
	
	$icoArr = explode(',', $icon['lineicon']);
	$icostr = '';
	foreach($icoArr AS $ico)
	{
		if(!empty($ico))
		{
			$is = $dsql->GetOne("select * from #@__icon where id='$ico' and webid='0'");
			$icostr .= '<img src="' . $is['picurl'] . '" />';
		}
		else
		{
			$icostr .= '';
		}
	}
	return $icostr;
}

//根据attrid获取线路数量
function getAttrLineNum($attrid)
{
	global $dsql;
	$destid = $GLOBALS['destid'];
	$sql = "select count(*) as dd from #@__line where ishidden='0' and FIND_IN_SET($attrid,attrid) and FIND_IN_SET($destid,kindlist)";
	$row = $dsql->GetOne($sql);
	return $row['dd'];
}

function getPriceLineNum($max, $min)
{
	global $dsql;
	$destid = $GLOBALS['destid'];
	$sql = "select count(*) as dd from #@__line where ishidden='0' and lineprice between '$min' and '$max' and FIND_IN_SET($destid,kindlist)";
	$row = $dsql->GetOne($sql);
	return $row['dd'];
}

function getDayLineNum($day)
{
	global $dsql;
	$destid = $GLOBALS['destid'];
	$sql = "select count(*) as dd from #@__line where ishidden='0' and lineday='$day' and FIND_IN_SET($destid,kindlist)";
	$row = $dsql->GetOne($sql);
	return $row['dd'];
}

//获取组合房型名称
function getRoomName($arr)
{
	global $dsql;
	if(!empty($arr['roomids']) && !empty($arr['nightdays']))
	{
	  $ridarr=explode(',',$arr['roomids']);
	  
	  $ndayarr=explode(',',$arr['nightdays']);
	  for($i=0;isset($ridarr[$i]);$i++)
	  {
		  $sql="select chname,enname from #@__hotelroom where id='{$ridarr[$i]}'";
		  
		  $row=$dsql->GetOne($sql);
		  $flag=$i!=0 ? "+" : '';
		  
		  $roomname.=$flag.$ndayarr[$i]."晚".$row['chname'].$row['enname'];	
	  }
	  $roomname=empty($roomname) ? $arr['roomname'] : $roomname;
	
	}
	else
	{
	   $roomname=$arr['roomname'];	
	}
	return $roomname;
	
}

//获取线路当前日期起2月内最低报价.
function getLineRealPrice($aid,$webid)
{
    $price = 0 ;
    if($webid!=0)
    {
       $price = getOldRealPrice($aid,$webid);
    }
    else
    {
       $price = getNewRealPrice($aid,$webid);
    }
    return $price;
	
}
//获取新版报价最低报价
function getNewRealPrice($aid,$webid)
{
    global $dsql;
    Helper_Archive::loadModule('common');
    $model = new CommonModule('#@__line');
    $lineid = $model->getField('id',"aid='$aid' and webid='$webid'");
    $time = time();
    $sql = "select min(adultprice) as price from #@__line_suit_price where lineid='$lineid' and day > '$time' limit 60";
    $row = $dsql->GetOne($sql);
    return $row['price'] ? $row['price'] : 0;
}

//获取车子新版最低报价
function getCarNewRealPrice($aid,$webid,$carid=0,$suitid=0)
{
    global $dsql;
    Helper_Archive::loadModule('common');
    $model = new CommonModule('#@__car');
    if(empty($carid))
    {
        $carid = $model->getField('id',"aid='$aid' and webid='$webid'");
    }
    $w = $suitid ? " and suitid ='{$suitid}' " : ''; //是否按套餐读取
    $time = time();
    if($suitid) //如果指定了套餐id
    {
        $sql = "select min(adultprice) as price from #@__car_suit_price where carid='$carid' and day > '$time' {$w} limit 60";
    }
    else
    {
        $suitidlist = implode(',',getCarSuitIdList($carid));
        $w =empty($suitidlist)?'':" and suitid in ($suitidlist)";
        $sql = "select min(adultprice) as price from #@__car_suit_price where carid='$carid' and day > '$time' {$w} limit 60";
    }



    $row = $dsql->GetOne($sql);
    return $row['price'] ? $row['price'] : 0;
}

//获取车子套餐id列表
function getCarSuitIdList($carid)
{
    Helper_Archive::loadModule('common');
    $model = new CommonModule('#@__car_suit');
    $arr = $model->getAll('id',"carid='$carid'");
    $out = array();
    foreach($arr as $row)
    {
       array_push($out,$row['id']);
    }
    return $out;
}

//获取老版报价方案(子站报价)
function getOldRealPrice($aid,$webid)
{
    global $dsql,$sys_webid;
    $year=date('Y');
    $thismonth=date('m');
    $nextmonth=date('m',strtotime('+1 month'));
    $thirdmonth=date('m',strtotime('+2 month'));
    if($nextmonth=='01')
    {
        $nextyear=$year+1;
    }
    $nextyear=$nextmonth=='01' ? $year+1 : $year;
    $day=date('d');
    $sql="select price from #@__line_month where lineid='$aid' and webid='$webid' and monthnum='{$thismonth}' and yearnum='{$year}'";
    $arr=$dsql->getAll($sql);
    $minarr=array();
    $k=1;
    foreach($arr as $row)
    {
        $priceArr = explode('||', $row['price']);
        for($i = 0; isset($priceArr[$i]); $i++)
        {
            $price = explode(' ', $priceArr[$i]);
            if(intval($price[0])>$day)
            {
                if($price[1]!=0)
                {
                    array_push($minarr,$price[1]);
                }
                $k++;
            }

        }
    }

    $sql="select price from #@__line_month where lineid='$aid' and webid='$webid' and (monthnum='{$nextmonth}' or monthnum='{$thirdmonth}') and yearnum='{$nextyear}'";
    $arr=$dsql->getAll($sql);
    $minarr2=array();

    foreach($arr as $row)
    {
        $priceArr = explode('||', $row['price']);
        for($i = 0; isset($priceArr[$i]); $i++)
        {
            $price = explode(' ', $priceArr[$i]);
            if($k<60)
            {
                if($price[1]!=0)
                {
                    array_push($minarr2,$price[1]);
                }
                $k++;
            }

        }
    }
    $arr=array_merge($minarr,$minarr2);

    $min=@min($arr);

    return $min;
}

function getTPrcie($day, $tid, $year, $month)
{
	global $dsql;
	$sql = "select {$day} from #@__ticket_month where ticketid='$tid' and yearnum='$year' and monthnum='$month'";
	$row = $dsql->GetOne($sql);
	return empty($row[$day]) ? 0 : $row[$day];
}
function delThumImgs($filepath,$filearr)
{      
          foreach($filearr as $file)
		  {
	       $filepath2=str_replace('litimg',$file,$filepath);
		    @unlink($filepath2);
		  }
		  foreach($filearr as $file)
		  {
	       $filepath2=str_replace('allimg',$file,$filepath);
		    @unlink($filepath2);
		  }
	
}

//返回小图
function getPicByName($fileurl,$name)
{
	if(empty($fileurl))
	{
	   $urlpath = empty($GLOBALS['cfg_df_img']) ? $GLOBALS['cfg_cmsurl']."/templets/default/images/pic_tem.gif"	:$GLOBALS['cfg_df_img'];
	}
    else
	{
	  $urlpath=str_replace('litimg',$name,$fileurl);
	  $urlpath=str_replace('allimg',$name,$fileurl);
	  $path=SLINEROOT.$urlpath;
	
	 if(!file_exists($path))
	    $urlpath = $fileurl;
	}
	
	return $urlpath;	
	
}

//获取编号,共6位,不足6位前面被0
function getSeries($id,$prefix)
{
  /* $len=strlen($id);
   $needlen=6-$len;
   if($needlen==5)$s='00000';
   else if($needlen==4)$s='0000';
   else if($needlen==3)$s='000';
   else if($needlen==2)$s='00';
   else if($needlen==1)$s='0';
   $out=$prefix.$s."{$id}";
   return $out;*/
    $ar = array(
        '01'=>'A',
        '02'=>'B',
        '05'=>'C',
        '03'=>'D',
        '08'=>'E',
        '13'=>'G'
    );
    $prefix = $ar[$prefix];
    $len=strlen($id);
    $needlen=4-$len;
    if($needlen==3)$s='000';
    else if($needlen==2)$s='00';
    else if($needlen==1)$s='0';

    $out=$prefix.$s."{$id}";
    return $out;
	
}

//跳转404页面
function head404()
{
	header("HTTP/1.1 404 Not Found");
    header("Status: 404 Not Found");
    //header("Location: ".$GLOBALS['cfg_basehost']."/404.php");
    echo "<script>window.location.href='".$GLOBALS['cfg_basehost']."/404.php'</script>";
    exit; 
	
}
//跳转301
function head301($url)
{
	header( "HTTP/1.1 301 Moved Permanently" );    
    header( "Location: $url" );
	exit();
	
}



//更新访问次数
//访问数量
function updateVisit($aid,$typeid)
{
	global $dsql;
	$table=array(
	        '1'=>'#@__line',
			'2'=>'#@__hotel',
			'3'=>'#@__car',
			'4'=>'#@__article',
			'5'=>'#@__spot',
			'6'=>'#@__photo',
			'8'=>'#@__visa',
			'13'=>'#@__tuan'
     );
	 $tablename = $table[$typeid];
	$update="update {$tablename} set shownum=shownum+1 where webid=0 and aid=$aid";
    $dsql->ExecuteNoneQuery($update);//更新访问次数.
}
//获取随机值(如果参数为0或者空,则读取随机值)
function getRandom($value='')
{
   return empty($value) ? mt_rand(10,200) : $value;	
}

//出发城市
function getStartCityName($id)
{
	global $dsql;
	$sql = "SELECT cityname FROM #@__startplace WHERE id='$id'";
	$row = $dsql->GetOne($sql);
	return $row['cityname'];
	
}
/**
     *  获取资源地址
     *
     * @access    public
     * @return    
     */
function getUploadFileUrl($url,$fromdefault=false)
{
	global $dsql,$cfg_basedir;

    if(strpos($url,'http')!==false) //如果包含http则直接返回
    {
        return $url;
    }

	$sql = "SELECT weburl FROM #@__weblist WHERE webid = 0";
	$row = $dsql->GetOne($sql);
	if(!$fromdefault) //获取默认图片函数调用
	{
		
		$fileurl = '';

		if(file_exists($cfg_basedir.$url) && !empty($url)) //先判断传入进来的图片是否存在.
		{
			$fileurl = $row['weburl'].$url;
			
		}
		else //如果不存在则遍历各种规格大小文件,找到为止
		{
			$ar = array('litimg','lit240','lit160','allimg');
            $picArr = explode('/',$url);
			foreach($ar as $p)
			{   
				$picArr[3] = $p;
				$url =  implode('/',$picArr);
				if(file_exists($cfg_basedir.$url) && !empty($url))
				{
					$fileurl = $row['weburl'].$url;
					break;
					
				}
				
			}
			
		}
		
		$fileurl = empty($fileurl) ? getDefaultImage() : $fileurl; //如果都没有找到对应图片,则返回默认图片.
	   
	}
	else
	{
	    $fileurl = $row['weburl'].$url;	
	}
	
	return $fileurl;
	
}
 /**
     *  获取默认图片
     *
     * @access    public
     * @return    
     */
function getDefaultImage()
{

	return !empty($GLOBALS['cfg_df_img']) ? getUploadFileUrl($GLOBALS['cfg_df_img'],true) : "/templets/smore/images/pic_tem.jpg";
	
}
/**
     *  Google浏览器调试接口
     *
     * @access    public
     * @return    
     */
function debug($log)
{
   
   //include(SLINEINC.'/chromephp.class.php');
 
   ChromePhp::log($log);	
}
//获取属性查询条件

function getAttWhere($attlist)
{
   $arr=RemoveEmpty(explode('_',$attlist));
   foreach($arr as $value)
   {
	  if($value!=0)
	  {
	    $str.=" and FIND_IN_SET($value,a.attrid) ";
	  }
   }
   return $str;	
	
}

//获取总数量.
function getTotalNumber($sql)
{
	global $dsql;
	$totalpage=0;
	$tsql="select count(*) as dd ".strchr($sql," from");
	$tsql=str_replace(strchr($tsql,"order by"),'', $tsql);//去掉order by
	$tsql=str_replace(strchr($tsql,"limit"),'', $tsql);//去掉order by
    $row = $dsql->GetOne($tsql);
	
	if(is_array($row))
	{
	  $totalresult= $row['dd'];
	 
	}
		
	return !empty($totalresult) ? $totalresult : 0;
}

//查询表信息
if(!function_exists('getInfo'))
{
  function getInfo($table,$where,$fields='*')
  {
	  global $dsql;
	  $sql="select {$fields} from {$table} {$where}";
	  $row=$dsql->GetOne($sql);
	  return $row;
  }
}

class Helper_Archive{
	
	
	//加载css
    public static function getCss($file,$version='')
	{
		GetCss($file,$version);
		
	}
	//加载js
	public static function getScript($file,$version='')
	{
	   GetScript($file,$version);	
	}
	//json化字符，一般ajax使用
	public static function json($object)
	{
	   return json_encode($object);	
	}
	//拆分属性，获取查询条件
	public static function getAttrWhere($attrid)
	{
	   return getAttWhere($attrid);	
	}
	//判断目的地是否有下级
	public static function checkDestHasChild($destid)
	{
		$sql = "select 1 from #@__destinations where pid='$destid' and isopen=1 limit 1";
		
		$flag =$GLOBALS['dsql']->ExecuteNoneQuery2($sql);
		return $flag;
		
	}

	//获取目的地的所有父目的地，并从大到小排列 
	public static function getParentDestNav($destid)
    {
	  Helper_Archive::loadModule('common');
	  if(empty($destid))
		 return null;
	   $_destModule=new CommonModule('sline_destinations');
	  
	   $loopid=$destid;
	   $result=array();
	   while(1)
	   {
		 $pid=$_destModule->getField('pid',"id='$loopid'");	 
		 $pinfo=$_destModule->getOne("id='$pid'");
		 if(empty($pinfo))
			 break;
		 else
			{
			   $result[]=$pinfo;
			   $loopid=$pinfo['id'];
			}
	   }
	   $count=count($result);
	   for($i=$count-1;$i>=0;$i--)
	   {
		   $newresult[]=$result[$i];
	   }
	   $destinfo=$_destModule->getOne("id='$destid'");
	   $newresult[]=$destinfo;
	   return $newresult;      
    }
	//加载数据库模型
	public static function loadModule($name)
	{
		include_once(SLINEINC.'/'.'module'.'/'.$name.'.md.php');
	}
	//前台消息提示
	
	/*-
	   $msg:提示文本
	   $url:要跳转的url
	   $messagetype:消息类开,1,成功,0失败
	   $waittime:显示时间
	-*/

	public static function showMsg($msg,$url,$messagetype,$waittime=5)
	{
		$pv = new View(0);
		$pv->Fields['image'] = $messagetype == 1 ? $GLOBALS['cfg_templets_skin'].'/images/cg_pic.jpg' : $GLOBALS['cfg_templets_skin'].'/images/eror_pic.jpg';
		$pv->Fields['jumpurl'] = $url=='-1' ? "javascript:history.go(-1);" : $url;
		$pv->Fields['message'] = $msg;
		$pv->Fields['waittime'] = $waittime;
		$pv->SetTemplet(SLINETEMPLATE ."/".$GLOBALS['cfg_df_style'] ."/" ."public/" ."msg.htm");
		$pv->Display();
		exit();
		
	   
		
	}
	//根据当前目的地列表的上一级目的地.
	public static function getBelongDestName($kindlist)
    {
	  global $dsql;
	  $kindid = array_remove_value($kindlist);
	  
	  $sql = "select kindname from #@__destinations where id='$kindid'";
	  $row = $dsql->GetOne($sql);
	  return isset($row['kindname']) ? $row['kindname'] : ''; 
    }
	
    public static function getDestName($kindlist)
    {
	    return self::getBelongDestName($kindlist);
    }
	public static function getDestPinyin($destid)
	{
	   global $dsql;
	   $sql = "select pinyin from #@__destinations where id='$destid' and isopen='1'";
	   $row = $dsql->GetOne($sql);
	   return !empty($row['pinyin']) ? $row['pinyin'] : $destid;
	}
	
	//在线支付
    /*-
	   $ordersn:订单编号
	   $subject:商品名称
	   $price:总价
	   $showurl:商品url
	-*/

   public static function payOnline($ordersn,$subject,$price,$paytype,$showurl='',$extra_para='',$widbody='')
   {
	   
	if($paytype==1)
	{      
		if(!empty($GLOBALS['cfg_alipay_signtype']) 
		   && !empty($GLOBALS['cfg_alipay_account']) 
		   && !empty($GLOBALS['cfg_alipay_pid'])
		   && !empty($GLOBALS['cfg_alipay_key'])
		   )
		{
		   $payurl=$GLOBALS['cfg_basehost'].'/alipay/'.$GLOBALS['cfg_alipay_signtype'].'/alipayapi.php';
		   $html="<form method='post' action='{$payurl}' name='alipayfrm'>";
		   $html.='<input type="hidden" name="ordersn" value="'.$ordersn.'">';
		   $html.='<input type="hidden" name="subject" value="'.$subject.'">';
		   $html.='<input type="hidden" name="price" value="'.$price.'">';
		   $html.='<input type="hidden" name="widbody" value="'.$widbody.'">';
		   $html.='<input type="hidden" name="showurl" value="'.$showurl.'">';
		   $html.='<input type="hidden" name="extra_common_param" value="'.$extra_para.'">';
		   
		   $html.='</form>';
		   $html.="<script>document.forms['alipayfrm'].submit();</script>";
		   return $html;
		
		}
	}
	else if($paytype==2)  //快钱支付
	{
		$payurl=$GLOBALS['cfg_basehost'].'/kuaiqian/send.php';
		$showurl=$GLOBALS['cfg_basehost'].'/kuaiqian/receive.php';
		   $html="<form method='post' action='{$payurl}' name='billfrm'>";
		   $html.='<input type="hidden" name="ordersn" value="'.$ordersn.'">';
		   $html.='<input type="hidden" name="subject" value="'.$subject.'">';
		   $html.='<input type="hidden" name="price" value="'.$price.'">';
		   $html.='<input type="hidden" name="showurl" value="'.$showurl.'">';

		   $html.='</form>';
		   $html.="<script>document.forms['billfrm'].submit();</script>";
		   return $html;
	}
	else if($paytype==3)
	{
		$payurl=$GLOBALS['cfg_basehost'].'/huicao/send.php';
		$showurl=$GLOBALS['cfg_basehost'].'/huicao/receive.php';
		   $html="<form method='post' action='{$payurl}' name='billfrm'>";
		   $html.='<input type="hidden" name="ordersn" value="'.$ordersn.'">';
		   $html.='<input type="hidden" name="subject" value="'.$subject.'">';
		   $html.='<input type="hidden" name="price" value="'.$price.'">';
		   $html.='<input type="hidden" name="showurl" value="'.$showurl.'">';

		   $html.='</form>';
		   $html.="<script>document.forms['billfrm'].submit();</script>";
		   return $html;
		
	}
    else if($paytype==4) //银联支付
    {
        $payurl=$GLOBALS['cfg_basehost'].'/yinlian/front.php';
        $html="<form method='post' action='{$payurl}' name='yinlianfrm'>";
        $html.='<input type="hidden" name="ordersn" value="'.$ordersn.'">';
        $html.='<input type="hidden" name="subject" value="'.$subject.'">';
        $html.='<input type="hidden" name="price" value="'.$price.'">';
        $html.='<input type="hidden" name="showurl" value="'.$showurl.'">';

        $html.='</form>';
        $html.="<script>document.forms['yinlianfrm'].submit();</script>";
        return $html;

    }

}
public static function getUrlStatic($val=null,$key=null,$exclude=null,$arr,$url,$table,$usemdd=1)
{
    global $dsql;

    $str = null;

    if($key == 'dest_id') //生成只有目的地的链接
    {
        if($val == 'all') //全部
        {
            return $url.'all/';
        }
        else
        {
            $py = Helper_Archive::getDestPinyin($val);

            $py = !empty($py) ? $py : $val;

            return $url.$py.'/';
        }
    }

     if($usemdd)
     {
         $pinyin = Helper_Archive::getDestPinyin($GLOBALS['dest_id']);

         $pinyin = !empty($pinyin) ? $pinyin : 'all';

         $str = $url.$pinyin.'-';
     }
     else
     {
         $str = $url;
     }


	//将参数名不为$key，且不是attrid的参数生成参数字符串

	foreach($arr as $v)
	{

		if($v!='attrid')
		{

                if($key != $v) //如果非当前参数
                {
                    $str.=!empty($_REQUEST[$v])?"{$_REQUEST[$v]}-":'0-';
                }
                else
                {
                    $str.= $val.'-'; //当前值
                }

		}
	}

	if(!empty($_REQUEST['attrid']))
    {
        $orgattr_arr=explode('_',$_REQUEST['attrid']);
    }


	if($key=='attrid') //当前参数
	{

        if(empty($_REQUEST['attrid']))
	      $str.=!empty($val) ? $val: '0'; //如果没有选择其它属性.

	   else
	   {
		  //获取$val的兄弟id，结果放在$attr_value里
	      $temp_result=$dsql->GetOne("select pid from $table where id=$val");
		  $temp_attrid=$dsql->getAll("select id from $table where pid={$temp_result['pid']}");
          foreach($temp_attrid as $ke=>$va)
		  {
			 $attr_value[]=$va['id'];
		  }

		  //判断已存在的参数里是否包含$attr_value里的值，有则删除
		  foreach($orgattr_arr as $k=>$v)
		  {
			  if(empty($v))
			    unset($orgattr_arr[$k]);
			  if(in_array($v,$attr_value))
			  {
				 unset($orgattr_arr[$k]);
				 break;
			  }
		  }

		  $orgattr_arr[]=$val; //添加当前值
          if($val==0)unset($orgattr_arr);
		  $str.=!empty($orgattr_arr) ? implode('_',$orgattr_arr):'0';
	   }
	}
	else
	{
		//排除组id下的所有子id,用于显示组的全部
		if(!empty($exclude))
		{
			$has_exclude=$dsql->getOne("select count(*) as num from $table where id='$exclude'");
			
			if($has_exclude['num']<=0)
			{
				$_exclude=$dsql->getOne("select id from $table where attrname='$exclude'");
				$exclude=$_exclude['id'];
			}
			foreach($orgattr_arr as $k=>$v)
		  	{
			    $one_arr=$dsql->getOne("select count(*) as num from $table where id='$v' and pid='$exclude'");
				if($one_arr['num']>0)
				 {
					 unset($orgattr_arr[$k]);
				 }
			}	
		}
		$orgattr_arr=array_diff($orgattr_arr,array('',0)); 
		$str.=!empty($orgattr_arr) ? implode('_',$orgattr_arr):'0';
		//$str.=!empty($key)&&!empty($val)?$key.'='.$val:''; //将key和$val加入的参数
		
	}
	//$url.=empty($str)?'':'?'.trim($str,'&');
       $url = $str;
	return $url;
}
	
public static function getUrl($val=null,$key=null,$exclude=null,$arr,$url,$table)
   {
    global $dsql;
	
	//将参数名不为$key，且不是attrid的参数生成参数字符串
	foreach($arr as $k=>$v)
	{
		if($v!=$key&&$v!='attrid')
		{
		   $str.=!empty($_REQUEST[$v])?"$v={$_REQUEST[$v]}&":'';
		}
	}
	
    $orgattr_arr=explode(',',$_REQUEST['attrid']);
	if($key=='attrid')
	{
	   if(empty($_REQUEST['attrid']))
	      $str.=!empty($val)?'attrid='.$val:'';
	   else
	   {
		  //获取$val的兄弟id，结果放在$attr_value里 	
	      $temp_result=$dsql->GetOne("select pid from $table where id=$val");	
		  $temp_attrid=$dsql->getAll("select id from $table where pid={$temp_result['pid']}");
          foreach($temp_attrid as $ke=>$va)
		  {
			 $attr_value[]=$va['id'];
		  }
		   
		  //判断已存在的参数里是否包含$attr_value里的值，有则删除
		  foreach($orgattr_arr as $k=>$v)
		  {
			  if(empty($v))
			    unset($orgattr_arr[$k]);
			  if(in_array($v,$attr_value))
			  {
				 unset($orgattr_arr[$k]);
				 break;   
			  }
		  }
		  $orgattr_arr[]=$val;
		  $str.=!empty($orgattr_arr)?'attrid='.implode(',',$orgattr_arr):''; 
	   }
	}
	else
	{
		//排除组id下的所有子id,用于显示组的全部
		if(!empty($exclude))
		{
			$has_exclude=$dsql->getOne("select count(*) as num from $table where id='$exclude'");
			
			if($has_exclude['num']<=0)
			{
				$_exclude=$dsql->getOne("select id from $table where attrname='$exclude'");
				$exclude=$_exclude['id'];
			}
			foreach($orgattr_arr as $k=>$v)
		  	{
			    $one_arr=$dsql->getOne("select count(*) as num from $table where id='$v' and pid='$exclude'");
				if($one_arr['num']>0)
				 {
					 unset($orgattr_arr[$k]);
				 }
			}	
		}
		$orgattr_arr=array_diff($orgattr_arr,array('',0)); 
		$str.=!empty($orgattr_arr)?'attrid='.implode(',',$orgattr_arr).'&':'';
		$str.=!empty($key)&&!empty($val)?$key.'='.$val:''; //将key和$val加入的参数
		
	}
	$url.=empty($str)?'':'?'.trim($str,'&');	
	return $url;
}
//获取attrid的选中状态，如果选中，则返回参数1，也就是$class
  public static function getAttrUrlCls($class,$attrid=null,$groupid=null,$table)
  { 
	global $dsql;
	$attr_arr=explode('_',$_REQUEST['attrid']);

	if(!empty($attrid))
	{
		if(in_array($attrid,$attr_arr))
		  return $class;
	}
	if(!empty($groupid))
	 {	
	       $attrset=implode(',',$attr_arr);
	       $has_exclude=$dsql->getOne("select count(*) as num from $table where id='$groupid'");
		   if($has_exclude['num']<=0)
			{
				$_exclude=$dsql->getOne("select id from $table where attrname='$groupid'");
				$groupid=$_exclude['id'];
			}
		
		$one_arr=$dsql->getOne("select count(*) as num from $table where find_in_set(id,'{$attrset}') and pid='$groupid'");
		if($one_arr['num']<=0)
		 {
			 return $class;
		 }
	    return '';		
		
	 }
	
   }
   //获取普通参数的$class
   public static function getParamUrlCls($class,$key=null,$val=null,$groupid=null,$table=null)
   {
	   if($key=='attrid')
	   {
		   return self::getAttrUrlCls($class,$val,$groupid,$table);
	   }
	   if(empty($_REQUEST[$key])&&empty($GLOBALS[$key])&&empty($val))
	        return $class;


	   if($_REQUEST[$key]==$val||$GLOBALS[$key]==$val)
	      return $class;
	   return '';
	    
   }
	
  


   //订单提交公共函数

   public static function addOrder($arr)
   {
	   self::loadModule('common');
	   $model = new CommonModule('#@__member_order');

	   $flag = 0;
	   if(is_array($arr))
       {
           if($arr['paytype']=='3')//这里补充一个当为二次确认时,修改订单为未处理状态.
           {
               $arr['status'] = 0;
           }
           $flag = $model->add($arr);

           $memberinfo =self::getMemberInfo($arr['memberid']);
          /* $mobiles = array($memberinfo['mobile']);
           if(!empty($arr['linktel']))
           {
               array_push($mobiles,$arr['linktel']);
           }
           $mobile = implode(',',array_unique($mobiles));*/
           $mobile = $memberinfo['mobile'];
           $prefix = !empty($memberinfo['nickname']) ? $memberinfo['nickname'] :$memberinfo['mobile'];
           $totalPrice = $arr['price'] * $arr['dingnum'];
           if($arr['paytype']=='3') //二次确认支付
           {
               $msgInfo = self::getDefineMsgInfo($arr['typeid'],1);
               if(isset($msgInfo['isopen'])) //等待客服处理短信
               {
                   $content = $msgInfo['msg'];
                   $content = str_replace('{#MEMBERNAME#}',$memberinfo['nickname'],$content);
                   $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);
                   $content = str_replace('{#PRICE#}',$arr['PRICE'],$content);
                   $content = str_replace('{#NUMBER#}',$arr['dingnum'],$content);
                   $content = str_replace('{#TOTALPRICE#}',$totalPrice,$content);
                   Helper_Archive::sendMsg($mobile,$prefix,$content);//发送短信.
               }

           }
           else //全款支付/订金支付
           {
               $msgInfo = self::getDefineMsgInfo($arr['typeid'],2);
               if(isset($msgInfo['isopen'])) //等待付款
               {
                   $content = $msgInfo['msg'];
                   $content = str_replace('{#MEMBERNAME#}',$memberinfo['nickname'],$content);
                   $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);
                   $content = str_replace('{#PRICE#}',$arr['PRICE'],$content);
                   $content = str_replace('{#NUMBER#}',$arr['dingnum'],$content);
                   $content = str_replace('{#TOTALPRICE#}',$totalPrice,$content);
                   Helper_Archive::sendMsg($mobile,$prefix,$content);//发送短信.
               }


           }
       }

	   return $flag;
	   
	   
	   
   }

   /*
    * 获取会员信息
    * */
    public static function getMemberInfo($mid)
    {
        self::loadModule('common');
        $member = new CommonModule('#@__member');
        $memberinfo = $member->getOne("mid={$mid}");
        return $memberinfo;

    }
    /**
     *获取消息msg定义
     * @param string msgtype
     */
    public static function getDefineMsgInfo($typeid,$num=0)
    {
        self::loadModule('common');
        $model = new CommonModule('#@__sms_msg');
        $msgtype = self::getMsgType($typeid,$num);
        $row = $model->getOne("msgtype='{$msgtype}'");
        return $row;
    }
    public static function getDefineMsgInfo2($msgtype)
    {
        self::loadModule('common');
        $model = new CommonModule('#@__sms_msg');
        $row = $model->getOne("msgtype='{$msgtype}'");
        return $row;
    }

    /*
     * 根据typeid生成msgtype
     * @param int $typeid
     * @param int $num ,第几个状态.
     * @return string $msgtype
     * */
    public static function getMsgType($typeid,$num)
    {
        switch($typeid)
        {
            case 1:
                $msgtype = 'line_order_msg'.$num;
                break;
            case 2:
                $msgtype = 'hotel_order_msg'.$num;
                break;
            case 3:
                $msgtype = 'car_order_msg'.$num;
                break;
            case 5:
                $msgtype = 'spot_order_msg'.$num;
                break;
            case 8:
                $msgtype = 'visa_order_msg'.$num;
                break;
            case 13:
                $msgtype = 'tuan_order_msg'.$num;
                break;

            default:
                $msgtype = 'reg';
                break;
        }
        return $msgtype;

    }

   //格式化时间显示
   
   public static function formatAddTime ($time)  //发布日期格式化显示 "发表于39秒前"
   {
	  /*$time=time()-$time;
	  $year = floor($time / 60 / 60 / 24 / 365); 
	  $time -= $year * 60 * 60 * 24 * 365; 
	  $month = floor($time / 60 / 60 / 24 / 30); 
	  $time -= $month * 60 * 60 * 24 * 30; 
	  $week = floor($time / 60 / 60 / 24 / 7); 
	  $time -= $week * 60 * 60 * 24 * 7; 
	  $day = floor($time / 60 / 60 / 24); 
	  $time -= $day * 60 * 60 * 24; 
	  $hour = floor($time / 60 / 60); 
	  $time -= $hour * 60 * 60; 
	  $minute = floor($time / 60); 
	  $time -= $minute * 60; 
	  $second = $time;*/

       //这里修改读随机的.
       $hour = mt_rand(0,3);
       $minute = mt_rand(0,60);
       $second = mt_rand(0,60);
	  $elapse = ''; 
	  $unitArr = array('年' =>'year', '个月'=>'month', '周'=>'week', '天'=>'day', 
	  '小时'=>'hour', '分钟'=>'minute', '秒'=>'second' 
	  ); 
	   foreach ( $unitArr as $cn => $u ) 
	   {
		 if ( $$u > 0 ) 
		 { 
		  $elapse = $$u . $cn; 
		  break; 
		 }
	   }


	   return $elapse.'前'; 
   }
  //获取产品评论数量
   public static function getCommentNum($id,$typeid)
   {
	    self::loadModule('common');
	    $model = new CommonModule('#@__comment');
		$num = $model->getCount("articleid='$id' and typeid='$typeid'");
		return $num ? $num : 0;
	   
   }
  //获取产品购买数量
  public static function getSellNum($id=0,$typeid,$row=null)
  {
	    self::loadModule('common');
	    $model = new CommonModule('#@__member_order');

        $id = $row != null ? $row['id'] : $id;
		
		$where=empty($id)? "typeid='$typeid'":"productautoid='$id' and typeid='$typeid'";
		
		$num = $model->getCount($where);
        if($row!=null)
        {
            $num = $row['bookcount']+$num ;
        }
        else
        {
            $bookcount = self::getVirtualNum($id,$typeid);
            $num = $num+$bookcount;

        }

		return $num ? $num + 20 : 30;
	  
  }
  //获取虚拟购买数量
  public static function getVirtualNum($id,$typeid)
  {

      if(empty($typeid))return 0;

      $table_arr = array(
          '1'=>'#@__line',
          '2'=>'#@__hotel',
          '3'=>'#@__car',
          '5'=>'#@__spot',
          '8'=>'#@__visa',
          '12'=>'#@__tuan'
      );
      self::loadModule('common');
      $tablename = $table_arr[$typeid];
      if(empty($tablename)) return 0;

      $model = new CommonModule($tablename);

      $num = $model->getField('bookcount',"id=$id");
      return $num ? $num : 0;


  }
  //获取评论总分数百分比
  public static function getSatisfyScore($id,$typeid)
  {
	  	self::loadModule('common');
	    $model = new CommonModule('#@__comment');
		$field = "sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 ";

		$row = $model->getOne("articleid='$id' and typeid='$typeid'",null,$field);
		
		$comment_row=$model->getOne("articleid='$id' and typeid='$typeid'",null,"count(*) as num");
		$comment_num=empty($comment_row['num'])?1:$comment_row['num'];
		$score_all = floatval($row['score1'])/$comment_num+floatval($row['score2'])/$comment_num+floatval($row['score3'])/$comment_num+floatval($row['score4'])/$comment_num;
	    $score = (round($score_all/4,1)*20);
		$score = $score < 10 ? mt_rand(92,100) : $score;//默认显示1颗心
		$score = $score.'%';
	    return $score;
	  
  }
 //获取线路团期
   public static function getFatuanData($id)
   {

   }
  /*
   *获取图片加载中图片
   * */
  public static function getLoadingFile()
  {
      return '/templets/smore/images/load.gif';
  }
    /*
     * 判断是否是手机端
     * **/
   public static function isMobile(){
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
        $is_mobile = false;
        foreach ($mobile_agents as $device) {
            if (stristr($user_agent, $device)) {
                $is_mobile = true;
                break;
            }
        }
        return $is_mobile;
    }
	public static function getLineIcon($lineicon)
	{
		/*if(empty($lineicon))
		   return null;
		$icon_arr=explode(',',$lineicon);
		foreach($icon_arr as $v)
		{
			$str.="<img src=\"{$v}\" height=\"15\"/>";
		}
		return $str;*/
       return  self::getIconList($lineicon);
	}

    /*
     * 获取图标全局函数
     * */
    public static function getIconList($ico)
    {
        global $dsql;
        if(empty($ico))
            return null;
        $sql = "select picurl from #@__icon where id in($ico)";

        $arr = $dsql->getAll($sql);
        $out = '';
        foreach($arr as $row)
        {
            $out.="<img src=\"{$row['picurl']}\" height=\"15\">";
        }
        return $out;
    }
   /**
     * 获取订单信息
     *
     */
    public static function getOrderInfo($id)
    {
        self::loadModule('common');
        $model = new CommonModule('#@__member_order');
        $row = $model->getOne("id='$id'");
        return $row;

    }
	public static function getDestIdByName($destname)
	{
		global $dsql;
		 
		$result=$dsql->getAll("select * from #@__destinations where kindname like '%{$destname}%'"); 
		
		$arr=array();
		foreach($result as $k=>$v)
		{
			$arr[]=$v['id'];
		}
		return $arr;
	}
    /*
     * 根据拼音获取目的地id
     * */

	public static function getDestIdByPinYin($pinyin)
	{
        self::loadModule('common');
	    $model = new CommonModule('#@__destinations');
	
		$row = $model->getOne("pinyin='$pinyin' and isopen='1'");

	    return $row['id'];
	
	}
    /*
     * 获取当前目的地下级目的地,如果不存在则读取当前级
     * @param int destid
     * @param int typeid
     * @return array
     * */
    public static function getChildDest($destid,$typeid)
    {
        global $dsql;


        /*
        if($flag)
        {
            $dest_arr=explode(',',$destid);
            sort($dest_arr);
            $destid=array_pop($dest_arr);
        }*/
        //$destid = array_remove_value($destid);

        $tables = array(
             '1'=>'#@__line_kindlist',
            '2'=>'#@__hotel_kindlist',
            '3'=>'#@__car_kindlist',
            '4'=>'#@__article_kindlist',
            '5'=>'#@__spot_kindlist',
            '6'=>'#@__photo_kindlist'

        );
        $table = $tables[$typeid];


        $destid=empty($destid)?0:$destid;
        $sql="select a.id,a.kindname from #@__destinations a left join {$table} b on a.id=b.kindid where a.isopen=1 and a.pid='$destid' order by b.displayorder";
        $result=$dsql->getAll($sql);

        if(empty($result))
        {
            $sql2="select pid from #@__destinations where id=$destid";
            $re=$dsql->GetOne($sql2);
            $sql="select a.id,a.kindname from #@__destinations a left join {$table} b on a.id=b.kindid where a.isopen=1 and a.pid={$re['pid']} order by b.displayorder";
            $result=$dsql->getAll($sql);
        }
        return $result;
    }

    /*
     * 发送短信方法
     * @param int phone
     * @param string prefix
     * @param string content
     * */
    public static function sendMsg($phone,$prefix,$content)
    {
        include (SLINEINC.'msg.class.php');
        $prefix = $GLOBALS['cfg_webname'];
        $msg = new Msg($GLOBALS['cfg_sms_username'],$GLOBALS['cfg_sms_password']);
        $status = $msg->sendMsg($phone,$prefix,$content);
        $status = json_decode($status);
        return $status;


    }


    /*
     * 获取站点的基本信息
     * */

    public static function getSlineWebInfo()
    {
        global $dsql;

        $url = 'http://'.$_SERVER['HTTP_HOST'];//当前域名
        $sql = "SELECT webid,webprefix FROM #@__weblist WHERE weburl = '$url' ";
        $row = $dsql->GetOne($sql);

        return $row;
    }

    /*
     * 字符串是否包含
     * */
    public static function strHasStr($str,$needle)
    {


        $tmparray = explode($needle,$str);

        if(count($tmparray)>1){

            return true;

        } else{

            return false;

        }

    }

    /*
     * 浏览记录
     * */
    public static function setHistoryCookie($cookieid, $pre)
    {


        $info = array();

        if (!empty($_COOKIE['St'][$pre]))
        {

            $history = unserialize($_COOKIE['St'][$pre]);
           // $history = RemoveEmpty(explode(',', $_COOKIE['St'][$pre]));

            $info = array('id'=>$cookieid,'time'=>time());
            if(!array_key_exists($cookieid,$history))
            {
                $history[$cookieid] = $info;
            }

            while (count($history) > 8)
            {
                array_shift($history);
            }

            setcookie('St[' . $pre . ']',  serialize($history), time() + 3600 * 24 * 365,'/');

        }
        else
        {

            $info[$cookieid] = array('id'=>$cookieid,'time'=>time());


            setcookie('St[' . $pre . ']', serialize($info), time() + 3600 * 24 * 365,'/');
        }


    }

    /*
     * 获取支付方式,订单页面用
     * */
    public static function getPayTypeList()
    {

        //支付宝信息是否填写
        if(!empty($GLOBALS['cfg_alipay_account']) && !empty($GLOBALS['cfg_alipay_key']))
        {
                $out.="<input type='radio' name='choosepay' id='alipaytype' value='1' style='vertical-align:middle;margin-right:5px;'><label for='alipaytype'>支付宝</label>&nbsp;&nbsp;";
        }
        //快钱支付
        if(!empty($GLOBALS['cfg_bill_account']) && !empty($GLOBALS['cfg_bill_key']))
        {
                $out.="<input type='radio' name='choosepay' id='billtype' value='2' style='vertical-align:middle;margin-right:5px;'><label for='billtype'>快钱</label>&nbsp;&nbsp;";
        }
        //汇潮支付
        if(!empty($GLOBALS['cfg_huicao_account']) && !empty($GLOBALS['cfg_huicao_key']))
        {
                $out.="<input type='radio' name='choosepay' id='huicaotype' value='3' style='vertical-align:middle;margin-right:5px;'><label for='huicaotype'>汇潮</label>&nbsp;&nbsp;";
        }
        //银联支付
        if(!empty($GLOBALS['cfg_yinlian_merid']) && !empty($GLOBALS['cfg_yinlian_mername']) && !empty($GLOBALS['cfg_yinlian_securitykey']))
        {
            $out.="<input type='radio' name='choosepay' id='yltype' value='4' style='vertical-align:middle;margin-right:5px;'><label for='yltype'>银联</label>&nbsp;&nbsp;";
        }
        return $out;





    }
	
   
	
	
}

?>