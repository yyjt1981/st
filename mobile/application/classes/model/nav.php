<?php
   class Model_Nav extends ORM
   {
	   public static function getSeo($typeid,$field='',$webid=0)
	   {
		   $seo=ORM::factory('Nav')->where('typeid','=',$typeid)->where('webid','=',$webid)->find()->as_array();
		   
		   if(empty($seo['seotitle']))
		      $seo['seotitle']=$seo['shortname'];
		   if(empty($field))
		      return $seo;
		   else	  
		     return $seo[$field];
	   }
   }