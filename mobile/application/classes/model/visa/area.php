<?php
class Model_Visa_Area extends ORM
{
   	   
	 public static function getAreaName($areaid)
	 {
		 $arr=explode(',',$areaid);
		 if(count($arr<=1))
		   $id=$areaid;
		 else
		   $id=max($arr);  
		return ORM::factory('visa_area',$id)->kindname; 
		 
	 }
}