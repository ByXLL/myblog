<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"C:\xampp\htdocs\blog\public/../application/admin\view\index\content_list_form.html";i:1562333952;s:59:"C:\xampp\htdocs\blog\application\admin\view\layout\sub.html";i:1561989038;}*/ ?>
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


<div class="layui-form" lay-filter="test-filter" action="javascript:;">
    <div class="layui-form" lay-filter="layuiadmin-app-form-list" id="layuiadmin-app-form-list"
        style="padding: 20px 30px 0 0;">
        <div class="layui-form-item">
            <label class="layui-form-label">文章标题</label>
            <div class="layui-input-inline">
                <input type="text" name="title" lay-verify="required" placeholder="请输入用户名" autocomplete="off"
                    class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">简介</label>
            <div class="layui-input-inline">
                <input type="text" name="author" lay-verify="required" placeholder="请输入昵称" autocomplete="off"
                    class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">文章内容</label>
            <div class="layui-input-inline">
                <textarea name="content" lay-verify="required" style="width: 400px; height: 150px;" autocomplete="off"
                    class="layui-textarea"></textarea>
            </div>
        </div>
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">标签</label>
            <div class="layui-input-inline">
                <select name="label" lay-verify="required">
                    <option value="">请选择标签</option>
                    <option value="前端">前端</option>
                    <option value="响应式">响应式</option>
                    <option value="后台">后台</option>
                    <option value="layui">layui</option>
                    <option value="jQuery">jQuery</option>
                </select>
            </div>
        </div> -->



        
        <div class="layui-form-item">
            <label class="layui-form-label">文章分类</label>
            <div class="layui-input-block" id="tags" name="label">
                <?php foreach($tags as $vo): ?> 
                    <input type="checkbox" name="lable<?php echo $vo['id']; ?>" value="<?php echo $vo['tag']; ?>" title="<?php echo $vo['tag']; ?>" >
                <?php endforeach; ?>
                

            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">发布状态</label>
            <div class="layui-input-inline">
                <!-- <input type="checkbox" id="status-switch" lay-verify="required" lay-filter="status" name="status" lay-skin="switch"
                    lay-text="已发布|待修改"     > -->
                    <input type="checkbox" class="test-switch" lay-verify="required" lay-filter="switch" name="switch" lay-skin="switch" lay-text="已发布|待修改">
            </div>
        </div>

        <!-- <div class="layui-form-item">
            <div class="layui-input-block">
            <button onclick="on()" class="layui-btn">on</button>
            <button onclick="off()" class="layui-btn">off</button>
            </div>
        </div> -->
        <div class="layui-form-item layui-hide">
            <input type="button" lay-submit lay-filter="layuiadmin-app-form-submit" id="layuiadmin-app-form-submit"
                value="确认添加">
            <input type="button" lay-submit lay-filter="layuiadmin-app-form-edit" id="layuiadmin-app-form-edit"
                value="确认编辑">
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
var $ = layui.$
    ,form = layui.form
    ,title = $('input[name="title"]')
    ,author = $('input[name="author"]')
    ,content = $('textarea[name="content"]')
    ,label_array = new Array()
    ,olabels = $("#tags>input")
    ,status = 0;

    layui.use('form', function () {
        form.val('test-filter', {
            "switch": status == 1
        });
        form.render();
    });
    //页面值修改
    $.ajax({
        type: "get",
        url:'<?php echo url("index/get_content_list_id"); ?>',
        data: {
            id:getId()
        },
        success: function(msg){
            title.val(msg.title)
            ,author.val(msg.author)
            ,content.val(msg.content)            
            //,label.val(msg.label)
            ,status = msg.status;
            if(status == 1){
                form.val('test-filter', {
                    "switch": true
                });
                form.render();
            }else{
                form.val('test-filter', {
                    "switch": false
                });
                form.render();
            };
            var strs=msg.label.split(","); //字符分割 
            for(i=0;i<olabels.length; i++){
                for(j=0; j<strs.length; j++){
                    if(olabels[i].title == strs[j]){
                       // olabels[i].attr('checked');
                        olabels[i].nextSibling.className +=' layui-form-checked';       //下一个兄弟节点添加样式
                    }
                }
            }

            form.render('select');      //重置select
            // form.render('checkbox');    //重置switch

        }
    })

//
//console.log('重载后页面状态'+status);  



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
    return Id;
}




//监听提交
form.on('submit(layuiadmin-app-form-submit)', function(data){
    var field = data.field; //获取提交的字段
    var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引  
    parent.layui.table.reload('LAY-app-content-list'); //重载表格
    parent.layer.close(index); //再执行关闭 
});
</script>
