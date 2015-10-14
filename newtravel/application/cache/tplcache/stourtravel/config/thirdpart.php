<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>微信微博设置</title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_js');  ?>
    <?php echo Common::getCss('style.css,base.css'); ?>
    <?php echo Common::getScript('config.js');?>
    <?php echo Common::getScript("uploadify/jquery.uploadify.min.js"); ?>
    <?php echo Common::getCss('uploadify.css','js/uploadify/'); ?>
</head>
<body>
<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     <?php echo  Stourweb_View::template('stourtravel/public/leftnav');  ?>
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">
    <div class="content-nr">
        <!--面包屑-->
        <div class="crumbs">
            <label>位置：</label>
             首页
            &gt; 设置中心
            &gt; 基础设置
            &gt; <span>第三方登陆设置</span>
            
        </div>
      <div class="content-nr">
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>第三方登陆</span></div>
          <div class="w-set-nr">
              <div class="picture ml-10">
                  <p>
                  <span class="fl wid_150">QQ号码登录：(App ID)</span>
                    <input type="text" name="cfg_qq_appid" id="cfg_qq_appid" class="set-text-xh text_250 ml-5 mr-30" >&nbsp;&nbsp;<span style="float: left;margin-left: 10px; width:100px">(App Key)</span><input type="text" name="cfg_qq_appkey" id="cfg_qq_appkey" class=" set-text-xh text_250 ml-5"></p>
                  <p><span class="fl wid_150">新浪微博登录：(App Key)</span><input type="text" name="cfg_sina_appkey" id="cfg_sina_appkey" class="set-text-xh text_250 ml-5 mr-30" >&nbsp;&nbsp;<span style="float: left;margin-left: 10px; width:100px"> (App secret key)</span> <input type="text" name="cfg_sina_appsecret" id="cfg_sina_appsecret" class="set-text-xh text_250 ml-5" ></p>
              </div>
            <div class="opn-btn">
            <a class="save ml-10" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </td>
  </tr>
  </table>
  
  
<script>
$(document).ready(function(){
        //配置信息保存
        $("#btn_save").click(function(){
            var webid= 0
            Config.saveConfig(webid);
        })
        getConfig(0);
     });
       //获取配置
        function getConfig(webid)
        {
            Config.getConfig(webid,function(data){
                $("#cfg_qq_appid").val(data.cfg_qq_appid);
                $("#cfg_qq_appkey").val(data.cfg_qq_appkey);
                $("#cfg_sina_appkey").val(data.cfg_sina_appkey);
                $("#cfg_sina_appsecret").val(data.cfg_sina_appsecret);
            })
        }
    </script>
</body>
</html>
