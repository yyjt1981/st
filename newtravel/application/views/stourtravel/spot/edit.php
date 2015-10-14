<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>景点添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript('config.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,imageup.js,jquery.validate.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>

<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">
    <div class="content-nr">
        <!--面包屑-->
        <div class="crumbs">
            <label>位置：</label>
             首页
             &gt; 产品管理
             &gt; 景点管理
             &gt; <span>{$position}</span>
        </div>
      <div class="content-nr">
          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>基础信息</span>
                  <span data-id="jieshao"><s></s>景点介绍</span>
                  <span data-id="tupian"><s></s>景点图片</span>
                  <span data-id="youhua"><s></s>优化设置</span>
              </div>

               <!--基础信息开始-->
                  <div class="product-add-div">
                      <div class="add-class">
                          <dl>
                              <dt>站点：</dt>
                              <dd>

                                      <select name="webid">
                                          <option value="0" {if $info['webid']==0}selected="selected"{/if}>主站</option>
                                          {loop $weblist $k}
                                            <option value="{$k['webid']}" {if $info['webid']==$k['webid']}selected="selected"{/if} >{$k['webname']}</option>
                                          {/loop}
                                      </select>

                              </dd>
                          </dl>
                          <dl>
                              <dt>景点名称：</dt>
                              <dd>
                                  <input type="text" name="spotname" id="spotname" class="set-text-xh text_700 mt-2 w300"  value="{$info['spotname']}" />
                                  <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',40); }</div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>景点简称：</dt>
                              <dd>
                                  <input type="text" name="shortname" id="shortname" class="set-text-xh text_700 mt-2" value="{$info['shortname']}" />
                                  <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',40); }</div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>景点地址：</dt>
                              <dd>
                                  <input type="text" name="address" id="address" class="set-text-xh text_700 mt-2 w300" value="{$info['shortname']}" />
                                  <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',40); }</div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>想去人数：</dt>
                              <dd>
                                  <input type="text" name="want" id="want" class="set-text-xh text_250 mt-2 w50" value="{$info['want']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>去过人数：</dt>
                              <dd>
                                  <input type="text" name="went" id="went" class="set-text-xh text_250 mt-2 w50" value="{$info['went']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>查看人数：</dt>
                              <dd>
                                  <input type="text" name="shownum" id="shownum" class="set-text-xh text_250 mt-2 w50" value="{$info['shownum']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>景点编辑：</dt>
                              <dd>
                                  <input type="text" name="author" id="author" class="set-text-xh text_250 mt-2" value="{$info['author']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>取票方式：</dt>
                              <dd>
                                  <input type="text" name="getway" id="getway" class="set-text-xh text_250 mt-2" value="{$info['getway']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>靓点：</dt>
                              <dd>
                                  <input type="sellpoint" name="sellpoint" id="sellpoint" class="set-text-xh text_250 mt-2 w640" value="{$info['sellpoint']}" />
                              </dd>
                          </dl>

                          <dl>
                              <dt>供应商：</dt>
                              <dd>
                                  <input type="button" class="btn-sum-xz mt-4" onclick="Product.getSupplier(this,'.supplier-sel')" value="选择" />
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

                                  <input type="button" onclick="Product.getDest(this,'.dest-sel',2)" class="btn-sum-xz mt-4" value="选择"/>
                                  <div class="save-value-div mt-2 ml-10 dest-sel">
                                      {loop $info['kindlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s>{$v['kindname']}<input type="hidden" name="kindlist[]" value="{$v['id']}"></span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>景点属性：</dt>
                              <dd>
                                  <input type="button" class="btn-sum-xz mt-4" value="选择" onclick="Product.getAttrid(this,'.attr-sel',5)" />
                                  <div class="save-value-div mt-2 ml-10 attr-sel">
                                      {loop $info['attrlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s>{$v['attrname']}<input type="hidden" name="attrlist[]" value="{$v['id']}"></span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>



                      </div>

                      <div class="add-class">
                         <!-- <dl>
                              <dt>显示模版：</dt>
                              <dd>

                              </dd>
                          </dl>-->
                          <dl>
                              <dt>图标设置：</dt>
                              <dd>
                                  <input type="button" class="btn-sum-xz mt-4" onclick="Product.getIcon(this,'.icon-sel')" value="选择"/>
                                  <div class="save-value-div mt-2 ml-10 icon-sel">
                                      {loop $info['iconlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s><img src="{$v['picurl']}"><input type="hidden" name="iconlist[]" value="{$v['id']}"></span>';
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>显示数据：</dt>
                              <dd>
                                  <span class="fl">推荐次数</span>
                                  <input type="text" name="yesjian" id="yesjian"  class="set-text-xh text_60 mt-2 ml-10 mr-30 w50" value="{$info['yesjian']}" />
                                  <span class="fl">满意度</span>
                                  <input type="text" name="satisfyscore" id="satisfyscore" class="set-text-xh text_60 mt-2 ml-10 mr-30 w50" value="{$info['satisfyscore']}"  />
                                  <span class="fl">销量</span>
                                  <input type="text" name="bookcount" id="bookcount" class="set-text-xh text_60 mt-2 ml-10 w50" value="{$info['bookcount']}" />
                              </dd>
                          </dl>
                      </div>

                  </div>
              <!--/基础信息结束-->
                  <!--图片开始-->
                  <div class="product-add-div" data-id="tupian">
                      <div class="up-pic">
                          <dl>
                              <dt>景点图片：</dt>
                              <dd>
                                  <div class="up-file-div">
                                      <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                  </div>
                                  <div class="up-list-div">
                                      <input type="hidden" class="headimgindex" name="imgheadindex" value=""/>
                                      <input type="hidden" name="litpic" id="litpic" value="{$info['litpic']}"/>
                                      <ul class="pic-sel">

                                      </ul>
                                  </div>
                              </dd>
                          </dl>


                      </div>
                  </div>
                  <!--图片结束-->
                  <div class="product-add-div" data-id="jieshao">
                      {php Common::getEditor('content',$info['content'],700,400);}
                  </div>

                  <div class="product-add-div" data-id="youhua">
                      <div class="add-class">
                          <dl>
                              <dt>优化标题：</dt>
                              <dd>
                                  <input type="text" name="seotitle" id="seotitle" class="set-text-xh text_700 mt-2 w500" value="{$info['seotitle']}" >
                              </dd>
                          </dl>
                          <dl>
                              <dt>Tag词：</dt>
                              <dd>

                                  <input type="text" id="tagword" name="tagword" class="set-text-xh text_700 mt-2" value="{$info['tagword']}" >
                              </dd>
                          </dl>
                          <dl>
                              <dt>关键词：</dt>
                              <dd>
                                  <input type="text" name="keyword" id="keyword" name="keyword" class="set-text-xh text_700 mt-2 w300" value="{$info['keyword']}">
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


                  <div class="opn-btn">
                      <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
                      <input type="hidden" name="action" id="action" value="{$action}"/>

                      <a class="save ml-20" id="btn_save" href="javascript:;">保存</a>
                      <!--<a class="save" href="#">下一步</a>-->
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

        $("#nav").find('span').click(function(){

            Product.changeTab(this,'.product-add-div');//导航切换

        })
        $("#nav").find('span').first().trigger('click');


        var action = "{$action}";

        //上传图片
        $('#pic_btn').uploadify({
            'swf': SITEURL + '/public/js/uploadify/uploadify.swf',
            'uploader': SITEURL + '/uploader/uploadfile',
            'buttonImage' : SITEURL+'/public/images/upload-ico.png',  //指定背景图
            'formData':{webid:0,thumb:true},
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'auto': true,   //是否自动上传
            'height': 25,
            'width': 80,
            'removeTimeout':0.2,
            'removeCompleted' : true,
            'onUploadSuccess': function (file, data, response) {
                var imageinfo=$.parseJSON(data);

                Imageup.genePic(imageinfo.litpic,".up-list-div ul",".cover-div");
            }
        });

        //保存
        $("#btn_save").click(function(){

               var hotelname = $("#hotelname").val();

            //验证酒店名称
             if(hotelname==''){
                   $("#nav").find('span').first().trigger('click');
                   $("#hotelname").focus();
                   ST.Util.showMsg('请填写酒店名称',5,2000);
               }
               else
               {
                   Ext.Ajax.request({
                       url   :  SITEURL+"spot/ajax_save",
                       method  :  "POST",
                       isUpload :  true,
                       form  : "product_frm",
                       datatype  :  "JSON",
                       success  :  function(response, opts)
                       {
                           //console.log(response);
                           var data = $.parseJSON(response.responseText);
                           if(data.status)
                           {
                               if(data.productid!=null){
                                   $("#productid").val(data.productid);
                               }
                               ST.Util.showMsg('保存成功!','4',2000);
                           }


                       }});
               }

        })


        //如果是修改页面
        {if $action=='edit'}

            //var kindlist_arr = ;
            //var attrlist_arr = ;
           // var iconlist_arr = ;
            var kindlist = ST.Modify.getSelectDest({$info['kindlist_arr']});
            var attrlist = ST.Modify.getSelectAttr({$info['attrlist_arr']});
            var iconlist = ST.Modify.getSelectIcon({$info['iconlist_arr']});
            var piclist = ST.Modify.getUploadFile({$info['piclist_arr']});

            $(".dest-sel").html(kindlist);
            $(".attr-sel").html(attrlist);
            $(".icon-sel").html(iconlist);
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


     });



    </script>

</body>
</html>
