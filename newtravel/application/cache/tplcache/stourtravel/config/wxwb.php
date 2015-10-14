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
            &gt; 基础设置 &gt;
            <span>微博微信设置</span>
            
        </div>
      <div class="content-nr">
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>微博微信</span></div>
          <div class="w-set-nr">
              <div class="picture ml-10">
                  <div style="width: 100%;height:26px;line-height: 26px">
                      <div style="float: left;width:90px;">微信二维码：</div>
                      <div style="float: left"><input id="file_upload" name="file_upload" type="button"/></div>
                      <div style="float:left;padding-left:10px;"><span onMouseOver="this.className='notices'" onMouseOut="this.className='notice'" class="notice">(推荐大小为124*125)</span></div>
                  </div>
                  <div class="logolist" style="width:100%;padding-left:90px;">
                      <img src="" id="wximg" style="margin: 3px;">
                      <a style="cursor:pointer;" onClick="del()")>删除</a>
                  </div>
                  <p><span class="fl">微博地址：</span><input type="text" name="cfg_weibo_url" id="cfg_weibo_url" class="set-text-xh set-text-bz3" ></p>
              </div>
            <div class="opn-btn">
            <a class="save ml-10" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">
                <input type="hidden" name="cfg_weixin_logo" id="cfg_weixin_logo" value=""/>
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
        //文件上传
        var webid=0;
        $('#file_upload').uploadify({
            'formData'     : {
                'webid':webid,
                'isAd':true
            },
            'swf'      : SITEURL+'public/js/uploadify/uploadify.swf',
            'uploader' : SITEURL+'uploader/uploadfile',
           'buttonImage' : SITEURL+'/public/images/upload-ico.png',
            'fileSizeLimit' : '512KB',
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'cancelImg' : SITEURL+'public/js/uploadify/uploadify-cancel.png',
            'multi' : false,
            'removeCompleted' : true,
            'height':25,
            'width':80,
            'wmode ':'transparent',
            'removeTimeout':0.2,
                onUploadSuccess:function(file,data,response){
                var obj = $.parseJSON(data);
                //var obj = eval('('+data+')');
                if(obj.bigpic!=''){
                    $('#wximg')[0].src=obj.bigpic;
                    $('#cfg_weixin_logo').val(obj.bigpic);
                }
            }
        });
        getConfig(0);
     });
       //获取配置
        function getConfig(webid)
        {
            Config.getConfig(webid,function(data){
                $("#cfg_weibo_url").val(data.cfg_weibo_url);
                if(data.cfg_weixin_logo!='')
                {
                    $("#wximg").attr('src',data.cfg_weixin_logo);
                }
                else
                {
                    $("#wximg").attr('src',SITEURL+'public/images/nopic.jpg');
                }
            })
        }
        //删除图片
        function del()
        {
            var adfile=$("#cfg_weixin_logo").val();
            var webid = 0
            if(adfile=='')
            {
                ST.Util.showMsg('还没有上传图片',1,1000);
            }
            else
            {
                $.ajax({
                    type: "post",
                    data: {picturepath:adfile,webid:webid},
                    url: SITEURL+"uploader/delpicture",
                    success: function(data,textStatus)
                    {
                        if(data=='ok')
                        {
                            $("#adimg")[0].src=SITEURL+'public/images/nopic.jpg';//"{sline:global.cfg_templets_skin/}/images/pic_tem.gif";
                            $("#cfg_weixin_logo").val('');
                        }
                    }
                });
            }
        }
        //获取logo显示位置
        function getLogoDisplay(webid,displayids)
        {
            $.ajax({
                type: "post",
                data: {logodisplay:displayids,webid:webid},
                url: SITEURL+"config/ajax_getlogodisplay",
                success: function(data,textStatus)
                {
                    $("#display_set").html(data)
                }
            });
        }
    </script>
</body>
</html>
