<?PHP
 class Model_Spot extends ORM
 {
	 
	 public static function getSpotList($params=array())
	 {
		if(!is_array($params)&&!empty($params))
		   return;
	    $def_params=array('row'=>8,'type'=>'top','flag'=>'recommend','limit'=>0);     //设置默认值 
	    $params=array_merge($def_params,$params);   
	    extract($params,EXTR_SKIP);
		$basefield = 'a.aid,a.id,a.spotname,a.litpic,a.area,a.tagword,a.kindlist,a.webid,a.attrid,a.shownum,a.want,a.went';
		if($type=='top' && empty($flag)) return '';


		if($type=='mdd')
		{  
		   
		   if($flag=='recommend')
		   {
			  $orderby=' order by c.isjian desc,case when c.displayorder is null then 9999 end,c.displayorder asc'; 
		   }
		   else if($flag=='hot')
		   {
			  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';   
		   }
		   else
		   {
			  $orderby='order by c.isding desc,case when c.displayorder is null then 9999 end,c.displayorder asc';
		   }
		   
		   if(!empty($kindid))
		   {
				$where="where  FIND_IN_SET($kindid,a.kindlist) {$orderby}  limit {$limit},{$row}";
				$sql="select a.* from sline_spot as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid and c.typeid=5)  $where";
		   }
		   else return '';	  
		} 
		
		//周边景点
		else if($type=='aroundspot')
		{
			$sql="select * from sline_spot where FIND_IN_SET($kindid,kindlist) order by isding,isjian desc,displayorder asc limit {$limit},{$row}";
			
			
		}
		
		else if($type=='top')
		{
			if($flag=='recommend')
			{
			   $sql="select {$basefield},b.isding as isding,b.isjian,b.displayorder from sline_spot as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=5) order by isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";
			  
			}
		
			else if($flag=='hot')
			{
			   $sql="select {$basefield} from sline_spot a where webid is not null {$destwhere}  order by a.isjian desc,a.shownum desc limit {$limit},{$row}";	  
			}
		
			else return '';
		}
        $spotlist=DB::query(Database::SELECT,$sql)->execute()->as_array();
		
		foreach($spotlist as $k=>$v)
		{   
			$spotlist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/spot/show/'.$v['id'];
			$spotlist[$k]['price'] = ORM::factory('spot_ticket')->getMinPrice($v['id']);
			$spotlist[$k]['price']=empty($spotlist[$k]['price'])?'暂无':'&yen;'.$spotlist[$k]['price'];
			
		  	
			$spotlist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');

		}
		return $spotlist;
	
	 }
	 
 }