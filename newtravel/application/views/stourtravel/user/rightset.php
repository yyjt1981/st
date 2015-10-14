<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS3.0</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,plist.css'); }
    {php echo Common::getCss('ext-theme-neptune-all-debug.css','js/extjs/resources/ext-theme-neptune/'); }

    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }


    <style>
    </style>
</head>
<body style="overflow:hidden">
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td" style="overflow:hidden">
            <div class="crumbs" id="attr_crumbs">
                <label>位置：</label>
                首页
                &gt; 增值应用
                &gt; 用户管理
                &gt; <span>权限设置</span>
            </div>


            <div></div>
            <div class="w-set-tit bom-arrow" style="float:none;margin-top: 50px;height:0px;border:0">


            </div>
            <div id="line_grid_panel" class="content-nrt" style="margin-top: 5px">


                <div id="attr_tree_panel" class="content-nrt">

                </div>
                <div class="panel_bar">

                </div>
        </td>
    </tr>
</table>
<script>

var menu_list=<?php echo json_encode($list);  ?>;
var roleid={$roleid};
Ext.onReady(
    function () {
        //目的地store

        $(".w-set-tit").find('#tb_carattr').addClass('on');

        Ext.tip.QuickTipManager.init();

        Ext.define('MyModel', {
            extend: 'Ext.data.TreeModel',
            requires: ['Ext.data.SequentialIdGenerator'],
            fields: [
                'id',
                'key',
                'text',
                'isparent',
                'slook',
                'smodify',
                'sadd',
                'sdelete'
            ]
        });
        window.attr_store = Ext.create('Ext.data.TreeStore', {
            model:'MyModel',
            autoLoad:true,
            root:{children:menu_list}
        });

        //目的地panel
        window.attr_treepanel = Ext.create('Ext.tree.Panel', {
            store: attr_store,
            rootVisible: false,
            padding: '2px',
            renderTo: 'attr_tree_panel',
            border: 0,
            style: 'margin-left:5px;border:0px;',
            width: "100%",
            bodyBorder: 0,
            bodyStyle: 'border-width:0px',
            autoScroll: true,


            listeners: {
                itemmousedown: function (node, record, item, index, e, eOpts) {
                    var x = e.xy[0];
                    var column_x = Ext.getCmp('attr_name').getX();
                    var column_width = Ext.getCmp('attr_name').getWidth();

                    if (x < column_x || x > column_x + column_width)
                        return false;

                    window.node_moving = true;

                },
                sortchange: function (ct, column, direction, eOpts) {

                    window.sort_direction = direction;

                    var field = column.dataIndex;
                    if (field == 'kindname')
                        field = 'pinyin';
                    window.attr_store.sort(field, direction);

                },
                celldblclick: function (view, td, cellIndex, record, tr, rowIndex, e, eOpts) {

                    if (record.get('displayorder') == 'add')
                        return false;
                },
                afterlayout: function (panel) {
                    var data_height = panel.getView().getEl().down('.x-grid-table').getHeight();

                    var height = Ext.dom.Element.getViewportHeight();

                    // console.log(data_height+'---'+height);
                    if (data_height > height - 100) {
                        window.has_biged = true;
                        panel.height = height - 100;
                    }
                    else if (data_height < height - 100) {
                        if (window.has_biged) {
                            delete panel.height;
                            window.has_biged = false;
                            window.attr_treepanel.doLayout();
                        }
                    }

                }
            },
            viewConfig: {
                forceFit: true,
                border: 0,
                plugins: {
                    ptype: 'treeviewdragdrop',
                    enableDrag: true,
                    enableDrop: true,
                    displayField: 'attrname'
                },

                listeners: {
                    boxready: function () {

                        var height = Ext.dom.Element.getViewportHeight();
                        this.up('treepanel').maxHeight = height - 100;
                        this.up('treepanel').doLayout();
                    },

                    beforedrop: function (node, data, overModel, dropPosition, dropHandlers) {
                        if (dropPosition != 'append') {
                            dropHandlers.processDrop();
                            return;
                        }

                        if (overModel.isLoaded())
                            dropHandlers.processDrop();
                        else {

                            overModel.expand(false, function () {
                                dropHandlers.processDrop();
                            });
                        }

                        dropHandlers.cancelDrop();


                    },
                    drop: function (node, data, overModel, dropPosition, eOpts) {

                        var params = {};
                        params['moveid'] = data.records[0].get('id');
                        params['overid'] = overModel.get('id');
                        params['position'] = dropPosition;


                        if (dropPosition == 'append') {

                            var btn_node = window.attr_store.getNodeById(params['overid'] + 'add');
                            overModel.insertBefore(data.records[0], btn_node);
                        }
                        //alert(overModel.children);
                        Ext.Ajax.request({
                            url: SITEURL+'line/attr/action/drag',
                            params: params,
                            method: 'POST',
                            success: function (response) {
                                var text = response.responseText;
                                if (text == 'ok') {

                                } else {

                                }
                                // process server response here
                            }
                        });

                    }
                }

            },
            columns: [
                {
                    xtype: 'treecolumn',   //有展开按钮的指定为treecolumn
                    text: '<span class="grid_column_text">模块名称</span><img  src="/admin/public/images/help-ico.png" class="grid_column_help" alt="帮助" title="帮助">',
                    dataIndex: 'text',
                    id: 'attr_name',
                    sortable:false,
                    locked: false,
                    width: '21%',
                   renderer : function(value, metadata,record) {
                          return value;
                    }
                },
                {
                    text: '<span class="grid_column_text">查看权限</span><img  src="/admin/public/images/help-ico.png" class="grid_column_help" alt="帮助" title="帮助">',
                    width:'17%',
                    // xtype:'templatecolumn',
                    align:'center',
                    border:0,
                    dataIndex:'slook',
                    renderer : function(value, metadata,record) {
                           var id=record.get('id');
                           var is_checked=value==1?"checked='checked'":'';
                           var isparent=record.get('isparent');
                           var cls=isparent==1?'pck':'';
                           var mstr=isparent==1?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'';
                           return "<input type='checkbox' class='"+cls+"' "+is_checked+" onclick=\"updateField(this,'"+id+"','slook',0,'checkbox','"+isparent+"')\" />"+mstr;
                    }


                },
                {
                    text: '<span class="grid_column_text">修改权限</span><img  src="/admin/public/images/help-ico.png" class="grid_column_help" alt="帮助" title="帮助">',
                    width:'17%',
                    align:'center',
                    border:0,
                    dataIndex:'smodify',
                    renderer : function(value, metadata,record) {
                        var id=record.get('id');
                        var is_checked=value==1?"checked='checked'":'';
                        var isparent=record.get('isparent');
                        var cls=isparent==1?'pck':'';
                        var mstr=isparent==1?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'';
                        return "<input type='checkbox' class='"+cls+"' "+is_checked+" onclick=\"updateField(this,'"+id+"','smodify',0,'checkbox','"+isparent+"')\" />"+mstr;
                    }

                },
                {
                    text: '<span class="grid_column_text">添加权限</span><img  src="/admin/public/images/help-ico.png" class="grid_column_help" alt="帮助" title="帮助">',
                    width:'17%',
                    align:'center',
                    border:0,
                    dataIndex:'sadd',
                    renderer : function(value, metadata,record) {
                        var id=record.get('id');
                        var is_checked=value==1?"checked='checked'":'';
                        var isparent=record.get('isparent');
                        var cls=isparent==1?'pck':'';
                        var mstr=isparent==1?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'';
                        return "<input type='checkbox' class='"+cls+"' "+is_checked+" onclick=\"updateField(this,'"+id+"','sadd',0,'checkbox','"+isparent+"')\" />"+mstr;
                    }


                },
                {
                    text: '<span class="grid_column_text">删除权限</span><img  src="/admin/public/images/help-ico.png" class="grid_column_help" alt="帮助" title="帮助">',
                    width:'17%',
                    align:'center',
                    border:0,
                    dataIndex:'sdelete',
                    renderer : function(value, metadata,record) {
                        var id=record.get('id');
                        var is_checked=value==1?"checked='checked'":'';
                        var isparent=record.get('isparent');
                        var cls=isparent==1?'pck':'';
                        var mstr=isparent==1?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':'';
                        return "<input type='checkbox' class='"+cls+"' "+is_checked+" onclick=\"updateField(this,'"+id+"','sdelete',0,'checkbox','"+isparent+"')\" />"+mstr;
                    }
                },
                {
                    text: '<span class="grid_column_text">选择</span><img  src="/admin/public/images/help-ico.png" class="grid_column_help" alt="帮助" title="帮助">',
                    width: '10%',
                    tdCls: 'attr-al-mid',
                    dataIndex:'id',
                    renderer : function(value, metadata,record) {
                              var isparent=record.get('isparent');
                              if(isparent==1)
                                 return '';
                              return "<a href='javascript:;' onclick=\"rowChoose(this,'"+value+"')\">全选</a>&nbsp;&nbsp;&nbsp;<a href='javascript:;' onclick=\"rowChooseDiff(this,'"+value+"')\">反选</a>";
                    }
                }
            ],
            plugins: [
                Ext.create('Ext.grid.plugin.CellEditing', {
                    clicksToEdit: 2,
                    listeners: {
                        edit: function (editor, e) {

                            e.record.commit();
                            e.record.save({params: {field: e.field}});

                        }
                    }
                })
            ]
        });


    }
);




