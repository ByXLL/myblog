<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\xampp\htdocs\blog\public/../application/admin\view\index\comment_list.html";i:1561344583;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
              <button class="layui-btn layuiadmin-btn-comm" data-type="batchdel">删除</button>
            </div>
            <table id="LAY-app-content-comm" lay-filter="LAY-app-content-comm"></table>  
            <script type="text/html" id="table-content-com">
              <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>回复</a>
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
        elem: "#LAY-app-content-comm",
        url: "<?php echo url('index/get_comment'); ?>",
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
                field: "page",
                title: "评论页",
                minWidth: 100
            }, {
                field: "reviewers",
                title: "评论者",
                minWidth: 100
            }, {
                field: "content",
                title: "评论内容",
                minWidth: 150
            }, {
                field: "reply",
                title: "回复内容",
                minWidth: 150
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
        var id = t.data.id;
        "del" === t.event ? layer.confirm("确定删除此条评论？", function(e) {
            //回传id给后台删除
            console.log('选中的id ' + t.data.id);
            $.ajax({
                type: "POST",
                url:'<?php echo url("index/del_comment"); ?>',
                data: {
                    id:t.data.id
                },success: function(msg){
                    layer.msg(msg);
                }
            });
            t.del(), layer.close(e)
        }) : "edit" === t.event && layer.open({
            type: 2,
            title: "回复评论",
            content: "comment_form?id="+t.data.id,
            area: ["450px", "300px"],
            btn: ["确定", "取消"],
            yes: function(t, e) {
                var n = window["layui-layer-iframe" + t],
                    l = "layuiadmin-app-comm-submit",
                    a = e.find("iframe").contents().find("#" + l)
                n.layui.form.on("submit(" + l + ")", function(e) {
                    //console.log(n.content.val());
                    $.ajax({
                        type: "POST",
                        url:'<?php echo url("index/set_comment"); ?>',
                        data: {
                            id:id,
                            content:n.content.val()
                        },
                        success: function(msg){
                            layer.msg(msg);
                            e.field;
                            i.reload("LAY-app-content-comm"), layer.close(t) //重载
                        }

                    });
 
                }), a.trigger("click")
            },
            //success: function(t, e) {}
        })
    })
    // /, t("contlist", {})
});





var $ = layui.$
    ,form = layui.form
    ,table = layui.table;


//点击事件
var active = {
    batchdel: function(){
    var checkStatus = table.checkStatus('LAY-app-content-comm')
    ,checkData = checkStatus.data; //得到选中的数据
    var id_list = [];

    for(i=0;i<checkData.length; i++){
        id_list.push(
        checkData[i].id
        )
    }
    console.log("选中的数据id "+id_list);
    if(checkData.length === 0){
        return layer.msg('请选择数据');
    }
    
    layer.confirm('确定删除吗？', function(index) {
        
        //执行 Ajax 后重载
        $.ajax({
            type: "POST"
            ,url: '<?php echo url("index/del_comment"); ?>'
            ,data:{
                id:id_list
            },success: function(msg){
                layer.msg(msg);
                table.reload('LAY-app-content-comm');
            }
        });
        
        //layer.msg('已删除');
    });
    }
}  

$('.layui-btn.layuiadmin-btn-comm').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});


</script>
