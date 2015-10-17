<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>站点管理</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
</head>

<body>
<table class="content-tab">
<tr>
<td width="119px" class="content-lt-td"  valign="top">

    <!--左侧导航区-->
    {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
</td>
<td valign="top" class="content-rt-td">

    <!--右侧内容区-->
    <div class="content-nr">
    	<!--面包屑-->
    	<div class="crumbs">
            <label>位置：</label>首页 &gt; 设置中心 &gt; 基础设置 &gt; <span><span id="webname">主站</span>--站点管理</span>
      </div>
      <div class="content-nr">

        <div class="w-set-con">
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>站点管理</span></div>
          <div class="w-set-nr">
          
          	<div class="add_menu-btn">
            	<a href="javascript:;" class="add-btn-class ml-10" onclick="addSite()">添加</a>
            </div>
            
            <div class="table-div-b-m">
                <form name="navfrm" id="navfrm">
                    <table width="95%" border="0" cellspacing="0" cellpadding="0" id="sitelist">
                        <tr>
                          <th scope="col" width="5%" height="40" align="center">网站webid</th>
                          <th scope="col" width="45%" align="left" class="pl-30">网站名称</th>
                          <th scope="col" width="45%" align="left">访问域名</th>
                          <th scope="col" width="5%">删除</th>
                        </tr>

                    </table>
                 </form>
            </div>
            
            <div class="opn-btn">
            	<a class="save btn_save ml-10" href="javascript:;" onclick="saveSite()">保存</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
 </td>
 </tr>
</table>
<input type="hidden" name="webid" id="webid" value="0"/>
</body>
<script>

   
    $(function(){


        getSiteList();
    })

    //获取站点
    function getSiteList()
    {
        var webid=$("#webid").val();

        $.getJSON(SITEURL+"site/ajax_get","",function(data){

            $("#sitelist tr:not(:eq(0))").remove();//先清除内容
            var trlist = data.trlist;
            $.each(trlist, function(i, tr){
                $("#sitelist tr:last").after(tr);
            });
        });
    }
    //站点保存
    function saveSite()
    {
        var webid=$("#webid").val();
        var ajaxurl = SITEURL+'site/ajax_save';
        ST.Util.showMsg('保存中,请稍后...',6,5000);
        Ext.Ajax.request({
            url: ajaxurl,
            method: 'POST',
            form : 'navfrm',
            success: function (response, options) {

                var data = $.parseJSON(response.responseText);
                if(data.status)
                {
                    ST.Util.showMsg('保存成功',4);
                }

            }

        });

    }


    //添加站点
    function addSite()
    {

        var ajaxurl = SITEURL+"site/add"

        ST.Util.showBox('添加站点',ajaxurl,'400','260',function(){
            //ST.Util.showMsg('保存成功',4);
            getSiteList();});

    }
    //删除
    function del(id,obj)
    {
        ST.Util.confirmBox('删除站点','确定删除这个站点?',function(){
            var boxurl = SITEURL+'site/ajax_del';
            $.getJSON(boxurl,"id="+id,function(data){

                if(data.status == true){
                    $(obj).parents('tr').first().remove();
                    ST.Util.showMsg('删除成功',4);
                }
                else{
                    ST.Util.showMsg('删除失败',5);
                }

            });
        })
    }


</script>
</html>
