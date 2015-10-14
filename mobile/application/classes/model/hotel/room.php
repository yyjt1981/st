<?php
   class Model_Hotel_Room extends ORM
   {
	   
	   
	   public static function getBreakFirst($num)
     {
	    switch($num)
	    {
		case 0:
		 $out='无';
		 break;
		case 1:
		 $out='含';
		 break;
		case 2:
		 $out='双早';
		 break;
		 case 3:
		 $out='单早';
		 break;
		 case 4:
		 $out='早餐';
		 break; 
		  case 5:
		 $out='早晚餐';
		 break; 
		  case 6:
		 $out='三餐';
		 break; 
		  case 7:
		 $out='一价全包';
		 break; 
		 case 8:
		 $out='用晚含早';
		 break; 
		default:
		  $out='无';
		 break;
		
	 }
	 return $out;
     }
	public static function getComputer($num)
    {
		switch($num)
		{
			case 0:
			 $out='无';
			 break;
			case 1:
			 $out='含';
			 break;
			case 2:
			 $out='有线';
			 break;
			 case 3:
			 $out='无线';
			 break;
			default:
			  $out='无';
			 break;	
		}
		return $out;
	
	
     }
	   
   }