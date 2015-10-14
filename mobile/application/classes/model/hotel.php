<?php
   class Model_Hotel extends ORM
   {
	   public static function getHotelList($params=array())
	   {
		 if(!is_array($params))
		    return null;
	     $def_params=array('row'=>10,'limit'=>0,'type'=>'top');		
		 $params=array_merge($def_params,$params);		
	     extract($params);  
		   
		$basefield = 'a.id,a.aid,a.kindlist,a.hotelname,a.litpic,a.ishidden,a.hotelrankid,a.areaid,a.webid,a.hotelrankid as hotelrankids,a.areaid as areaids';
		if($type=='top' && empty($flag)) return null;
		
		
		
		if($type=='mdd')
		{  
			
			if(!isset($kindid)) return '';
			if($flag=='hot')
			{
			  $orderby='order by b.isding desc,case when b.displayorder is null then 9999 end,b.displayorder asc';   
			  
			}
			else if($flag=='recommend')
			{
			  $orderby='order by b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc';
			}
			else if($flag=='specical')
			{
			  $orderby='b.istehui desc,case when b.displayorder is null then 9999 end,b.displayorder asc';	
			}
			else
			{
			  $orderby='order by b.isding desc,case when b.displayorder is null then 9999 end,b.displayorder asc';	
			}
			
				$where = "FIND_IN_SET($kindid,a.kindlist)";
				$sql="select {$basefield},b.isding,b.isjian,b.istejia from sline_hotel a left join sline_kindorderlist as b on (a.id=b.aid and b.classid='$kindid' and b.typeid='2') where " . $where . " and (a.ishidden='0' or a.ishidden is null){$orderby} limit {$limit},{$row}";
			 
		}
		
		else if($type=='rank')
		{
			  if(empty($rankid))
			    return null;
		   
				$sql="select a.*,b.hotelrank from sline_hotel a left join sline_hotel_rank b on a.hotelrankid=b.aid  where a.webid=0 and hotelrankid=$rankid   and a.ishidden='0' order by a.displayorder asc limit {$limit},{$row}";
		}
		else if($type=='top')
		{
			
			
			if($flag=='recommend')
			{
			   $sql="select {$basefield},b.displayorder,b.isding,b.isjian,b.istejia,a.ishidden,a.hotelprice from sline_hotel a left join sline_allorderlist b on(a.id=b.aid and b.typeid=2)   order by b.isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc  limit {$limit},{$row}";
			 
			  
			}
			else if($flag=='special')
			{
				
			   $sql="select {$basefield},b.displayorder,b.isding,b.isjian,b.istejia as istehui,a.ishidden from sline_hotel a left join sline_allorderlist b on(a.id=b.aid and b.typeid=2)  order by b.isding desc,b.istejia desc,case when b.displayorder is null then 9999 end,b.displayorder asc  limit {$limit},{$row}";
			}
			else if($flag=='hot')
			{
				
			   $sql="select a.*,b.hotelrank,a.hotelprice as price from sline_hotel a left join sline_hotel_rank b on (a.hotelrankid=b.aid and a.webid=b.webid)  where a.ishidden='0'   group by a.hotelname order by a.isding desc,a.displayorder asc,a.shownum desc limit {$limit},{$row}";
	
			}
			else return '';
		}
	
		$hotellist=DB::query(Database::SELECT,$sql)->execute()->as_array();	
		foreach($hotellist as $k=>$v)
		{
			$hotellist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/hotel/show/'.$v['id'];
			$hotellist[$k]['price']=empty($v['price'])?self::GetHotelMinPrice($v['webid'],$v['id']):$v['price'];
			$hotellist[$k]['price']=empty($hotellist[$k]['price'])?'电询':'&yen;'.$hotellist[$k]['price'];
			
			if(empty($v['litpic']))
			{
				$hotellist[$k]['litpic']=$hotellist[$k]['litpic']=$hotellist[$k]['lit160']=$GLOBALS['cfg_deskurl'].$GLOBALS['cfg_df_img'];
			}
			else
			{
			  $hotellist[$k]['litpic']=Common::imagePath($v['litpic']);
			  $hotellist[$k]['lit240']=Common::imagePath($v['litpic'],'lit240');
			  $hotellist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
			}
		}
		return $hotellist;
	 }
	 public static  function getHotelMinPrice($webid,$hotelid)
	 {
			global $dsql;
			$sql="select min(price) as minprice from sline_hotel_room where webid='{$webid}' and hotelid='{$hotelid}'";
			$row=DB::query(Database::SELECT,$sql)->execute()->as_array();
            return $row[0]['minprice'];
	  }
	   
  }