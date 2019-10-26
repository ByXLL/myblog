<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"C:\xampp\htdocs\blog\public/../application/admin\view\index\user_list.html";i:1561277991;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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
          <button class="layui-btn layuiadmin-btn-useradmin batchdel" data-type="batchdel">删除</button>
          <button class="layui-btn layuiadmin-btn-useradmin add" data-type="add">添加</button>
        </div>
        
        <table id="LAY-user-manage"  lay-filter="LAY-user-manage"></table>
        <script type="text/html" id="imgTpl"> 
          <img style="display: inline-block; width: 50%; height: 100%;" src= {{ d.avatar }}>
        </script> 
        <script type="text/html" id="table-useradmin-webuser">
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
layui.define(["table", "form"], function(e) {
    var t = layui.$,
        i = layui.table;
    layui.form;
    i.render({
        elem: "#LAY-user-manage",
        //url: "json/useradmin/webuser.js",
        url: "<?php echo url('index/get_user_list'); ?>",
        cols: [
            [{
                type: "checkbox",
                fixed: "left"
            }, {
                field: "id",
                width: 100,
                title: "ID",
                sort: !0
            }, {
                field: "username",
                title: "用户名",
                minWidth: 100
            }, {
                field: "avatar",
                title: "头像",
                width: 100,
                templet: "#imgTpl"
            }, {
                field: "phone",
                title: "手机"
            }, {
                field: "email",
                title: "邮箱"
            }, {
                field: "sex",
                width: 80,
                title: "性别"
            },{
                field: "jointime",
                title: "加入时间",
                sort: !0
            }, {
                title: "操作",
                width: 150,
                align: "center",
                fixed: "right",
                toolbar: "#table-useradmin-webuser"
            }]
        ],
        // page: !0,
        // limit: 30,
        text: "对不起，加载出现异常！"
    }), i.on("tool(LAY-user-manage)", function(e) {
        e.data;
        var Id = e.data.id;
        if ("del" === e.event) layer.confirm("确认删除吗", function(t) {
            //回传id给后台删除
            console.log('单选选中的id '+e.data.id);
            $.ajax({
                type: "POST",
                url:'<?php echo url("index/del_user"); ?>',
                data: {
                    id:e.data.id
                },success: function(msg){
                    layer.msg(msg);
                }
            });
            e.del(), layer.close(t)
        });
        else if ("edit" === e.event) {
            t(e.tr);
            layer.open({
                type: 2,
                title: "编辑用户",
                content: "userform?id=" +e.data.id,
                maxmin: !0,
                area: ["500px", "450px"],
                btn: ["确定", "取消"],
                yes: function(e, t) {
                    var l = window["layui-layer-iframe" + e],
                        r = "LAY-user-front-submit",
                        n = t.find("iframe").contents().find("#" + r);
                    l.layui.form.on("submit(" + r + ")", function(t) {
                        t.field;
                        console.log(t.field);

                        $.ajax({
                            type: "POST",
                            url:'<?php echo url("index/set_user"); ?>',
                            data: {
                                id:Id
                                ,username:t.field.username
                                ,phone:t.field.phone
                                ,password:t.field.password
                                ,email:t.field.email
                                ,sex:t.field.sex
                                ,avatar:t.field.avatar
                            },
                            success: function(msg){
                                layer.msg(msg);
                                table.reload('LAY-user-manage');           //重载
                            }
                        })
                        
                        //i.reload("LAY-user-front-submit"),
                     layer.close(e)
                    }), n.trigger("click")
                },
                success: function(e, t) {}
            })
        }
    })
  });






//事件操作
var $ = layui.$
    ,form = layui.form
    ,table = layui.table
    ,upload = layui.upload ;
//事件
var active = {
    batchdel: function(){
    var checkStatus = table.checkStatus('LAY-user-manage')
    ,checkData = checkStatus.data; //得到选中的数据

    if(checkData.length === 0){
        return layer.msg('请选择数据');
    }
    
    var id_list = [];
    for(i=0;i<checkData.length; i++){
        id_list.push(
        checkData[i].id
        )
    }
    console.log("选中的数据id "+id_list);
    layer.confirm('确定删除吗？', function(index) {
    

        //回传id给后台删除
        console.log('选中的id '+ id_list);
        $.ajax({
            type: "POST",
            url:'<?php echo url("index/del_user"); ?>',
            data: {
                id:id_list
            },success: function(msg){
                layer.msg(msg);
                //执行重载
                table.reload('LAY-user-manage');
            }
        });

        layer.msg('已删除');
    });
    }
    ,add: function(){
    layer.open({
        type: 2
        ,title: '添加用户'
        ,content: '<?php echo url("index/userform_add"); ?>'
        ,maxmin: true
        ,area: ['500px', '450px']
        ,btn: ['确定', '取消']
        ,yes: function(index, layero){
        var iframeWindow = window['layui-layer-iframe'+ index]
            ,submitID = 'LAY-user-front-submit'
            ,submit = layero.find('iframe').contents().find('#'+ submitID)

            ,othis = layero.find('iframe').contents().find("#layuiadmin-form-useradmin")
            ,username = othis.find('input[name="username"]').val()
            ,password = othis.find('input[name="password"]').val()
            ,phone = othis.find('input[name="phone"]').val()
            ,email = othis.find('input[name="email"]').val()
            ,avatar = othis.find('input[name="avatar"]').val()
            //,avatar = 'http://cdn.byxll.cn/icon.jpg'
            ,sex = othis.find('input[name="sex"]:checked').val();

            console.log('获取到的页面元素'+ username ,password,phone,email,sex);
            // form.on('radio(sex)', function(data){
            //     console.log(data.elem); //得到radio原始DOM对象
            //     console.log(data.value); //被点击的radio的value值
            // }); 
            //监听提交
            iframeWindow.layui.form.on('submit('+ submitID +')', function(data){
                //var field = data.field; //获取提交的字段 json
                //console.log(field);

                $.ajax({
                    type: "POST",
                    url:'<?php echo url("index/add_user"); ?>',
                    data: {
                        username:username,
                        password:password,
                        phone:phone,
                        email:email,
                        avatar:avatar,
                        sex:sex,
                        time:time
                    },
                    //data : field,     //jsom
                    success: function(msg){
                        layer.msg(msg);
                        
                        table.reload('LAY-user-manage');    //重载表格
                        layer.close(index); //关闭弹层
                    }
                })
            });  
            
            submit.trigger('click');
        }
    }); 
    }
};

$('.layui-btn.layuiadmin-btn-useradmin').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});





</script>
