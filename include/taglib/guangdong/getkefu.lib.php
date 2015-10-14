<?php
if(!defined('SLINEINC'))
{
    exit("Request Error!");
}
/**
 * 客服调用数据标签
 *
 * @version        $Id: getkefu.lib.php netman
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2011, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */
 
/*>>sline>>
<name>读取客服信息</name>
<demo>
{sline:getkefu}
  [field:name/]-[field:phone/]-[field:qq/]
{/sline:getkefu}

</demo>

>>sline>>*/
 

function lib_getkefu(&$ctag,&$refObj)
{
    global $dsql;
	include(SLINEDATA."/webinfo.php");
    $attlist="typeid|0,row|20,limit|0";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
	
    extract($ctag->CAttribute->Items, EXTR_SKIP);
	
	//$typeid=isset($refObj->Fields['typeid'])?$refObj->Fields['typeid']:0; //如果没有指定typeid则载入默认客服
	


    $innertext = trim($ctag->GetInnertext());
	
	
	
    $revalue = '';
	$sql="select * from #@__talist where webid=0  limit {$limit},{$row}";

    $dsql->SetQuery($sql);
    $dsql->Execute();
    $ctp = new DedeTagParse();
    $ctp->SetNameSpace("field","[","]");
    $ctp->LoadSource($innertext);
    $GLOBALS['autoindex'] = 0;
    while($row = $dsql->GetArray())
    {
        $GLOBALS['autoindex']++;
		$row['kefuname']=$row['linkname'];
        $row['kefuwork']=$row['work'];
        $row['phone'] = $row['phone'];
		$row['face'] = empty($row['face']) ? $GLOBALS['cfg_templets_skin'] . "/images/pic_tem.gif" : $row['face'];
		$row['year'] = $row['jobtime'] . "年";
        foreach($ctp->CTags as $tagid=>$ctag)
        {
                if($ctag->GetName()=='array')
                {
                        $ctp->Assign($tagid, $row);
                }
                else
                {
                    if( !empty($row[$ctag->GetName()])) $ctp->Assign($tagid,$row[$ctag->GetName()]); 
					else $ctp->Assign($tagid,'');
                }
        }
        $revalue .= $ctp->GetResult();
    }
    return $revalue;
}