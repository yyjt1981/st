<?php   if(!defined('SLINEINC')) exit('Request Error!');
 /**
 * 首页轮播广告调用
 *
 * @version        $Id: rolling.lib.php 1 9:29 2011.05.03 netman $
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2010, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */
 
 
 
function lib_rollingad(&$ctag, &$refObj)
{
    global $dsql;
	include(SLINEDATA."/webinfo.php");
    $attlist = "typeid|0,name|IndexSpotRollingAd,row|3";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
   if($name=='') return '';
   $innertext = trim($ctag->GetInnertext());
    $revalue='';
	$sql="SELECT * FROM #@__advertise WHERE tagname = '$name' and typeid=0 and webid=0  ORDER BY displayorder asc ";
   
	$dsql->SetQuery($sql);
    $dsql->Execute();
    $ctp = new STTagParse();
    $ctp->SetNameSpace("field","[","]");
    $ctp->LoadSource($innertext);
    $GLOBALS['step'] = 0;
    $dataindex = 1;
    while($row = $dsql->GetArray())
    {

        $GLOBALS['step']++;
		$row['picurl']=$GLOBALS['cfg_cmsurl'].$row['picurl'];
        $row['dataindex'] = $dataindex;
        $dataindex++;

        foreach($ctp->CTags as $tagid=>$ctag)
        {
                if($ctag->GetName()=='array')
                {
                        $ctp->Assign($tagid, $row);
                }
				
                else
                {
                    if( !empty($row[$ctag->GetName()])) $ctp->Assign($tagid,$row[$ctag->GetName()]); 
                }
				
        }
		
        $revalue .= $ctp->GetResult();
    }
  
    
    return $revalue;
}
