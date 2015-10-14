<?php
require_once(dirname(__FILE__)."/config.php");
$dopost=empty($dopost) ? 'login' : $dopost;
//$dopost='bind';

/*if($cfg_ml->IsLogin())
{
    ShowMsg('你已经登陆系统，无需重新注册！', 'index.php');
    exit();
}*/

$headurl=getenv("HTTP_REFERER");
$headurl=!empty($headurl) ? $headurl : $_SERVER['HTTP_REFERER'];
$pv = new View(0);     
		
//登陆界面
if($dopost=='login')
{
    $fromurl = $_SERVER['HTTP_REFERER'];//来源地址
	$fromurl = strpos($fromurl,'login') ? $GLOBALS['cfg_basehost'] : $fromurl;
	$pv->SetTemplet(MEMBERTEMPLET.'login.htm');
    $pv->Display();
	exit();
}

//登陆验证
if($dopost=='dologin')
{
	
	 //$scode=GetCkVdValue();
	 /*if($scode!=$vdcode)
	 {
		 ShowMsg("请输入正确的验证码!",1,1); 
		 exit;	
	 }*/
    
    $User=new Member(7*3600);
	$flag = $User->login($loginname, $password);
    #api{{
    if(defined('UC_API') && @include_once SLINEROOT.'/uc_client/client.php')
    {
        //检查帐号
        list($uid, $username, $password, $email) = uc_user_login($username, $password);
        if($uid > 0)
        {

            //同步登录的代码
            $ucsynlogin = uc_user_synlogin($uid);
        }
        else if($uid == -1)
        {
            $uid = uc_user_register($loginname, md5($password),'');
            if($uid > 0)
            {
                $ucsynlogin = uc_user_synlogin($uid);
            }
        }
    }
    #/aip}}
	//$requesturl=empty($requesturl)  ? 'index.php' :$requesturl;
	//$requesturl=strpos($requesturl, 'login') === true ? 'index.php' : $requesturl; 
	//$requesturl=strpos($requesturl, 'reg') === true ? 'index.php' : $requesturl; 
	echo $flag;
	
}
//退出登陆
if($dopost == 'logout')
{
	$User->loginOut();
	
	//ShowMsg("成功退出登录！",$GLOBALS['cfg_cmsurl'] . '/');
	header("location:{$GLOBALS['cfg_basehost']}");
	exit();
}

//通过QQ登陆
if($dopost=='loginbyqq')
{
	 session_start();
     $code = $_REQUEST["code"];
	 include (SLINEINC.'/qq.class.php');
	 //$appid='100423525';
	 //$appkey='f833e7f02293ff05dfeb303d71fdf255';
	 $appid=$cfg_qq_appid;
	 $appkey=$cfg_qq_appkey;
	 $callback_url="{$GLOBALS['cfg_basehost']}/member/login.php?dopost=loginbyqq";
	 $qq=new qqPHP($appid,$appkey,$callback_url);

	 if(empty($code))
	 {
		$url=$qq->login_url($_SESSION['state']);
		header("location:$url"); 
	 }
	 else
	 {
		 
		 $token=$qq->access_token($code);//获取access-toking
		 
		 
		 $openid=$qq->get_openid($token); //获取openid
	
		 if(!empty($openid))
		 {
			 $sql="select * from #@__member where `connectid`='$openid' and `from`='qq'";
			
			 $r=$dsql->GetOne($sql);
			 
			 
			 if(!empty($r)) ////QQ已存在于数据库，则直接转向登陆操作
			 {
				/* $user=!empty($r['mobile']) ?  $r['mobile'] : $r['email'];
				 $pass=$r['pwd'];
				 $User=new Member(7*3600);
	             $flag = $User->Login($user, $pass,true);

				 if($flag)
	             {

		              //ShowMsg("通过QQ登陆帐户成功!",$url);
					  header("Location:$url");
			          exit;
	             }*/
				 $User=new Member(7*3600);
	             $flag = $User->loginByQQ($openid);
				 
                 if($flag)
	             {
		              $url="{$GLOBALS['cfg_basehost']}/member";
		              //ShowMsg("通过QQ登陆帐户成功!",$url);
					  header("Location:$url");
			          exit;
	             }
				 
				 
				 
				 
			 }
			 else
			 {
			   //未存在于数据库中，跳转到注册绑定页面绑定用户.介于腾讯的霸王条款,绑定注册页面禁用.
			    $user=$qq->get_user_info($openid,$token);
				
				$_SESSION['connectid'] = $openid;
			    $_SESSION['from'] = 'qq';
				
				/*$pv = new View(0);
				$pv->Fields['nickname']=$user['nickname'];
				$pv->Fields['figureurl']=$user['figureurl'];
				$pv->SetTemplet(dirname(__FILE__) . "/templets/index_connect.htm");
		        $pv->Display();
		        exit();*/
			
				$url="{$GLOBALS['cfg_basehost']}/member/login.php?dopost=savebind&uname=".urlencode($user['nickname']);
				$url.="&pwd=123456789&connectid=".$openid.'&from=qq';
				header("Location:$url");
			    exit;
				
			 }
			 
		 }
		 
	 }
	 
	 
	 
	 
	 
	
}