Ext.getBody().on('mouseup', function () {
    window.node_moving = false;
});
Ext.getBody().on('mousemove', function (e, t, eOpts) {

    if (window.node_moving == true) {
        // console.log('mov_'+window.node_moving);

        var tree_view = window.attr_treepanel.down('treeview');
        var view_y = tree_view.getY();
        var view_bottom = view_y + tree_view.getHeight();
        var mouse_y = e.getY();
        if (mouse_y < view_y)
            tree_view.scrollBy(0, -5, false);
        if (mouse_y > view_bottom)
            tree_view.scrollBy(0, 5, false);

    }
});


Ext.EventManager.onWindowResize(function () {
    var height = Ext.dom.Element.getViewportHeight();
    var data_height = window.attr_treepanel.getView().getEl().down('.x-grid-table').getHeight();
    if (data_height > height - 100)
        window.attr_treepanel.height = (height - 100);
    else
        delete window.attr_treepanel.height;
    window.attr_treepanel.doLayout();
})

function cascadeattr(attr, index) {
    if (attr.length == 1) {
        var node = window.attr_store.getNodeById(attr[0]);
        var ele = window.attr_treepanel.getView().getNode(node);
        if (ele) {

            var edom = Ext.get(ele);
            edom.addCls('search-attr-tr');
            if (index == 0)
                viewScroll(edom);
        }
    }
    else {
        var node = window.attr_store.getNodeById(attr[0]);
        attr.shift();
        node.expand(false, function () {
            cascadeattr(attr, index);
        });

    }
}
function viewScroll(extdom)   //在treeview里滚动
{
    var tree_view = window.attr_treepanel.getView();
    var view_y = tree_view.getY();
    var dom_y = extdom.getY();


    window.setTimeout(function () {
        window.first_scroll = true;
        extdom.scrollIntoView(tree_view.getEl());
    }, 450);
    //else
    // extdom.scrollIntoView(tree_view.getEl());


}

