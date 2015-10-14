<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,jqtransform.css'); }
    {php echo Common::getCss('ext-theme-neptune-all-debug.css','js/extjs/resources/ext-theme-neptune/'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,st_validate.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }

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
                <label>位置：</label>首页 &gt; 产品中心 &gt; 租车 &gt; <span>车型设置</span>
            </div>
            <div class="web-set">

            </div>
            <div class="w-set-con">
                 <div class="w-set-tit bom-arrow" style="float:none;">
                {template 'stourtravel/car/kind_top'}
                 </div>
                <div class="w-set-nr">

                    <div class="add_menu-btn">
                        <a href="javascript:;" class="add-btn-class ml-10" onclick="addRow()">添加</a>
                    </div>

                    <div class="nor-attr-list">
                     <form id="day_fm">
                        <table width="95%" border="0" cellspacing="0" cellpadding="0" id="day_tab">
                               <tr>
                                <th scope="col" align="center" width="12%" align="center">排序</th>
                                <th scope="col" align="center" width="30%">车型</th>
                                 <th scope="col" align="center" width="30%">优化标题</th>
                                 <th scope="col" align="center" width="30%">删除</th>
                                 <th></th>
                               </tr>
                            <?php

                               foreach($list as $k=>$v)
                               {
                            ?>
                               <tr>
                                <td align="center"><input class="p2" name="displayorder[{$v['id']}]" value="{$v['displayorder']}" size="6"/></td>
                                <td align="center"><input class="p2" name="kindname[{$v['id']}]" value="{$v['kindname']}" size="20"/> </td>
                                <td align="center"><input class="p2" name="title[{$v['id']}]" value="{$v['title']}" size="30" /></td>
                                <td align="center"><img src="{$GLOBALS['cfg_public_url']}images/del-ico.gif" onclick="delRow(this,{$v['id']})" ></td>
                               </tr>
                            <?php
                               }
                            ?>
                        </table>
                     </form>
                    </div>

                    <div class="opn-btn">
                        <a class="save ml-10" href="javascript:;" onclick="rowSave()">保存</a>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
</table>

<script>
   $(".w-set-tit").find('#tb_cartype').addClass('on');




  function rowSave()
  {
      ST.Util.showMsg('保存中',6,10000);
      Ext.Ajax.request({
          url   :  SITEURL+"car/kind/action/save",
          method  :  "POST",
          isUpload :  true,
          form  : "day_fm",
          datatype  :  "JSON",
          success  :  function(response, opts)
          {
              var text = response.responseText;
              if(text='ok')
              {
                  ZENG.msgbox._hide();
                  ST.Util.showMsg("保存成功",1)
              }
              else
              {

              }


          }});

  }
  function addRow()
  {
	  Ext.Ajax.request({
                  url   :  SITEURL+"car/kind/action/add",
                  method  :  "POST",
                  datatype  :  "JSON",
                  success  :  function(response, opts)
                  {
                      var id = response.responseText;
                      if(id!='no')
                      {
					  var html='<tr><td align="center"><input class="p2" name="displayorder['+id+']" size="6"></td>';
					  html+='<td align="center"><input class="p2" name="kindname['+id+']"  size="20"> </td>';
					  html+='<td align="center"><input class="p2" name="title['+id+']" size="30"></td>';
					  html+='<td align="center"><img src="{$GLOBALS['cfg_public_url']}images/del-ico.gif" onclick="delRow(this,'+id+')"></td></tr>';
					  $("#day_tab").append(html);
					  }
					 }})

  }
  function delRow(dom,id)
  {
      ST.Util.confirmBox('删除','确定删除?',function(){
          if(id==0)
              $(dom).parents('tr').first().remove();
          else
          {
              Ext.Ajax.request({
                  url   :  SITEURL+"car/kind/action/del",
                  method  :  "POST",
                  params:{id:id},
                  datatype  :  "JSON",
                  success  :  function(response, opts)
                  {
                      var text = response.responseText;
                      if(text='ok')
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
