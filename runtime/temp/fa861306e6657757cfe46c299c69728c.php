<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\xampp\htdocs\blog\public/../application/admin\view\index\content_tags.html";i:1561128397;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
        <div class="layui-card-header layuiadmin-card-header-auto">
            <button class="layui-btn layuiadmin-btn-tags" data-type="add">添加</button>
        </div>
        <div class="layui-card-body">    
            <table id="LAY-app-content-tags" lay-filter="LAY-app-content-tags"></table>  
            <script type="text/html" id="layuiadmin-app-cont-tagsbar">
                <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
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
layui.define(["table", "form"], function(t) {
    var e = layui.$,
        i = layui.table,
        n = layui.form;
    i.render({
        elem: "#LAY-app-content-tags",
        url: "<?php echo url('index/get_content_tags'); ?>",
        cols: [
            [ {
                field: "id",
                width: 100,
                title: "ID",
                sort: !0
            }, {
                field: "tag",
                title: "分类名",
                minWidth: 100
            }, {
                title: "操作",
                width: 150,
                align: "center",
                fixed: "right",
                toolbar: "#layuiadmin-app-cont-tagsbar"
            }]
        ],
        text: "对不起，加载出现异常！"
    }), i.on("tool(LAY-app-content-tags)", function(t) {
        var i = t.data;
        var item =i;
        if ("del" === t.event) layer.confirm("确定删除此分类？", function(e) {
            //回传id给后台删除
            $.ajax({
                type: "POST",
                url:'<?php echo url("index/del_content_tags"); ?>',
                data: {
                    id:i.id
                },success: function(msg){
                    layer.msg(msg);
                }
            });
            t.del(), layer.close(e)
        })
      
        else if ("edit" === t.event && layer.open) {
            e(t.tr);
            layer.open({
                type: 2,
                title: "编辑分类",
                content: "content_tags_form?id=" + i.id,
                area: ["550px", "200px"],
                btn: ["确定", "取消"],
                yes: function(e, i) {
                    var n = i.find("iframe").contents().find("#layuiadmin-app-form-tags"),
                        l = n.find('input[name="tags"]').val();
                        
                    l.replace(/\s/g, "") && (t.update({
                        tags: l
                    }),
                    $.ajax({
                        type: "POST",
                        url:'<?php echo url("index/set_content_tags"); ?>',
                        data: {
                            id:item.id,
                            tags:l
                        },
                        success: function(msg){
                            layer.msg(msg);
                            table.reload('LAY-app-content-tags');           //重载
                        }
                    }), layer.close(e))
                },
                // success: function(t, e) {
                //     // var n = t.find("iframe").contents().find("#layuiadmin-app-form-tags").click();
                //     // n.find('input[name="tags"]').val(i.tags)
                //     //console.log(n.find('input[name="tags"]').val(i.tags).val());
                // }
            })
        }
    })
    // , t("contlist", {})
});

var table = layui.table;
var $ = layui.$, active = {
    add: function(){
    layer.open({
        type: 2
        ,title: '添加分类'
        ,content: 'content_tags_form_add'
        ,area: ['550px', '200px']
        ,btn: ['确定', '取消']
        ,yes: function(index, layero){
        var othis = layero.find('iframe').contents().find("#layuiadmin-app-form-tags")
        ,tags = othis.find('input[name="tags"]').val();
        if(!tags.replace(/\s/g, '')) return;    
        $.ajax({
            type: "POST",
            url:'<?php echo url("index/content_tags"); ?>',
            data: {
                tags:tags
            },
            success: function(msg){
               layer.msg(msg);
            }
        })

        table.reload('LAY-app-content-tags');
        layer.close(index);
        }
    }); 
    }
}  
$('.layui-btn.layuiadmin-btn-tags').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});


</script>
