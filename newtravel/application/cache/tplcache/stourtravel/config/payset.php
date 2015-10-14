<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>支付设置</title>
    <?php echo  Stourweb_View::template('stourtravel/public/public_js');  ?>
    <?php echo Common::getCss('style.css,base.css'); ?>
    <?php echo Common::getScript('config.js');?>
    <?php echo Common::getScript("uploadify/jquery.uploadify.min.js"); ?>
    <?php echo Common::getCss('uploadify.css','js/uploadify/'); ?>
</head>
<style>
   .paylist{
       padding: 10px 0 0 10px;
       border-bottom: 1px #d8d8d8 solid;
       zoom: 1;
       overflow: hidden;
       margin-bottom: 10px;
   }
   .paylist li{
       float: left;
       padding: 0 10px;
       height: 25px;
       line-height: 25px;
       text-align: center;
       border: 1px #d8d8d8 solid;
       border-width: 1px 1px 0 1px;
       margin-right: 10px;
       cursor: pointer;
   }
   .paylist li label{
 cursor:pointer}
   .paylist li input{
       vertical-align: middle;
       margin: 3px 3px 3px 4px;
 cursor:pointer
   }
   .paylist li.active{
       border: 1px #d8d8d8 solid;
       border-width: 1px 1px 0 1px;
       background: #f6f6f6;
       font-weight: bold
   }
   .titletd{
       width:140px;
       color: #006498;
       height: 45px;
       line-height: 45px;
       font-size: 12px;
       font-weight: 500;
 padding-right:10px
   }
   .inputtext{
       width:400px;
   }
   .help-ico{
       margin-top: 7px;
       margin-left: 5px;
   }
</style>
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
            &gt; 基础设置
            &gt; <span>支付设置</span>
        </div>
      <div class="content-nr">
          <?php if(strpos('tes','r')!==false) echo 'true';?>
        <form id="configfrm">
         <div class="w-set-con">
        <div class="w-set-tit bom-arrow"><span class="on"><s></s>支付设置</span></div>
          <div class="w-set-nr">
            <form id="configfrm">
              <div class="picture">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="display: table;" id="paytable" >
                      <tbody>
                      <tr>
                          <td colspan="2">
                              <ul class="paylist">
                                  <li class="active"><input  type="checkbox" name="alipay" value="1" <?php if(strpos($config['cfg_pay_type'],'1')!==false) { ?> checked="checked"<?php } ?>
>支付宝</label></li>
                                  <li class=""><input  type="checkbox" name="bill" value="2" <?php if(strpos($config['cfg_pay_type'],'2')!==false) { ?> checked="checked"<?php } ?>
>快钱</li>
                                  <li class=""><input  type="checkbox" name="huicao" value="3" <?php if(strpos($config['cfg_pay_type'],'3')!==false) { ?> checked="checked"<?php } ?>
>汇潮</li>
                                  <li class=""><input  type="checkbox" name="chinabank" value="4" <?php if(strpos($config['cfg_pay_type'],'4')!==false) { ?> checked="checked"<?php } ?>
>银联</li>
                              </ul>
                          </td>
                      </tr>
                      <tr name="alipay">
                          <td class="titletd"><span style="float: left">支付宝接口类型：</span><div class="help-ico"><?php echo Common::getIco('help',15); ?></div></td>
                          <td>
                              <span id="AlipayType">
                                  <input id="alipaytype0" type="radio" name="cfg_alipay_signtype" value="cash" <?php if($config['cfg_alipay_signtype']=='cash') { ?>checked="checked"<?php } ?>
