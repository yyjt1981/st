<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>水印设置</title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_js');  ?>
    <?php echo Common::getCss('style.css,base.css,jqtransform.css'); ?>
    <?php echo Common::getScript('config.js,jquery.jqtransform.js,jquery.colorpicker.js');?>
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
            &gt; <span>水印设置</span>
            
        </div>
      <div class="content-nr">
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>水印设置</span></div>
          <div class="w-set-nr">
              <div class="water-mark ml-10">
                      <div class="rowElem">
                          <label>功能开关：</label>
                          <input type="radio" name="photo_markon" value="1" <?php if($markinfo['photo_markon']==1) { ?>checked<?php } ?>
>
                          <label>开启</label>
                          <input type="radio" name="photo_markon" value="0" <?php if($markinfo['photo_markon']==0) { ?>checked<?php } ?>
>
                          <label>关闭</label>
                      </div>
                      <div class="rowElem">
                          <label>水印类型：</label>
                          <p id="wz" class="fl">
                              <input type="radio"  name="photo_marktype" value="text" <?php if($markinfo['photo_marktype']=='text') { ?>checked<?php } ?>
>
                              <label>文字</label>
                          </p>
                          <p id="tp" class="fl">
                              <input type="radio"  name="photo_marktype" value="img" <?php if($markinfo['photo_marktype']=='img') { ?>checked<?php } ?>
>
                              <label>图片</label>
                          </p>
                      </div>
                  <div class="writing">
                      <p><span class="fl">水印文字：</span><input type="text" name="photo_marktext" id="photo_marktext" class="set-text-xh set-text-bz1" value="<?php echo $markinfo['photo_marktext'];?>" /></p>
                      <p><span class="fl">文字大小：</span><input type="text" name="photo_fontsize" id="photo_fontsize" class="set-text-xh set-text-bz2" value="<?php echo $markinfo['photo_fontsize'];?>" /><span class="ml-5">px</span></p>
                      <p><span class="fl">文字颜色：</span><input type="text" name="photo_fontcolor" id="photo_fontcolor" class="set-text-xh set-text-bz2 colorpicker" value="<?php echo $markinfo['photo_fontcolor'];?>" /></p>
                  </div>
                  <div class="picture" style="<?php if((empty($markinfo['photo_marktype']) || $markinfo['photo_marktype']=='text')) { ?> display:none;<?php } ?>
 height: 100px;">
                      <div style="float: left;padding:10px 0;"><span class="fl"><label>水印图片：</label></span><div class="fl" style="margin: 0 4px;"><input id="file_upload" name="file_upload" type="button"/> <span class="fl"><img id="markimg" src="<?php echo $markinfo['markimgurl'];?>" width="136" height="34" /></span></div></div>
                  </div>
                  <div class="pellucidity">
                      <label>&nbsp;&nbsp;&nbsp;&nbsp;透明度：</label>
                      <input type="text" id="photo_diaphaneity" name="photo_diaphaneity" class="set-text-xh set-text-bz2" value="<?php echo $markinfo['photo_diaphaneity'];?>" />
                      <span class="ml-5"></span>
                  </div>
                  <div class="water-place">
                      <label>水印位置：</label>
                          <table width="270" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="1" <?php if($markinfo['photo_waterpos']==1) { ?>checked<?php } ?>
></td>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="2" <?php if($markinfo['photo_waterpos']==2) { ?>checked<?php } ?>
></td>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="3" <?php if($markinfo['photo_waterpos']==3) { ?>checked<?php } ?>
></td>
                              </tr>
                              <tr>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="4" <?php if($markinfo['photo_waterpos']==4) { ?>checked<?php } ?>
></td>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="5" <?php if($markinfo['photo_waterpos']==5) { ?>checked<?php } ?>
></td>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="6" <?php if($markinfo['photo_waterpos']==6) { ?>checked<?php } ?>
></td>
                              </tr>
                              <tr>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="7" <?php if($markinfo['photo_waterpos']==7) { ?>checked<?php } ?>
></td>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="8" <?php if($markinfo['photo_waterpos']==8) { ?>checked<?php } ?>
></td>
                                  <td width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="9" <?php if($markinfo['photo_waterpos']==9) { ?>checked<?php } ?>
></td>
                              </tr>
                              <tr>
                                  <td colspan="3" width="90" height="45" align="center"><input type="radio"  name="photo_waterpos" value="0" <?php if($markinfo['photo_waterpos']==0) { ?>checked<?php } ?>
>随机生成</td>
                              </tr>
                          </table>
                  </div>
              </div>
            <div class="opn-btn">
            <a class="save ml-10" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">
                <input type="hidden" name="photo_markimg" id="photo_markimg" value="<?php echo $markinfo['photo_markimg'];?>">
            </div>
              <div id="colorlist"></div>
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
        //文字和图片切换
        $("#tp").click(function(){
            $(".picture").show()
            $(".writing").hide();
        })
        $("#wz").click(function(){
            $(".writing").show()
            $(".picture").hide()
        })
        $("#markimg").load(function(){
            $(".picture").css('height',$(this).height()+50);
        });
         var v = $("input[name='photo_marktype']").val();
        if(v == 'img')
        {
            $("#tp").trigger('click');
        }
        //配置信息保存
        $("#btn_save").click(function(){
            var url = SITEURL+"config/ajax_savewatermark";
            var frmdata = $("#configfrm").serialize();
            $.ajax({
                type:'POST',
                url:url,
                dataType:'json',
                data:frmdata,
                success:function(data){
                    if(data.status==true)
                    {
                        ST.Util.showMsg('保存成功',4);
                    }
                }
            })
        })
        //文件上传
        var webid=$("#webid").val();
        $('#file_upload').uploadify({
            'formData'     : {
                'webid':webid,
                'isAd':true
            },
            'swf'      : SITEURL+'public/js/uploadify/uploadify.swf',
            'uploader' : SITEURL+'uploader/uploadmarkimg',
            'buttonImage' : SITEURL+'/public/images/upload-ico.png',  //指定背景图
            'fileSizeLimit' : '512KB',
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'cancelImg' : SITEURL+'public/js/uploadify/uploadify-cancel.png',
            'multi' : false,
            'removeCompleted' : true,
            'height':25,
            'width':80,
            'wmode ':'transparent',
            'removeTimeout':0.1,
                onUploadSuccess:function(file,data,response){
                var obj = $.parseJSON(data);
                //var obj = eval('('+data+')');
                if(obj.bigpic!=''){
                    $('#markimg')[0].src=obj.bigpic+'?v=2014';
                    $('#photo_markimg').val(obj.bigpic);
                  /*  $("#markimg").load(function(){
                        $(".picture").css('height',$(this).height()+50);
                    });*/
                }
            }
        });
        //jq
        $('form').jqTransform({imgPath:SITEURL+'public/images/img/'});
        //颜色选择
        $(".colorpicker").colorpicker({
            ishex:false,
            success:function(o,color){
                $(o).val(color)
            },
            reset:function(o){
            }
        });
    })
    </script>
</body>
</html>
