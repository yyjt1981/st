<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin/public/css/common.css"/>
    <meta charset="utf-8">
<title>广告添加/修改</title>
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
             &gt; 营销策略
             &gt; 广告管理
             &gt;  <span>{$position}</span>
             
        </div>
      <div class="content-nr">
          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>{$position}</span>

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
                              <dt>广告类型：</dt>
                              <dd>
                                  <select name="adtype" id="adtype" onchange="getAdPosition(this.value)">
                                        <option value="0">请选择广告类型</option>
                                  </select>

                              </dd>
                          </dl>

                          <dl>
                              <dt>广告位置：</dt>
                              <dd>
                                  <select name="adposition" id="adposition" onchange="setWhPara(this)">

                                  </select>

                              </dd>
                          </dl>
                          <dl>
                              <dt>广告图片：</dt>
                              <dd>


                                  <div class="up-file-div" id="updiv">

                                      <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                  </div>
                                  <div class="up-list-div">

                                      <ul class="pic-sel">
                                          <li class="img-li h100" style="height: 100px;">
                                              {if !empty($info['picurl'])}
                                              <img class="fl" id="articlepic" src="{$info['picurl']}" width="100" height="100"><p class="p1"><span class="btn-closed" onclick="Imageup.delImg(this,'{$info['litpic']}',1)"></span></p></li>
                                          {else}
                                          <img id="articlepic" src="{php echo Common::getDefaultImage();}" width="100" height="100">
                                          {/if}
                                          <input type="hidden" name="litpic" id="litpic" value="{$info['picurl']}"/>
                                          <input type="hidden" name="adwidth" id="adwidth" value="">
                                          <input type="hidden" name="adheight" id="adheight" value="">
                                      </ul>
                                  </div>


                              </dd>
                          </dl>
                          <dl>
                              <dt>链接主题：</dt>
                              <dd>
                                  <input type="text" name="linktext" id="linktext" class="set-text-xh text_250 mt-2 w300" value="{$info['linktext']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>链接地址：</dt>
                              <dd>
                                  <input type="text" name="linkurl" id="linkurl" class="set-text-xh text_250 mt-2 w300" value="{$info['linkurl']}" />
                              </dd>
                          </dl>




                      </div>




                  </div>
              <!--/基础信息结束-->




                  <div class="opn-btn">
                      <input type="hidden" name="id" id="id" value="{$info['id']}"/>
                      <input type="hidden" name="action" id="action" value="{$action}"/>
                      <input type="hidden" name="tagname" id="tagname" value=""/>
                      <a class="save ml5" id="btn_save" href="javascript:;">保存</a>

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
        window.TYPEMENU = [
            {'id':'1','name':'首页广告'},
            {'id':'2','name':'栏目广告'},
            {'id':'3','name':'自定义广告'}
        ]
        var adtype = "{$info['adtype']}";
        var adposition = "{$info['adposition']}";
        var action = "{$action}";
	$(document).ready(function(){






        $.each(window.TYPEMENU,function(i,row){
            var is_selected=row.id==adtype?"selected='selected'":'';
            var html="<option value='"+row.id+"' "+is_selected+">"+row.name+"</option>";
            $("#adtype").append(html);
        })
        adtype = adtype!='' ? adtype : 0;
        getAdPosition(adtype);//获取广告位置列表



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
            'button_width':80,
            'button_height':25,
            'multi' : false,
            'removeTimeout':0.2,
            'removeCompleted' : true,
            'onUploadSuccess': function (file, data, response) {
                var imageinfo=$.parseJSON(data);
                $("#litpic").val(imageinfo.bigpic);
                $("#articlepic").attr('src',imageinfo.bigpic);


            }
        });

        //保存
        $("#btn_save").click(function(){


                   Ext.Ajax.request({
                       url   :  SITEURL+"advertise/ajax_save",
                       method  :  "POST",
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


        })


     });

        //获取广告位置
        function getAdPosition(adtype)
        {
            $.ajax({
                type:'POST',
                url:SITEURL+'advertise/ajax_getadpostion/',
                data:{adtype:adtype},
                dataType:'json',
                success:function(data){
                     if(data){
                         $("#adposition").empty();
                         $("#adposition").append('<option value="0">请选择广告位置</option>');
                         $.each(data,function(i,row){
                             var is_selected = '';

                             if(row.position == adposition){

                                 is_selected = "selected='selected'";
                                 $("#adwidth").val(row.width);
                                 $("#adheight").val(row.height);
                                 $("#tagname").val(row.tagname);
                             }

                             var html="<option value='"+row.position+"' "+is_selected+"adwidth="+row.width+" adheight="+row.height+" tagname="+row.tagname+">"+row.position+"</option>";
                             $("#adposition").append(html);
                         })

                     }
                }
            })
        }
        //设置宽度和高度
        function setWhPara(obj)
        {
           var width = $(obj).find("option:selected").attr('adwidth');
           var height =$(obj).find("option:selected").attr('adheight');
           var tagname =$(obj).find("option:selected").attr('tagname');
           $("#adwidth").val(width);
           $("#adheight").val(height);
           $("#tagname").val(tagname);
        }


    </script>

</body>
</html>
