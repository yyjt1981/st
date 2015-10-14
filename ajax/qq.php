<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-6-4
 * Time: 上午11:24
 */
require_once(dirname(__FILE__)."/../include/common.inc.php");

if($dopost == 'addqq')
{
    if(!checkQQExist($qq,$linkurl))
    {
        $time = time();
        $nickname = getQQNick($qq);
        $sql = "insert into #@__qq(qq,nickname,refer,pagetitle,linkurl,addtime) values(";
        $sql.= "'{$qq}','{$nickname}','{$refer}','{$pagetitle}','{$linkurl}','{$time}')";
        $dsql->ExecNoneQuery($sql);

    }

}

function checkQQExist($qq,$linkurl)
{
    global $dsql;
    $sql = "select 1 from #@__qq where qq='$qq' and linkurl = '$linkurl'";
    $flag = $dsql->ExecuteNoneQuery2($sql);
    return $flag;
}

function getQQNick($qq)
{
    $str = file_get_contents('http://r.qzone.qq.com/cgi-bin/user/cgi_personal_card?uin='.$qq);
    $pattern = '/'.preg_quote('"nickname":"','/').'(.*?)'.preg_quote('",','/').'/i';
    preg_match ( $pattern,$str, $result );
    return $result[1];
}