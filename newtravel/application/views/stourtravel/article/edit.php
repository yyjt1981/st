<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin/public/css/common.css"/>
    <meta charset="utf-8">
<title>文章添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>

<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td ">
    <div class="content-nr">
        <!--面包屑-->
        <div class="crumbs">
            <label>位置：</label>
             首页
             &gt; 文章系统
             &gt; 文章管理
             &gt; <span>{$position}</span>
             
        </div>
      <div class="content-nr">
          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>基础信息</span>
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
                              <dt>文章标题：</dt>
                              <dd>
                                  <input type="text" name="articlename" id="articlename" class="set-text-xh text_700 mt-2 w300"  value="{$info['articlename']}" />
                                  <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',40); }</div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>作者：</dt>
                              <dd>
                                  <input type="text" name="author" id="author" class="set-text-xh text_250 mt-2 w300" value="{$info['author']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>文章来源：</dt>
                              <dd>
                                  <input type="text" name="comefrom" id="comefrom" class="set-text-xh text_250 mt-2 w300" value="{$info['comefrom']}" />
                              </dd>
                          </dl>

                          <dl>
                              <dt class="w160">来源网址：</dt>
                              <dd>
                                  <input type="text" name="fromsite" id="fromsite" class="set-text-xh text_250 mt-2 w300" value="{$info['fromsite']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>封面图片：</dt>
                              <dd>
                                  <p>
                                      <label>
                                      	<input class="fl mt-8 mr-3" type="radio" name="allow"  {if $info['allow']=='allow'}checked="checked"{/if} value="allow"  onclick="showpic()">
                                        <span class="fl mr-20">上传</span>
                                      </label>
                                      <label>
                                      	<input class="fl mt-8 mr-3" type="radio" name="allow"  {if $info['allow']=='usecontentpic'}checked="checked"{/if} value="usecontentpic" onclick="unshowpic()">
                                        <span>文章内图片</span>
                                      </label>

                                      <div class="up-file-div" id="updiv">

                                          <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                      </div>
                                      <div class="up-list-div">

                                          <ul class="pic-sel">
                                              <li class="img-li h100" style="height: 100px;">
                                                  {if !empty($info['litpic'])}
                                                    <img class="fl" id="articlepic" src="{$info['litpic']}" width="100" height="100"><p class="p1"><span class="btn-closed" onclick="Imageup.delImg(this,'{$info['litpic']}',1)"></span></p></li>
                                                  {else}
                                                    <img id="articlepic" src="{php echo Common::getDefaultImage();}" width="100" height="100">
                                                  {/if}
                                              <input type="hidden" name="litpic" id="litpic" value="{$info['litpic']}"/>
                                          </ul>
                                      </div>

                                  </p>
                              </dd>
                          </dl>

                      </div>



                      <div class="add-class">
                          <dl>
                              <dt>目的地选择：</dt>
                              <dd>

                                  <input type="button" onclick="Product.getDest(this,'.dest-sel',4)" class="btn-sum-xz mt-4" value="选择"/>
                                  <div class="save-value-div mt-2 ml-10 dest-sel">
                                      {loop $info['kindlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s>{$v['kindname']}<input type="hidden" name="kindlist[]" value="{$v['id']}"></span>
                                      {/loop}

                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>文章属性：</dt>
                              <dd>
                                  <input type="button" class="btn-sum-xz mt-4" value="选择" onclick="Product.getAttrid(this,'.attr-sel',4)" />
                                  <div class="save-value-div mt-2 ml-10 attr-sel">
                                      {loop $info['attrlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s>{$v['attrname']}<input type="hidden" name="attrlist[]" value="{$v['id']}"></span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>

                          <dl>
                              <dt>文章内容: </dt>
                              <dd>
                                  {php Common::getEditor('content',$info['content'],700,400);}
                              </dd>

                          </dl>

                      </div>

                  </div>
              <!--/基础信息结束-->


                  <div class="product-add-div" data-id="youhua">
                      <div class="add-class">
                          <dl>
                              <dt>优化标题：</dt>
                              <dd>
                                  <input type="text" name="seotitle" id="seotitle" class="set-text-xh text_700 mt-2 w500" value="{$info['seotitle']}" >
                              </dd>
                          </dl>
                          <dl>
                              <dt>301重定向：</dt>
                              <dd>
                                  <input type="text" name="redirecturl" id="redirecturl"  class="set-text-xh text_700 mt-2 w300" value="{$info['redirecturl']}">
                              </dd>
                          </dl>
                          <dl>
                              <dt>访问量：</dt>
                              <dd>
                                  <input type="text" name="shownum" id="shownum"  class="set-text-xh text_700 mt-2 w50" value="{$info['shownum']}">
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

        $("input[name='allow']:checked").trigger('click');


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
            'multi' : false,
            'removeTimeout':0.2,
            'removeCompleted' : true,
            'onUploadSuccess': function (file, data, response) {
                var imageinfo=$.parseJSON(data);
                $("#litpic").val(imageinfo.litpic);
                $("#articlepic").attr('src',imageinfo.litpic);


            }
        });

        //保存
        $("#btn_save").click(function(){

               var articlename = $("#articlename").val();

            //验证名称
             if(articlename==''){
                   $("#nav").find('span').first().trigger('click');
                   $("#articlename").focus();
                   ST.Util.showMsg('请填写文章名称',5,2000);
               }
               else
               {
                   Ext.Ajax.request({
                       url   :  SITEURL+"article/ajax_save",
                       method  :  "POST",
                       isUpload :  true,
                       form  : "product_frm",
                       datatype  :  "JSON",
                       success  :  function(response, opts)
                       {

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



            var litpic = $("#litpic").val();
            $(".img-li").find('img').each(function(i,item){

                        if($(item).attr('src')==litpic){
                            var obj = $(item).parent().find('.btn-ste')[0];
                            Imageup.setHead(obj,i+1);
                        }
            })

        {/if}




     });

     function showpic()
     {
         $("#updiv").show();
     }
     function unshowpic()
     {
         $("#updiv").hide();
     }



    </script>

</body>
</html>
