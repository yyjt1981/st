<?php

 class WebConfig{
	 public static function getWeb($field,$webid=0)
	 {
		 $result=DB::query(Database::SELECT,"select $field from sline_weblist where webid=$webid")->execute()->as_array();
		 return $result[0][$field];
		 
	 }
	 public static function getSysConf($field,$varname,$webid=0)
	 {
		 $result=DB::query(Database::SELECT,"select $field from sline_sysconfig where varname='$varname' and webid=$webid")->execute()->as_array();
		 return $result[0][$field];  
	 }
	 public static function getNav()
	 {
		 
	 }
 }