function chooseAll() {
    var check_cmp = Ext.query('.attr_check');
    for (var i in check_cmp) {
        if (!Ext.get(check_cmp[i]).getAttribute('checked'))
            check_cmp[i].click();
    }

    //  window.sel_model.selectAll();
}
function chooseDiff() {
    var check_cmp = Ext.query('.attr_check');
    for (var i in check_cmp)
        check_cmp[i].click();
    //var records=window.sel_model.getSelection();
    //window.sel_model.selectAll(true);

    //	window.sel_model.deselect(records,true);

    //var
}
function delattr() {
    /*Ext.Msg.confirm("提示", "确定删除", function (buttonId) {

        if (buttonId == 'no')
            return;
        var check_cmp = Ext.select('.attr_check:checked');
        check_cmp.each(
            function (el, c, index) {
               // alert(el.getValue());
              //  window.attr_store.getNodeById(el.getValue().toString()).destroy();
               // window.attr_store.

                  var id=el.getValue();
                  var node=window.attr_store.getNodeById(id);
                  node.destroy();


            }
        );
    });
    */

}
function searchattr() {

    var s_str = Ext.get('search').getValue();
    //s_str=s_str.trim();
    Ext.select('.search-attr-tr').removeCls('search-attr-tr');

    if (!s_str)
        return;
    Ext.Ajax.request({
        url: 'car/action/search',
        params: {keyword: s_str},
        method: 'POST',
        success: function (response) {
            var text = response.responseText;
            if (text == 'no') {
                Ext.Msg.alert('查询结果', "未找到与'" + s_str + "'相关的目的地");
            } else {
                var list = Ext.decode(text);
                var index = 0;
                for (var i in list) {
                    var attr = list[i];
                    cascadeattr(attr, index);
                    index++;
                }
            }// process server response here
        }
    });

}

