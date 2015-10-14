<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin/public/css/common.css"/>
    <meta charset="utf-8">
<title>专题添加/修改</title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_js');  ?>
    <?php echo Common::getCss('style.css,base.css,base2.css'); ?>
    <?php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,imageup.js,jquery.colorpicker.js"); ?>
    <?php echo Common::getCss('uploadify.css','js/uploadify/'); ?>
</head>
<body>
<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     <?php echo  Stourweb_View::template('stourtravel/public/leftnav');  ?>
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td ">
    <div class="content-nr">
        <!--面包屑-->
        <div class="crumbs">
            <label>位置：</label>
             首页
             &gt; 营销策划
             &gt; 专题管理
             &gt; <span><?php echo $position;?></span>
             
        </div>
      <div class="content-nr">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                 <div class="w-set-tit bom-arrow">
                    <span class="on" id="column_basic" onclick="Product.switchTab(this,'basic')"><s></s>基础信息</span>
                    <span id="column_seo" onclick="Product.switchTab(this,'seo')"><s></s>优化信息</span>
                </div>
              </div>
              <form id="product_fm">
                <div class="product-add-div" id="content_basic">
                    <div class="add-class">
                        <dl>
                            <dt>专题名称：</dt>
                            <dd>
                                <input type="text" name="ztname" data-required="true" id="ztname" value="<?php echo $info['ztname'];?>" class="set-text-xh text_700 w200 mt-2">*
                                <input type="hidden" name="themeid" id="themeid" value="<?php echo $info['id'];?>">
                            </dd>
                        </dl>
                        <dl>
                            <dt>短标题：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_700 mt-2" name="shortname" value="<?php echo $info['shortname'];?>">
                            </dd>
                        </dl>
                       
                        <dl>
                            <dt>专题背景色：</dt>
                            <dd>
                                <input type="text" value="<?php echo $info['bgcolor'];?>" name="bgcolor" class="set-text-xh text_150 mt-2 bg-color">
                            </dd>
                        </dl>
                        
                         <dl>
                            <dt>访问量：</dt>
                            <dd>
                                <input type="text" name="shownum" class="set-text-xh text_150 mt-2 w100" value="<?php echo $info['shownum'];?>"/>
                            </dd>
                        </dl>
                        <dl>
                            <dt>专题介绍：</dt>
                            <dd style="line-height:20px">
                                <?php echo Common::getEditor('jieshao',$info['jieshao'],600,250);?>
                            </dd>
                        </dl>
                    </div>
                     <div class="add-class">
                       <dl> 
                           <dl>
                            <dt>专题横幅：</dt>
                            <dd id="dd_logo">
                               <button id="banner_btn">上传图片</button>
                               <?php
      if($info['logo'])
   echo "<div class='image-dv' id='image_logo'><div><img src=\"".$info['logo']."\"/></div><div><a href='javascipt:;' onClick=\"delImage(this)\">删除</a><input type='hidden' name='logo' value='".$info['logo']."'/></div></div>";   
   ?>
                            </dd>
                        </dl>
                        <dl>
                             <dt>专题背景图片：</dt>
                             <dd id="image_bg">
                                <button id="bg_btn">上传图片</button>
                                <?php
      if($info['bgimage'])
   echo "<div class='image-dv' id='image_bk'><div><img src=\"".$info['bgimage']."\"/></div><div><a href='javascipt:;' onClick=\"delImage(this)\">删除</a><input type='hidden' name='bgimage' value='".$info['bgimage']."'/></div></div>";
   ?>
                             </dd>
                        </dl>
                       </dl>
                     </div>
                </div>
                <div id="content_seo" class="product-add-div content-hide" style="display: none;">
                        <div class="add-class">
                            <dl>
                                <dt>优化标题：</dt>
                                <dd>
                                    <input type="text" name="seotitle" id="seotitle" class="set-text-xh text_700 mt-2" value="<?php echo $info['seotitle'];?>">
                                </dd>
                            </dl>
                            <dl>
                                <dt>Tag词：</dt>
                                <dd>
                                    <input type="text" id="tagword" name="tagword" class="set-text-xh text_700 mt-2 " value="">
                                </dd>
                            </dl>
                            <dl>
                                <dt>关键词：</dt>
                                <dd>
                                    <input type="text" name="keyword" id="keyword" class="set-text-xh text_700 mt-2" value="<?php echo $info['keyword'];?>">
                                </dd>
                            </dl>
                            <dl>
                                <dt>页面描述：</dt>
                                <dd style="height:auto">
                                    <textarea class="set-area wid_695" name="description" id="description" cols="" rows=""><?php echo $info['description'];?></textarea>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </form>
                  <div class="opn-btn">
                      <a class="save ml5" id="btn_save" href="javascript:;">保存</a>
                  </div>
          </div>
    </div>
    </div>
    </div>
    </td>
    </tr>
    </table>
