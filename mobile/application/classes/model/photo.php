<?php
    class Model_Photo extends ORM
	{
		
		/*
		 description: 获取各种类型的相册列表 
		 
		 
		*/
		public static function getPhotoList($params=array())
		{
			if(!is_array($params))
			  return;
		    $def_params=array('row'=>10,'type'=>'top','limit'=>0);	
            $params=array_merge($def_params,$params);
			extract($params);			  
			
			$basefield = 'a.id,a.aid,a.photoname,a.seotitle,a.litpic,a.imginfo,a.title as littitle,a.alt,a.author,a.shownum,a.webid,a.headimgid';
			$revalue = '';
		   //加目的地页面显示条件
			$destwhere=!empty($kindid)? "and FIND_IN_SET($kindid,kindlist) " : ''; //用于聚合页面
			if($type=='mdd')
			{  
			   if(!empty($kindid))
			   {
					$sql="select {$basefield} from sline_photo as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid and c.typeid=6) where  FIND_IN_SET($kindid,a.kindlist) order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc limit {$limit},{$row}";
					$sqlcount="select count(*) as num from sline_photo as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid and c.typeid=6) where  FIND_IN_SET($kindid,a.kindlist)";
						
			   }
			   else return '';
			} 
			//目的地热门相册
			else if($type=='sonhot')
			{  
			   if(isset($kindid))
			   {
					$sql="select {$basefield} from sline_photo a where FIND_IN_SET($kindid,kindlist)  order by shownum desc limit {$limit},{$row}";
					$sqlcount="select count(*) as num from sline_photo a where FIND_IN_SET($kindid,kindlist)"	;
			   }
			   else return '';
			} 
			//推荐相册
			else if($flag=='recommend')
			 {
				
				 $sql="select {$basefield} ,b.isjian,b.isding ,b.displayorder from sline_photo a left join sline_allorderlist b on(a.id=b.aid and b.typeid=6) order by isding desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";
				 $sqlcount="select count(*) as num from sline_photo a left join sline_allorderlist b on(a.id=b.aid and b.typeid=6)";
				 
			 }	
			
			else return '';
			
		   $photolist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	       $totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->get('num');	
		  
		   foreach($photolist as $k=>$v)
		   {	
			  
				$photolist[$k]['url']=$GLOBALS['cfg_phoneurl']."/photo/show/".$v['id'];
				$photolist[$k]['title']=$row['photoname'];
				$photolist[$k]['litpic']=Common::imagePath($v['litpic']);
				$photolist[$k]['lit240']=Common::imagePath($v['litpic'],'lit240');
				$photolist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
				$photolist[$k]['alt']=!empty($row['alt']) ? $row['alt'] : $row['photoname'];
				$photolist[$k]['totalcount']=$totalcount;
		   }
		   return $photolist;
		}

		
	}