function getHelp(e) {
    if (e && e.stopPropagation)
    //因此它支持W3C的stopPropagation()方法 
        e.stopPropagation();
    else
    //否则，我们需要使用IE的方式来取消事件冒泡 
        window.event.cancelBubble = true;
}

function updateField(ele,id,field,value,type,isparent)
{
    var record=window.attr_store.getNodeById(id);
    if(type=='checkbox')
    {
        if(isparent==1)
        {
            var extdom=Ext.get(ele);
            Ext.Array.each(record.childNodes,function(row,index){
                 var key=row.get('key');
                 if(extdom.is(':checked'))
                 {
                    row.set(field,1);
                    row.commit();
                    setField(field,key,1);
                 }
                 else
                 {
                    row.set(field,0);
                    setField(field,key,0);
                 }
             })
        }
        else
        {
            var key=record.get('key');
            var extdom=Ext.get(ele);
            if(extdom.is(':checked'))
            {
                record.set(field,1);
                record.commit();
                setField(field,key,1);
            }
            else
            {
                record.set(field,0);
                setField(field,key,0);
            }
        }


    }
    return true;
}
function setField(field,key,value)
{
    Ext.Ajax.request({
        url   :  SITEURL+"user/setright/action/update",
        method  :  "POST",
        datatype  :  "JSON",
        params:{field:field,moduleid:key,value:value,roleid:roleid},
        success  :  function(response, opts)
        {

        }});
    return true;
}

function stopDef(e)
{
    if (e && e.stopPropagation)
    //因此它支持W3C的stopPropagation()方法
        e.stopPropagation();
    else
    //否则，我们需要使用IE的方式来取消事件冒泡
        window.event.cancelBubble = true;
}

function rowChoose(ele,id)
{
    var field_arr=['slook','smodify','sadd','sdelete'];
    var record=window.attr_store.getNodeById(id);
    var key=record.get('key');

    for(var i in field_arr)
    {
        var field=field_arr[i];
        record.set(field,1);
        setField(field,key,1);
    }
}
function rowChooseDiff(ele,id)
{
    var field_arr=['slook','smodify','sadd','sdelete'];
    var record=window.attr_store.getNodeById(id);
    var key=record.get('key');

    for(var i in field_arr)
    {
        var field=field_arr[i];
        var value=record.get(field);
        value=value==1?0:1;
        record.set(field,value);
        setField(field,key,value);
    }

}



</script>
</body>
</html>
