<?php

    class Model_Startplace extends ORM
	{
		
		 public static function getStartplace($params=array())
		 {
			 if(!is_array($params))
			   return;
			 $def_params=array('row'=>20,'limit'=>0,'flag'=>'top');
			 $params=array_merge($def_params,$params);
			 extract($params,EXTR_SKIP);
			 
			if($flag=='top')
			{
				$sql="select * from sline_startplace where isopen=1 order by displayorder asc limit $limit,$row";
			}
			else if($flag=='son')
			{
				if(empty($pname)) return '';
				$sqld="select id from sline_startplace where cityname='$pname'";
				$temp=DB::query(Database::SELECT,$sqld)->execute()->as_array();
				if(empty($temp[0])) return '';	
				$sql="select * from sline_startplace where pid={$temp[0]['id']} where isopen=1 order by displayorder asc limit $limit,$row";	
			}
		    $placelist=DB::query(Database::SELECT,$sql)->execute()->as_array();
			return $placelist;	
			
			
			
			
		 }
	}