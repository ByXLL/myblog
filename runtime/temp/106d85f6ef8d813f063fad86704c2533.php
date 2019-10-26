<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\xampp\htdocs\blog\public/../application/admin\view\index\website.html";i:1561340958;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
        <div class="layui-card-header">网站设置</div>
        <div class="layui-card-body" pad15>

          <div class="layui-form" wid100 lay-filter="">
            <div class="layui-form-item">
              <label class="layui-form-label">网站名称</label>
              <div class="layui-input-block">
                <input type="text" name="sitename" value="layuiAdmin" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">首页标题</label>
              <div class="layui-input-block">
                <textarea name="title" class="layui-input"></textarea>
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">META关键词</label>
              <div class="layui-input-block">
                <textarea name="keywords" class="layui-textarea" placeholder="多个关键词用英文状态 , 号分割"></textarea>
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">META描述</label>
              <div class="layui-input-block">
                <textarea name="descript" class="layui-textarea">  </textarea>
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">版权信息</label>
              <div class="layui-input-block">
                <textarea name="copyright" class="layui-textarea">© 2018 layui.com MIT license</textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="set_website">确认保存</button>
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
  layui.define(["form"], function (t) {
    var $ = layui.$
      , e = layui.layer
      , a = (layui.laytpl, layui.setter, layui.view, layui.admin)
      , n = layui.form
      , sitename = $('input[name="sitename"]')
      , title = $('textarea[name="title"]')
      , keywords = $('textarea[name="keywords"]')
      , descript = $('textarea[name="descript"]')
      , copyright = $('textarea[name="copyright"]')

    //页面值修改
    $.ajax({
      type: "get",
      url: '<?php echo url("index/get_website"); ?>',
      data: {
        id: 1
      },
      success: function (msg) {
        title.val(msg.title)
        , sitename.val(msg.sitename)
        , title.val(msg.title)
        , keywords.val(msg.keywords)
        , descript.val(msg.descript)
        , copyright.val(msg.copyright)
        n.render();
      }
    })



    //确认保存 
    n.on("submit(set_website)", function (t) {
      //数据上传更新
      $.ajax({
        type: "POST",
        url: '<?php echo url("index/set_website"); ?>',
        data: {
          sitename:sitename.val()
          ,title:title.val()
          ,keywords:keywords.val()
          ,descript:descript.val()
          ,copyright:copyright.val()
        },
        success: function (msg) {
          layer.msg(msg);
          n.render();
          //console.log(JSON.stringify(t.field));
        }
      })
    })



  });










</script>
