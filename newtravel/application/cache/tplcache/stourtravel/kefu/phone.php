<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>客服电话设置</title>
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
                    &gt; 基础设置
                    &gt; <span>客服电话设置</span>
                    
                </div>
                <div class="content-nr">
                    <form id="configfrm">
                        <div class="w-set-con">
                            <div class="w-set-tit bom-arrow">
                                <?php echo  Stourweb_View::template('stourtravel/kefu/kind_top');  ?>
                            </div>
                            <div class="w-set-nr">
                                <div class="picture ml-10">
                                    <p><span class="fl">24小时客服电话 : </span>
                                        <input type="text" name="cfg_phone" id="cfg_phone" class="set-text-xh set-text-bz1"  >
                                    </p>
                                </div>
                                <div class="opn-btn">
                                    <a class="save ml-10" href="javascript:;" id="btn_save">保存</a>
                                    <!-- <a class="cancel" href="#">取消</a>-->
                                    <input type="hidden" name="webid" id="webid" value="0">
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
<script>
    $(document).ready(function(){
        //选中分类
        $(".w-set-tit").find('span').eq(0).addClass('on');
        //配置信息保存
        $("#btn_save").click(function(){
            var webid= 0
            Config.saveConfig(webid);
        })
        getConfig(0);
    });
    //获取配置
    function getConfig(webid)
    {
        Config.getConfig(webid,function(data){
            $("#cfg_phone").val(data.cfg_phone);
        })
    }
</script>
</body>
</html>
