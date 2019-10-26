<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\xampp\htdocs\blog\public/../application/admin\view\index\console.html";i:1562331397;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
      <div class="layui-col-md8">
        <div class="layui-row layui-col-space15">
          <div class="layui-col-md6">
            <div class="layui-card">
              <div class="layui-card-header">快捷方式</div>
              <div class="layui-card-body">
                
                  <div class="layui-carousel layadmin-carousel layadmin-shortcut" lay-anim="">
                    <div>
                      <ul class="layui-row layui-col-space10 layui-this">
                        
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/user_list'); ?>">
                            <i class="layui-icon layui-icon-user"></i>
                            <cite>用户</cite>
                          </a>
                        </li>
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/website'); ?>">
                            <i class="layui-icon layui-icon-set"></i>
                            <cite>网站设置</cite>
                          </a>
                        </li>
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/info'); ?>">
                            <i class="layui-icon layui-icon-friends"></i>
                            <cite>基本资料</cite>
                          </a>
                        </li>
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/password'); ?>">
                            <i class="layui-icon layui-icon-password"></i>
                            <cite>修改密码</cite>
                          </a>
                        </li>
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/content_list'); ?>">
                            <i class="layui-icon layui-icon-list"></i>
                            <cite>文章列表</cite>
                          </a>
                        </li>
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/content_tags'); ?>">
                            <i class="layui-icon layui-icon-tabs"></i>
                            <cite>分类管理</cite>
                          </a>
                        </li>
                        <li class="layui-col-xs3">
                          <a href="<?php echo url('index/comment_list'); ?>">
                            <i class="layui-icon layui-icon-praise"></i>
                            <cite>评论管理</cite>
                          </a>
                        </li>
                      </ul>
                      
  
  
  
                    </div>
                  </div>
                  
                </div>
            </div>
          </div>
          <div class="layui-col-md6">
            <div class="layui-card">
              <div class="layui-card-header">数据总览</div>
              <div class="layui-card-body">

                  <div class="layui-carousel layadmin-carousel layadmin-backlog" lay-anim="">
                    <div carousel-item="">
                      <ul class="layui-row layui-col-space10 layui-this">
                        <li class="layui-col-xs6">
                          <a href="#" class="layadmin-backlog-body">
                            <h3>文章数</h3>
                            <p><cite>66</cite></p>
                          </a>
                        </li>
                        <li class="layui-col-xs6">
                          <a href="#" class="layadmin-backlog-body">
                            <h3>用户数
                            </h3>
                            <p><cite>66</cite></p>
                          </a>
                        </li>
                        <li class="layui-col-xs6">
                          <a href="#" class="layadmin-backlog-body">
                            <h3>分类</h3>
                            <p><cite>66</cite></p>
                          </a>
                        </li>
                        <li class="layui-col-xs6">
                          <a href="#" class="layadmin-backlog-body">
                            <h3>待审评论</h3>
                            <p><cite>12</cite></p>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="layui-col-md12">
              <div class="layui-card">
                  <div class="layui-card-header">动态</div>
                  <div class="layui-card-body">
                    <dl class="layuiadmin-card-status">
                      <dd>
                        <div class="layui-status-img"><a href="javascript:;"><img src="/blog/public//static/admin/layuiadmin/style/res/logo.png"></a></div>
                        <div>
                          <p>胡歌 访问了 <a lay-href="#">关于我页面</a></p>
                          <span>几秒前</span>
                        </div>
                      </dd>
                    </dl>  
                  </div>
                </div>  

          </div>
        </div>
      </div>
      
      <div class="layui-col-md4">

        <div class="layui-card">
          <div class="layui-card-header">
            关于本站
            <i class="layui-icon layui-icon-tips" lay-tips="要支持的噢" lay-offset="5"></i>
          </div>
          <div class="layui-card-body layui-text layadmin-text">
            <p>
              这个网站真的强
            </p>
            
          </div>
        </div>

        <div class="layui-card">
            <div class="layui-card-header">用户留言</div>
            <div class="layui-card-body">
              <ul class="layuiadmin-card-status layuiadmin-home2-usernote">
                <li>
                  <h3>诸葛亮</h3>
                  <p>皓首匹夫！苍髯老贼！你枉活九十有六，一生未立寸功，只会摇唇鼓舌！助曹为虐！一条断脊之犬，还敢在我军阵前狺狺狂吠，我从未见过有如此厚颜无耻之人！</p>
                  <span>5月02日 00:00</span>
                </li>
              </ul>
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


<script>

layui.use(['jquery', 'element'], function() {
        var element = layui.element;
        var $ = layui.$;
 

        //绑定事件
        $(document).on('click', '#edit', function(data) {
            var id = $(this).attr('data-id');
 
        });
     });



layui.define(function(e) {
    var a = layui.admin;
    // a.events.replyNote = function(e) {
    //     var a = e.data("id");
    //     layer.prompt({
    //         title: "回复留言 ID:" + a,
    //         formType: 2
    //     }, function(e, a) {
    //         layer.msg("得到：" + e), layer.close(a)
    //     })
    // }, e("sample", {})
    console.log(layui.admin);
});
</script>
