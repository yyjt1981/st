<?php
class Model_Article extends ORM
{
	
	/*
	  @description:获取文章列表
	  @params: array (haspic:1代表必须有图片; row:行数; limit)
      @return: 
	*/
   	public static function getArticleList($params=array())
	{
	   if(!is_array($params)&&!empty($params))
		   return;
	    $def_params=array('row'=>8,'type'=>'top','limit'=>0);     //设置默认值 
		

	    $params=array_merge($def_params,$params);   
	    extract($params,EXTR_SKIP);	
 
		$basefield ='a.id,a.aid,a.webid,a.allow,a.articlename,a.seotitle,a.shownum,a.content,a.addtime,a.webid,a.attrid,a.litpic as litpic,a.kindlist,a.author';
	   
	   //是否有图片 
	    $picwhere=!empty($haspic)?" and (a.litpic is not null and a.litpic!='')":'';
	    $picwhere2=!empty($haspic)?" where (a.litpic is not null and a.litpic!='')":'';
		
	
		
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
		   if(isset($kindid))
		   {		
				$where=" FIND_IN_SET($kindid,a.kindlist)";
				$where.=!empty($haspic)?" and a.litpic is not null":''; 
				$sql="select {$basefield} from sline_article as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid and c.typeid=4)  where $where  {$orderby}  limit {$limit},{$row}";
				$sqlcount="select count(*) as num from sline_article as a left join sline_kindorderlist as c on (c.classid=$kindid and a.id=c.aid and c.typeid=4)  where $where";
				
		   }
		   else return '';
		} 
		else if($flag=='specical')
		{
		   
		   $sql="select {$basefield} from sline_article a where webid is not null and isindex =1  $picwhere   order by  displayorder asc,addtime desc limit {$limit},{$row}";
		   $sqlcount="select count(*) as num from sline_article a where webid is not null and isindex =1  $picwhere";
		}
		else if($flag=='recommend')
		{
		   $sql="select {$basefield},b.isjian,b.isding as isding,b.displayorder from sline_article a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) $picwhere2   order by isding desc,b.isjian desc,case when b.displayorder is null then 9999 end,b.displayorder asc limit {$limit},{$row}";
		   $sqlcount="select count(*) as num from sline_article a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) $picwhere2";
	
		 
		}
		else if($flag=='kindrecommend')
		{
			$sql="select {$basefield} from sline_article a where a.isjian=1 and FIND_IN_SET($kindid,a.kindlist) $picwhere order by a.displayorder asc, a.addtime desc limit {$limit},{$row}";
			$sqlcount="select count(*) as num from sline_article a where a.isjian=1 and FIND_IN_SET($kindid,a.kindlist) $picwhere";
		}
		else if($flag=='isindex')
		{
		   $sql="select {$basefield} from sline_article a where a.isindex=1 $picwhere  order by a.displayorder asc, a.addtime desc limit {$limit},{$row}";
		   $sqlcount="select count(*) as num from sline_article a where a.isindex=1 $picwhere";
		}
		else if($flag=='new')
		{
		   $sql="select {$basefield} from sline_article a $picwhere2  order by a.addtime desc limit {$limit},{$row}";
		   $sqlcount="select count(*) as num from sline_article a $picwhere2";
		  
		}
		else if($flag=='hot')
		{
		   $sql="select {$basefield} from sline_article a where a.webid IS NOT NULL $picwhere order by a.shownum desc,a.addtime asc limit {$limit},{$row}";
		   $sqlcount="select count(*) as num from sline_article a where a.webid IS NOT NULL $picwhere";
		}
		else if($flag=='attr')
		{
			$sql="select a.* from sline_article a where FIND_IN_SET($attrid,a.attrid) order by a.addtime desc limit {$limit},{$row}";
			$sqlcount="select count(*) as num from sline_article a where FIND_IN_SET($attrid,a.attrid)";
		}
		else if($flag=='byattr') //通过属性id调用文章
		{
			if(!empty($attrid))
			  $sql="select a.* from sline_article a where FIND_IN_SET($attrid,a.attrid) order by a.displayorder asc,a.addtime desc limit {$limit},{$row}";
			 else if(!empty($attrname))
			 {
				 $attrid=DB::query(Database::SELECT,"select id from sline_article_attr where attrname='$attrname'")->execute()->get('id');
				 if(empty($temp_one))
					return;
				 else
				 {
					$sql="select a.* from sline_article a where FIND_IN_SET('$attrid',a.attrid) order by a.displayorder asc,a.addtime desc limit {$limit},{$row}";
					$sqlcount="select count(*) from sline_article a where FIND_IN_SET('$attrid',a.attrid)"; 
				 }
			 }
			  
		}
		else return '';
		
	   
	   
	   $articlelist=DB::query(Database::SELECT,$sql)->execute()->as_array();
	   $totalcount=DB::query(Database::SELECT,$sqlcount)->execute()->get('num');	
	   foreach($articlelist as $k=>$v)
	   {	
	        $articlelist[$k]['url']=$GLOBALS['cfg_phoneurl'].'/raider/show/'.$v['id'];
			$articlelist[$k]['haspic']=empty($v['litpic'])?0:1;
			$articlelist[$k]['lit240']=Common::imagePath($v['litpic'],'lit240');
			$articlelist[$k]['lit160']=Common::imagePath($v['litpic'],'lit160');
			$articlelist[$k]['litpic']=Common::imagePath($v['litpic']);
			$articlelist[$k]['title']=$v['articlename']; 
			$articlelist[$k]['totalcount']=$totalcount;  
	   }	
	  return $articlelist;	
		
	}
		
		
		
}