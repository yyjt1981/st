<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,jqtransform.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,DatePicker/WdatePicker.js,product_add.js,st_validate.js,jquery.colorpicker.js,jquery.jqtransform.js,imageup.js"); }
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
            <label>位置：</label>
            首页
            &gt; 产品管理
            &gt; 团购管理
            &gt; <span>{$position}</span>

        </div>
        <div class="content-nr">
            <div class="manage-nr">
                <div class="w-set-tit bom-arrow">
                    <span class="on" id="column_basic" onclick="Product.switchTab(this,'basic')"><s></s>基础信息</span>
                    <span id="column_image" onclick="Product.switchTab(this,'image')"><s></s>图片附件</span>
                    <span id="column_image" onclick="Product.switchTab(this,'seo')"><s></s>优化信息</span>
                </div>
                <form id="product_fm">
                <div class="product-add-div" id="content_basic">
                    <div class="add-class">
                        <dl>
                            <dt>团购名称：</dt>
                            <dd>
                                <input type="text" name="title" data-required="true" value="{$info['title']}" class="set-text-xh text_700 mt-2">
                                <input type="hidden" name="tuanid" id="tuanid" value="{$info['id']}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>简短名称：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_700 mt-2" name="shortname" value="{$info['shortname']}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>团购时间：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_150 mt-2 choosetime" data-required="true" name="starttime" value="<?php
                                if($info['starttime'])
                                echo date('Y-m-d',$info['starttime']);?>">
                                <span class="fl ml-10">至</span>
                                <input type="text" class="set-text-xh text_150 mt-2 ml-10 choosetime" data-required="true" name="endtime" value="<?php
                                if($info['endtime'])
                                echo date('Y-m-d',$info['endtime']);?>">
                            </dd>
                        </dl>
                        <dl>
                            <dt>团购券有效期：</dt>
                            <dd>
                                <input type="text" name="validdate" class="set-text-xh text_150 mt-2" value="{$info['validdate']}">
                            </dd>
                        </dl>

                        <dl>
                            <dt>供应商：</dt>
                            <dd>
                                <input type="button" class="btn-sum-xz mt-4" value="选择" onclick="Product.getSupplier(this,'.supplier-sel')">
                                <div class="save-value-div mt-2 ml-10 supplier-sel">
                                    {if !empty($info['supplier_arr']['suppliername'])}
                                    <span><s onclick="$(this).parent('span').remove()"></s>{$info['supplier_arr']['suppliername']}<input type="hidden" name="supplierlist[]" value="{$info['supplier_arr']['id']}"></span>
                                    {/if}
                                </div>
                            </dd>
                        </dl>
                    </div>

                    <div class="add-class">
                        <dl>
                            <dt>目的地选择：</dt>
                            <dd>

                                <input type="button" onclick="Product.getDest(this,'.dest-sel',13)" class="btn-sum-xz mt-4" value="选择"/>
                                <div class="save-value-div mt-2 ml-10 dest-sel">
                                    {loop $info['kindlist_arr'] $k $v}
                                    <span><s onclick="$(this).parent('span').remove()"></s>{$v['kindname']}<input type="hidden" name="kindlist[]" value="{$v['id']}"></span>
                                    {/loop}

                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>产品属性：</dt>
                            <dd>
                                <input type="button" class="btn-sum-xz mt-4" onclick="Product.getAttrid(this,'.attr-sel',13)" value="选择"/>

                                <div class="save-value-div mt-2 ml-10 attr-sel">
                                    {loop $info['attrlist_arr'] $k $v}
                                    <span><s onclick="$(this).parent('span').remove()"></s>{$v['attrname']}<input type="hidden" name="attrlist[]" value="{$v['id']}"></span>
                                    {/loop}
                                </div>
                            </dd>
                        </dl>
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
                            <dt>原价：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="sellprice" value="{$info['sellprice']}">
                                <span class="fl ml-10">元</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>团购价：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="ourprice" value="{$info['ourprice']}">
                                <span class="fl ml-10">元</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>产品数量：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="totalnum" value="{$info['totalnum']}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>虚拟购买人数：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="virtualnum" value="{$info['virtualnum']}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>购买送积分：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="jifenbook" value="{$info['jifenbook']}">
                                <span class="fl ml-10">元</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>积分抵现金：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="jifentprice" value="{$info['jifentprice']}">
                                <span class="fl ml-10">元</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>评论送积分：</dt>
                            <dd>
                                <input type="text" class="set-text-xh text_100 mt-2" name="jifencomment" value="{$info['jifencomment']}">
                                <span class="fl ml-10">元</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>支付方式：</dt>
                            <dd>
                                <div class="on-off">
                                    <label style="cursor:pointer">
                                      	<input class="fl mt-8 mr-3" type="radio" name="paytype" value="1" {if $info['paytype']=='1'}checked="checked"{/if} /><span class="fl mr-20">全款支付</span>
                                      </label>
                                      <label style="cursor:pointer">
                                      	<input class="fl mt-8 mr-3" type="radio" name="paytype" value="2" {if $info['paytype']=='2'}checked="checked"{/if} /><span class="fl mr-5">定金支付</span>
                                      </label>
                                      	<span class="fl" id="dingjin" style="{if $info['paytype'] == '2'}display:inline-block{else}display: none{/if}">
                                      		<input type="text"  name="dingjin" id="dingjintxt" value="{$info['dingjin']}" size="8" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9-\.]+/,'');}).call(this)" onblur="this.v();">&nbsp;元
                                        </span>
                                      <label style="cursor:pointer">
                                      	<input class="fl mt-8 ml-20 mr-3" type="radio" name="paytype" value="3"  {if $info['paytype']=='3'}checked="checked"{/if} /><span class="fl mr-20">二次确认支付</span>
                                      </label>
                                    <script>
                                        $("input[name='paytype']").click(function(){
                                            if($(this).val() == 2)
                                            {
                                                $("#dingjin").show();
                                            }
                                            else
                                            {

                                                $("#dingjin").hide()
                                            }
                                        })

                                    </script>

                                </div>
                            </dd>
                        </dl>
                    </div>

                    <div class="add-class">
                        <dl>
                            <dt>产品卖点：</dt>
                            <dd>
                                <textarea class="text-area text_700" name="sellpoint" cols="" rows="" style=" height:80px;width:400px">{$info['sellpoint']}</textarea>
                            </dd>
                        </dl>
                        <dl>
                            <dt>产品详细：</dt>
                            <dd style="line-height: 20px">
                                {php Common::getEditor('content',$info['content'],700,200);}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div id="content_image" class="product-add-div content-hide">

                        <div class="up-pic">
                            <dl>
                                <dt>团购相册：</dt>
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
                    <div id="content_seo" class="product-add-div content-hide" >
                        <div class="add-class">
                            <dl>
                                <dt>优化标题：</dt>
                                <dd>
                                    <input type="text" name="seotitle" id="seotitle" class="set-text-xh text_700 mt-2" value="{$info['seotitle']}">
                                </dd>
                            </dl>
                            <dl>
                                <dt>Tag词：</dt>
                                <dd>

                                    <input type="text" id="tagword" name="tagword" class="set-text-xh text_700 mt-2 " value="{$info['tagword']}">
                                </dd>
                            </dl>
                            <dl>
                                <dt>关键词：</dt>
                                <dd>
                                    <input type="text" name="keyword" id="keyword" class="set-text-xh text_700 mt-2" value="{$info['keyword']}">
                                </dd>
                            </dl>
                            <dl>
                                <dt>页面描述：</dt>
                                <dd style="height:auto">
                                    <textarea class="set-area wid_695" name="description" id="description" cols="" rows="">{$info['description']}</textarea>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </form>
                <div class="opn-btn">
                    <a class="save ml-20" id="save_btn" href="javascript:;">保存</a>
                  <!--  <a class="save" href="javascript:;" onclick="nextStep()">下一步</a>-->
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

     /*日历选择*/
     $(".choosetime").click(function(){
         WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd',minDate:'%y-%M-#{%d+1}'})
     })

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
                 url   :  SITEURL+"tuan/ajax_tuansave",
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

                         $("#tuanid").val(text);
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
         'height': 25,
         'width': 80,
         'removeTimeout':0.2,
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
