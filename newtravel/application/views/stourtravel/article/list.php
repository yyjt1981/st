<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>文章管理-思途CMS3.0</title>
 {template 'stourtravel/public/public_js'}
 {php echo Common::getCss('style.css,base.css,base2.css,plist.css'); }
 {php echo Common::getScript("uploadify/jquery.uploadify.min.js,jquery.buttonbox.js,choose.js"); }

</head>
<body style="overflow:hidden">
<table class="content-tab">
   <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
    <td valign="top" class="content-rt-td" style="overflow:hidden">
      
  <div class="crumbs" id="dest_crumbs">
            <label>位置：</label>
              首页
              &gt; 文章系统
              &gt; 文章管理
              &gt; <span>文章列表</span>
       </div>
 <div class="list-top-set">
   <div class="list-web-pad"></div>
   <div class="list-web-ct">
      <div class="list-web-ct-lt" id="list_ot_set">
          <a href="javascript:;" id="addbtn" class="add-btn-class ml-10">添加</a>
      </div>
      <div class="list-web-ct-rt" id="list_ot_web"></div>
   </div>
 </div>

        <div class="search-bar filter" id="search_bar">
            <span class="tit ml-10">筛选</span>
            <div class="change-btn-list mt-5 ml-10">
                <span class="change-btn-xz btnbox" id="website" data-url="box/index/type/weblist" data-result="result_webid">站点切换&nbsp;&gt;&nbsp;<span id="result_webid">全部</span></span>

            </div>

            <div class="change-btn-list mt-5 ml-10">
                <span class="change-btn-xz btnbox" id="destination" data-url="box/index/type/destlist" data-result="result_dest" >目的地&nbsp;&gt;&nbsp;<span id="result_dest">全部</span></span>

            </div>

            <div class="change-btn-list mt-5 ml-10">
                <span class="change-btn-xz btnbox" id="attrlist" data-url="box/index/type/attrlist/typeid/4" data-result="result_attrlist" >属性&nbsp;&gt;&nbsp;<span id="result_attrlist">全部</span></span>

            </div>

            <div class="pro-search ml-10" style=" float:left; margin-top:5px">
                <input type="text" id="searchkey" value="文章名称" datadef="文章名称" class="sty-txt1 set-text-xh wid_200">
                <input type="button" value="搜索" class="sty-btn1 default-btn wid_60" onclick="CHOOSE.searchKeyword()" >
            </div>

     <span class="display-mod">

     </span>
        </div>
 <div id="product_grid_panel" class="content-nrt">
    
  </div>
  </td>
  </tr>
 </table> 
