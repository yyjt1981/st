<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>站点管理-思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
</head>
<style type="text/css">
    body{font-size:12px;margin: 10px;}

    .block {
        border: 1px red solid;
        height:80px;
        margin-top:50px;
        padding:20px 0 0 20px;
        clear:both;
    }
    .item {
        border: 1px #000 solid;
        margin-right:10px;
        width: 60px;
        height: 40px;
        text-align:center;
        padding-top:20px;
        color:White;
        float:left;
        cursor:pointer;

    }
</style>
<body>


<div>
    <div id="left">


    </div>
    <div id="right">
        <ul>
            <li>模块1</li>
            <li>模块2</li>
            <li>模块3</li>
            <li>模块4</li>
            <li>模块5</li>
            <li>模块6</li>

        </ul>

    </div>
    <div id="proxy_red" class="item" style="background:red">Red Box</div>
    <div id="proxy_green" class="item" style="background:green">Green</div>
    <div id="proxy_black" class="item" style="background:black">Black</div>
    <div id="proxy" class="item" style="color:Black">我可以<br/>随便拖</div>
</div>
<div id="target" class="block">把上面有颜色的色块拖到我这里试试</div>
<script type="text/javascript">
    Ext.onReady(function() {



        var proxy = new Ext.dd.DDProxy("proxy"); //这一句就可以建立一个随便拖的东东，神奇吧
        //(ExtJs的拖动组件分二大类，DDProxy就是要拖动的东西，而DDTarget就是拖动后可以扔进去的目标容器区)
       var handels = {
         /*  afterDragDrop:function(target,e,id)
           {
               var destEl = Ext.get(id);
               var srcEl = Ext.get(this.getEl());
               var sColor = srcEl.dom.id.split('_')[1]; //得取拖动源id的后面一部分，即proxy_red后面的red
               // destEl.dom.style.backgroundColor = sColor; //设置目标id的背景色

               $(destEl.dom).append(srcEl.dom.innerHTML);
               //console.log(destEl.dom.append(srcEl.dom.innerHTML));
           }*/
           // Only called when element is dragged over the a dropzone with the same ddgroup
       onDragEnter : function(evtObj, targetElId) {

           if (targetElId != this.el.dom.parentNode.id) {
               this.el.addClass('dropOK');
            }
           else {

               this.onDragOut();
           }
       },

        onDragOut : function(evtObj, targetElId) {

       },

        b4StartDrag : function() {
            if (!this.el) {
                this.el = Ext.get(this.getEl());
           }

            this.originalXY = this.el.getXY();
       },

       onInvalidDrop : function() {
           this.invalidDrop = true;

       },
       endDrag : function() {
            if (this.invalidDrop === true) {


                var animCfgObj = {
                    easing   : 'elasticOut',
                  duration : 1,
                    scope    : this,
                    callback : function() {
                        this.el.dom.style.position = '';
                   }
               };
               this.el.moveTo(this.originalXY[0], this.originalXY[1], animCfgObj);
              delete this.invalidDrop;
           }

        },

       onDragDrop : function(evtObj, targetElId) {

        /*   var dropEl = Ext.get(targetElId);


           if (this.el.dom.parentNode.id != targetElId) {


                dropEl.appendChild(this.el);


               this.onDragOut(evtObj, targetElId);


                this.el.dom.style.position ='';
                this.el.dom.style.top = '';
                this.el.dom.style.left = '';
           }
           else {

               this.onInvalidDrop();
        }*/
       }
       }
       $("#right").find('li').each(function(index,el){
           var dragobj = new Ext.dd.DragSource(el, { group: 'dd' });
           Ext.apply(dragobj,handels);

       })

        //以下建立了三个拖动源DropSource(继承自DDProxy可以查看官方文档)，并标明gruop为dd
        var proxy_red = new Ext.dd.DragSource('proxy_red', { group: 'dd' });
        var proxy_green = new Ext.dd.DragSource('proxy_green', { group: 'dd' });
        var proxy_black = new Ext.dd.DragSource('proxy_black', { group: 'dd' });

        //拖动完成的事件
        proxy_red.afterDragDrop = function(target, e, id) {
            var destEl = Ext.get(id);
            var srcEl = Ext.get(this.getEl());
            var sColor = srcEl.dom.id.split('_')[1]; //得取拖动源id的后面一部分，即proxy_red后面的red
           // destEl.dom.style.backgroundColor = sColor; //设置目标id的背景色

            $(destEl.dom).append(srcEl.dom.innerHTML);
            //console.log(destEl.dom.append(srcEl.dom.innerHTML));
        };

        proxy_green.afterDragDrop = proxy_red.afterDragDrop; //为其它拖动源赋值同样的事件处理函数
        proxy_black.afterDragDrop = proxy_red.afterDragDrop;

        var target = new Ext.dd.DDTarget('target', 'dd'); //建立拖动目标区(这里的dd与上面拖动源的group:dd相同
        //只有相同group的DDProxy/DragSource才会接受)
    });
</script>

</body>
</html>
