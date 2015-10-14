<?php
class Model_Line_Day extends ORM
{
    public static function getLineDay($params=array())
	{
		if(!is_array($params))
		    return null;
	    $def_params=array('row'=>10);		
		$params=array_merge($def_params,$params);		
	    extract($params);	
		$sql="select id,word from sline_line_day  where webid=0 order by word asc limit $row";
		
		
	    $daylist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		$i=0;
		foreach($daylist as $k=>$v)
		{
         $i++;
		 $number=$v['word'];
		 $arr=array("零","一","二","三","四","五","六","七","八","九");
		 if(strlen($number)==1)
		   {
		       $result=$arr[$number];
		   }
		  else
		   {
			   if($number==10)
			   {
				$result="十";
			   }
			   else
			   {
					if($number<20)
					{
					$result="十";
					}
					else
					{
					$result=$arr[substr($number,0,1)]."十";
					}
					if(substr($number,1,1)!="0")
					{
					  $result.=$arr[substr($number,1,1)]; 
					}
			   }
		   }
		 //  if(self::checkLineDay($v['word'])) //检测是否存在.
			// {
			    if($i==$rowcount)
				{
					$daylist[$k]['title']=$result."日游以上";
				}
				else
				{
				    $daylist[$k]['title']=$result."日游";
				}
			// }
			// else
			// {
			//	unset($daylist[$k]);
			//	continue;
			// }
	    }
		return $daylist;
	}
	public static function checkLineDay($word)
	{

		$sql="select count(*) as num from sline_line where lineday='$value' and ishidden=0";
	    $result=DB::query(Database::SELECT,$sql)->execute()->get('num');
	    return $result;
	}
		
}