<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"C:\xampp\htdocs\blog\public/../application/admin\view\index\adminform.html";i:1560737595;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1560704043;}*/ ?>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/style/admin.css" media="all">


<div class="layui-form" lay-filter="layuiadmin-form-admin" id="layuiadmin-form-admin" style="padding: 20px 30px 0 0;">
        <div class="layui-form-item">
          <label class="layui-form-label">登录名</label>
          <div class="layui-input-inline">
            <input type="text" name="loginname" lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">手机</label>
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
          <label class="layui-form-label">角色</label>
          <div class="layui-input-inline">
            <input type="text" name="role" lay-verify="required" placeholder="请输入角色类型" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">审核状态</label>
          <div class="layui-input-inline">
            <input type="checkbox" lay-filter="switch" name="switch" lay-skin="switch" lay-text="通过|待审核">
          </div>
        </div>
        <div class="layui-form-item layui-hide">
          <input type="button" lay-submit lay-filter="LAY-user-front-submit" id="LAY-user-back-submit" value="确认">
        </div>
      </div>
    



<script src="/blog/public//static/admin/layuiadmin/layui/layui.js"></script>
<script src="/blog/public//static/admin/layuiadmin/layui/layui.all.js"></script>

<script src=""></script>
<script>



</script>
