<?php
  class Model_Hotel_Attr extends ORM
  {
	  
	  public static function getAttrNames($groupid,$attrids)
	  {
		  $attr_arr=explode(',',$attrids);
		  
		  $result=DB::select()->from("hotel_attr")->where('pid','=',$groupid)->execute()->as_array();
          $str='';
		  foreach($result as $k=>$v)
		  {
			  if(in_array($v['id'],$attr_arr))
			  {
				  $str.=$v['atttname'].'|';
			  }
		  }
		  $str=trim($str,'|');
		  return $str;
	  }
	  
	  
  }