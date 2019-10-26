<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"C:\xampp\htdocs\blog\public/../application/admin\view\index\userform.html";i:1561303261;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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



<div class="layui-form" lay-filter="layuiadmin-form-useradmin" id="layuiadmin-form-useradmin" style="padding: 20px 0 0 0;">
        <div class="layui-form-item">
          <label class="layui-form-label">用户名</label>
          <div class="layui-input-inline">
            <input type="text" name="username" lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-inline">
            <input type="text" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">手机号码</label>
          <div class="layui-input-inline">
            <input type="text" name="phone" lay-verify="phone" placeholder="请输入号码" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">邮箱</label>
          <div class="layui-input-inline">
            <input type="text" name="email" lay-verify="email" placeholder="请输入邮箱" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">头像</label>
          <div class="layui-input-inline">
            <input type="text" name="avatar" lay-verify="required" placeholder="请上传图片" autocomplete="off" class="layui-input" >
          </div>
          <button style="float: left;" type="button" class="layui-btn" id="layuiadmin-upload-useradmin">上传图片</button> 
        </div>
        <div class="layui-form-item" lay-filter="sex">
          <label class="layui-form-label">选择性别</label>
          <div class="layui-input-block">
            <input type="radio" name="sex" value="男" title="男">
            <input type="radio" name="sex" value="女" title="女">
          </div>
        </div>
        <div class="layui-form-item layui-hide">
          <input type="button" lay-submit lay-filter="LAY-user-front-submit" id="LAY-user-front-submit" value="确认">
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
,upload = layui.upload 

,username = $('input[name="username"]')
,password = $('input[name="password"]')
,phone = $('input[name="phone"]')
,email = $('input[name="email"]')
,avatar = $('input[name="avatar"]')
,sex = $('input[name="sex"]');


//console.log(sex);


//页面值修改
$.ajax({
    type: "get",
    url:'<?php echo url("index/get_user_list_id"); ?>',
    data: {
        id:getId()
    },
    success: function(msg){
      console.log(msg);
      username.val(msg.username)
      ,phone.val(msg.phone)            
      ,email.val(msg.email)
      ,avatar.val(msg.avatar)
      ,$('input[name="sex"][value="'+msg.sex+'"]').attr("checked",true);
      //重载
      form.render();

    }
})



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
    //console.log(Id);
    return Id;
}


//图片上传
upload.render({
  elem: '#layuiadmin-upload-useradmin'
  ,url: '<?php echo url("index/upload"); ?>'
  ,accept: 'images'
  ,method: 'get'
  ,acceptMime: 'image/*'
  ,done: function(res){
    //console.log(res);
    $(this.item).prev("div").children("input").val(res.data)
    form.render();
  }
});

</script>
