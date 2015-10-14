<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网站Logo</title>
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
            &gt; <span><span id="webname">主站</span>--网站logo</span>
        </div>
      <div class="content-nr">
      <?php echo  Stourweb_View::template('stourtravel/public/weblist');  ?>
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>网站Logo</span></div>
          <div class="w-set-nr">
              <div class="picture ml-10">
                  <div style="width: 100%;height:26px;line-height: 26px">
                      <div style="float: left;width:70px;">网站LOGO：</div>
                      <div style="float: left"><input id="file_upload" name="file_upload" type="button"/></div>
                      <div style="float:left;padding-left:10px;"><span onMouseOver="this.className='notices'" onMouseOut="this.className='notice'" class="notice">(推荐大小为295*80，宽度最大不超过520px)</span></div>
                  </div>
                  <div class="logolist" style="width:100%;padding-left:70px;">
                      <img src="" id="adimg" style="margin: 3px;">
                      <a style="cursor:pointer;" onClick="delad()")>删除</a>
                  </div>
                  <p><span class="fl">LOGO链接：</span><input type="text" name="cfg_logourl" id="cfg_logourl" class="set-text-xh set-text-bz3" ></p>
                  <p><span class="fl">LOGO说明：</span><input type="text" name="cfg_logotitle" id="cfg_logotitle" class="set-text-xh set-text-bz3" ></p>
                  <div class="show-seat">
                      <div class="tit">&nbsp;&nbsp;&nbsp;&nbsp;显示位置：</div>
                         <div id="display_set">
                        </div>
                  </div>
              </div>
            <div class="opn-btn">
            <a class="save ml-10" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">
                <input type="hidden" name="cfg_logo" id="cfg_logo" value=""/>
                <input type="hidden" name="cfg_logodisplay" id="cfg_logodisplay" value=""/>
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
          //子站切换点击
        $(".web-set").find('a').click(function(){
            var webid = $(this).attr('data-webid');
            $("#webid").val($(this).attr('data-webid'));
            $("#webname").html($(this).html());
            $(this).addClass('on').siblings().removeClass('on');
            getConfig(webid);//重新读取配置
        })
        //配置信息保存
        $("#btn_save").click(function(){
            var display = '';
            //显示的栏目
            $("input[name='display']").each(function(){
                if($(this).is(':checked'))
                {
                    display=display+$(this).attr('value')+',';
                }
            })
            $("#cfg_logodisplay").val(display);
            var webid= $("#webid").val();
            Config.saveConfig(webid);
        })
        //文件上传
        var webid=$("#webid").val();
        $('#file_upload').uploadify({
            'formData'     : {
                'webid':webid,
                'thumb':1
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
            'removeTimeout':0.2,
            'wmode ':'transparent',
                onUploadSuccess:function(file,data,response){
                var obj = $.parseJSON(data);
                //var obj = eval('('+data+')');
                if(obj.bigpic!=''){
                    $('#adimg')[0].src=obj.bigpic;
                    $('#cfg_logo').val(obj.bigpic);
                }
            }
        });
        getConfig(0);
     });
       //获取配置
        function getConfig(webid)
        {
            Config.getConfig(webid,function(data){
                $("#cfg_logourl").val(data.cfg_logourl);
                $("#cfg_logotitle").val(data.cfg_logotitle);
                $("#cfg_logo").val(data.cfg_logo);
                $("#cfg_logodisplay").val(data.cfg_logodisplay);
                if(data.cfg_logo!='')
                {
                    $("#adimg").attr('src',data.cfg_logo);
                }
                else
                {
                    $("#adimg").attr('src',SITEURL+'public/images/pic_tem.gif');
                }
                getLogoDisplay(webid,data.cfg_logodisplay);
            })
        }
        //删除图片
        function delad()
        {
            var adfile=$("#cfg_logo").val();
            var webid = $("#webid").val();
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
                            $("#adimg")[0].src=SITEURL+'public/images/pic_tem.gif';//"{sline:global.cfg_templets_skin/}/images/pic_tem.gif";
                            $("#cfg_logo").val('');
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
