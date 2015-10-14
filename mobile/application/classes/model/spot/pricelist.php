<?php
class Model_Spot_Pricelist extends ORM
{
	
	
	function getSpotMinMaxprice($priceid)
	{
	  if(empty($priceid))
	    return null;	
	  $arr['min']='';
	  $arr['max']='';
	  $sql="select min,max from sline_spot_pricelist where id=$priceid";
	  $price=DB::query(Database::SELECT,$sql)->execute()->as_array();
	  $row=$price[0];
	  if(is_array($row))
	  {
		 $arr['min']=!empty($row['min'])?$row['min']:0;
		 $arr['max']=!empty($row['max'])?$row['max']:99999999;
	  }
	 
	  return $arr;
   }
   public static function getPricelist($params=array())
   {
	if(!is_array($params)&&!empty($params))
		   return;
	  $def_params=array('row'=>8);     //设置默认值 
	  $params=array_merge($def_params,$params);   
	  extract($params,EXTR_SKIP);
      
	  $sql="select id,aid,min,max from sline_spot_pricelist where webid='0' limit 0,{$row}";
	  
	  $pricelist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	  
	  foreach($pricelist as $k=>$v)
		{	
			if($v['min']!=''&& $v['max']!='')
			{
				$pricelist[$k]['title']=$v['min'].'元~'.$v['max'].'元';
			}
			else if($v['min']=='')
			{
				$pricelist[$k]['title']=$v['max'].'元以下';
			}
			else if($v['max']=='')
			{
				$pricelist[$k]['title']=$v['min'].'元以上';
			}
		}
		return $pricelist;
	   
   }
	    
	  
}