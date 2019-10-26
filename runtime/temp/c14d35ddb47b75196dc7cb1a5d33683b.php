<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"C:\xampp\htdocs\blog\public/../application/admin\view\index\administratorslist.html";i:1560670771;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1560669636;}*/ ?>
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/blog/public//static/admin/layuiadmin/style/admin.css" media="all">


<div class="layui-fluid">   
    <div class="layui-card">
      <div class="layui-form layui-card-header layuiadmin-card-header-auto">
        <div class="layui-form-item">
          <div class="layui-inline">
            <label class="layui-form-label">登录名</label>
            <div class="layui-input-block">
              <input type="text" name="loginname" placeholder="请输入" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-inline">
            <label class="layui-form-label">手机</label>
            <div class="layui-input-block">
              <input type="text" name="telphone" placeholder="请输入" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-inline">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-block">
              <input type="text" name="email" placeholder="请输入" autocomplete="off" class="layui-input">
            </div>
          </div>
          <div class="layui-inline">
            <label class="layui-form-label">角色</label>
            <div class="layui-input-block">
              <select name="role">
                <option value="0">管理员</option>
                <option value="1">超级管理员</option>
                <option value="2">纠错员</option>
                <option value="3">采购员</option>
                <option value="4">推销员</option>
                <option value="5">运营人员</option>
                <option value="6">编辑</option>
              </select>
            </div>
          </div>
          <div class="layui-inline">
            <button class="layui-btn layuiadmin-btn-admin" lay-submit lay-filter="LAY-user-back-search">
              <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
            </button>
          </div>
        </div>
      </div>
      
      <div class="layui-card-body">
        <div style="padding-bottom: 10px;">
          <button class="layui-btn layuiadmin-btn-admin" data-type="batchdel">删除</button>
          <button class="layui-btn layuiadmin-btn-admin" data-type="add">添加</button>
        </div>
        
        <table id="LAY-user-back-manage" lay-filter="LAY-user-back-manage"></table>  
        <script type="text/html" id="buttonTpl">
          {{#  if(d.check == true){ }}
            <button class="layui-btn layui-btn-xs">已审核</button>
          {{#  } else { }}
            <button class="layui-btn layui-btn-primary layui-btn-xs">未审核</button>
          {{#  } }}
        </script>
        <script type="text/html" id="table-useradmin-admin">
          <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
          {{#  if(d.role == '超级管理员'){ }}
            <a class="layui-btn layui-btn-disabled layui-btn-xs"><i class="layui-icon layui-icon-delete"></i>删除</a>
          {{#  } else { }}
            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
          {{#  } }}
        </script>
      </div>
    </div>
  </div>


<script src="/blog/public//static/admin/layuiadmin/layui/layui.js"></script>
<script src="/blog/public//static/admin/layuiadmin/layui/layui.all.js"></script>

<script src=""></script>
<script>



</script>
