<?php
/**
 * 会员类
 *
 * @version        $Id: Member.class.php 
 * @package        Stourweb.Libraries
 * @copyright      Copyright (c) 2007 - 2013, Stourweb, Inc.
 * @license        http://www.stourweb.com
 */
 class Member{
 
    var $uid;
    var $username;
    var $logintime;
	var $keeptime;
	var $jifen;
	var $rank;
	var $email;
    var $fields;
	var $table='#@__member';
	var $db;
	//构造函数
	function __construct($kptime = -1)
    {
	  $this->keeptime=$kptime;
	  $this->db=$GLOBALS['dsql'];
	  $this->uid = $this->GetNum(GetCookie("UserId"));
	  $this->username=GetCookie("UserName");
      $this->logintime = GetCookie("LoginTime");
	  
	}
	
	//QQ登陆(由于腾讯的原因,不能绑定用户,需要直接登陆)
	function loginByQQ($connectid)
	{
		
		$status=0;
		
		$sql="select * from $this->table where `connectid`='$connectid' and `from`='qq'";
		
		$row=$this->db->GetOne($sql);
		if($row)
		{
		   $this->uid=$row['mid'];//用户id
		   $this->username=$row['nickname'];
		   $this->logintime=time();
		   $this->email=$row['email'];
		   $this->jifen=!empty($row['jifen']) ? $row['jifen'] : 0;
		   $this->putLoginInfo($this->uid,$this->keeptime);
		   $status=1;//登陆成功
		}
		return $status;
	    	
   		
	}
	
	//登陆函数(邮箱或者手机号登陆)
	function login($uid,$pwd,$thirdpart=false)
	{
		
		$status=0;
		$status1=$this->loginByMobile($uid,$pwd,$thirdpart);
		
		if($status1)
		{
		  
		   $user=$this->getUserInfo($uid,$pwd,$thirdpart);
		   $this->uid=$user['mid'];//用户id
		   $this->username=$user['nickname'];
		   $this->logintime=time();
		   $this->email=$user['email'];
		   $this->jifen=200;
		  
		   
		   $this->putLoginInfo($this->uid,$this->keeptime);
		   $status=1;//登陆成功
			
		}
		else //如果手机登陆不成功,则使用邮箱登陆
		{
			  
			$status2=$this->loginByEmail($uid,$pwd,$thirdpart);
			if($status2)
			{
			   	 $user=$this->getUserInfo($uid,$pwd,$thirdpart);
				 $this->uid=$user['mid'];//用户id
		         $this->username=$user['nickname'];
				 
		         $this->logintime=time();
				 $this->email=$user['email'];
				 $this->jifen=!empty($user['jifen']) ? $user['jifen'] : 0;
		         $this->putLoginInfo($this->uid,$this->keeptime);
				
				 $status=1;//登陆成功
			}
			else
			{
                $sql="select * from $this->table where mid='$uid' and pwd='$pwd'";
		        $row=$this->db->GetOne($sql);
		        if(!empty($row))
				{
                 $this->uid=$row['mid'];//用户id
		         $this->username=$row['nickname'];
				 
		         $this->logintime=time();
				 $this->email=$row['email'];
				 $this->jifen=!empty($row['jifen']) ? $user['jifen'] : 0;
		         $this->putLoginInfo($this->uid,$this->keeptime);
				
				 $status=1;//登陆成功
				}
			}
		
			
		}
		return $status;
		
		
	}
	
	//退出登陆
	function loginOut()
	{
		
        $this->mid='';
        $this->username='';
   
        DropCookie('UserId');
		DropCookie('UserName');
        DropCookie('LoginTime');
		return 1;
   
	}
	
	
	//通过手机登陆
	function loginByMobile($mobile,$pwd,$thirdpart)
	{
		$flag=0;
		$pwd=$thirdpart ? $pwd : md5($pwd);
		
		$sql="select count(*) as num from $this->table where mobile='$mobile' and pwd='$pwd'";
		$row=$this->db->GetOne($sql);
		if($row['num']==1)$flag=1;
		return $flag;
	}
	
	//通过邮箱登陆
	function loginByEmail($email,$pwd,$thirdpart)
	{
		$flag=0;
		$pwd=$thirdpart ? $pwd : md5($pwd);
		$sql="select count(*) as num from $this->table where email='$email' and pwd='$pwd'";
		$row=$this->db->GetOne($sql);
		if($row['num']==1)$flag=1;
		return $flag;
	}
	
	//获取用户信息
	function getUserInfo($uid,$pwd,$thirdpart=false)
	{
		$pwd=$thirdpart ? $pwd : md5($pwd);
		$sql="Select * from {$this->table} where (mobile='$uid' or email='$uid') and pwd='$pwd'";
		$arr=$this->db->GetOne($sql);
		return $arr;
		
		
	}
	//根据mid获取用户信息()
	function getInfoByMid($mid)
	{
		$sql="select * from {$this->table} where mid='$mid'";
		$arr=$this->db->GetOne($sql);
		return $arr;
		
	}
	
	function putLoginInfo($uid, $logintime=0)
    {
        global $cfg_login_adds, $dsql;
        //登录增加积分(上一次登录时间必须大于两小时)
        if(time() - $logintime > 7200 )
        {
            $dsql->ExecuteNoneQuery("Update `#@__member` set `jifen`=`jifen`+2 where mid='$uid' ");
        }
        $this->uid = $uid;
        $this->logintime = time();
        $loginip = GetIP();
        $inquery = "UPDATE `#@__member` SET loginip='$loginip',logintime='".$this->logintime."' WHERE mid='".$uid."'";
        $this->db->ExecuteNoneQuery($inquery);
        if($this->keeptime > 0)
        {
            
			PutCookie('UserName',$this->username,$this->keeptime);
			PutCookie('UserId',$uid,$this->keeptime);
            PutCookie('LoginTime',$this->logintime,$this->keeptime);
        }
        else
        {
            PutCookie('UserId',$uid);
			PutCookie('UserName',$this->username);
            PutCookie('LoginTime',$this->logintime);
        }
    }
	 /**
     *  验证用户是否已经登录
     *
     * @return    bool
     */
    function isLogin()
    {
        if($this->uid > 0) return TRUE;
        else return FALSE;
    }
	 /**
     *  获取整数值
     *
     * @access    public
     * @param     string  $fnum  处理的数值
     * @return    string
     */
    function getNum($fnum){
        $fnum = preg_replace("/[^0-9\.]/", '', $fnum);
        return $fnum;
    }
	
	
	
 	
 
 }




 ?>