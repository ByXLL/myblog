<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"C:\xampp\htdocs\blog\public/../application/admin\view\index\administrators_list.html";i:1560737796;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561131036;}*/ ?>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/style/admin.css" media="all">
<style type="text/css">

.layui-table-cell .layui-form-checkbox[lay-skin=primary] {
    top: 5px;
    padding: 0;
}
</style>



<div class="layui-fluid">   
        <div class="layui-card">

          <div class="layui-card-body">
            <div style="padding-bottom: 10px;">
              <button class="layui-btn layuiadmin-btn-admin" data-type="batchdel">删除</button>
              <button class="layui-btn layuiadmin-btn-admin" data-type="add">添加</button>
            </div>
            
            <table id="LAY-user-back-manage" lay-filter="LAY-user-back-manage"></table>  
            <script type="text/html" id="buttonTpl">
              {{#  if(d.check == true){ }}
                <button class="layui-btn layui-btn-xs">已审核</button>
              {{#  } else { }}
                <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button>
              {{#  } }}
            </script>
            <script type="text/html" id="table-useradmin-admin">
              <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
              {{#  if(d.role == '超级管理员'){ }}
                <a class="layui-btn layui-btn-disabled layui-btn-xs"><i class="layui-icon layui-icon-delete"></i>删除</a>
              {{#  } else { }}
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
              {{#  } }}
            </script>
          </div>
        </div>
      </div>




<script src="/blog/public//static/admin/layuiadmin/layui/layui.js"></script>
<script src="/blog/public//static/admin/layuiadmin/layui/layui.all.js"></script>
<script>

//获取系统时间
Date.prototype.Format = function (fmt) { //author: meizz 
    var o = {
        "M+": this.getMonth() + 1, //月份 
        "d+": this.getDate(), //日 
        "H+": this.getHours(), //小时 
        "m+": this.getMinutes(), //分 
        "s+": this.getSeconds(), //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
        "S": this.getMilliseconds() //毫秒 
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}
// var time1 = new Date().Format("yyyy-MM-dd");
var time = new Date().Format("yyyy-MM-dd HH:mm:ss");
</script>

<script src=""></script>
<script>
//数据表格渲染
layui.define(["table", "form"], function(e) {
    var t = layui.$,
        i = layui.table;
    layui.form;
    i.render({
        elem: "#LAY-user-back-manage",
        //url: layui.setter.base + "json/useradmin/mangadmin.js",
        url: "/blog/public//static/admin/layuiadmin/json/useradmin/mangadmin.js",
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
                field: "loginname",
                title: "登录名"
            }, {
                field: "telphone",
                title: "手机"
            }, {
                field: "email",
                title: "邮箱"
            }, {
                field: "role",
                title: "角色"
            }, {
                field: "jointime",
                title: "加入时间",
                sort: !0
            }, {
                field: "check",
                title: "审核状态",
                templet: "#buttonTpl",
                minWidth: 80,
                align: "center"
            }, {
                title: "操作",
                width: 150,
                align: "center",
                fixed: "right",
                toolbar: "#table-useradmin-admin"
            }]
        ],
        text: "对不起，加载出现异常！"
    }), i.on("tool(LAY-user-back-manage)", function(e) {
        e.data;
        if ("del" === e.event) layer.prompt({
            formType: 1,
            title: "敏感操作，请验证口令"
        }, function(t, i) {
            layer.close(i), layer.confirm("确定删除此管理员？", function(t) {
                console.log(e), e.del(), layer.close(t)
            })
        });
        else if ("edit" === e.event) {
            t(e.tr);
            layer.open({
                type: 2,
                title: "编辑管理员",
                content: "adminform.html",
                area: ["420px", "420px"],
                btn: ["确定", "取消"],
                yes: function(e, t) {
                    var l = window["layui-layer-iframe" + e],
                        r = "LAY-user-back-submit",
                        n = t.find("iframe").contents().find("#" + r);
                    l.layui.form.on("submit(" + r + ")", function(t) {
                        t.field;
                        i.reload("LAY-user-front-submit"), layer.close(e)
                    }), n.trigger("click")
                },
                success: function(e, t) {}
            })
        }
    })
});






//时间处理

var $ = layui.$
,form = layui.form
,table = layui.table;

//事件
var active = {
    batchdel: function(){
    var checkStatus = table.checkStatus('LAY-user-back-manage')
    ,checkData = checkStatus.data; //得到选中的数据

    if(checkData.length === 0){
        return layer.msg('请选择数据');
    }
    
    layer.prompt({
        formType: 1
        ,title: '敏感操作，请验证口令'
    }, function(value, index){
        layer.close(index);
        
        layer.confirm('确定删除吗？', function(index) {
        
        //执行 Ajax 后重载
        /*
        admin.req({
            url: 'xxx'
            //,……
        });
        */
        table.reload('LAY-user-back-manage');
        layer.msg('已删除');
        });
    }); 
    }
    ,add: function(){
    layer.open({
        type: 2
        ,title: '添加管理员'
        ,content: 'adminform.html'
        ,area: ['420px', '420px']
        ,btn: ['确定', '取消']
        ,yes: function(index, layero){
        var iframeWindow = window['layui-layer-iframe'+ index]
        ,submitID = 'LAY-user-back-submit'
        ,submit = layero.find('iframe').contents().find('#'+ submitID);

        //监听提交
        iframeWindow.layui.form.on('submit('+ submitID +')', function(data){
            var field = data.field; //获取提交的字段
            
            //提交 Ajax 成功后，静态更新表格中的数据
            //$.ajax({});
            table.reload('LAY-user-front-submit'); //数据刷新
            layer.close(index); //关闭弹层
        });  
        
        submit.trigger('click');
        }
    }); 
    }
}  
$('.layui-btn.layuiadmin-btn-admin').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});


</script>
