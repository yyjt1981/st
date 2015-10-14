<?php
 if(!defined('SLINEINC'))
{
    exit("Request Error!");
}
/** 
 * 调用签证标签
 *
 * @version        $Id: getvisalist.lib.php netman
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2014, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */
 
/*>>sline>>
*/

 
function lib_getvisalist(&$ctag,&$refObj)
{
    global $dsql;
	include(SLINEDATA."/webinfo.php");//导入网站id
	$attlist = "row|5,type|area,limit|0";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
	
	if($type=='area') //按区域
	{
	  $areaid=isset($refObj->Fields['kindid']) ? $refObj->Fields['kindid'] : 0;
	  if($areaid!=0)$where="where areaid='$areaid'";
      
	}
	else if($type=='nation') //按国家
	{
		$nationid=isset($refObj->Fields['kindid']) ? $refObj->Fields['kindid'] : 0;
		$where="where nationid='$nationid'";
	}
	$sql="select * from #@__visa $where order by displayorder asc limit {$limit},{$row}";
	$innertext = trim($ctag->GetInnertext());
    $dsql->SetQuery($sql);
    $dsql->Execute();
    $ctp = new STTagParse();
    $ctp->SetNameSpace("field","[","]");
    $ctp->LoadSource($innertext);
    $GLOBALS['autoindex'] = 0;
	$revalue='';
    while($row = $dsql->GetArray())
    {
        $GLOBALS['autoindex']++;
		
		$row['url']="{$GLOBALS['cfg_cmsurl']}/visa/show_{$row['aid']}.html";
		$row['letter']=$row['needletter']==1 ? '需要' : '不需要';
		$row['interview']=$row['needinterview']==1 ? '需要' : '不需要';
		$row['visatype']=getVisaTypeName($row['visatype']);
		
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
function getVisaTypeName($id)
{
	global $dsql;
	$sql="select kindname from #@__visa_kind where id='$id'";
	$row=$dsql->GetOne($sql);
	return $row['kindname'];
	
}