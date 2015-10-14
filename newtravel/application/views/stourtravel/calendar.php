<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {template 'stourtravel/public/public_js'}
    <style>
        *{
            padding:0px;
            margin:0}
        html,body{
            width:100%;
            height:100%;
            font-size:12px;
            font-family:Arial, Helvetica, sans-serif;
        }
        h1,h2,h3,h4,h5{
            font-size:14px}
        a{
            color:#464646;
            text-decoration:none}
        a:hover{
            color:#f60;
            text-decoration:underline}
        a,input,textarea{
            outline:none;
            resize:none;}
        s,i{
            text-decoration:none; font-style:normal}
        .color_f60{
            color:#f60}
        li{
            list-style:none}
        img{
            border:none}
        .fl{
            float:left}
        .fr{
            float:right}
        .clear{
            clear:both}
        table {
            border-collapse: collapse;
            border-spacing: 0;
            float:left;

        }
        table .num {
            float: left;
            width: 100%;
            height: 25px;
            line-height: 25px;
            text-align: center;
        }
        .tab{
            height:420px;
            padding-left:10px;
            float:left;
        }
        table td {
            border: 1px solid #dcdcdc;

        }
        .top_title{border: 1px solid #fff;line-height: 25px;}
        table .yes_yd {
            color: #f60;
            float: left;
            width: 100%;
            height: 25px;
            line-height: 25px;
            text-align: center;
        }
        .no_yd{
            float: left;
            color: #ccc;
            width: 100%;
            height: 25px;
            line-height: 25px;
            text-align: center;
            font-weight: 400;
        }
    </style>
</head>
<body style="background-color: #fff">

{$calendar}
<input type="hidden" id="typeid" value="{$typeid}">
<script language="javascript">

    //修改单独报价
    function  modPrice(obj)
    {
        var price = $(obj).attr('data-price');//
        var profit = $(obj).attr('data-profit');
        var basicprice = $(obj).attr('data-basicprice');
        var suitid = $(obj).attr('data-suitid');
        var day = $(obj).attr('data-day');
        var daydate =$(obj).attr('data-date');
        var typeid = $("#typeid").val();

        var html = '<table id="tabl"><tr><td>价格:</td><td>成本<input type="text" size="5" onkeyup="calPrice(this)" class="txt" id="basicprice" name="adultbasicprice"  value="'+basicprice+'"/></td><td>利润<input type="text" size="5"  onkeyup="calPrice(this)" class="txt" id="profit" name="adultprofit" value="'+profit+'"/></td><td class="tprice"><font color="#FF9900">'+price+'</font>元</td></tr></table>';

        parent.window.dialog({
            title: daydate+'价格修改',
            okValue:'确定',
            content:html,
            ok: function () {


                var basicprice = $("#basicprice",parent.document).val();
                var profit = $("#profit",parent.document).val();

                var params={
                    basicprice:basicprice,
                    profit:profit


                }
                params.suitid = suitid;
                params.day = day;
                params.typeid = typeid;

                 $.ajax({
                 type:"POST",
                 url: SITEURL+'calendar/ajax_modprice',
                 data: params,
                 dataType: 'json',
                 success: function(data)
                 {

                 if(data.status==true){

                 ST.Util.showMsg('保存成功',4,1000)
                 $(obj).find('.yes_yd').html('¥'+data.price);
                 };

                 }
                 })

            }
        }).show();

        //$.jBox(html, {title: daydate+'价格修改', width:340,top:'30%',submit:submit});
    }
    //添加单独报价
    function addPrice(obj)
    {


        var suitid = $(obj).attr('data-suitid');
        var productid=$(obj).attr('data-productid');
        var day =$(obj).attr('data-day');
        var daydate =$(obj).attr('data-date');
        var typeid = $("#typeid").val();



        var html = '<table><tr><td>成人价格:</td><td>成本<input type="text" class="txt" size="5" onkeyup="calPrice(this)" name="adultbasicprice" id="basicprice"/></td><td>利润<input type="text" onkeyup="calPrice(this)" class="txt" size="5" name="adultprofit" id="profit"/></td><td class="tprice"><font color="#FF9900"></font>元</td></tr></table>';



        parent.window.dialog({
            title: daydate+'价格添加',
            okValue:'确定',
            content:html,
            ok: function () {


                var basicprice = $("#basicprice",parent.document).val();
                var profit = $("#profit",parent.document).val();

                var params={
                    basicprice:basicprice,
                    profit:profit,
                    productid:productid


                }
                params.suitid = suitid;
                params.day = day;
                params.typeid = typeid;

                $.ajax({
                    type:"POST",
                    url: SITEURL+'calendar/ajax_addprice',
                    data: params,
                    dataType: 'json',
                    success: function(data)
                    {

                        if(data.status==true){

                            ST.Util.showMsg('保存成功',4,1000)
                            $(obj).find('b').html('¥'+data.price);
                            $(obj).find('b').removeClass('no_yd').addClass('yes_yd');
                        };

                    }
                })

            }
        }).show();


    }
    function calPrice(obj)
    {
        var trs=$(obj).parents('tr:first');


        var tprice=0;
        trs.find('input:text').each(function(index, element) {
            var price=parseInt($(element).val());
            if(!isNaN(price))
                tprice+=price;
        });
        trs.find(".tprice").html("<font color='#FF9900'>"+tprice+"</font>元");
    }
</script>

</body>
</html>