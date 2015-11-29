<?php

require_once(dirname(__FILE__)."/config.php");
//$ucfile=SLINEDATA.'/ucenter.php';
//if(file_exists($ucfile))
//require_once($ucfile);
$dopost=empty($dopost) ? 'reg' : $dopost;
$pv = new View(0);
//用户注册页面
if($dopost=='reg')
{
	$fromurl = $_SERVER['HTTP_REFERER'];//来源地址
    $msgInfo = Helper_Archive::getDefineMsgInfo2('reg_msgcode');
    if($msgInfo['isopen']==1)
    {
        $GLOBALS['condition']['_msgcode']=1; //短信验证码
        $GLOBALS['condition']['_txtcode']=0; //文字验证码
    }
    else
    {
        $GLOBALS['condition']['_msgcode']=0; //短信验证码
        $GLOBALS['condition']['_txtcode']=1; //文字验证码

    }

	$pv->SetTemplet(MEMBERTEMPLET.'reg.htm');
    $pv->Display();
	exit();
}


//用户注册
if($dopost=='doreg')
{
    $sql = "select id, code from #@__mobile_code where mobile='$mobile' and status=0 ORDER BY createTime DESC limit 1";
    $result = $dsql->GetOne($sql);

    if($result == null || $msgcode != $result['code']){
        $data['status']='invalidCode';
        ShowMsg('验证码输入有误，!',$fromurl,1);
        exit();
    } else{
        $sql = "update #@__mobile_code set status=1 where id=".$result['id'];
        $dsql->ExecuteNoneQuery($sql);
    }

	$pwd=md5($pwd1);
	$jointime=time();
	$joinip=GetIP();
	$jifen=empty($cfg_reg_jifen) ? 0 : $cfg_reg_jifen;//网上注册赠送积分 

	$nickname=substr($mobile,0,5).'***';
	$sql="insert into #@__member(mobile,pwd,jointime,joinip,jifen,nickname) values('$mobile','$pwd','$jointime','$joinip','$jifen','$nickname')";

            #api{{
        if(defined('UC_API') && @include_once SLINEROOT.'/uc_client/client.php')
        {
           $uid = uc_user_register($mobile, $pwd1, $email);
           if($uid <= 0)
            {
               /* if($uid == -1)
                {
                    ShowMsg("用户名不合法！","-1");
                    exit();
                }
                elseif($uid == -2)
                {
                    ShowMsg("包含要允许注册的词语！","-1");
                    exit();
                }
                elseif($uid == -3)
                {
                    ShowMsg("你指定的用户名 {$userid} 已存在，请使用别的用户名！","-1");
                    exit();
                }
                elseif($uid == -5)
                {
                    ShowMsg("你使用的Email 不允许注册！","-1");
                    exit();
                }
                elseif($uid == -6)
                {
                    ShowMsg("你使用的Email已经被另一帐号注册，请使其它帐号","-1");
                    exit();
                }
                else
                {
                    ShowMsg("注册失改！","-1");
                    exit();
                }*/
            }
            else
            {
                $ucsynlogin = uc_user_synlogin($uid);
            }
        }
        #/aip}}
	
	if($dsql->ExecuteNoneQuery($sql))
	{
	    $User=new Member(7*3600);
	
        $User->login($mobile, $pwd1);
		
		$msg='';
		
		$fromurl = empty($fromurl) ? $GLOBAL['cfg_basehost'].'/member/' : $fromurl;
        $msgInfo = Helper_Archive::getDefineMsgInfo(0);

//        if(isset($msgInfo['isopen'])) //如果开启
//        {
//            // $nickname = !empty($nickname) ? $nickname : $mobile;
//            $content = $msgInfo['msg'];
//            $content = str_replace('{#LOGINNAME#}',$mobile,$content);
//            $content = str_replace('{#PASSWORD#}',$pwd1,$content);
//            $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
//            $content = str_replace('{#PHONE#}',$GLOBALS['cfg_phone'],$content);
//            Helper_Archive::sendMsg($mobile,$mobile,$content);//注册短信
//        }
		Helper_Archive::showMsg('注册成功!'.$ucsynlogin,$fromurl,1);
		//ShowMsg("注册成功，正在为你跳转...", $fromurl);
		
		//$content="恭喜你注册成为思途会员，现在你就可以直接登陆我们的网站并使用我们网站的所有功能和查看您的状态。";
		//sendMsg('',$content,$mobile,'','shortmsg');


		
	}
	else
	{
	   $err=$dsql->GetError();
	   echo $err;	
	}
	
	
}



//用户名检测
if($dopost=='checkusername')
{
  $sql="select count(*) as num from #@__member where uname='$username'";
  $row=$dsql->GetOne($sql);
  if($row['num']==0)
  {
	echo 'succeed';    
  }
  else
  {
	 echo '用户名重复,换一个用户名试试';  
  }
  	
}
//手机检测
else if($dopost=='checkmobile')
{
  $sql="select count(*) as num from #@__member where mobile='$mobile'";

  
  $flag = 'false';
  
  $row=$dsql->GetOne($sql);
 
  if($row['num']==0)
  {
	$flag = 'true'; 
  }
  echo $flag;
  	
}
//email检测
else if($dopost=='checkemail')
{
	$sql="select count(*) as num from #@__member where email='$email'";
	
  
  $row=$dsql->GetOne($sql);
  $flag = 'false';
  if($row['num']==0)
  {
	$flag = 'true';    
  }
  echo $flag;
	
}
//验证码检测
else if($dopost=='checkcode')
{
   $scode=strtolower(GetCkVdValue());
   $flag = 'false';
   if($scode==strtolower($checkcode))
   {
	  $flag = 'true';  
   }
  echo $flag;
	
}

//发送短信验证码

else if($dopost=='sendmsgcode')
{
    if(empty($mobile))
    {
        $data['status']='errorMobile';
        echo json_encode($data);
        exit();
    }

    $sql = "select count(*) as totalCount from #@__mobile_code where mobile = '$mobile' and TO_DAYS(createTime)=TO_DAYS(NOW())";
    $result = $dsql->GetOne($sql);
    if($result['totalCount'] >= 5 ){
        $data['status']='hasFull';
        echo json_encode($data);
        exit();
    }

    $code = rand(100000, 999999);
    $text = "您的验证码为：".$code."，5分钟内有效，请尽快验证。如非本人操作，请忽略本短信。【夏令王国】";
    $msg = new ZhiYanMsg();
    $sendResult = $msg->sendMsg($mobile, $text);

    if($sendResult->result != "SUCCESS"){
        $data['status']='sendFailed';
        echo json_encode($data);
        exit();
    }

    $sql="insert into #@__mobile_code(mobile,code,createTime) values('$mobile','$code',now())";
    if($dsql->ExecuteNoneQuery($sql)) {
        $data['status']='hasSend';
    }
    echo json_encode($data);
    exit();
}
//检测短信验证码是否正确
else if($dopost == 'ckcode')
    {
        @session_start();

        echo $_SESSION['msgcode'] == $msgcode ? 'true' : 'false';

    }
//生成随机数
function getRandCode($num)
{
    $out='';
    for ($i=1; $i<=$num; $i++)
    {
        $out.=mt_rand(0,9);
    }
    @session_start();
    $_SESSION['msgcode'] = $out; //设置session值
    //$_SESSION['msgcode'] = '12345';

    return $out;

}



 ?>