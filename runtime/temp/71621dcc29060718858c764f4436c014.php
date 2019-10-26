<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\xampp\htdocs\blog\public/../application/admin\view\index\comment_form.html";i:1561344652;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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

<div class="layui-form" lay-filter="layuiadmin-form-comment" id="layuiadmin-form-comment"
    style="padding: 20px 30px 0 0;">
    <div class="layui-form-item">
        <label class="layui-form-label">回复</label>
        <div class="layui-input-block">
            <textarea name="content" placeholder="请输入" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-hide">
        <label class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="button" lay-submit lay-filter="layuiadmin-app-comm-submit" id="layuiadmin-app-comm-submit"
                value="确认" class="layui-btn">
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

var $ = layui.$
    ,form = layui.form
    ,content = $('textarea[name="content"]')
function getId(){
    //获取URL中的ID
    var url = location.href;
    var theRequest = new Object();
    var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
    if (url.indexOf("?") != -1) {
        for (var i = 0; i < paraString.length; i++) {
            theRequest[paraString[i].split("=")[0]] = unescape(paraString[i].split("=")[1]);
        }
    }
    var Id = theRequest["id"];
    return Id;
}
getId();
//页面值修改
$.ajax({
    type: "get",
    url:'<?php echo url("index/get_comment_id"); ?>',
    data: {
        id:getId()
    },
    success: function(msg){
        content.val(msg.reply);
    }
})


</script>
