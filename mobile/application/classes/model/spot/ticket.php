<?php
  class Model_Spot_Ticket extends ORM{
	  
	  
	  public function getMinPrice($spotid)
	  {
		 $result=DB::query(Database::SELECT,"select min(ourprice) as price from sline_spot_ticket where spotid=$spotid")->execute()->as_array();  
		 return $result[0]['price'];
	  }
	  
	  
	  
  }