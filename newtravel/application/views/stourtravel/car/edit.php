<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,jqtransform.css'); }
    {php echo Common::getCss('ext-theme-neptune-all-debug.css','js/extjs/resources/ext-theme-neptune/'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,st_validate.js,jquery.colorpicker.js,jquery.jqtransform.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>
<script>
$(function(){
		//$('form').jqTransform({imgPath:'<?php echo $GLOBALS['cfg_public_url']; ?>images/img/'});
	});
	</script>


<body>
<!--顶部-->
{php Common::getEditor('jseditor','',700,300,'Sline','','print',true);}
<table class="content-tab">
<tr>
    <td width="119px" class="content-lt-td" valign="top">
        {template 'stourtravel/public/leftnav'}
        <!--右侧内容区-->
    </td>
    <td valign="top" class="content-rt-td" style="overflow:auto;">
        <div class="crumbs">
            <label>位置：</label>首页
            &gt; 产品中心
            &gt; 车辆管理
            &gt; <span>车辆列表</span>


        </div>
        <div class="content-nr">
            <div class="manage-nr">
                <div class="w-set-tit bom-arrow">
                    <span class="on" id="column_basic" onclick="Product.switchTab(this,'basic')"><s></s>基础信息</span>
                    <span id="column_image" onclick="Product.switchTab(this,'image')"><s></s>图片附件</span>
                    <span id="column_youhua" onclick="Product.switchTab(this,'youhua')"><s></s>优化信息</span>

                </div>
                <form id="product_fm">
                <div class="product-add-div" id="content_basic">
                    <div class="add-class">
                        <dl>
                            <dt>站点：</dt>
                            <dd>
                                <select name="webid">

                                    {loop $weblist $k}
                                    <option value="{$k['webid']}" {if $info['webid']==$k['webid']}selected="selected"{/if} >{$k['webname']}</option>
                                    {/loop}
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>车辆名称：</dt>
                            <dd>
                                <input type="text" name="carname" data-required="true" value="{$info['carname']}" class="set-text-xh text_700 mt-2">
                                <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',31);}</div>
                                <input type="hidden" id="carid" name="carid" value="{$info['id']}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>车型：</dt>
                            <dd>
                                <select name="carkindid">

                                    {loop $carkindidlist $k}
                                    <option value="{$k['id']}" {if $info['carkindid']==$k['id']}selected="selected"{/if} >{$k['kindname']}</option>
                                    {/loop}
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>品牌：</dt>
                            <dd>
                                <select name="carbrandid">

                                    {loop $carbrandidlist $k}
                                    <option value="{$k['id']}" {if $info['carbrandid']==$k['id']}selected="selected"{/if} >{$k['kindname']}</option>
                                    {/loop}
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>座位数：</dt>
                            <dd>
                                <input type="text" name="seatnum" data-regrex="number"  data-msg="必须为数字" value="{$info['seatnum']}" class="set-text-xh text_100 mt-2">
                            </dd>
                        </dl>
                        <dl>
                            <dt>建议乘客数：</dt>
                            <dd>
                                <input type="text" name="maxseatnum" value="{$info['maxseatnum']}" data-regrex="number"  data-msg="必须为数字" class="set-text-xh text_100 mt-2">
                            </dd>
                        </dl>
                        <dl>
                            <dt>使用年限：</dt>
                            <dd>
                                <input type="text" name="usedyears" data-regrex="number" value="{$info['usedyears']}"  data-msg="必须为数字" class="set-text-xh text_100 mt-2">
                            </dd>
                        </dl>
                        <dl>
                            <dt>咨询电话：</dt>
                            <dd>
                                <input type="text" name="phone" value="{$info['phone']}" class="set-text-xh text_100 mt-2">
                            </dd>
                        </dl>
                    </div>

                    <div class="add-class">
                        <dl>
                            <dt>供应商选择：</dt>
                            <dd>
                                <input type="button" onclick="Product.getSupplier(this,'.supplier-sel',3)" class="btn-sum-xz mt-4" value="选择"/>
                                <div class="save-value-div mt-2 ml-10 supplier-sel">
                                   {if !empty($info['supplier_arr']['suppliername'])}
                                    <span><s onclick="$(this).parent('span').remove()"></s>{$info['supplier_arr']['suppliername']}<input type="hidden" name="supplierlist[]" value="{$info['supplier_arr']['id']}"></span>
                                   {/if}

                                </div>
                            </dd>
                        </dl>
                        <!--<dl>
                            <dt>目的地选择：</dt>
                            <dd>
                                <input type="button" onclick="Product.getDest(this,'.dest-sel',3)" class="btn-sum-xz mt-4" value="选择"/>
                                <div class="save-value-div mt-2 ml-10 dest-sel">
                                    {loop $info['kindlist_arr'] $k $v}
                                     <span><s onclick="$(this).parent('span').remove()"></s>{$v['kindname']}<input type="hidden" name="kindlist[]" value="{$v['id']}"></span>
                                    {/loop}

                                </div>
                            </dd>
                        </dl>-->

                        <dl>
                            <dt>车辆属性：</dt>
                            <dd>
                                <input type="button" class="btn-sum-xz mt-4" onclick="Product.getAttrid(this,'.attr-sel',3)" value="选择"/>

                                <div class="save-value-div mt-2 ml-10 attr-sel">
                                    {loop $info['attrlist_arr'] $k $v}
                                     <span><s onclick="$(this).parent('span').remove()"></s>{$v['attrname']}<input type="hidden" name="attrlist[]" value="{$v['id']}"></span>
                                    {/loop}

                                </div>
                            </dd>
                        </dl>


                    </div>

                    <div class="add-class">
                        <dl>
                            <dt style="float:left">车辆介绍：</dt>
                            <dd style="float:left">
                                <textarea name="content"  id="txt_content">{$info['content']}</textarea>
                            </dd>
                        </dl>
                        <dl>
                            <dt style="float:left">温馨提示：</dt>
                            <dd style="float:left">
                                <textarea name="notice" id="txt_notice">{$info['notice']}</textarea>
                            </dd>
                        </dl>
                    </div>

                    <div class="add-class">
                        <dl>
                            <dt>图标设置：</dt>
                            <dd>
                                <input type="button" class="btn-sum-xz mt-4" onclick="Product.getIcon(this,'.icon-sel')" value="选择"/>
                                <div class="save-value-div mt-2 ml-10 icon-sel">

                                        {loop $info['iconlist_arr'] $k $v}
                                         <span><s onclick="$(this).parent('span').remove()"></s><img src="{$v['picurl']}"><input type="hidden" name="iconlist[]" value="{$v['id']}"></span>
                                        {/loop}

                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>显示数据：</dt>
                            <dd>
                                <span class="fl">推荐次数</span>
                                <input type="text" name="frecommend" value="{$info['frecommend']}" class="set-text-xh text_60 mt-2 ml-10 mr-30">
                                <span class="fl" name="satisfyscore">满意度</span>
                                <input type="text" name="satisfyscore" class="set-text-xh text_60 mt-2 ml-10 mr-30" value="{$info['satisfyscore']}">
                                <span class="fl">销量</span>
                                <input type="text" name="bookcount" class="set-text-xh text_60 mt-2 ml-10" value="{$info['bookcount']}">
                            </dd>
                        </dl>
                    </div>

                </div>
                <div class="product-add-div content-hide" id="content_image">

                        <div class="up-pic">
                            <dl>
                                <dt>租车相册：</dt>
                                <dd>
                                    <div class="up-file-div">
                                        <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                    </div>
                                    <div class="up-list-div">
                                        <ul class="pic-sel">
                                        </ul>
                                        <input id="litpic" type="hidden" value="{$info['litpic']}"/>
                                        <input type="hidden" class="headimgindex" name="imgheadindex" value="<?php  echo $head_index;  ?>">
                                    </div>
                                </dd>
                            </dl>


                        </div>
                    </div>
                <div class="product-add-div content-hide" id="content_youhua">
                    <div class="add-class">
                        <dl>
                            <dt>优化标题：</dt>
                            <dd>
                                <input type="text" name="seotitle" id="seotitle" class="set-text-xh text_700 mt-2" value="{$info['seotitle']}" >
                            </dd>
                        </dl>
                        <dl>
                            <dt>Tag词：</dt>
                            <dd>

                                <input type="text" id="tagword" name="tagword" class="set-text-xh text_700 mt-2 " value="{$info['tagword']}" >
                            </dd>
                        </dl>
                        <dl>
                            <dt>关键词：</dt>
                            <dd>
                                <input type="text" name="keyword" id="keyword" name="keyword" class="set-text-xh text_700 mt-2" value="{$info['keyword']}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>页面描述：</dt>
                            <dd style="height:auto">
                                <textarea class="set-area wid_695"  name="description" id="description" cols="" rows="">{$info['description']}</textarea>
                            </dd>
                        </dl>

                    </div>
                </div>
                </form>
                <div class="opn-btn">
                    <a class="save ml-20" id="save_btn" href="javascript:;">保存</a>
                    <a class="next" href="javascript:;">下一步</a>
                </div>
            </div>
        </div>
    </td>
</tr>


<!--左侧导航区-->

<!--右侧内容区-->

<script>
 $(document).ready(function(e) {
     window.content=window.JSEDITOR('txt_content');
     window.content.ready(function(){
          window.content.setHeight(200);
     })

     window.notice=window.JSEDITOR('txt_notice');
     window.notice.ready(function(){
             window.notice.setHeight(200);
         })

     $("#product_fm input").st_readyvalidate();

     $("#save_btn").click(function(e) {
         var validate=$("#product_fm input").st_govalidate({require:function(element,index){
             $(element).css("border","1px solid red");
             if(index==1)
             {
                 var switchDiv=$(element).parents(".product-add-div").first();
                 if(switchDiv.is(":hidden")&&!switchId)
                 {
                     var switchId=switchDiv.attr('id');
                     var columnId=switchId.replace('content','column');
                     $("#"+columnId).trigger('click');
                 }

             }
         }});
         if(validate==true)
         {
             ST.Util.showMsg('保存中',6,10000);
             Ext.Ajax.request({
                 url   :  SITEURL+"car/ajax_carsave",
                 method  :  "POST",
                 isUpload :  true,
                 form  : "product_fm",
                 datatype  :  "JSON",
                 success  :  function(response, opts)
                 {
                     var text = response.responseText;
                     if(window.isNaN(text))
                     {
                         ZENG.msgbox._hide();
                         ST.Util.showMsg('保存失败',5);
                     }
                     else
                     {
                         // Ext.get('line_id').setValue(text);
                         $("#carid").val(text);
                         ST.Util.showMsg('保存成功',4)
                     }
                 }});

         }
         else
         {
             ST.Util.showMsg("请将信息填写完整",1,1200);
         }
     });



     $('#pic_btn').uploadify({
         'swf': SITEURL + '/public/js/uploadify/uploadify.swf',
         'uploader': SITEURL + '/uploader/uploadfile',
         'buttonImage' : SITEURL+'/public/images/upload-ico.png',  //指定背景图
         'formData':{webid:0,thumb:true},
         'auto': true,   //是否自动上传
         'removeTimeout':0.2,
         'height': 25,
         'width': 80,
         'removeCompleted' : true,
         'onUploadSuccess': function (file, data, response) {
             var imageinfo=$.parseJSON(data);
             Imageup.genePic(imageinfo.litpic,".up-list-div ul");
         }
     });








 });



</script>

<script>

    {if $action=='edit'}
        var piclist = ST.Modify.getUploadFile({$info['piclist_arr']});
        $(".pic-sel").html(piclist);
        var litpic = $("#litpic").val();
        $(".img-li").find('img').each(function(i,item){

            if($(item).attr('src')==litpic){
                var obj = $(item).parent().find('.btn-ste')[0];
                Imageup.setHead(obj,i+1);
            }
        })
        window.image_index= $(".pic-sel").find('li').length;//已添加的图片数量
    {/if}
 </script>
</body>
</html>
