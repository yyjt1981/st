<?php
   class Model_Comment extends ORM
   {
	    public static function getSatisfyScore($params=array())
     {
	  	 if(!is_array($params))
		    return;
		extract($params);	
		 
		$sql= "select sum(score1) as score1,sum(score2) as score2,sum(score3) as score3,sum(score4) as score4 from sline_comment
		where articleid='$articleid' and typeid='$typeid'";
		
		//$row = $model->getOne("articleid='$id' and typeid='$typeid'",null,$field);
		$row=DB::query(Database::SELECT,$sql)->execute()->as_array();
		$row=$row[0];
		$score_all = floatval($row['score1'])+floatval($row['score2'])+floatval($row['score3'])+floatval($row['score4']);
	    $score = (round($score_all/4,1)*20);
		$score = $score < 10 ? 100 : $score;//默认显示1颗心
		$score = $score.'%';
	    return $score;
	  
      }
   }