<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"C:\xampp\htdocs\blog\public/../application/admin\view\index\content_list_form_add.html";i:1561080118;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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



<div class="layui-form" lay-filter="layuiadmin-app-form-list" id="layuiadmin-app-form-list" style="padding: 20px 30px 0 0;">
    <div class="layui-form-item">
      <label class="layui-form-label">文章标题</label>
      <div class="layui-input-inline">
        <input type="text" name="title" lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">发布人</label>
      <div class="layui-input-inline">
        <input type="text" name="author" lay-verify="required" placeholder="请输入号码" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">文章内容</label>
      <div class="layui-input-inline">
        <textarea name="content" lay-verify="required" style="width: 400px; height: 150px;" autocomplete="off" class="layui-textarea"></textarea>
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">标签</label>
      <div class="layui-input-inline">
        <select name="label" lay-verify="required">
          <option value="">请选择标签</option>
          <option value="美食">美食</option>
          <option value="新闻">新闻</option>
          <option value="八卦">八卦</option>
          <option value="体育">体育</option>
          <option value="音乐">音乐</option>
        </select>
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">发布状态</label>
      <div class="layui-input-inline">
        <input type="checkbox" lay-verify="required" lay-filter="status" name="status" lay-skin="switch" lay-text="已发布|待修改">
      </div>
    </div>
    <div class="layui-form-item layui-hide">
      <input type="button" lay-submit lay-filter="layuiadmin-app-form-submit" id="layuiadmin-app-form-submit" value="确认添加">
      <input type="button" lay-submit lay-filter="layuiadmin-app-form-edit" id="layuiadmin-app-form-edit" value="确认编辑">
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
    ,form = layui.form;
    
    //监听提交
    form.on('submit(layuiadmin-app-form-submit)', function(data){
      var field = data.field; //获取提交的字段
      var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引  

      //提交 Ajax 成功后，关闭当前弹层并重载表格
      //$.ajax({});
      parent.layui.table.reload('LAY-app-content-list'); //重载表格
      parent.layer.close(index); //再执行关闭 
    });

</script>
