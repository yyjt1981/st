<?php
    class Model_Tuan extends ORM
	{
		
		public static function getTuanList($params=array())
		{
			if(!is_array($params))
			  return;
		    $def_params=array('row'=>10,'type'=>'top','limit'=>0,'flag'=>'recommend');	
            $params=array_merge($def_params,$params);
			extract($params);	
			$basefield ='a.*';
			if($type=='mdd')
			{  
			   if($flag=='recommend')
			   {
				  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
			   }
			   else if($flag=='hot')
			   {
				  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';
			   }
			   else if($flag=='new')
			   {
				  $orderby='order by a.addtime desc'; 
				   
			   }
			   else if($flag=='imagehot')
			   {
				   
				  $orderby=" and a.litpic!='' order by case when c.displayorder is null then 9999 end,c.displayorder asc"; 
			   }
			   else
			   {
				  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
			   }
			   if($kindid)
			   {
				
					$where="FIND_IN_SET($kindid,a.kindlist)";
					$sql="select {$basefield} from sline_tuan as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid and c.typeid=4)  where $where  {$orderby}  limit {$limit},{$row}";
					$sqlcount="select count(*) as num from sline_tuan as a where $where ";
					
			   }
			   else return '';
			} 
			else if($flag=='recommend')
			{
			   $sql="select {$basefield},b.isjian,b.isding as isding,b.displayorder from sline_tuan a left join sline_allorderlist b on (a.id=b.aid and b.typeid=13)  order by b.isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";
		       $sqlcount="select count(*) as num from sline_tuan";
			  
			}
			else if($flag=='isindex')
			{
			   $sql="select {$basefield} from sline_tuan a left join sline_allorderlist b on (a.id=b.aid and b.typeid=13) where a.isindex=1   order by b.displayorder asc, a.addtime desc limit {$limit},{$row}";
			    $sqlcount="select count(*) as num from sline_tuan where a.isindex=1";
			}
			else if($flag=='new')
			{
			   $sql="select {$basefield} from sline_tuan a    order by a.addtime desc limit {$limit},{$row}";
			   $sqlcount="select count(*) as num from sline_tuan";
			}
			else if($flag=='hot')
			{
			   $sql="select {$basefield} from sline_tuan a where a.webid IS NOT NULL  order by a.shownum desc,a.addtime asc limit {$limit},{$row}";
			   $sqlcount="select count(*) as num from sline_tuan";
		
			}
			else return '';
			
			
			 
		   $tuanlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	       $totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->num;	
		   foreach($tuanlist as $k=>$v)
			{	
				$tuanlist[$k]['url']=$GLOBALS['cfg_phoneurl']."/tuan/show/{$v['id']}";
				$tuanlist[$k]['litpic']=Common::imagePath($v['litpic']);
				$tuanlist[$k]['lit240']=Common::imagePath($v['litpic'],'lit240');
				$tuanlist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
				$tuanlist[$k]['discount']=floor($row['ourprice']/$row['sellprice']*100)/10; //折扣
				$tuanlist[$k]['totalcount']=$totalcount;
			}
			
			
		   return $tuanlist;	
		}
	}