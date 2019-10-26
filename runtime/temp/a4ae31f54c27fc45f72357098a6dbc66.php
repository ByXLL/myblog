<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\xampp\htdocs\blog\public/../application/admin\view\index\content_form.html";i:1560742644;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561125442;}*/ ?>
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
        <label class="layui-form-label">评论内容</label>
        <div class="layui-input-block">
            <textarea name="content" lay-verify="required" placeholder="请输入" class="layui-textarea"></textarea>
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



</script>
