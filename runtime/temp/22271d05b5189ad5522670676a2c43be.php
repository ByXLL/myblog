<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\xampp\htdocs\blog\public/../application/admin\view\index\content.html";i:1560790377;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1560741994;}*/ ?>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/style/admin.css" media="all">


<div class="layui-fluid">
    <div class="layui-card-body">
    <div style="padding-bottom: 10px;">
        <button class="layui-btn layuiadmin-btn-comm" data-type="batchdel">删除</button>
    </div>
    <table id="LAY-app-content-comm" lay-filter="LAY-app-content-comm"></table>  
    <script type="text/html" id="table-content-com">
        <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
    </script>
    </div>
</div>




<script src="/blog/public//static/admin/layuiadmin/layui/layui.all.js"></script>

<script src=""></script>
<script>

layui.define(["table", "form"], function(t) {
    var e = layui.$,
        i = layui.table,
        n = layui.form;
     i.render({
        elem: "#LAY-app-content-comm",
        url: "/blog/public//static/admin/layuiadmin/json/content/comment.js",
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
                field: "reviewers",
                title: "评论者",
                minWidth: 100
            }, {
                field: "content",
                title: "评论内容",
                minWidth: 100
            }, {
                field: "commtime",
                title: "评论时间",
                minWidth: 100,
                sort: !0
            }, {
                title: "操作",
                width: 150,
                align: "center",
                fixed: "right",
                toolbar: "#table-content-com"
            }]
        ],
        page: !0,
        limit: 10,
        limits: [10, 15, 20, 25, 30],
        text: "对不起，加载出现异常！"
    }), i.on("tool(LAY-app-content-comm)", function(t) {
        t.data;
        "del" === t.event ? layer.confirm("确定删除此条评论？", function(e) {
            t.del(), layer.close(e)
        }) : "edit" === t.event && layer.open({
            type: 2,
            title: "编辑评论",
            content: "content_form.html",
            area: ["450px", "300px"],
            btn: ["确定", "取消"],
            yes: function(t, e) {
                var n = window["layui-layer-iframe" + t],
                    l = "layuiadmin-app-comm-submit",
                    a = e.find("iframe").contents().find("#" + l);
                n.layui.form.on("submit(" + l + ")", function(e) {
                    e.field;
                    i.reload("LAY-app-content-comm"), layer.close(t)
                }), a.trigger("click")
            },
            success: function(t, e) {}
        })
    }), t("contlist", {})
});








var $ = layui.$
    ,form = layui.form
    ,table = layui.table;
    
    
    //监听搜索
    form.on('submit(LAY-app-contcomm-search)', function(data){
      var field = data.field;
      
      //执行重载
    //   table.reload('LAY-app-content-comm', {
    //     where: field
    //   });
    });
    
    //点击事件
    var active = {
      batchdel: function(){
        var checkStatus = table.checkStatus('LAY-app-content-comm')
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
          table.reload('LAY-app-content-comm');
          layer.msg('已删除');
        });
      }
    }  

    $('.layui-btn.layuiadmin-btn-comm').on('click', function(){
      var type = $(this).data('type');
      active[type] ? active[type].call(this) : '';
    });


</script>
