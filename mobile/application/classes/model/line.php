<?php
class Model_Line extends ORM
{
	
    public static function getLineList($params=array())
	{
		if(!is_array($params))
		    return null;
	     $def_params=array('row'=>10,'limit'=>0,'type'=>'top');		
		 $params=array_merge($def_params,$params);		
	     extract($params);	

		 $basefield = "a.aid,a.id,a.webid,a.linename,a.seotitle,a.sellpoint,a.linepic,a.storeprice,a.lineprice,a.linedate,a.features,a.transport,a.lineday,a.startcity,a.overcity,a.shownum,a.isjian,a.istejia,a.isding,a.satisfyscore,a.bookcount";
      if($type=='top' && empty($flag)) return '';
	      $limit=!empty($limit)?$limit:0;
	   
	if($type=='startcity')
	{
		$sql="select  {$basefield},c.isjian,c.istejia,c.isding  from sline_line as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid  and c.typeid=1) where a.ishidden=0 and and startcity='{$startcity}' and FIND_IN_SET($kindid,a.kindlist) c.displayorder  limit {$limit},{$row}";
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
		  $orderby='order by  c.istejia desc,case when c.displayorder is null then 9999 end,c.displayorder asc ';
	   }
	   else
	   {
		   $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';
	   }

	   if(isset($kindid))
	   {
	        
			$sql="select {$basefield},c.isjian,c.istejia,c.isding  from sline_line as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid  and c.typeid=1) where a.ishidden=0 and  FIND_IN_SET($kindid,a.kindlist) {$orderby}  limit {$limit},{$row}";
		   
	   }
	  
	   else return '';
	}
	//搜索页面推荐.
	else if($type=='searchrec')
	{
		if($GLOBALS['childid']!=0)
		{
		  $kchild=$GLOBALS['childid'];
		  $sql="select  distinct {$basefield}  from sline_line as a left join sline_kindorderlist as c on (c.classid=$kchild and a.id=c.aid  and c.typeid=1) where a.ishidden=0 and c.isjian=1 and FIND_IN_SET($kchild,a.kindlist) order by case when c.displayorder is null then 9999 end,c.displayorder asc   limit 0,4";
		}
		else
		{
		   $sql="select {$basefield} a from sline_line where a.ishidden=0 and a.isjian=1  order by a.isding desc,a.displayorder asc,a.addtime desc limit {$limit},{$row}";
		
		}
	
	}
	//目的地推荐
	else if($type=='destsearchrec')
	{
		if($GLOBALS['destid']!=0)
		{
		  $kchild=$GLOBALS['destid'];
		  $sql="select {$basefield} from sline_line as a left join sline_kindorderlist as c on (c.classid=$kchild and a.id=c.aid  and c.typeid=1) where  a.ishidden=0 and FIND_IN_SET($kchild,a.kindlist) {$orderby}  limit 0,4";
		}
		else
		{
		   $sql="select {$basefield} from sline_line a where a.ishidden=0 and a.isjian=1  order by a.isding desc,a.displayorder asc,a.addtime desc limit {$limit},{$row}";
		
		}
	
	}
	
	
	//普通调用
	else if($type=='top')
	{
	   
		if($flag=='recommend') //排序规则:置顶》排序》最新更新
		{
		   $sql="select {$basefield},b.isding,b.istejia,b.displayorder from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1) order by b.isding desc,b.displayorder asc limit {$limit},{$row}";
		}
		else if($flag=='specical')
		{
		  
		    $sql="select {$basefield},b.isding,b.istejia,b.displayorder from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1) order by b.istejia desc,b.displayorder asc limit {$limit},{$row}";
		}
		else if($flag=='hot')
		{
		   $sql="select {$basefield} from sline_line a  order by a.shownum desc,a.displayorder asc limit {$limit},{$row}";
		   
		}
		else if($flag=='attribute')
		{
		   	 $sql="select {$basefield} from sline_line a where FIND_IN_SET('$attrid',a.attrid)  order by a.addtime desc,a.displayorder asc limit {$limit},{$row}";
			
		}
	  }	
	  $linelist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	  
	  $i=0;
	  foreach($linelist as $k=>$v)
	  {
		$linelist[$k]['autoindex']=++$i;   
		
		$url= $GLOBALS['cfg_phoneurl']."/line/show/{$v['id']}";;
		$linelist[$k]['url']= $url;
		$linelist[$k]['title']="{$v['linename']}";
		$real=self::getLineRealPrice($v['aid'],$v['webid']);
		$linelist[$k]['lineprice']=$real ? $real : $v['lineprice'];
		
		
	//	$linelist[$k]['commentnum']=Helper_Archive::getCommentNum($row['id'],1); //评论次数
	//	$linelist[$k]['sellnum']=Helper_Archive::getSellNum($row['id'],1); //销售数量
	//	$linelist[$k]['satisfyscore']=Helper_Archive::getSatisfyScore($row['id'],1); //满意度
		
		if(!empty($row['lineprice'])&&!empty($v['storeprice']))
		   $linelist[$k]['discount']=abs((int)$v['storeprice']-(int)$v['lineprice']);
		 else
		   $linelist[$k]['discount']=0; 
		 
	
		$linelist[$k]['price'] = empty($v['lineprice'])?'电询':"&yen;".$v['lineprice'];
		
		$linelist[$k]['sellprice'] = empty($v['lineprice'])?'0':$v['lineprice']; //没有HTML标识的价格
		
		$linelist[$k]['storeprice']=!empty($v['storeprice'])?"<span class=\"rmb_2\">&yen;</span>".$v['storeprice']:"<span class=\"rmb_1\">电询</span>";
		
	    
			
		$linelist[$k]['litpic']=Common::imagePath($v['linepic']);
		$linelist[$k]['lit240']=Common::imagePath($v['linepic'],'lit240');
		$linelist[$k]['lit160']=Common::imagePath($v['linepic'],'lit160');
			
		  
	  }
	 
	  
	  
	  
	  return $linelist;	
	}
    public static function getLineRealPrice($aid,$webid)
	{
		
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
		$sql="select price from sline_line_month where lineid='$aid' and webid='$webid' and monthnum='{$thismonth}' and yearnum='{$year}'";
		$arr=DB::query(Database::SELECT,$sql)->execute()->as_array();
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
		
		$sql="select price from sline_line_month where lineid='$aid' and webid='$webid' and (monthnum='{$nextmonth}' or monthnum='{$thirdmonth}') and yearnum='{$nextyear}'";
		$arr=DB::query(Database::SELECT,$sql)->execute()->as_array();//$dsql->getAll($sql);
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
	 public static function getLineContent($row)
	  {
		  if(empty($row))
		      return null;
		  $linecontent=array();
		  $sql="select columnname,chinesename from sline_line_content where webid=0 and isopen=1 order by displayorder asc";
		  
		  $result=DB::query(Database::SELECT,$sql)->execute()->as_array();
		  
		 
		  foreach($result as $k=>$arr)
		  {
			 if($arr['columnname']=="payment")
			 {
				if($row[$arr['columnname']]=="")
				{
				  $row[$arr['columnname']]=WebConfig::getSysConf('value','cfg_payment');
				}
			 }
			 if($arr['columnname']=="linespot")
			 {
				 $row[$arr['columnname']] = '';
			 }
			 if($arr['columnname']=="pinglun")
			 {
				 $row[$arr['columnname']] = '';	
			 }
			 if($arr['columnname']=="booking")
			 {	
				{
					$row[$arr['columname']]= '';
				}
				
			 }
			 if($arr['columnname']=="zuche")
			 {
				$row[$arr['columnname']]='';
			 }
			 if($arr['columnname']=="jieshao")
			 {
				 $row[$arr['columnname']]=self::GetJieShao($row['aid'],'0');

			 }
			 if(!empty($row[$arr['columnname']]))//判断是否为空
			 {
				if($arr['columnname']!='jieshao')
				{
				  $linecontent[$arr['chinesename']]="<div class='pid_l10'>".$row[$arr['columnname']].'</div>'; 	
				}
				else
				{
				  $linecontent[$arr['chinesename']]=$row[$arr['columnname']];	
				}
				
			 }
		  }
		  
		  return $linecontent;
	  }
	 public static function getJieShao($lineid,$webid=0)
	 {
		$sql = "select isstyle,lineday,txtjieshao,jieshao from sline_line where aid='$lineid' and webid='$webid'";
		$t_row=DB::query(Database::SELECT,$sql)->execute()->as_array();
		
		$row=$t_row[0];
		
		if($row['isstyle'] == 1) //编辑器里编辑的行程,直接读取
		{
			$out= $row['jieshao'];
		}
		else if($row['isstyle'] == 2) //按天数上传的行程
		{
		
		  // var_dump($row['textjieshao']);
		   $arr=explode(",",$row['txtjieshao']);
		  
		
		   for($i=1;$i<=$row['lineday'];$i++)
		   {
			   $detail=explode('||',$arr[$i-1]);
			   
			  // var_dump($detail);
			   $foodarr=explode(' ',$detail[1]);
			   $breakinfo = in_array(1,$foodarr) ? '含' : '不含';
			   $lunchinfo = in_array(2,$foodarr) ? '含' : '不含';
			   $supperinfo = in_array(3,$foodarr) ? '含' : '不含';
			   $b_desc = !empty($detail[8]) ? $detail[8] : '无';
			   $l_desc = !empty($detail[9]) ? $detail[9] : '无';
			   $s_desc = !empty($detail[10]) ? $detail[10] : '无';
				
			   
			   $out.='<div class="line-i-c-h">
              <h3 class="tit"><span>第'.$i.'天</span></h3>
              <div class="line-i-con">
              '.$detail[4].'
                </div>
              <div class="line_zs"><span class="color_f60">用餐：</span>早餐(<span class="color_14a">'.$breakinfo.'</span>)- 午餐('.$lunchinfo.')- 晚餐(<span class="color_14a">'.$supperinfo.'</span>)</div>
              <div class="line_zs"><span class="color_f60">住宿：</span>'.$detail[3].'</div></div>' ;
			   
		   }
		}
		$out = self::handleImg($out);
		
	
        return $out;
		
	 }
	 public static function getLineStartDate($row)
	 {

			$today=time();
			$montharr=self::getMonthPriceList($row['webid'],$row['aid'],date('Y',$today),date('m',$today));
			$monthstr='';
			$monthli='';
			$curday=(int)date('d',$today);
			if(empty($montharr))
			{
			  $monthstr=empty($row['linedate'])?'电询' : $row['linedate'];
			}
			else
			{
				foreach($montharr as $key=>$value)
				{	
						$monthstr.=$key.'、';
						$weekday=date('w',strtotime(date('Y',$today).'-'.$key));
						$text = $key.'(周'.self::getCnWeek($weekday).')成人价'.$value.' 儿童价'.$row['childprice'];
						$monthli.='<option value="'.$key.'" data-price="'.$value.'" data-childprice="'.$row['childprice'].'">'.$text.'</option>';
				
					
				 }
				if(!empty($monthstr))
				{    
					 $monthstr=trim($monthstr,'、');
					 $monthstr.='日,';
				}
				
			 }
			 return array('monthstr'=>$monthstr,'monthli'=>$monthli);
			
	 }

	public static  function getMonthPriceList($webid,$lineid,$year,$month)
    {
		global $dsql;
		$thisyear=date('Y');
		$thismonth=date('m');
		$nextmonth=date('m',strtotime('+1 month'));
		$nextyear=$nextmonth=='01' ? $thisyear+1 : $thisyear;
		$sql="select price,monthnum from sline_line_month where ((yearnum='{$thisyear}' and monthnum={$thismonth}) or (yearnum='$nextyear' and monthnum = '$nextmonth')) and webid={$webid} and lineid={$lineid}";
	    $arr=DB::query(Database::SELECT,$sql)->execute()->next()->as_array();
		
		$monthprice=array();
		$index = 0;
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

    public static function handleImg($str)
	{
		  $rule="/<[img|IMG].*?src=[\'|\"](\/include\/.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
          preg_match_all($rule,$str,$dataarr);


            for($i=0;isset($dataarr[1][$i]);$i++)
            {
                //print_r($dataarr[1]);
                $tic = $dataarr[1][$i];

                $img="<img src=\"{$tic}\"/>";

                $str=str_replace($dataarr[0][$i],$img,$str);//进行替换


            }
			return $str;
	
	}

    public static function getCnWeek($num)
    {
        $arr=array('日','一','二','三','四','五','六');
        return $arr[(int)$num];
    }
	 
	 

}