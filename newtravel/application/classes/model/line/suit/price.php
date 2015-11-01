<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Line_Suit_Price extends ORM {
    protected  $_table_name = 'line_suit_price';
	
	public static function getMinPrice($suitid,$field='adultprice')
	{
		$time=time();
		$adultResult=DB::query(Database::SELECT,"select min(adultprice) as minprice from sline_line_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();

		//return $adultResult[0]['minprice'];

		$childResult = DB::query(Database::SELECT,"select min(childprice) as minprice from sline_line_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();
		return min($adultResult[0]['minprice'], $childResult[0]['minprice']);
	}

}