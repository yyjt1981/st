<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网页底部</title>
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
             首页 &gt; 设置中心 &gt; 基础设置 &gt; <span><span id="webname">主站</span>--签约付款</span>
        </div>
      <div class="content-nr">
      <?php echo  Stourweb_View::template('stourtravel/public/weblist');  ?>
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>签约付款</span></div>
          <div class="w-set-nr">
          <div class="nr-list">
              <div class="txt">
                  <?php Common::getEditor('cfg_payment',$configinfo['cfg_payment'],700,300);?>
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
          //子站切换点击
        $(".web-set").find('a').click(function(){
            var webid = $(this).attr('data-webid');
            $("#webid").val($(this).attr('data-webid'));
            $("#webname").html($(this).html());
            $(this).addClass('on').siblings().removeClass('on');
            getConfig(webid);//重新读取配置
        })
        //配置信息保存
        $("#btn_save").click(function(){
            var webid= $("#webid").val();
            Config.saveConfig(webid);
        })
        //setTimeout(getConfig,500);//延迟500毫秒调用数据显示,防止编辑器没有加载完成返回错误.
    });
       //获取配置
        function getConfig(webid)
        {
            Config.getConfig(webid,function(data){
                cfg_paymentEditor.setContent(data.cfg_payment);
            })
        }
</script>
</body>
</html>
