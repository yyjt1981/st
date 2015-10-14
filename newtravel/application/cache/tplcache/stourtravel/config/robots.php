<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>思途CMS3.0</title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_js');  ?>
    <?php echo Common::getCss('style.css,base.css'); ?>
    <?php echo Common::getScript('config.js');?>
</head>
<body>
<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     <?php echo  Stourweb_View::template('stourtravel/public/leftnav');  ?>
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">
    <div class="content-nr">
        <!--面包屑-->
        <div class="crumbs">
            <label>位置：</label>
             首页
            &gt; 设置中心
            &gt; 系统设置
            &gt; <span>robots设置</span>
            
        </div>
      <div class="content-nr">
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>robots设置</span></div>
          <div class="w-set-nr">
            <div class="nr-list">
            <h4 class="tit"><span class="fl">robots设置：</span><div class="help-ico"><?php echo Common::getIco('help',5); ?></div></h4>
              <div class="txt">
              <textarea id="robots" name="robots"   cols="6" rows="8" class="set-area"></textarea>
              </div>
            </div>
            <div class="opn-btn">
            <a class="save ml-10" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </td>
  </tr>
  </table>
    <input type="hidden" id="webid" value="0">
  
  
<script>
$(document).ready(function(){
        //配置信息保存
        $("#btn_save").click(function(){
           saveConfig();
        })
        getConfig();
        //默认读取配置
});
       //获取配置
        function getConfig()
        {
            var url = SITEURL+"config/ajax_getrobots";
            $.ajax({
                type:'POST',
                url:url,
                dataType:'json',
                success:function(data){
                  $("#robots").html(data.robots);
                }
            })
        }
        //保存配置
        function saveConfig()
        {
            var url = SITEURL+"config/ajax_saverobots";
            var frmdata = $("#configfrm").serialize();
            $.ajax({
                type:'POST',
                url:url,
                data:frmdata,
                dataType:'json',
                success:function(data){
                    if(data.status==true)
                    {
                        ST.Util.showMsg('保存成功',4);
                    }
                }
            })
        }
</script>
</body>
</html>
