<?php 


function getAreaName($id)
{
	global $dsql;
	$sql="select kindname from #@__visa_area where id='$id'";
	$row=$dsql->GetOne($sql);
	return $row['kindname'];	
	
}

function GetPreNext($id)
    {
        global $dsql,$sys_webid;
		
		$aid=$id;
	    $info =array();
      
          
            $preRow =  $dsql->GetOne("Select aid,spotname,shownum From #@__spot where aid<$aid and webid=$sys_webid order by aid desc");
            $nextRow = $dsql->GetOne("Select aid,spotname,shownum From #@__spot where aid>$aid and webid=$sys_webid order by aid asc");

           
            if(is_array($preRow))
            {
                $url = $GLOBALS['cfg_cmsurl']."/spots/show_{$preRow['aid']}.html";
                $info['pre'] = "上一篇：<a href='$url'>{$preRow['spotname']}</a> <span class='color_hong'>{$row['shownum']}</span>";
               
            }
            else
            {
                $info['pre'] = "上一篇：没有了 ";
                
            }
            if(is_array($nextRow))
            {
                $url = $GLOBALS['cfg_cmsurl']."/spots/show_{$nextRow['aid']}.html";
                $info['next'] = "下一篇：<a href='$url'>{$nextRow['spotname']}<span class='color_hong'>{$row['shownum']}</span></a> <span class='color_hong'>{$row['shownum']}</span>";
            }
            else
            {
                $info['next'] = "下一篇：没有了 ";
               
            }
      
      
        return $info;
    }	
	
function getVisaType($id)
{
  	global $dsql;
	$sql="select kindname from #@__visa_kind where id='$id'";
	$row=$dsql->GetOne($sql);
	return $row['kindname'];
}
function getVisaCity($id)
{
  	global $dsql;
	$sql="select kindname from #@__visa_city where id='$id'";
	$row=$dsql->GetOne($sql);
	return $row['kindname'];
}

function getVisaInfo($aid)
{
	global $dsql;
	$sql="select * from #@__visa where aid=$aid";
	$row=$dsql->GetOne($sql);
	return $row;
}

function getidByName($country)
{
   global $dsql;
   $sql="select id from #@__visa_area where kindname like '%$country%'";
   $row=$dsql->GetOne($sql);
   return $row['id'];
	
	
}
function getVisaUrl($aid)
{
  return "{$GLOBALS['cfg_cmsurl']}/visa/show_{$aid}.html";	
}

function getNeed($aid)
{
	$out=$aid==1 ? '需要' :'不需要';
    return $out;
	
}



?>