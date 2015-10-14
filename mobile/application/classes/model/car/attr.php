<?php
   class Model_Car_Attr extends ORM
   {
	   
	  //静态成员函数，根据属性组获取属性列表
      public static function getAttrByGroup($params=array())
	  {
		 if(!is_array($params))
		    return null;
		 extract($params);
		
		if(!empty($groupname)) //通过组名获取
		{
		
		  $row=DB::select('id')->from('car_attr')->where('attrname','=',$groupname)->execute()->as_array();
		  if(is_array($row[0]))
		  $pid=$row[0]['id'];
		}
		else //与attrgrouplist搭配使用
		{
		   $pid =$groupid;	
		}
		if(empty($pid))return;
		$sql="select id,attrname from sline_car_attr where pid='$pid' order by displayorder asc";
		
		$attrlist=DB::query(Database::SELECT,$sql);
		foreach($attrlist as $k=>$v)
		{
			$attrlist[$k]['title']=$v['attrname'];
			$attrlist[$k]['attrid']=$v['id'];
		}
		return $attrlist;
	  }
	  //根据传入的属性列表，获取某个属性组下的属性名称
	  public function getAttrName($attrids,$pid)
	  {
		  $attr_array=explode(',',$attrids);
		  foreach($attr_array as $k=>$v)
		  {
			  $t=$this->where('id','=',$v)->find()->as_array();
			  if($t['pid']==$pid)
			     return $t['attrname'];
			  $this->clear();
		  }
		  
	  }
	  
	   
   }