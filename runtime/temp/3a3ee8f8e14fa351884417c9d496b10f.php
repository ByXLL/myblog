<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\xampp\htdocs\blog\public/../application/admin\view\index\info.html";i:1561337205;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">设置我的资料</div>
          <div class="layui-card-body" pad15>
            
            <div class="layui-form" lay-filter="">
              <div class="layui-form-item">
                <label class="layui-form-label">登录名</label>
                <div class="layui-input-inline">
                  <input type="text" name="username" value="xianxin" readonly class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">不可修改。一般用于后台登入名</div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">昵称</label>
                <div class="layui-input-inline">
                  <input type="text" name="nickname" value="贤心" lay-verify="nickname" autocomplete="off" placeholder="请输入昵称" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">性别</label>
                <div class="layui-input-block">
                  <input type="radio" name="sex" lay-filter="sex" value="男" title="男">
                  <input type="radio" name="sex" lay-filter="sex" value="女" title="女" checked>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">头像</label>
                <div class="layui-input-inline">
                   <input name="avatar" lay-verify="required" id="LAY_avatarSrc" placeholder="图片地址" value="http://cdn.layui.com/avatar/168.jpg" class="layui-input">
                </div>
                <div class="layui-input-inline layui-btn-container" style="width: auto;">
                  <button type="button" class="layui-btn layui-btn-primary" id="LAY_avatarUpload">
                    <i class="layui-icon">&#xe67c;</i>上传图片
                  </button>
                  <button class="layui-btn layui-btn-primary avartatPreview" layadmin-event="avartatPreview">查看图片</button >
                </div>
             </div>
              <div class="layui-form-item">
                <label class="layui-form-label">手机</label>
                <div class="layui-input-inline">
                  <input type="text" name="cellphone" value="" lay-verify="phone" autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">邮箱</label>
                <div class="layui-input-inline">
                  <input type="text" name="email" value="" lay-verify="email" autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="setmyinfo">确认修改</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
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

layui.define(["form", "upload","set"], function(t) {
    var i = layui.$,
        e = layui.layer,
        a = (layui.laytpl, layui.setter, layui.view, layui.admin),
        n = layui.form,
        table = layui.table,
        s = layui.upload,
        sex_check,
        username = i('input[name="username"]'),
        nickname = i('input[name="nickname"]'),
        sex = i('input[name="sex"]'),
        avatar = i('input[name="avatar"]'),
        cellphone = i('input[name="cellphone"]'),
        email = i('input[name="email"]')
    i("body");



  //页面值修改
  i.ajax({
      type: "get",
      url:'<?php echo url("index/get_info"); ?>',
      data: {
          id:1
      },
      success: function(msg){
        console.log(msg);
        username.val(msg.loginname)
        ,nickname.val(msg.username)            
        ,email.val(msg.email)
        ,avatar.val(msg.avatar)
        ,cellphone.val(msg.phone)           
        ,i('input[name="sex"][value="'+msg.sex+'"]').attr("checked",true);
        //重载
        n.render();

      }
  })


  n.on('radio(sex)', function(data){
    //console.log(data.elem); //得到radio原始DOM对象
    //console.log(data.value); //被点击的radio的value值
    sex_check = data.value;
  }); 

    //昵称正则校验
    n.verify({
        nickname: function(t, i) {
            return new RegExp("^[a-zA-Z0-9_一-龥\\s·]+$").test(t) ? /(^\_)|(\__)|(\_+$)/.test(t) ? "用户名首尾不能出现下划线'_'" : /^\d+\d+\d$/.test(t) ? "用户名不能全为数字" : void 0 : "用户名不能有特殊字符"
        }
    })
    , n.on("submit(setmyinfo)", function(t) {
      //console.log(i('input[name="sex"]').attr("checked",true).val());
      console.log(i('input[name="sex"]').attr("checked",true).val());
      i.ajax({
        type: "POST",
        url:'<?php echo url("index/set_info"); ?>',
        data:{
          loginname:username.val()
          ,username:nickname.val()
          ,phone:cellphone.val()
          ,avatar:avatar.val()
          ,email:email.val()
          ,sex:sex_check
        }

        ,success: function(msg){
            layer.msg(msg);
            n.render();
            //table.reload();
        }
      })
        //return e.msg(JSON.stringify(t.field)), !1
    });
    var r = i("#LAY_avatarSrc");

    i(".avartatPreview").click(function(t) {
        var i = r.val();
        e.photos({
            photos: {
                title: "查看头像",
                data: [{
                    src: i
                }]
            },
            shade: .01,
            closeBtn: 1,
            anim: 5
        })
    })
    //,t("set", {})



    //图片上传
    s.render({
        elem: '#LAY_avatarUpload'
        ,url: '<?php echo url("index/upload"); ?>'
        ,accept: 'images'
        ,method: 'get'
        ,acceptMime: 'image/*'
        ,done: function(res){
          console.log(res);
          i('#LAY_avatarSrc').val(res.data);
          n.render();
        }
      });
    });

</script>
