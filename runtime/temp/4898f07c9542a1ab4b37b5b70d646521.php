<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\xampp\htdocs\blog\public/../application/admin\view\index\forum_list.html";i:1560694851;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1560741994;}*/ ?>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/style/admin.css" media="all">


<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-body">
        <div style="padding-bottom: 10px;">
            <button class="layui-btn layuiadmin-btn-forum-list" data-type="batchdel">删除</button>
        </div>
        <table id="LAY-app-forum-list" lay-filter="LAY-app-forum-list"></table> 
        <script type="text/html" id="imgTpl">
            <img style="display: inline-block; width: 50%; height: 100%;" src= {{ d.avatar }}>
        </script> 
        <script type="text/html" id="buttonTpl">
            {{#  if(d.top == true){ }}
            <button class="layui-btn layui-btn-xs">已置顶</button>
            {{#  } else { }}
            <button class="layui-btn layui-btn-primary layui-btn-xs">正常显示</button>
            {{#  } }}
        </script> 
        <script type="text/html" id="table-forum-list">
            <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
        </script>
        </div>
    </div>
</div>




<script src="/blog/public//static/admin/layuiadmin/layui/layui.all.js"></script>

<script src=""></script>
<script>


layui.define(["table", "form"], function(e) {
    var t = layui.$,
        i = layui.table;
    layui.form;
    i.render({
        elem: "#LAY-app-forum-list",
        url: "/blog/public//static/admin/layuiadmin/json/forum/list.js",
        cols: [
            [{
                type: "checkbox",
                fixed: "left"
            }, {
                field: "id",
                width: 100,
                title: "ID",
                sort: !0
            }, {
                field: "poster",
                title: "发帖人"
            }, {
                field: "avatar",
                title: "头像",
                width: 100,
                templet: "#imgTpl"
            }, {
                field: "content",
                title: "发帖内容"
            }, {
                field: "posttime",
                title: "发帖时间",
                sort: !0
            }, {
                field: "top",
                title: "置顶",
                templet: "#buttonTpl",
                minWidth: 80,
                align: "center"
            }, {
                title: "操作",
                width: 150,
                align: "center",
                fixed: "right",
                toolbar: "#table-forum-list"
            }]
        ],
        page: !0,
        limit: 10,
        limits: [10, 15, 20, 25, 30],
        text: "对不起，加载出现异常！"
    }), i.on("tool(LAY-app-forum-list)", function(e) {
        e.data;
        if ("del" === e.event) layer.confirm("确定删除此条帖子？", function(t) {
            e.del(), layer.close(t)
        });
        else if ("edit" === e.event) {
            t(e.tr);
            layer.open({
                type: 2,
                title: "编辑帖子",
                content: "../../../views/app/forum/listform.html",
                area: ["550px", "400px"],
                btn: ["确定", "取消"],
                resize: !1,
                yes: function(e, t) {
                    var l = window["layui-layer-iframe" + e],
                        r = "LAY-app-forum-submit",
                        o = t.find("iframe").contents().find("#" + r);
                    l.layui.form.on("submit(" + r + ")", function(t) {
                        t.field;
                        i.reload("LAY-app-forum-list"), layer.close(e)
                    }), o.trigger("click")
                },
                success: function(e, t) {}
            })
        }
    })
});


var $ = layui.$
    ,form = layui.form
    ,table = layui.table;
    
    //事件
    var active = {
      batchdel: function(){
        var checkStatus = table.checkStatus('LAY-app-forum-list')
        ,checkData = checkStatus.data; //得到选中的数据

        if(checkData.length === 0){
          return layer.msg('请选择数据');
        }
      
        layer.confirm('确定删除吗？', function(index) {
          
          //执行 Ajax 后重载
          /*
          admin.req({
            url: 'xxx'
            //,……
          });
          */
          table.reload('LAY-app-forum-list');
          layer.msg('已删除');
        });
      }
    }  
    
    $('.layui-btn.layuiadmin-btn-forum-list').on('click', function(){
      var type = $(this).data('type');
      active[type] ? active[type].call(this) : '';
    });


</script>
