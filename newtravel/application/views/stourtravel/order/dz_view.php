<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订单查看--思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }


</head>
<body style="background-color: #fff">
   <form id="frm" name="frm">
    <div class="out-box-con">
        <dl class="list_dl">
            <dt class="wid_90">联系人：</dt>
            <dd>
                 {$info['contactname']}
            </dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">性别：</dt>
            <dd>{$info['sex']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">目的地：</dt>
            <dd>{$info['dest']}</dd>
        </dl>

        <dl class="list_dl">
            <dt class="wid_90">出发时间：</dt>
            <dd>{$info['starttime']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">旅游天数：</dt>
            <dd>{$info['days']}</dd>
        </dl>

        <dl class="list_dl">
            <dt class="wid_90">出发地：</dt>
            <dd>{$info['startplace']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">成人数量：</dt>
            <dd>{$info['adultnum']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">儿童数量：</dt>
            <dd>{$info['childnum']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">飞行等级：</dt>
            <dd>{$info['planerank']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">酒店等级：</dt>
            <dd>{$info['hotelrank']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">房型：</dt>
            <dd>{$info['room']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">用餐形式：</dt>
            <dd>{$info['food']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">合适联系时间：</dt>
            <dd>{$info['contacttime']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">联系电话：</dt>
            <dd>{$info['phone']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">email：</dt>
            <dd>{$info['email']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">地址：</dt>
            <dd>{$info['address']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">预订说明：</dt>
            <dd>{$info['description']}</dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">订单状态：</dt>
            <dd><input name="status" type="radio" class="checkbox" value="0" {if $info['status']==0}checked="checked"{/if}  />未处理
                <input name="status" type="radio" class="checkbox" value="1" {if $info['status']==1}checked="checked"{/if}  />处理中
                <input name="status" type="radio" class="checkbox" value="2" {if $info['status']==2}checked="checked"{/if}  />交易成功
                <input name="status" type="radio" class="checkbox" value="3" {if $info['status']==3}checked="checked"{/if}  />取消订单
            </dd>
        </dl>
        <dl class="list_dl">
            <dt class="wid_90">&nbsp;</dt>
            <dd>
                <a class="default-btn wid_60" id="btn_save" href="javascript:;">保存</a>
                <input type="hidden" id="id" name="id" value="{$info['id']}">
                <input type="hidden" id="type" name="type" value="dz">
            </dd>
        </dl>
    </div>
   </form>

<script language="JavaScript">



    $(function(){
        //保存
        $("#btn_save").click(function(){

            Ext.Ajax.request({
                url   :  SITEURL+"order/ajax_save",
                method  :  "POST",
                isUpload :  true,
                form  : "frm",
                success  :  function(response, opts)
                {

                    var data = $.parseJSON(response.responseText);
                    if(data.status)
                    {
                        ST.Util.showMsg('保存成功!','4',2000);


                    }


                }});

        })


    })

</script>

</body>
</html>