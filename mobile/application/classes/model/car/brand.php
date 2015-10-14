<?php
   class Model_Car_Brand extends ORM
   {
	   
	    public static function getBrandList($params=array())
	   {
		   if(!is_array($params))
		      return;
		   extract($params);
		   $brandlist=DB::select()->where('webid','=',0)->from('car_brand')->execute()->as_array();
		   return $brandlist;
		    
	   }
	   
   }