><label for="alipaytype0">即时到帐交易接口</label>
                                  <input id="alipaytype1" type="radio" name="cfg_alipay_signtype" <?php if($config['cfg_alipay_signtype']=='double') { ?>checked="checked"<?php } ?>
 value="double"><label for="alipaytype1">双功能</label></span>
                          </td>
                      </tr>
                      <tr name="alipay" style="">
                          <td class="titletd"><span style="float: left">收款支付宝帐号：</span><div class="help-ico"><?php echo Common::getIco('help',16); ?></div></td>
                          <td><input name="cfg_alipay_account" type="text" value="<?php echo $config['cfg_alipay_account'];?>" id="cfg_alipay_account" class="set-text inputtext"></td>
                      </tr>
                      <tr name="alipay" style="">
                          <td class="titletd"><span style="float: left">支付宝合作者身份ID：</span><div class="help-ico"><?php echo Common::getIco('help',16); ?></div></td>
                          <td><input name="cfg_alipay_pid" type="text" value="<?php echo $config['cfg_alipay_pid'];?>" id="cfg_alipay_pid" class="set-text inputtext"></td>
                      </tr>
                      <tr name="alipay" style="">
                          <td class="titletd"><span style="float: left">支付宝安全校验码：</span><div class="help-ico"><?php echo Common::getIco('help',17); ?></div></td>
                          <td><input name="cfg_alipay_key" type="text" value="<?php echo $config['cfg_alipay_key'];?>" id="cfg_alipay_key" class="set-text inputtext"></td>
                      </tr>
                      <tr name="bill" style="display: none;">
                          <td class="titletd"><span class="fl">快钱网关商户号：</span><div class="help-ico"><?php echo Common::getIco('help',18); ?></div></td>
                          <td><input name="cfg_bill_account" type="text" value="<?php echo $config['cfg_bill_account'];?>" id="cfg_bill_account" class="set-text inputtext"></td>
                      </tr>
                      <tr name="bill" style="display: none;">
                          <td class="titletd"><span class="fl">快钱商户证书密钥：</span><div class="help-ico"><?php echo Common::getIco('help',19); ?></div></td>
                          <td><input name="cfg_bill_key" type="text" id="BillKey" value="<?php echo $config['cfg_bill_key'];?>" class="set-text inputtext" ></td>
                      </tr>
                      <tr name="huicao" style="display: none;">
                          <td class="titletd"><span class="fl">网关商户号:</span><div class="help-ico"><?php echo Common::getIco('help',20); ?></div></td>
                          <td><input name="cfg_huicao_account" type="text" id="cfg_huicao_account" value="<?php echo $config['cfg_huicao_account'];?>" class="set-text inputtext" ></td>
                      </tr>
                      <tr name="huicao" style="display: none;">
                          <td class="titletd"><span class="fl">商户密钥:</span><div class="help-ico"><?php echo Common::getIco('help',21); ?></div></td>
                          <td><input name="cfg_huicao_key" type="text" id="cfg_huicao_key" value="<?php echo $config['cfg_huicao_key'];?>" class="set-text inputtext"></td>
                      </tr>
                      <tr name="chinabank" style="display: none;">
                          <td class="titletd"><span class="fl">商户Id(merId):</span><div class="help-ico"><?php echo Common::getIco('help',22); ?></div></td>
                          <td><input name="cfg_yinlian_merid" type="text" id="cfg_yinlian_merid" value="<?php echo $config['cfg_yinlian_merid'];?>" class="set-text inputtext"></td>
                      </tr>
                      <tr name="chinabank" style="display: none;">
                          <td class="titletd"><span class="fl">商户名(merAbbr):</span><div class="help-ico"><?php echo Common::getIco('help',23); ?></div></td>
                          <td><input name="cfg_yinlian_mername" type="text" id="cfg_yinlian_mername" value="<?php echo $config['cfg_yinlian_mername'];?>"  class="set-text inputtext"></td>
                      </tr>
                      <tr name="chinabank" style="display: none;">
                          <td class="titletd"><span class="fl">密文(security_key):</span><div class="help-ico"><?php echo Common::getIco('help',24); ?></div></td>
                          <td><input name="cfg_yinlian_securitykey" type="text" id="cfg_yinlian_securitykey" value="<?php echo $config['cfg_yinlian_securitykey'];?>" class="set-text inputtext"></td>
                      </tr>
                      </tbody></table>
              </div>
            <div class="opn-btn">
            <a class="save" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">
                <input type="hidden" name="cfg_pay_type" id="cfg_pay_type" value="<?php echo $config['cfg_pay_type'];?>">
            </div>
            </form>
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
        //配置信息保存
        $("#btn_save").click(function(){
            var webid= 0;
            var paytype = '';
            $(".paylist input:checked").each(function(){
                paytype = paytype+$(this).val()+',';
            })
            if(paytype!='')
            {
                paytype = paytype.substr(0,paytype.length-1);
            }
            $("#cfg_pay_type").val(paytype);
            Config.saveConfig(webid);
        })
        //切换
        $(".paylist").find('li').click(function(e){
            if (e && e.stopPropagation)
            //因此它支持W3C的stopPropagation()方法
                e.stopPropagation();
            else
            //否则，我们需要使用IE的方式来取消事件冒泡
                window.event.cancelBubble = true;
            var payname = $(this).find('input').attr('name');
            $(this).addClass('active').siblings().removeClass('active');
            $('#paytable').find('tr:gt(0)').each(function(){
                if(payname == $(this).attr('name'))
                {
                    $(this).show();
                }
                else
                {
                    $(this).hide();
                }
            })
        })
     });
    </script>
</body>
</html>
