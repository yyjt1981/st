<?php
  class Common{
	
     public static function getScript($filelist)
	 {
		 $filearr = explode(',',$filelist);
		 $theme = Kohana::$config->load('webinfo','theme');
		 $out='';
		 foreach($filearr as $file)
		 {
			 $tfile = DOCROOT."/public/{$theme}/js/".$file;
			 if(file_exists($tfile))
			 {
			   $out.="<script src='{$GLOBALS['cfg_res']}/{$theme}/js/{$file}'></script>";//HTML::script("{$GLOBALS['cfg_res']}/{$theme}/js/{$file}");
			 }
		    else
			   $out.="<script src='{$GLOBALS['cfg_res']}/default/js/{$file}'></script>";//HTML::script("{$GLOBALS['cfg_res']}/default/js/{$file}");		 
		 }
		 return $out;
	    
	 }
	 //根据用，号隔开的字符串，生成style标签
	 public static function getCss($filelist)
	 {
		 $filearr = explode(',',$filelist);
		 $theme = Kohana::$config->load('webinfo','theme');
		 $out='';
		 foreach($filearr as $file)
		 {
			 $tfile = DOCROOT."/public/{$theme}/css/".$file;
			 if(file_exists($tfile))
			 {
			   $out.="<link rel=\"stylesheet\" href=\"{$GLOBALS['cfg_res']}/{$theme}/css/{$file}\" type=\"text/css\">";//HTML::style("{$GLOBALS['cfg_res']}/{$theme}/css/{$file}");
			 }
			 else
			 $out.="<link rel=\"stylesheet\" href=\"{$GLOBALS['cfg_res']}/default/css/{$file}\">";// HTML::style("{$GLOBALS['cfg_res']}/default/css/{$file}");		 
		 }
		 return $out; 
	 }
	 //根跟url的附加参数生成参数列表
	 public static function geneParam($param)
	 {
		// $params=explode('/',$param);
		 //$params=array_diff($params,array('',null,false)); 
				 
	 }
	 public static function getTransport($ids)
     {
		$transport=array("1"=>"飞机","2"=>"汽车","3"=>"火车","4"=>"轮船");
		$arr = explode(',',$ids);
		foreach($arr as $value)
		{
		   $out.=$transport[$value].',';	
		}
		return substr($out,0,strlen($out)-1);
     }
	 public static function imagePath($file,$replace='',$search='litimg')
	 {
		 $newfile=str_replace($search,$replace,$file);
		 if(file_exists(DESKROOT.$newfile))
		    return $GLOBALS['cfg_deskurl'].$newfile;
		 else if(file_exists(DESKROOT.$file))
		    return $GLOBALS['cfg_deskurl'].$file;
		 else
		    return 	$GLOBALS['cfg_deskurl'].$GLOBALS['cfg_df_img'];	 
	 }
  }
  