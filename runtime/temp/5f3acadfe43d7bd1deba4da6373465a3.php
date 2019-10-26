<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\xampp\htdocs\blog\public/../application/admin\view\index\content_list.html";i:1567151729;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
              <button class="layui-btn layuiadmin-btn-list" data-type="batchdel">删除</button>
              <button class="layui-btn layuiadmin-btn-list" data-type="add">添加</button>
            </div>
            <table id="LAY-app-content-list" lay-filter="LAY-app-content-list"></table> 
            <script type="text/html" id="buttonTpl">
              {{#  if(d.status == 1){ }}
                <button class="layui-btn layui-btn-xs">已发布</button>
              {{#  } else { }}
                <button class="layui-btn layui-btn-primary layui-btn-xs">待修改</button>
              {{#  } }}
            </script>
            <script type="text/html" id="table-content-list">
              <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</a>
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

//数据表格渲染
layui.define(["table", "form"], function(t) {
    var e = layui.$,
        i = layui.table,
        n = layui.form;
    i.render({
        elem: "#LAY-app-content-list",
        url: "<?php echo url('index/get_content_list'); ?>",

        cols: [
            [{
                type: "checkbox",
                fixed: "left"
            }, {
                field: "id",
                width: 100,
                title: "文章ID",
                sort: !0
            }, {
                field: "label",
                title: "文章分类",
                minWidth: 100
            }, {
                field: "title",
                title: "文章标题"
            }, {
                field: "author",
                title: "作者"
            }, {
                field: "uploadtime",
                title: "编写时间",
                sort: !0
            }, {
                field: "status",
                title: "发布状态",
                templet: "#buttonTpl",
                minWidth: 80,
                align: "center"
            }, {
                title: "操作",
                minWidth: 150,
                align: "center",
                fixed: "right",
                toolbar: "#table-content-list"
            }]
        ],
        page: !0,
        limit: 10,
        limits: [10, 15, 20, 25, 30],
        text: "对不起，加载出现异常！"
        
    }), i.on("tool(LAY-app-content-list)", function(t) {
        var e = t.data;
        var id = t.data.id;
        "del" === t.event ? layer.confirm("确定删除此文章？", function(e) {
          //删除
          // /console.log(id);
          $.ajax({
              type: "POST",
              url:'<?php echo url("index/del_content"); ?>',
              data: {
                id:id
              },success: function(msg){
                  layer.msg(msg);
              }
          });
            t.del(), layer.close(e)
        }) : "edit" === t.event && layer.open({
            type: 2,
            title: "编辑文章",
            content: "content_list_form.html?id=" + e.id,
            maxmin: !0,
            area: ["550px", "550px"],
            btn: ["确定", "取消"],
            yes: function(e, i) {
                var l = window["layui-layer-iframe" + e],
                    a = i.find("iframe").contents().find("#layuiadmin-app-form-edit"),
                    olable_text = i.find("iframe").contents().find("#layuiadmin-app-form-list").find(".layui-form-checked");   //获取页面值
                    console.log(i.find("iframe").contents().find("#layuiadmin-app-form-list"));
                    //console.log(a);
                    //console.log(olable_text);
                l.layui.form.on("submit(layuiadmin-app-form-edit)", function(i) {
                    var l = i.field;
                    var label = '';
                    if(l.switch == 'on'){l.switch = 1;}
                    else{l.switch = 0;};

                   

                    for(i=0; i<olable_text.length; i++){
                        console.log(olable_text[i]);
                        label += olable_text[i].innerText + ',';
                    }
                    label = label.substring(0, label.length - 1);
                    console.log('文章分类 '+label);

                    $.ajax({
                        type: "POST",
                        url:'<?php echo url("index/set_content"); ?>',
                        data: {
                          id:id
                          ,title:l.title
                          ,author:l.author
                          ,content:l.content
                          ,label:label
                          ,uploadtime:time
                          ,status:l.switch
                        },
                        success: function(msg){
                            layer.msg(msg);
                            form.render('checkbox');    //重置switch
                            table.reload('LAY-app-content-list');           //重载
                        }
                    })


                    // t.update({
                    //     label: l.label,
                    //     title: l.title,
                    //     author: l.author,
                    //     status: l.status
                    // }),
                    n.render(), layer.close(e)
                })
                , a.trigger("click");
            }
        })
    })
});

//事件
var table = layui.table
    ,form = layui.form;
    //执行重载
    // table.reload('LAY-app-content-list', {
    // where: field
    // });

    var $ = layui.$, active = {
      batchdel: function(){
        var checkStatus = table.checkStatus('LAY-app-content-list')
        ,checkData = checkStatus.data //得到选中的数据

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
          //回传id给后台删除
            $.ajax({
                type: "POST",
                url:'<?php echo url("index/del_content"); ?>',
                data: {
                  id:id_list
                },success: function(msg){
                    layer.msg(msg);
                }
            });



          //重载文章列表
          table.reload('LAY-app-content-list');
          layer.msg('已删除');
        });
      },
      add: function(){
        layer.open({
          type: 2
          ,title: '添加文章'
          ,content: 'content_list_form_add'
          ,maxmin: true
          ,area: ['550px', '550px']
          ,btn: ['确定', '取消']
          ,yes: function(index, layero){
            var othis = layero.find('iframe').contents().find("#layuiadmin-app-form-list")
            ,title = othis.find('input[name="title"]').val()
            ,author = othis.find('input[name="author"]').val()
            ,content = othis.find('textarea[name="content"]').val()
            ,label = othis.find('select[name="label"]').val()
            ,status = 0;
            //转换switch
            if(othis.find('input[name="status"]').is(':checked') == true){
              status = 1;
            }
            else{
              status = 0;
            }
            if(!!title && !!author && !!content && !!label){
              console.log("开始添加");
              $.ajax({
                type: "POST",
                url:'<?php echo url("index/add_content_list"); ?>',
                data: {
                    title:title,
                    author:author,
                    content:content,
                    label:label,
                    status:status,
                    time:time
                },
                success: function(msg){
                  layer.msg(msg);
                }
            })
            }


            //if(!tags.replace(/\s/g, '')) return;    
           

          //重载分类表
          // table.reload('LAY-app-content-tags');



            //点击确认触发 iframe 内容中的按钮提交
            var submit = layero.find('iframe').contents().find("#layuiadmin-app-form-submit");
            submit.click();
          }
        }); 
      }
    }; 

    $('.layui-btn.layuiadmin-btn-list').on('click', function(){
      var type = $(this).data('type');
      active[type] ? active[type].call(this) : '';
    });
</script>