<script>



   window.display_mode=1;	//默认显示模式
   window.product_kindid=0;  //默认目的地ID
   window.kindmenu = {$kindmenu};//分类设置菜单


  Ext.onReady(
    function() 
    {
		 Ext.tip.QuickTipManager.init();

        $(".btnbox").buttonBox();

        $("#searchkey").focusEffect();
        //添加按钮
        $("#addbtn").click(function(){

            ST.Util.addTab('添加文章','{$cmsurl}article/add/parentkey/article/itemid/1',0);
        });

        var kindsetmenu=[];
        Ext.Object.each(window.kindmenu,function(key,row,itself){
            kindsetmenu.push({text:row.name,handler:function(){

                ST.Util.addTab(row.name,row.url,1);
            }})
        })
        Ext.create('Ext.button.Button',{
            text:'设置',
            renderTo:'list_ot_set',
            cls:'ext-configbutton',
            focusCls:'ext-configbutton',
            componentCls:'',
            menu: {
                items:kindsetmenu
            }

        });
		 
		 
		 
		 
		 
		
		//产品store
        window.product_store=Ext.create('Ext.data.Store',{

		 fields:[
             'id',
             'aid',
             'webid',
             'articlename',
             'kindlist',
             'attrid',
             'ishidden',
             'displayorder',
             'kindname',
             'attrname',
             'themelist',
             'iconlist',
             'modtime'
         ],

         proxy:{
		   type:'ajax',
		   api: {
              read: SITEURL+'article/article/action/read',  //读取数据的URL
			  update:SITEURL+'article/article/action/save',
			  destroy:SITEURL+'article/article/action/delete'
              },
		      reader:{
                type: 'json',   //获取数据的格式 
                root: 'lists',
                totalProperty: 'total'
                }	
	         },
		 remoteSort:true,
         autoLoad:true,
		 pageSize:30


		  
       });
	   
	  //产品列表 
	  window.product_grid=Ext.create('Ext.grid.Panel',{ 
	   store:product_store,
	   padding:'2px',
	   renderTo:'product_grid_panel',
	   border:0,
	   bodyBorder:0,
	   bodyStyle:'border-width:0px',
       scroll:'vertical', //只要垂直滚动条
	   bbar: Ext.create('Ext.toolbar.Paging', {
                    store: product_store,  //这个和grid用的store一样
                    displayInfo: true,
                    emptyMsg: "",
					items:[
					  {
						  xtype:'combo',
						  fieldLabel:'每页显示数量',
						  width:170,
						  labelAlign:'right',
						  forceSelection:true,
						  value:30,  
						  store:{fields:['num'],data:[{num:30},{num:60},{num:100}]},
						  displayField:'num',
						  valueField:'num',
						  listeners:{
							  select:CHOOSE.changeNum
						  }
					  }
					
					],
				  listeners: {
						single: true,
						render: function(bar) {
							var items = this.items;
							bar.down('tbfill').hide();

							bar.insert(0,Ext.create('Ext.panel.Panel',{border:0,html:'<div class="panel_bar"><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.chooseAll()">全选</a><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.chooseDiff()">反选</a><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.delMore()">删除</a></div>'}));
							bar.insert(1,Ext.create('Ext.panel.Panel',{border:0,items:[{
								 xtype:'button',
								 text:'批量设置',
								 menu:[
								       {text:'目的地',handler:function(){ CHOOSE.setSome(1)}},
									   {text:'属性',handler:function(){ CHOOSE.setSome(2)}},
									   {text:'专题',handler:function(){ CHOOSE.setSome(4)}},
									   {text:'图标',handler:function(){ CHOOSE.setSome(3)}}
									 ]
								
								}]}));
							bar.insert(2,Ext.create('Ext.toolbar.Fill'));
							//items.add(Ext.create('Ext.toolbar.Fill'));
						}
					}	
                 }), 		 			 
	   columns:[
			   {
				   text:'选择',
				   width:'5%',
				  // xtype:'templatecolumn',
				   tdCls:'product-ch',
				   align:'center',
				   dataIndex:'id',
				   border:0,
				   renderer : function(value, metadata,record) {
					    id=record.get('id');
					    if(id.indexOf('suit')==-1)
					    return  "<input type='checkbox' class='product_check' style='cursor:pointer' value='"+value+"'/>"; 
					 
					}
				  
			   },
			   {
				   text:'排序',
				   width:'5%',
				   dataIndex:'displayorder',
                   tdCls:'product-order',
				   id:'column_lineorder',
				   align:'center',
				   border:0,
			       editor: 'textfield',
				   renderer : function(value, metadata,record) {
					              var id=record.get('id'); 
								
								  if(value==9999||value==999999||value==0)
								      return '';
							      else 
								      return value;		  
					 
					}

				  
			   },
			   {
				   text:'文章标题',
				   width:'35%',
				   dataIndex:'articlename',
				   align:'left',
				   border:0,
				   sortable:false,
				   renderer : function(value, metadata,record) {
					            var aid=record.get('aid');
							 var id=record.get('id');
									 
									 if(!isNaN(id))
			                           return "<a href='/raiders/show_"+aid+".html' class='product-title' target='_blank'>"+value+"</a>";
			                       
						}
				  
			   },
			   {
				   text:'目的地',
				   width:'8%',
				   dataIndex:'kindlist',
				   align:'center',
				    cls:'mod-1',
				   sortable:false,
				   renderer : function(value, metadata,record,rowIndex,colIndex) {
					   
					     var kindname=record.get('kindname');
						 if(kindname)
						 metadata.tdAttr ="data-qtip='"+kindname+"'"+"data-qclass='dest-tip'";
						 var id=record.get('id');
                         var d_text=value?'<span style="color:green">已设</span>':'<span style="color:red">未设</span>';
						 return "<a href='javascript:void(0);' onclick=\"ST.Destination.setDest(this,4,"+id+",'"+value+"',CHOOSE.destSetBack)\">"+d_text+"</a>";

                    }


				  
			   },
			   {
				 text:'图标',
				   width:'8%',
				   align:'center',
				   dataIndex:'iconlist',
				   border:0,
				   cls:'mod-1',
				   sortable:false,
				   renderer : function(value, metadata,record,rowIndex,colIndex) {
					  
					     var id=record.get('id');
                         var d_text=value?'<span style="color:green">已设</span>':'<span style="color:red">未设</span>';
						 return "<a href='javascript:void(0);' onclick=\"ST.Icon.setIcon(this,4,"+id+",'"+value+"',CHOOSE.iconSetBack)\">"+d_text+"</a>";
                    }
				 
  
			   },
			   {
				   text:'属性',
				   width:'8%',
				   align:'center',
				   dataIndex:'attrid',
				   border:0,
				   sortable:false,
				   cls:'mod-1',
				   renderer : function(value, metadata,record,rowIndex,colIndex) {
					  
					     var attrname=record.get('attrname');
						 if(attrname)
						    metadata.tdAttr ="data-qtip='"+attrname+"'data-qclass='dest-tip'";
						 
						 var id=record.get('id');
                         var d_text=value?'<span style="color:green">已设</span>':'<span style="color:red">未设</span>';
						 return "<a href='javascript:void(0);' onclick=\"ST.Attrid.setAttrid(this,4,"+id+",'"+value+"',CHOOSE.attrSetBack)\">"+d_text+"</a>";
                                   // return getExpandableImage(value, metadata,record);
                    }


			   },
			   {
				   text:'专题',
				   width:'7%',
				   align:'center',
				   sortable:false,
				   dataIndex:'themelist',
				   cls:'mod-1',
				   border:0,
				   renderer : function(value, metadata,record,rowIndex,colIndex) {

						 var id=record.get('id');
                         var d_text=value?'<span style="color:green">已设</span>':'<span style="color:red">未设</span>';
						 return "<a href='javascript:void(0);' onclick=\"ST.Theme.setTheme(this,4,"+id+",'"+value+"',CHOOSE.themeSetBack)\">"+d_text+"</a>";
                                   // return getExpandableImage(value, metadata,record);
                    }
				  
			   },
			   {
				   text:'隐藏',
				   width:'7%',
				  // xtype:'templatecolumn',
				   align:'center',
				   border:0,
				   dataIndex:'ishidden',
				   xtype:'actioncolumn',
				    cls:'mod-1',
		           items:[
			       {
			        getClass: function(v, meta, rec) {          // Or return a class from a function
					    if(v==1)
						  return 'dest-status-ok';
						else
						  return 'dest-status-none';  
                    },
				    handler:function(view,index,colindex,itm,e,record)
				    {

					   var val=record.get('ishidden');
                       var id=record.get('id');
	                   var newval=val==1?0:1;
					   updateField(null,record.get('id'),'ishidden',newval)
					   
				    }
			      }
			      ]
				  
				  
			   },
			   {
				   text:'更新时间',
				   width:'9%',
				   align:'center',
				   border:0,
				   dataIndex:'modtime',
				  renderer : function(value, metadata,record) {
					    /* var id=record.get('id');
						 var str=Ext.Date.format(new Date(value*1000), 'Y-m-d a'); 
						 str=str.replace('上午','A.M');
						 str=str.replace('下午','P.M');
						 return str;*/
                        return value;

                    }

				  
			   },
			   {
				   text:'管理',
				   width:'9%',
				   align:'center',
				   border:0,
				   sortable:false,
				  renderer : function(value, metadata,record) {
					     var id=record.get('id'); 
						 return "<a href='javascript:void(0);' onclick=\"goModify("+id+")\">修改";
						 	
                                   // return getExpandableImage(value, metadata,record);
                    }
				  
			   }
	           ],
			 listeners:{
		            boxready:function()
		            {
					
				
					   var height=Ext.dom.Element.getViewportHeight();
					   this.maxHeight=height-106;
					   this.doLayout();
		            },
					afterlayout:function(grid)
					{
						
			
			            if(window.product_kindname)
						{
							 Ext.getCmp('column_lineorder').setText(window.product_kindname+'-排序')
						}
						else
					    {
							Ext.getCmp('column_lineorder').setText('排序')
						}
					
						/*window.product_store.each(function(record){
				        id=record.get('id');
						

						
					   });*/
					   var data_height=0;
					   try{
					     data_height=grid.getView().getEl().down('.x-grid-table').getHeight();
					   }catch(e)
					   {
					   }
					  var height=Ext.dom.Element.getViewportHeight();

					  if(data_height>height-106)
					  {
						  window.has_biged=true;
						  grid.height=height-106;
					  }
					  else if(data_height<height-106)
					  {
						  if(window.has_biged)
						  {


							window.has_biged=false;  
							grid.doLayout();
						  }
					  }
				  }
			 },
			 plugins: [
                Ext.create('Ext.grid.plugin.CellEditing', {
                  clicksToEdit:2,
                  listeners:{
					 edit:function(editor, e)
					 {
						var id=e.record.get('id');
						updateField(0,id,e.field,e.value,0);
						return false;
						  
					 },
					 beforeedit:function(editor,e)
					 {
								   
					 }
				 }
               })
             ],
			viewConfig:{
				//enableTextSelection:true
				}	   
	   });
	   
	  
	  
	})
	
	//实现动态窗口大小
  Ext.EventManager.onWindowResize(function(){ 
      var height=Ext.dom.Element.getViewportHeight(); 
	  var data_height=window.product_grid.getView().getEl().down('.x-grid-table').getHeight();
	  if(data_height>height-106)
	     window.product_grid.height=(height-106);
	   else

	     window.product_grid.doLayout();
	  
	   
	 }) 
	
	
	 
	 	
	

  	
	

 
  
  //更新某个字段
  function updateField(ele,id,field,value,type)
  {
	  var record=window.product_store.getById(id.toString());
	  if(type=='select')
	  {
		  value=Ext.get(ele).getValue();
	  }
	  var view_el=window.product_grid.getView().getEl();
	
	 
	  Ext.Ajax.request({
						 url   :  "article/action/update",
						 method  :  "POST",
						 datatype  :  "JSON",
						 params:{id:id,field:field,val:value,kindid:window.product_kindid},
						 success  :  function(response, opts) 
						 {
							 if(response.responseText=='ok')
							 {
							 
							   record.set(field,value);
							   record.commit(); 
						      
							 }
						 }});

  }
  
  


  
  
  
  
  

  //修改
    function goModify(id)
    {
        var url = SITEURL+'article/edit/parentkey/article/itemid/1/id/'+id;

        parent.window.addTab('修改文章',url,1);
    }
</script>

</body>
</html>
