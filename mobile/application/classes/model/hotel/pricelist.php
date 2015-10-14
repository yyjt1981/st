<?php
   class Model_Hotel_Pricelist extends ORM
   {
   
       public static function getPriceList($params=array())
	   {
		    if(!is_array($params))
			  return;
		    $def_params=array('row'=>10);	
            $params=array_merge($def_params,$params);
			extract($params);	
			
			$sql="select id,aid,min,max from sline_hotel_pricelist where webid='0' limit 0,{$row}";
			
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
				else if($row['max']=='')
				{
					$pricelist[$k]['title']=$v['min'].'元以上';
				}
			}
			return $pricelist;
	   }
	  public static  function getMinMaxprice($priceid)
       {
		  $arr=array();
		  $arr['min']='';
		  $arr['max']='';
		  $sql="select min,max from sline_hotel_pricelist where id=$priceid";
		  $result=DB::query(Database::SELECT,$sql)->execute()->as_array();
		  $row=$result[0];
		  if(is_array($row))
		  {
			 $arr['min']=!empty($row['min'])?$row['min']:0;
			 $arr['max']=!empty($row['max'])?$row['max']:0;
		  }
		  return $arr;
        } 
	   
   }