<?php   if(!defined('SLINEINC')) exit('Request Error!');
 /**
 * 数组调用标签
 *
 * @version        $Id: vlist.lib.php 1 9:29 2013.05.03 netman $
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2013, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */
 
 
 
function lib_vlist(&$ctag, &$refObj)
{
    global $dsql,$sys_webid;
	include(SLINEDATA."/webinfo.php");
    $attlist = "name|,row|100";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
    if($name=='') return '';
    $innertext = trim($ctag->GetInnertext());
    $revalue='';
    $ctp = new STTagParse();
    $ctp->SetNameSpace("field","[","]");
    $ctp->LoadSource($innertext);
    $GLOBALS['step'] = 0;
	
	if(count($GLOBALS[$name]) == count($GLOBALS[$name],1))//是否是一维数组
	{
		$num = 1;
		foreach($GLOBALS[$name] as $k=>$v)
        {
		   $GLOBALS['step']++;
		   foreach($ctp->CTags as $tagid=>$ctag)
           {
			 if($ctag->GetName()=='value')
					{
					   
					   $ctp->Assign($tagid,$v);  	
					} 
			 if($ctag->GetName()=='key')
					{
					   
					   $ctp->Assign($tagid,$k);  	
					}     
		   }
		   $revalue .= $ctp->GetResult();
		   $num++;
		   if($num > $row) break;//个数判断
			
		}
	}
	else //二维数组
	{
		$num = 1;
		foreach($GLOBALS[$name] As $row)
		{
			
			$GLOBALS['step']++;
			foreach($ctp->CTags as $tagid=>$ctag)
			{
				  
				   
					if($ctag->GetName()=='array')
					{
							$ctp->Assign($tagid, $row);
					}
					else if($ctag->GetName()=='value')
					{
					   
							$ctp->Assign($tagid,$row[0]);  	
					}   
					
					else
					{
						$ctp->Assign($tagid,$row[$ctag->GetName()]); 
					}
					
			}
			
			$revalue .= $ctp->GetResult();
			$num++;
		    if($num > $row) break;//个数判断
			
		}
		
		
	}
    
  
    
    return $revalue;
}
