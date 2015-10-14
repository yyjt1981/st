<?php
   class Model_Car_Pricelist extends ORM
   {
	   public static function getPriceList($params=array())
	   {
		   if(!is_array($params))
		      return;
		   extract($params);
		   
		   
		   $pricelist=DB::select()->where('webid','=',0)->from('car_pricelist')->execute()->as_array();
		   foreach($pricelist as $k=>$v)
		   {
			    if(!empty($v['min'])&&!empty($v['max']))
			        $pricelist[$k]['pricename']=$v['min'].'~'.$v['max'];
				else if(empty($v['min'])&&!empty($v['max']))
				    $pricelist[$k]['pricename']='0~'.$v['max'];
			    else if(!empty($v['min'])&&empty($v['max']))
				    $pricelist[$k]['pricename']=$v['min'].'以上';			
		   }
		   return $pricelist; 
	   }
	   
	   
   }