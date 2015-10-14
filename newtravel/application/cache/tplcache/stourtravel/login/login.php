<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS3.0网站登陆</title>
    <?php echo Common::getCss('login.css,base.css,style.css'); ?>
    <?php echo Common::getScript('jquery-1.8.3.min.js,common.js,msgbox/msgbox.js,extjs/ext-all-debug.js,extjs/locale/ext-lang-zh_CN.js,jquery.validate.js'); ?>
    <?php echo Common::getCss('msgbox.css','js/msgbox/'); ?>
    <?php echo Common::getCss('common.css')?>
    <script>
        window.SITEURL =  "<?php echo URL::site();?>";
      
    </script>
</head>
<body>
<div class="login-box">
    <div class="head-box">
        <a href="http://www.stourweb.com" target="_blank"><img class="fl" src="<?php echo $GLOBALS['cfg_public_url'];?>images/gw-blank-ico.png" /></a>
    </div>
    <form method="post" id="loginfrm">
    <div class="login-admin">
        <div class="admin-head">
            <p>管理员登录</p>
            <p>当前IP:<?php echo $ip;?></p>
        </div>
        <dl class="zh-password">
            <dt>账号</dt>
            <dd><input type="text" name="username" class="text_250" /></dd>
        </dl>
        <dl class="zh-password">
            <dt>密码</dt>
            <dd><input type="password" name="password" class="text_250" /></dd>
        </dl>
        <dl class="zh-password">
            <dt>验证</dt>
            <dd>
                <input type="text" name="checkcode" class="text_100" />
                <div class="yzm-box"><img src="<?php echo URL::site('captcha');?>" style="cursor:pointer" onClick="this.src=this.src+'?'" title="点击我更换图片" alt="点击我更换图片"></div>
            </dd>
        </dl>
        <a class="login-btn" href="javascript:;">登 陆</a>
        <a class="cancel-btn" href="javascript:;"">重置</a>
    </div>
    </form>
</div>
</body>
<script language="JavaScript">
    $(function(){
        document.onkeydown=function(event){
            if(event.keyCode==13){
                $("#loginfrm").submit();
            }
        }
    })
    var SITEURL='<?php echo URL::site()?>';
    $('.login-btn').click(function(){
        $("#loginfrm").submit();
    })
    $('.cancel-btn').click(function(){
        $('input').val('');
    })
    //表单验证
    $("#loginfrm").validate({
        focusInvalid:false,
        rules: {
            username:
            {
                required: true
            },
            password: {
                required: true,
                rangelength: [6, 16]
            },
            checkcode:{
                required:true
            }
        },
        messages: {
            username:{
                required:"请输入帐号"
            },
            password: {
                required:"请输入密码",
                rangelength:"密码长度为6-16位"
            },
            checkcode:{
                required:'请输入验证码'
            }
        },
        errUserFunc:function(element){
        },
        submitHandler:function(form){
            Ext.Ajax.request({
                url   :  SITEURL+"login/ajax_login",
                method  :  "POST",
                form  : "loginfrm",
                success  :  function(response, opts)
                {
                    var data = $.parseJSON(response.responseText);
                    if(data.status=='checkcode_err'){
                        ST.Util.showMsg('验证码错误',5,1000);
                    }
                    else if(data.status=='password_err'){
                        ST.Util.showMsg('用户名或者密码错误',5,1000);
                    }
                    else if(data.status=='ok'){
                        window.location.href=SITEURL;
                    }
                }});
            return false;//阻止常规提交
        }
    });
</script>
</html>