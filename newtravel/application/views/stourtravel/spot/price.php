<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>门票价格范围分类-思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,jqtransform.css'); }
</head>
<body>

<table class="content-tab">
<tr>
    <td width="119px" class="content-lt-td" valign="top">
        {template 'stourtravel/public/leftnav'}
        <!--右侧内容区-->
    </td>
    <td valign="top" class="content-rt-td" style="overflow:auto;">


        <div class="content-nr" style="height: 351px;">
            <div class="crumbs">
                <label>位置：</label>首页 &gt; 分类设置 &gt; 门票分类 &gt; <span>价格分类</span>
            </div>

            <div class="w-set-con">
                <div class="w-set-tit bom-arrow">
                    {template 'stourtravel/spot/kind_top'}
                </div>
                <div class="w-set-nr">
                    <div class="add_menu-btn">
                        <a href="javascript:;" class="add-btn-class ml-10" onclick="add()">添加</a>
                    </div>
                    <div class="nor-attr-list">
                     <form id="price_fm">
                        <table width="95%" border="0" cellspacing="0" cellpadding="0" id="price_tab">
                               <tr>
                                <th scope="col" width="50%" height="40" align="center">价格范围</th>
                                <th scope="col" width="50%">删除</th>
                               </tr>
                               {loop $list $k $v}
                                   <tr>
                                    <td height="40" class="dayname-td" align="center">
                                        <input type="text" name="min[]" class="wid_150 tc" value="{$v['min']}">&nbsp;<font color="#f4a460">~</font>&nbsp;
                                        <input type="text" name="max[]" class="wid_150 tc" value="{$v['max']}"/>
                                        <input type="hidden" name="id[]" value="{$v['id']}">
                                    </td>
                                    <td align="center" onclick="del(this,{$v['id']})">{php echo Common::getIco('del');}</td>
                                   </tr>
                               {/loop}

                        </table>
                     </form>
                    </div>

                    <div class="opn-btn">
                        <a class="save ml-10" href="javascript:;" onclick="save()">保存</a>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
</table>

<script>
  var delpic ="{php echo Common::getIco('del');}";
  $(function(){
      //选中价格分类
      $(".w-set-tit").find('span').eq(0).addClass('on');
  })
  function save()
  {
      ST.Util.showMsg('保存中',6,10000);
      Ext.Ajax.request({
          url   :  SITEURL+"spot/ajax_price/action/save",
          method  :  "POST",
          form  : "price_fm",
          success  :  function(response, opts)
          {
              var data = $.parseJSON(response.responseText);
              if(data.status)
              {
                  ZENG.msgbox._hide();
                  ST.Util.showMsg("保存成功",4)
              }



          }});

  }
  function add()
  {
     /* $.ajax({
          type:'POST',
          url:SITEURL+'hotel/ajax_price/action/add',
          dataType:'json',
          success:function(data){
              if(data.status){




                  $("#price_tab tr:last").after($html);
              }
          }

      })*/
      var min = Number($("#price_tab tr:last").find('input').eq(1).val())+1;
      $html = '<tr>';
      $html += '<td class="dayname-td" align="center">'
      $html += '<input type="text" class="wid_60 tc" name="newmin[]" value="'+min+'">&nbsp;<font color="#f4a460">~</font>&nbsp;<input type="text" class="wid_60 tc" name="newmax[]" value=""/><input type="hidden" name="newid[]" value="0"></td>';
      $html += '<td align="center" onclick="del(this,0)">'+delpic+'</td></tr>';
      $("#price_tab tr:last").after($html);


  }
  function del(dom,id)
  {
      ST.Util.confirmBox('确定删除?','确认删除这个价格范围吗?',function(){
          if(id==0)
              $(dom).parents('tr').first().remove();
          else
          {
              Ext.Ajax.request({
                  url   :  SITEURL+"spot/ajax_price/action/del",
                  method  :  "POST",
                  params:{id:id},
                  datatype  :  "JSON",
                  success  :  function(response, opts)
                  {
                      var data = $.parseJSON(response.responseText);
                      if(data.status='ok')
                      {
                          $(dom).parents('tr').first().remove();
                      }
                      else
                      {

                      }
                  }});

          }


      });

  }


</script>

</body>
</html>
