<?php
   class Model_Destinations extends ORM
   {
	   
	   /*
	      获取目的地导航
	   */
	   public static function navDestList($params=array())
	   {
		   if(!is_array($params)&&!empty($params))
			   return;
		   $def_params=array('row'=>8,'destid'=>0,'readad'=>1,'limit'=>0);     //设置默认值  
		   $params=array_merge($def_params,$params);   
		   extract($params,EXTR_SKIP);			

		  if(!empty($flag))//首页调用其它栏目的中间导航
		  {
			 $tablename=array("line"=>"sline_line_kindlist","hotel"=>"sline_hotel_kindlist","car"=>"sline_car_kindlist","raider"=>"sline_article_kindlist","spot" =>"sline_spot_kindlist","photo"=>"sline_photo_kindlist","tuan"=>"sline_tuan_kindlist");
			// $type_array=array('line'=>1,'hotel'=>2,'car'=>3,'raider'=>4,'spot'=>5,'photo'=>6);  //类型表
	
			$sql="select a.id,a.kindname,b.kindid,b.shownum,a.jieshao,a.pinyin,a.litpic,a.pinyin from  sline_destinations as a inner join {$tablename[$flag]} as b on a.id=b.kindid where b.isnav=1 and a.isopen=1 order by b.displayorder asc limit $limit,$row";
		  }
		  else
		  {
			 $sql="select * from sline_destinations where isnav=1 and isopen=1";  
		  } 
		  $destlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		  foreach($destlist as $k=>$v)
		   {	 
			
				 $lit = explode('||',$v['litpic']);
				 $litpic = $lit[0];
				 $destlist[$k]['lit240']=$GLOBALS['cfg_deskurl'].str_replace('litimg','lit240',$litpic);
				 $destlist[$k]['lit160']=$GLOBALS['cfg_deskurl'].str_replace('litimg','lit160',$litpic);
				 $destlist[$k]['litpic']=$GLOBALS['cfg_deskurl'].$litpic;
				 $destlist[$k]['kindid']=$v['id'];
				 $destlist[$k]['title']=$v['kindname'];
				 $destlist[$k]['url'] = $GLOBALS['cfg_phoneurl'].'/line/search/'.$v['id'];
		   }
			return $destlist;
			
	   }
	   /*
	     获取目的地列表，比如热门目的地，下级目的地，顶层目的地等
	   */
	   public static function getDestList($params=array())
	   {
		   if(!is_array($params))
			   return;
			$def_params=array('limit'=>0,'row'=>8);
			$params=array_merge($def_params,$params); 
			extract($params,EXTR_SKIP);			
	
						   
			$table_array=array("line"=>"sline_line_kindlist","hotel"=>"sline_hotel_kindlist","car"=>"sline_car_kindlist","article"=>"sline_article_kindlist","spot" =>"sline_spot_kindlist","photo"=>"sline_photo_kindlist","tuan"=>"sline_tuan_kindlist");
			
			
			//获取目的地下级分类
		   if($item=='0')
		   {		
			 if($flag == 'top')//顶级分类（国内、出境）
			 {
				 $sql="select a.* from sline_destinations a where a.pid = '0' and a.isopen=1 order by a.displayorder,a.pinyin asc limit $limit,$row";
				 
			 }
			 if($flag=='next')  //下级分类
			  {
				  $parentid = !empty($kindid) ? $kindid: 0;
		
				  $sql="select a.* from sline_destinations a where a.pid = '$parentid' and a.isopen=1 order by a.displayorder,a.pinyin asc limit $limit,$row";
				   
			  }
			  if($flag == 'hot')
			  {
				  $sql="select a.* from sline_destinations a where a.ishot = 1 and a.isopen = 1 order by a.displayorder,a.pinyin asc limit $limit,$row";
			  }
		   }
		   else
		   {
			   //普通排序
			  if($flag==0)
			  {
				   $sql="select a.kindname,a.id,a.pinyin from $table a left join {$table_array[$item]} b on a.id=b.kindid where a.isopen=1 order by b.displayorder,a.pinyin asc limit $limit,$row";
			  }
			  //热门排序 
			  if($flag == 'hot')
			  {
				  $sql="select a.kindname,a.id,a.pinyin from $table a left join {$table_array[$item]} b on a.id=b.kindid where b.ishot = 1  and a.isopen=1 order by b.ishot desc,b.displayorder,a.pinyin asc limit $limit,$row";
			  }
			  if($flag=='nav')
			  {
				  $sql="select a.kindname,a.id,a.pinyin,b.* from $table a left join {$table_array[$item]} b on a.id=b.kindid where b.isnav = 1  and a.isopen=1 order by b.isnav desc,b.displayorder,a.pinyin asc limit $limit,$row"; 
			  }
			  if($flag=='next')
			  {
				 
				  $parentid = empty($kindid) ? 0:$kindid;
				  $sql="select a.kindname,a.id,a.pinyin from sline_destinations a left join {$table_array[$item]} b on a.id=b.kindid where  a.isopen=1  and a.pid=$parentid order by b.isnav desc,b.displayorder,a.pinyin asc limit $limit,$row"; 
				  
			  }
		   }
		   $destlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		   
		   foreach($destlist as $k=>$v)
		   {	 
			     $lit = explode('||',$v['litpic']);
				 $litpic = $lit[0];
				 $destlist[$k]['lit240']=Common::imagePath($litpic,'lit240');
				 $destlist[$k]['lit160']=Common::imagePath($litpic,'lit160');
				 $destlist[$k]['litpic']=Common::imagePath($litpic);
				 $destlist[$k]['kindid']=$v['id'];
				 $destlist[$k]['title']=$v['kindname'];
				 $search=$item?$item:'line';
				 $destlist[$k]['url'] = $GLOBALS['cfg_phoneurl']."/$search/index?kindid=".$v['id'];
		   }
				 
		   return $destlist;		
		 }
		 public static function getMaxKindid($kindlist)
		 {
			 $kind_arr=explode(',',$kindlist);
			 if(count($kind_arr)<=1)
			   return $kindlist;
			 else
			   return max($kind_arr);   	 
		 }
		 public static function getMaxKindName($kindlist)
		 {
			 $kindid=self::getMaxKindid($kindlist);
			 
			 return ORM::factory('destinations',$kindid)->kindname;
		 }
	   
   }