//通过新浪微博登陆
if($dopost=='loginbysina')
{
	 session_start();
     $code = $_REQUEST["code"];
	 include (SLINEINC.'/sina.class.php');
	 //$appkey='2329402441';
	 //$appsecert='efe3721090316b79c83683ad6e5308ec';

	
	 $appkey=$cfg_sina_appkey;
	 $appsecret=$cfg_sina_appsecret;
	 $callback_url="{$GLOBALS['cfg_basehost']}/member/login.php?dopost=loginbysina";
	 $sina=new sinaPHP($appkey,$appsecret,$callback_url);

	

	 if(empty($code))
	 {
		$url=$sina->login_url();
		header("location:$url"); 
	 }
	 else
	 {
		 $ar=$sina->access_token($code);//获取access-toking
		
		 $sina->access_token=$ar['access_token']; //
		 
		 $me=$sina->get_uid();
	
		 $uid=$me['uid'];
		 $me=$sina->show_user_by_id($uid);
		 

		
		 if(!empty($me['id']))
		 {
	
			 $sql="select * from #@__member where `connectid`='{$me['id']}' and `from`='sina'";
			
			 $r=$dsql->GetOne($sql);
			 
			 
			 if(!empty($r)) ////帐号已存在于数据库，则直接转向登陆操作
			 {
				
				 $user=!empty($r['mobile']) ?  $r['mobile'] : $r['email'];
				 $user=empty($user)?$r['mid']:$user;
				 $pass=$r['pwd'];
				 $User=new Member(7*3600);
	             $flag = $User->login($user, $pass,true);

              
			    if($flag)
	            {
		              $url="{$GLOBALS['cfg_basehost']}/member";
					  header("Location:$url");
					  exit;
		              //ShowMsg("通过新浪微博登陆帐户成功!",$url);
	             }
				  
			 }
			 else
			 {


			
			   //未存在于数据库中，跳转到注册绑定页面绑定用户.

				$_SESSION['connectid'] = $me['id'];
			    $_SESSION['from'] = 'sina';
			/*	$pv = new View(0);
				$pv->Fields['nickname']=$me['screen_name'];
				$pv->Fields['figureurl']=$me['profile_image_url'];
				$pv->SetTemplet(dirname(__FILE__) . "/templets/index_connect.htm");
		        $pv->Display();*/
                 $url="{$GLOBALS['cfg_basehost']}/member/login.php?dopost=savebind&uname=".urlencode($me['screen_name']);
                 $url.="&pwd=123456789&connectid=".$me['id'].'&from=sina';
                 header("Location:$url");

		        exit();
			 }
			 
		 }
		 
	 }
	 
	 
	 
	 
	 
	
}
//test
/*if($dopost=='bind')
{
	$pv = new View(0);
				$pv->Fields['nickname']='netman';
				$pv->Fields['figureurl']='http://qzapp.qlogo.cn/qzapp/111111/942FEA70050EEAFBD4DCE2C1FC775E56/30';
				$pv->SetTemplet(dirname(__FILE__) . "/templets/index_connect.htm");
		        $pv->Display();
		        exit();
	
}
//test
if($dopost=='test')
{
		        $pv = new View(0);
				$pv->Fields['nickname']=$me['screen_name'];
				$pv->Fields['figureurl']=$me['profile_image_url'];
				$pv->SetTemplet(dirname(__FILE__) . "/templets/index_connect.htm");
		        $pv->Display();
		        exit();
	
}*/

//保存绑定(注册)
if($dopost=='savebind')
{
	@session_start();
	$connectid=!empty($connectid) ? $connectid : $_SESSION['connectid'];
	$from=!empty($from) ? $from : $_SESSION['from'];
	
	
	$jointime=time();
	$joinip=GetIP();
	$logintime=$jointime;
	$pass=md5($pwd);
	$jifen=empty($cfg_reg_jifen) ? 0 : $cfg_reg_jifen;//网上注册赠送积分 
	$sql="insert into #@__member(`nickname`,`pwd`,`mobile`,`connectid`,`from`,`jointime`,`joinip`,`logintime`,`email`,`jifen`) values(";
	$sql.="'$uname','$pass','$mobile','$connectid','$from','$jointime','$joinip','$logintime','$email','$jifen')";
	
	if($dsql->ExecuteNoneQuery($sql))
	{
	             $User=new Member(7*3600);
				 if($from=='qq')
				 {
	               $flag= $User->loginByQQ($connectid);
				 
				 }
				 else
				  $flag = $User->login($mobile, $pwd);
				  
				 if($flag)
	             {
		              $url="{$GLOBALS['cfg_basehost']}/member";
		             // ShowMsg("绑定帐户成功!",$url);
					 header("Location:$url");
					 exit;
	             }
	}
	else
	{
	   echo $dsql->GetError();
	   exit;	
	}
	
	
}

//直接绑定帐户
if($dopost=='bind_direct')
{
   	$pv = new View(0);			
	$pv->SetTemplet(dirname(__FILE__) . "/templets/index_connect_direct.htm");
    $pv->Display();
    exit();
	
}

//保存绑定(已有帐户)
if($dopost=='savebind_direct')
{
	session_start();
	$connectid=$_SESSION['connectid'];
	$from=$_SESSION['from'];
	$User=new Member(7*3600);
	$flag = $User->login($loginname, $pwd);
	
	if($flag)
	{
	    $mid=$User->uid;
		$sql="update #@__member set `connectid`='$connectid',`from`='$from' where mid=$mid";
		
		if($dsql->ExecuteNoneQuery($sql))
		{
		   $url="{$GLOBALS['cfg_basehost']}/member";
		   header("Location:$url");
		   exit;
		   //ShowMsg("绑定帐户成功!",$url);
		}	
		
		
	}
	else
	{
	    ShowMsg("登陆名称或者密码输入错误,请检查",-1);
		exit;
	}
	
}




