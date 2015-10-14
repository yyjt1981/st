<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$configinfo['cfg_webname']}-思途CMS3.0</title>
 {template 'stourtravel/public/public_js'}
 {php echo Common::getScript('artDialog/lib/sea.js'); }
 {php echo Common::getCss('index.css,base.css'); }
	<style>
		.no-hidden{ overflow:auto !important}
	</style>
</head>

<body>
	<!--顶部-->
	<div class="header" id="header">
  	<div class="top-page">
      <div class="logo"><img class="fl" src="{$GLOBALS['cfg_public_url']}images/logo.png" alt="思途CMS3.0" title="思途CMS3.0" /></div>
      <div class="top-operate">
        <ul class="fl">
          <li class="web-home"><a href="../" target="_blank" ><img src="{$GLOBALS['cfg_public_url']}images/top-operate-01.png" alt="网站首页" title="网站首页" ></a></li>
          <li class="clear-style"><a href="javascript:;" id="clearbtn"><img src="{$GLOBALS['cfg_public_url']}images/top-operate-02.png" alt="清除缓存" title="清除缓存" ></a></li>
          <li class="create-txt"><a href="javascript:;" id="makehtml"><img src="{$GLOBALS['cfg_public_url']}images/top-operate-03.png" alt="生成HTML" title="生成HTML" ></a></li>
            <li class="manager">
                <a href="javascript:;" id="userbtn"><img src="{$GLOBALS['cfg_public_url']}images/top-operate-04.png" alt="帮助" title="帮助"></a>
                <div class="top-help-list">
                    <a class="ico_1" target="_blank" href="http://bbs.heirui.cn/">使用帮助</a>
                    <a class="ico_2" target="_blank" href="http://bbs.heirui.cn/">视频教程</a>
                    <a class="ico_3" target="_blank" href="http://bbs.heirui.cn/">意见反馈</a>
                    <a class="ico_4" target="_blank" href="http://bbs.heirui.cn/">交流论坛</a>
                    <a class="ico_5" target="_blank" href="http://bbs.heirui.cn/">商业源码</a>
                </div>
            </li>
          <li class="drop-out"><a href="javascript:;" id="clickout"><img src="{$GLOBALS['cfg_public_url']}images/top-operate-05.png" alt="退出" title="退出" ></a></li>
        </ul>
      </div>

      <div id="tabs"></div>

    </div>

  </div>
    <div id="bg" style="position: absolute;left:0;top:0;background-color: #fff;width:100%;height:100%;z-index: 9999"></div>
    <iframe id="indexfrm" src="{$cmsur}index/index_new" width="100%" height="100%" style="position: absolute;left:0;top:0;z-index:9999;border:0"></iframe>
