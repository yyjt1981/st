<?php
   class Model_Car_Kind extends ORM
   {
	   
	   public static function getKindList($params=array())
	   {
		   if(!is_array($params))
		      return;
		   extract($params);
		   $kindlist=DB::select()->from('car_kind')->execute()->as_array();
		   return $kindlist;
		    
	   }
	   
	   
   }