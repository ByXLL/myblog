<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"C:\xampp\htdocs\blog\public/../application/admin\view\index\administrator_role.html";i:1560691448;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1560704043;}*/ ?>
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
              <button class="layui-btn layuiadmin-btn-role" data-type="batchdel">删除</button>
              <button class="layui-btn layuiadmin-btn-role" data-type="add">添加</button>
            </div>
          
            <table id="LAY-user-back-role" lay-filter="LAY-user-back-role"></table>  
            <script type="text/html" id="buttonTpl">
              {{#  if(d.check == true){ }}
                <button class="layui-btn layui-btn-xs">已审核</button>
              {{#  } else { }}
                <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button>
              {{#  } }}
            </script>
            <script type="text/html" id="table-useradmin-admin">
              <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
              <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
            </script>
          </div>
        </div>
      </div>
    



<script src="/blog/public//static/admin/layuiadmin/layui/layui.js"></script>
<script src="/blog/public//static/admin/layuiadmin/layui/layui.all.js"></script>

<script src=""></script>
<script>

layui.define(["table", "form"], function(e) {
    var t = layui.$,
        i = layui.table;
    layui.form;
    i.render({
        elem: "#LAY-user-back-role",
        //url: layui.setter.base + "json/useradmin/role.js",
        url: "/blog/public//static/admin/layuiadmin/json/useradmin/role.js",
        cols: [
            [{
                type: "checkbox",
                fixed: "left"
            }, {
                field: "id",
                width: 80,
                title: "ID",
                sort: !0
            }, {
                field: "rolename",
                title: "角色名"
            }, {
                field: "limits",
                title: "拥有权限"
            }, {
                field: "descr",
                title: "具体描述"
            }, {
                title: "操作",
                width: 150,
                align: "center",
                fixed: "right",
                toolbar: "#table-useradmin-admin"
            }]
        ],
        text: "对不起，加载出现异常！"
    }), i.on("tool(LAY-user-back-role)", function(e) {
        e.data;
        if ("del" === e.event) layer.confirm("确定删除此角色？", function(t) {
            e.del(), layer.close(t)
        });
        else if ("edit" === e.event) {
            t(e.tr);
            layer.open({
                type: 2,
                title: "编辑角色",
                content: "../../../views/user/administrators/roleform.html",
                area: ["500px", "480px"],
                btn: ["确定", "取消"],
                yes: function(e, t) {
                    var l = window["layui-layer-iframe" + e],
                        r = t.find("iframe").contents().find("#LAY-user-role-submit");
                    l.layui.form.on("submit(LAY-user-role-submit)", function(t) {
                        t.field;
                        i.reload("LAY-user-back-role"), layer.close(e)
                    }), r.trigger("click")
                },
                success: function(e, t) {}
            })
        }
    }), e("useradmin", {})
});

</script>
