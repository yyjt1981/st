<?php
class Model_Spot_Attr extends ORM
{
	public static function getAttrGrpList($params=array())
	{
	    if(!is_array($params)&&!empty($params))
		   return;
	    $def_params=array('row'=>8); 
	    $params=array_merge($def_params,$params);   
	    extract($params,EXTR_SKIP);	
		$sql="select * from sline_spot_attr where pid=0 and isopen=1 limit $row";
		$attrlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		
		foreach($attrlist as $k=>$v)
		{
			$sql2="select * from sline_spot_attr where pid={$v['id']} and isopen =1";
			$attrlist[$k]['childlist']=DB::query(Database::SELECT,$sql2)->execute()->as_array();
		}
		return $attrlist;
	}
	public static function getAttrInfo($attrids)
	{
		if(empty($attrids))
		  return null;
	    $attr_arr=explode(',',$attrids);
		
		$arr=array();
		foreach($attr_arr as $k=>$v)
		{
			$row=ORM::factory('spot_attr',$v)->find()->as_array();
			$prow=ORM::factory('spot_attr',$row['pid'])->find()->as_array();
			if(empty($arr[$prow['id']]))
			{
				$prow['childlist'][]=$row;
		    	$arr[$prow['id']]=$prow;
				$existed[]=$prow['id'];
			}
			else
			{
				$arr[$prow['id']]['childlist'][]=$row;
			}
			  	
		}
	   	return $arr;  
	}
	
}