<script language="JavaScript">
        window.currentTab = null;
        Ext.require([
            'Ext.tab.*'
        ]);
         var indexfrm = $("#indexfrm");
         indexfrm.load(function() {
             $('#bg').remove();
         });

        Ext.onReady(function(){


            //创建viewpost,代表整个屏幕
			window.gbl_viewport=Ext.create('Ext.container.Viewport', {
				layout: 'border',
                overflowX:'hidden',
				items: [{
					region: 'north',
					contentEl:'header',
					border: false,
					cls:'no-hidden'
				}]
			});
            
		   //tabpanel, 放置各种页面	
           window.gbl_tabs = Ext.create('Ext.tab.Panel', {
                autoScroll: true,
				region:'center',
                border: false,
				cls:'gbl_tabs',
                renderTo: 'tabs',
				bodyStyle:'margin-top:-2px;border-color:white;border-width:0px;border-style:none',
				tabBar:{
					style:"padding-right:90px;padding-bottom:0px;border-width:0px;background:#008ed8;height:30px",
					componentCls:'gbl-tbar',
					height:30,
					border:0
					
				},
                items: [{
                    title: '系统主页',
                    html:"",

                    listeners: {

                      show:function(){
                          $("#indexfrm").show();
                          window.currentTab = 0;

                      }
                    }
                }





                ],
			    listeners:{
				   afterrender:function(tab, eOpts )
				   {
					  //实现右键菜单功能
					 tab.tabBar.el.on('contextmenu',function(event,htmlele){ 
						 var ele = tab.tabBar.getChildByElement(htmlele),  
						 index = tab.tabBar.items.indexOf(ele); 
						 tab.menuIndex=index;       
						  var menu=Ext.create("Ext.menu.Menu",{
									items:[
									   {text:'关闭所有',handler:tab.closeAll},
									   {text:'关闭右侧页面',handler:tab.closeRight},
									   {text:'关闭左侧页面',handler:tab.closeLeft},
                                       {text:'刷新当前页面',handler:tab.refreshPage}

									]
								 });
							 menu.showAt(event.getXY())	 
						event.preventDefault();	   
					  });
				  }

				},
				closeAll:function(){    //关闭所有
					var tab=gbl_tabs;
				     tab.items.each(function(item){
						   if(item.closable)
									tab.remove(item);	  
						   });
				},
				closeCurrent:function()  //关闭当前
			    {
					 var tab=gbl_tabs;
				     if(this.items.get(this.menuIndex).closable)
					 tab.remove(this.items.get(this.menuIndex));	 
				 },
                refreshPage:function()
                {
                    var tab=gbl_tabs;
                    var panel=tab.items.get(tab.menuIndex);
                    var ifm=panel.getEl().down('iframe');
                    ifm.dom.contentWindow.location.reload();

                },
				closeRight:function()   //关闭右侧
				{
					var tab=gbl_tabs;
					var i=0;
					tab.items.each(function(item){    
					if(i>tab.menuIndex)
					   if(item.closable) 
					   tab.remove(item);	 
					   i++;   
					 });
				},
				closeLeft:function()  //关闭左侧 
				{
					var tab=gbl_tabs;
					var i=0;
					tab.items.each(function(item){    
					  if(i<tab.menuIndex)
					   {
					   if(item.closable)
					   tab.remove(item);
					   }
					   i++;   
					 });
				}
            });
   
          //将tab面板加入视窗
          gbl_viewport.add(gbl_tabs);
		  
		   //全局设置tab 标题的宽度
		  Ext.tab.Tab.prototype.maxWidth=250;
		  
		  //tab面板右上角按钮，以菜单形式显示tab列表
		  /*window.gbl_history=Ext.create('Ext.button.Button',{
			   text:'',
			   width:30,
			   renderTo:Ext.getBody(),
			   style:'position:absolute;top:75px;right:10px;z-index:400',
			   menu:{  
				    bodyStyle:"border-width:0px",
				    listeners:{
						mouseleave:function()
						{
							this.hide();
						} 
					}
				    
				   },
			   listeners:{
				    mouseover:function()
					{
					    this.menu.removeAll();
						var menu=this.menu;
						gbl_tabs.items.each(function(item,index){    
                                menu.add(
							    {
									text:item.title,
									handler:function()
									{
										gbl_tabs.setActiveTab(index);
									}
								});
						 	   
						 });
						// this.showMenu();
					}
			     }
			  })*/


            //清除缓存
            $("#clearbtn").click(function(){
                $.ajax(
                    {
                        type: "post",
                        url: SITEURL+'index/ajax_clearcache',
                        beforeSend: function(){
                            ST.Util.showMsg('正在清除缓存,请稍后...',6,20000);
                        },
                        success: function(data)
                        {
                            if(data=='ok')
                            {
                                ST.Util.showMsg('缓存清除成功',4,1000);
                            }
                        },

                        error: function()
                        {

                            ST.Util.showMsg("请求出错,请联系管理员",5,1000);
                        }

                    }
                );

            })

            //生成HTML
            $("#makehtml").click(function(){
                $.ajax(
                    {
                        type: "post",
                        url: SITEURL+'index/ajax_makehtml',
                        beforeSend: function(){
                            ST.Util.showMsg('正在生成HTML,请稍后...',6,20000);
                        },
                        success: function(data)
                        {
                            if(data=='ok')
                            {
                                ST.Util.showMsg('生成HTML成功',4,1000);
                            }
                        },
                        error: function()
                        {
                            ST.Util.showMsg("请求出错,请联系管理员",5,1000);
                        }

                    }
                );

            })
            //退出
            $('#clickout').click(function(){
                ST.Util.confirmBox('退出系统','确定退出吗?',function(){
                    window.location.href=SITEURL+'login/loginout';

                })

            })
            //用户管理
            $("#userbtn").click(function(){
                ST.Util.addTab('用户管理',SITEURL+'user/list/parentkey/application/itemid/7');
            })



        })

        //添加面板         
        window.addTab=function(title,url,issingle,options)
        {
		    $("#indexfrm").hide();
            var id=null;
		   if(issingle)
		   {
			    var _url=encodeURI(url);
		        id=_url.replace(/(\/)|(\/)|(\?)|(\#)|(\%)|(\&)/ig,'_');
		        var current_panel=window.gbl_tabs.down('#'+id);
				if(current_panel)
				{
			     window.gbl_tabs.setActiveTab(current_panel);
			     return;
				}
		   }
		   var item={
				      title:title,
			          html:"<iframe src='"+url+"' frameborder='0' width='100%' height='100%' scrolling='auto'  border='0'/>",
			          closable:true,
					  id:id,
                       listeners: {
                           'close': function(o){
                               var len = $('.gbl_tabs').find('.x-tab').length;
                               if(len==1){
                                   $("#indexfrm").show();
                               }
                           },
                           show:function(item){
                               window.currentTab = item;
                               item.focus();
                           }
                       }
					 };
		    Ext.apply(item,options);			  
            var tab = window.gbl_tabs.add(item);
            window.gbl_tabs.setActiveTab(tab);

        }

        //加载artDialog

        window.dialog = null;
        window.d = null;
        seajs.config({
            alias: {
                "jquery": "jquery-1.10.2.js"
            }
        });
        //定义全局dialog对象
        seajs.use([SITEURL+'/public/js/artDialog/src/dialog-plus'], function (dialog) {
            window.dialog = dialog;
        });
        //弹出框

        function floatBox(boxtitle,url,boxwidth,boxheight,closefunc,nofade)
        {
           boxwidth = boxwidth!='' ? boxwidth : 0;
           boxheight = boxheight!='' ? boxheight : 0;
           var func = $.isFunction(closefunc) ? closefunc : function(){};
           window.d = window.dialog({
                url: url,
                title: boxtitle,
                width:boxwidth,
                height:boxheight,
                onclose:function(){
                    func();
                }

            })


           if(boxwidth != 0)
            {
                d.width(boxwidth);
            }
            if(boxheight != 0)
            {
                d.height(boxheight);
            }
            if(nofade){
                d.show()
            }else
            {
                d.showModal();
            }


           /* dialog({
                title: '添加导航',
                height: 300,
                url: ajaxurl,
                //quickClose: true,
                onshow: function () {
                    console.log('onshow');
                },
                oniframeload: function () {
                    console.log('oniframeload');
                },
                onclose: function () {
                    *//*if (this.returnValue) {
                     $('#value').html(this.returnValue);
                     }*//*
                    ST.Util.showMsg('保存成功',4);
                    getNav();

                    //console.log('onclose');
                },
                onremove: function () {
                    console.log('onremove');
                }
            })*/

        }

        //计算报价(报价查看时使用)
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

        //显示/隐藏indexfrm
       function showIndex()
       {
           var len = $('.gbl_tabs').find('.x-tab').length;
           if(len==1){
               return false;
           }
           if(window.currentTab == 0)
           {
               window.gbl_tabs.setActiveTab(1);
           }

           $("#indexfrm").toggle();
       }
      function hideIndex()
      {
          var len = $('.gbl_tabs').find('.x-tab').length;
          if(len==1){
            return false;
          }
          $('#indexfrm').hide();
          if(window.currentTab == 0)
          {
              window.gbl_tabs.setActiveTab(1);
          }
          else
          {
              window.gbl_tabs.setActiveTab(window.currentTab);
          }

      }

     $(function(){
         $.hotkeys.add('f', function(){showIndex(); });
     })
         //帮助说明  b n vb
         $(".manager").mouseenter(function(){

             $(".top-help-list").show();

         })

         $(".manager").mouseleave(function(){

             $(".top-help-list").hide();

         })



</script>
</body>
</html>