<script>
$(document).ready(function(){
       
        //上传图片
        $('#banner_btn').uploadify({
            'swf': SITEURL + '/public/js/uploadify/uploadify.swf',
            'uploader': SITEURL + '/uploader/uploadfile',
            'buttonImage' : SITEURL+'/public/images/upload-ico.png',  //指定背景图
            'formData':{webid:0,thumb:true},
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'auto': true,   //是否自动上传
            'height': 25,
            'width': 120,
            'multi' : false,
            'removeTimeout':0.2,
            'removeCompleted' : true,
            'onUploadSuccess': function (file, data, response) {
 var imageinfo=$.parseJSON(data);
                  var img=imageinfo.litpic;
                 var pdom=$("#image_logo");

 
 if(pdom.length>0)
 {
 
   var path=pdom.find('input:hidden').val();
   $.ajax({
type: "post",
url : SITEURL+"uploader/delpicture",
dataType:'html',
data:{picturepath:path},
success: function(result){
pdom.remove();
var content="<div class='image-dv' id='image_logo'><div><img src=\""+img+"\"/></div><div><a href='javascript:;' onclick='delImage(this)'>删除</a><input type='hidden' name='logo' value='"+img+"'/></div></div>";
 $("#dd_logo").append(content);
}})
 }
 else
 {
 var content="<div class='image-dv' id='image_logo'><div><img src=\""+img+"\"/></div><div><a href='javascript:;' onclick='delImage(this)'>删除</a><input type='hidden' name='logo' value='"+img+"'/></div></div>";
 $("#dd_logo").append(content);
 }
 
 
            }
        });

$('#bg_btn').uploadify({
            'swf': SITEURL + '/public/js/uploadify/uploadify.swf',
            'uploader': SITEURL + '/uploader/uploadfile',
            'buttonImage' : SITEURL+'/public/images/upload-ico.png',  //指定背景图
            'formData':{webid:0,thumb:true},
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'auto': true,   //是否自动上传
            'height': 25,
            'width': 120,
            'multi' : false,
            'removeTimeout':0.2,
            'removeCompleted' : true,
            'onUploadSuccess': function (file, data, response) {

                var imageinfo=$.parseJSON(data);
                  var img=imageinfo.litpic;
                 var pdom=$("#image_bk");
 if(pdom)
 {
 
   var path=pdom.find('input:hidden').val();
   $.ajax({
type: "post",
url : SITEURL+"uploader/delpicture",
dataType:'html',
data:{picturepath:path},
success: function(result){
pdom.remove();
var content="<div class='image-dv' id='image_bk'><div><img src=\""+img+"\"/></div><div><a href='javascript:;' onclick='delImage(this)'>删除</a><input type='hidden' name='bgimage' value='"+img+"'/></div></div>";
 $("#image_bg").append(content);
}})
 }
 else
 {
 var content="<div class='image-dv' id='image_bk'><div><img src=\""+img+"\"/></div><div><a href='javascript:;' onclick='delImage(this)'>删除</a><input type='hidden' name='bgimage' value='"+img+"'/></div></div>";
 $("#image_bg").append(content);
 }
            }
        });
        //保存
        $("#btn_save").click(function(){
               var ztname = $("#ztname").val();
            //验证名称
             if(ztname==''){
                   $("#nav").find('span').first().trigger('click');
                   $("#ztname").focus();
                   ST.Util.showMsg('请填写专题名称',5,2000);
               }
               else
               {
                   Ext.Ajax.request({
                       url   :  SITEURL+"zhuanti/ajax_save",
                       method  :  "POST",
                       isUpload :  true,
                       form  : "product_fm",
                       datatype  :  "JSON",
                       success  :  function(response, opts)
                       {
                           var id= response.responseText;
                           if(id!='no')
                           {
                               $("#themeid").val(id);
                               ST.Util.showMsg('保存成功!','4',2000);
                           }
                       }});
               }
        })
$(".bg-color").colorpicker({
ishex:true,
success:function(o,color){
$(o).val(color)
},
reset:function(o){

}
});

     });
     function delImage(dom)
 {
 
  var pdom=$(dom).parents(".image-dv").first();
  pdom.remove();
  var path=pdom.find('input:hidden').val();
   $.ajax({
type: "post",
url : SITEURL+"uploader/delpicture",
dataType:'html',
data:{picturepath:path},
success: function(result){

}})
 }
    </script>
</body>
</html>
