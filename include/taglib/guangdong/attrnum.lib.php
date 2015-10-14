<?php
if(!defined('SLINEINC'))
{
    exit("Request Error!");
}
/**
 * 线路属性,数量调用标签
 *
 * @version        $Id: attrnum.lib.php netman
 * @package        Stourweb.Taglib
 * @copyright      Copyright (c) 2007 - 2011, Stourweb, Inc.
 * @link           http://www.stourweb.com
 */
 

 

function lib_attrnum(&$ctag,&$refObj)
{
    global $dsql;
	include(SLINEDATA."/webinfo.php");
    $attlist="typeid|0,row|20,limit|0";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
	
    extract($ctag->CAttribute->Items, EXTR_SKIP);
	


    $innertext = trim($ctag->GetInnertext());
	$groupid = '45';
    $revalue = '';
    $out = array();
    $out[]=array('name'=>'全部','num'=>getLineNumByAttr(0,$w),'attrid'=>0);

	$sql="select * from #@__line_attr where pid='$groupid' and isopen= 1";
    $arr = $dsql->getAll($sql);

    foreach($arr as $r)
    {
      $name= $r['attrname'];
      $num = getLineNumByAttr($r['id']);
      $attrid = $r['id'];
      $out[] = array(
          'name'=>$name,
          'num'=>$num,
          'attrid'=>$attrid

      );
    }

    $ctp = new DedeTagParse();
    $ctp->SetNameSpace("field","[","]");
    $ctp->LoadSource($innertext);
    $GLOBALS['autoindex'] = 0;
    foreach($out as $row)
    {

        foreach($ctp->CTags as $tagid=>$ctag)
        {
                if($ctag->GetName()=='array')
                {
                        $ctp->Assign($tagid, $row);
                }
                else
                {
                    if( !empty($row[$ctag->GetName()])) $ctp->Assign($tagid,$row[$ctag->GetName()]); 
					else $ctp->Assign($tagid,'0');
                }
        }
        $revalue .= $ctp->GetResult();
    }
    return $revalue;
}

//根据属性获取线路数量
function getLineNumByAttr($attrid)
{
    global $dsql;
    $destid = $GLOBALS['dest_id'];

    $w= !empty($destid) ? " and FIND_IN_SET($destid,kindlist) " : '';
    $w.= !empty($attrid) ? " and FIND_IN_SET($attrid,attrid) " : '';
    $sql = "select count(*) as num from #@__line where id>0 {$w}";
    $row = $dsql->GetOne($sql);
    return $row['num'] ? $row['num'] : 0 ;

}