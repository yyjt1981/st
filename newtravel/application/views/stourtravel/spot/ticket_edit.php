<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>门票添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,DatePicker/WdatePicker.js,product_add.js,imageup.js,jquery.validate.js"); }
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
             &gt;产品管理
             &gt;门票管理
             &gt;{$spotname}
             &gt;<span>{$position}</span>
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
                      <dt>当前景点：</dt>
                      <dd>
                          {$spotname}
                      </dd>
                  </dl>
                  <dl>
                      <dt>门票名称：</dt>
                      <dd>
                          <input type="text" name="title" id="title" class="set-text-xh text_700 mt-2" value="{$info['title']}" />
                      </dd>
                  </dl>
                  <dl>
                      <dt>门票类型：</dt>
                      <dd>

                          <select name="tickettypeid">

                              {loop $tickettypelist $k}
                              <option value="{$k['id']}" {if $info['tickettypeid']==$k['id']}selected="selected"{/if} >{$k['kindname']}</option>
                              {/loop}

                          </select>

                      </dd>
                  </dl>
                  <dl>
                      <dt>票面价格：</dt>
                      <dd>
                          <input type="text" name="sellprice" id="sellprice" class="set-text-xh text_100 mt-2" value="{$info['sellprice']}" />
                          <span class="fl ml-5">元</span>
                      </dd>
                  </dl>
                  <dl>
                      <dt>本站价格：</dt>
                      <dd>
                          <input type="text" name="ourprice" id="ourprice" class="set-text-xh text_100 mt-2" value="{$info['ourprice']}" />
                          <span class="fl ml-5">元</span>
                      </dd>
                  </dl>
                  <dl>
                      <dt>门票数量：</dt>
                      <dd>
                          <input type="text" name="ticketnum" id="ourprice" class="set-text-xh text_100 mt-2" value="{$info['tnum']}" />
                          <span class="fl ml-5">张</span>
                      </dd>
                  </dl>



              <div class="add-class">
                  <dl>
                      <dt>预订送积分：</dt>
                      <dd>
                          <input type="text" name="jifenbook" id="jifenbook" class="set-text-xh text_100 mt-2" value="{$info['jifenbook']}" />
                          <span class="fl ml-5">元</span>
                      </dd>
                  </dl>
                  <dl>
                      <dt>积分抵现金：</dt>
                      <dd>
                          <input type="text" name="jifentprice" id="jifentprice" value="{$info['jifentprice']}" class="set-text-xh text_100 mt-2" />
                          <span class="fl ml-5">元</span>
                      </dd>
                  </dl>
                  <dl>
                      <dt>评论送积分：</dt>
                      <dd>
                          <input type="text" name="jifencomment" id="jifencomment" class="set-text-xh text_100 mt-2" value="{$info['jifencomment']}" />
                          <span class="fl ml-5">元</span>
                      </dd>
                  </dl>
                  <dl>
                      <dt>支付方式：</dt>
                      <dd>

                              <div class="on-off">
                                  <input type="radio" name="paytype" value="1" {if $info['paytype']=='1'}checked="checked"{/if} />全款支付 &nbsp;
                                  <input type="radio" name="paytype" value="2" {if $info['paytype']=='2'}checked="checked"{/if} />定金支付 &nbsp;
                                  <span id="dingjin" style="{if $info['paytype'] == '2'}display:inline-block{else}display: none{/if}"><input type="text"  name="dingjin" id="dingjintxt" value="{$info['dingjin']}" size="8" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9-\.]+/,'');}).call(this)" onblur="this.v();">&nbsp;元</span>
                                  <input type="radio" name="paytype" value="3"  {if $info['paytype']=='3'}checked="checked"{/if} />二次确认支付 &nbsp;
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



              </div>
              <!--/基础信息结束-->



                  <div class="opn-btn" style="padding-left: 10px; " id="hidevalue">
                      <input type="hidden" name="ticketid" id="ticketid" value="{$info['id']}"/>
                      <input type="hidden" name="action" id="action" value="{$action}"/>
                      <input type="hidden" name="spotid" id="spotid" value="{$spotid}">
                      <a class="save" id="btn_save" href="javascript:;">保存</a>
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



        var action = "{$action}";



        //保存
        $("#btn_save").click(function(){
                var roomname = $("#title").val();
                if(roomname==''){
                    ST.Util.showMsg('请输入门票名称',5,1000);
                    return false;
                }

                   Ext.Ajax.request({
                       url   :  SITEURL+"spot/ajax_ticket_save",
                       method  :  "POST",
                       isUpload :  true,
                       form  : "product_frm",
                       success  :  function(response, opts)
                       {
                           //console.log(response);
                           var data = $.parseJSON(response.responseText);
                           if(data.status)
                           {
                               if(data.ticketid!=null){
                                   $("#ticketid").val(data.ticketid);
                               }
                               ST.Util.showMsg('保存成功!','4',2000);
                           }


                       }});


        })







     });




    </script>


</body>
</html>
