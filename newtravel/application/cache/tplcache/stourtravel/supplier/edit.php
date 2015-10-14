<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS3.0</title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_js');  ?>
    <?php echo Common::getCss('style.css,base.css'); ?>
    <?php echo Common::getScript("jquery.validate.js"); ?>
    <?php echo Common::getScript("uploadify/jquery.uploadify.min.js"); ?>
    <?php echo Common::getCss('uploadify.css','js/uploadify/'); ?>
   <style>
        .error{
            color:red;
            padding-left:5px;
        }
    </style>
</head>
<body style="background-color: #fff">
   <form id="frm" name="frm">
    <div class="out-box-con">
        <dl class="list_dl">
            <dt class="wid_90">供应商名称：</dt>
            <dd>
                 <input type="text" class="set-text-xh mt-4 w400" name="suppliername" id="suppliername" value="<?php echo $info['suppliername'];?>" >
            </dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">联系人：</dt>
            <dd><input type="text" class="set-text-xh text_200 mt-4"  name="linkman" id="linkman" value="<?php echo $info['linkman'];?>" ></dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">座机：</dt>
            <dd><input type="text" class="set-text-xh text_200 mt-4" name="telephone" id="telephone" value="<?php echo $info['telephone'];?>" ></dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">手机：</dt>
            <dd><input type="text" class="set-text-xh text_200 mt-4" name="mobile" id="mobile" value="<?php echo $info['mobile'];?>" ></dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">传真：</dt>
            <dd><input type="text" class="set-text-xh text_200 mt-4" name="fax" id="fax" value="<?php echo $info['fax'];?>" ></dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">QQ：</dt>
            <dd><input type="text" class="set-text-xh text_200 mt-4" name="qq" id="qq" value="<?php echo $info['qq'];?>" ></dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">地址：</dt>
            <dd><input type="text" class="set-text-xh w400 mt-4" name="address" id="address" value="<?php echo $info['address'];?>" ></dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90" style="height: 118px">标识：</dt>
            <dd>
                <div class="up-file-div lh30 mt5 fl">
                    <div id="file_upload" class="btn-file mt-4">上传图片</div>
                    <?php if(!empty($info['litpic'])) { ?>
                    <div id="img"><img id="litimg" src="<?php echo $info['litpic'];?>" width="100" height="80"   /></div>
                    <?php } else { ?>
                    <div id="img"><img id="litimg" src="<?php echo Common::getDefaultImage();?>" width="100" height="80" /></div>
                    <?php } ?>
                </div>
            </dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">&nbsp;</dt>
            <dd>
                <a class="default-btn wid_60" id="btn_save" href="javascript:;">保存</a>
                <input type="hidden" id="id" name="id" value="<?php echo $info['id'];?>">
                <input type="hidden" name="action" value="<?php echo $action;?>">
                <input type="hidden" name="litpic" id="litpic" value="<?php echo $info['litpic'];?>">
            </dd>
        </dl>
    </div>
   </form>
<script language="JavaScript">
    var action='<?php echo $action;?>';
    //表单验证
    $("#frm").validate({
        focusInvalid:false,
        rules: {
            suppliername:
            {
                required: true
            },
            linkman: {
                required: true
            }
        },
        messages: {
            suppliername:{
                required:"请输入供应商名称"
            },
            linkman: {
                required:"请输入联系人"
            }
        },
        errUserFunc:function(element){
        },
        submitHandler:function(form){
            Ext.Ajax.request({
                url   :  SITEURL+"supplier/ajax_save",
                method  :  "POST",
                isUpload :  true,
                form  : "frm",
                success  :  function(response, opts)
                {
                    var data = $.parseJSON(response.responseText);
                    if(data.status)
                    {
                        $("#id").val(data.productid);
                        ST.Util.showMsg('保存成功!','4',2000);
                    }
                }});
            return false;//阻止常规提交
       }
    });
    $(function(){
        //保存
        $("#btn_save").click(function(){
            $("#frm").submit();
            return false;
        })
        //上传图片
        $('#file_upload').uploadify({
            'swf': SITEURL + '/public/js/uploadify/uploadify.swf',
            'uploader': SITEURL + '/uploader/uploadfile',
            'buttonImage' : SITEURL+'/public/images/upload-ico.png',  //指定背景图
            'formData':{webid:0,thumb:true},
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'auto': true,   //是否自动上传
            'height': 25,
            'width': 120,
            'removeTimeout':0.2,
            'removeCompleted' : true,
            'wmode ':'transparent',
            'multi' : false,
            'onUploadSuccess': function (file, data, response) {
                var obj = $.parseJSON(data);
                if(obj.bigpic!=''){
                    $('#litimg')[0].src=obj.bigpic;
                    $("#litpic").val(obj.bigpic);
                }
            }
        });
    })
</script>
</body>
</html>