<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\xampp\htdocs\blog\public/../application/index\view\index\detail.html";i:1562305205;}*/ ?>
﻿<!DOCTYPE html>
<html class="han-la">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>小脚印 &#8211; YuLin.霖~</title>



    <link rel='stylesheet' href='/blog/public//static/index/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/blog/public//static/index/css/wpctc.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/blog/public//static/index/css/font-awesome.min.css' type='text/css' media='all' />

    <link rel='stylesheet' href='/blog/public//static/index/css/layer.css' type='text/css' media='all' />
    <script type='text/javascript' src='/blog/public//static/index/js/jquery.js'></script>


</head>

<body class="nav-open">
    <div id="wrap">
        <div id="preheader"></div>
        <header id="header" class="clearfix">
            <div class="head">
                <h1><a href="index.html">YuLin.霖~</a></h1>
                <p class="desc yahei"> <span class="saying-title">
                        我在小溪边捉螃蟹~ </span>
                </p>
            </div>
            <nav id="main-nav" class="clearfix yahei">
                <ul id="menu" class="nav">
                    <li class="menu-item "><a title="" href="<?php echo url('index/index'); ?>?page=1001">首页</a>
                    </li>
                    <li class="menu-item"><a title="" href="<?php echo url('index/footer'); ?>?page=1002" >小脚印</a>
                    </li>
                    <li class="menu-item"><a title="" href="<?php echo url('index/about'); ?>?page=1003">关于我~</a>
                    </li>
                    <li class="menu-item"><a title="" href="<?php echo url('index/message'); ?>?page=1004">留言板</a>
                    </li>
                </ul>
            </nav>
            <div id="announcement"> <span><i class="fa fa-star"></i></span></div>
        </header>



        <div id="container" class="clearfix">
            <div id="content" style="opacity: 1; display: block;">
                <div
                    class="post-template-default single single-post postid-93 single-format-standard elementor-default">

                        <?php foreach($contents as $vo): ?>                
                        <article class="post-93 post type-post status-publish format-standard hentry category-javascript category-7 tag-js tag-19">
                        <header class="entry-header detail-page">
                            <h2 class="entry-name">
                                <a href="#" rel="bookmark"><?php echo $vo['title']; ?></a>
                            </h2>
                            <ul class="entry-meta">
                                <li class="time_meta"><i class="fa fa-clock-o"></i> <?php echo $vo['uploadtime']; ?></li>
                            </ul>
                        </header>

                        <div class="entry-content" itemprop="description">
                            <?php echo $vo['content']; ?>
                        </div>
                        <footer class="entry-footer clearfix">
                            <span class="tag-links">
                                <?php $_5d1ee2d358ab0=explode(',',$vo['label']); if(is_array($_5d1ee2d358ab0) || $_5d1ee2d358ab0 instanceof \think\Collection || $_5d1ee2d358ab0 instanceof \think\Paginator): if( count($_5d1ee2d358ab0)==0 ) : echo "" ;else: foreach($_5d1ee2d358ab0 as $key=>$item): ?>
                                <a href="#" rel="tag"><?php echo $item; ?></a>
                                <?php endforeach; endif; else: echo "" ;endif; ?></span>
                        </footer>
                        
                    </article>
                    <?php endforeach; ?>

                    <div class="comments clearfix box" id="comments">
                        <h5 id="comments-title"><span>评论区</span></h5>
                        <?php foreach($comments as $vo2): ?>
                        <div class="commentshow">
                            <ol class="comments-list">
                                <li class="comment even thread-even depth-1" id="li-comment-2">

                                    <article id="comment-2" class="comment-body">
                                        <div class="comment-author vcard">
                                            <svg class="avatar avatar-40 photo" width="40" height="40"
                                                data-jdenticon-hash="03cf4f0a63cbcbf159f68b475e42b5bcede9bb11"
                                                viewBox="0 0 40 40" preserveAspectRatio="xMidYMid meet">
                                                <path fill="#d175bd"
                                                    d="M20 4L20 12L12 12ZM28 12L20 12L20 4ZM20 36L20 28L28 28ZM12 28L20 28L20 36ZM12 12L12 20L4 20ZM36 20L28 20L28 12ZM28 28L28 20L36 20ZM4 20L12 20L12 28ZM14 14L19 14L19 19L14 19ZM26 14L26 19L21 19L21 14ZM26 26L21 26L21 21L26 21ZM14 26L14 21L19 21L19 26Z">
                                                </path>
                                                <path fill="#e8bade"
                                                    d="M12 4L12 12L4 12ZM36 12L28 12L28 4ZM28 36L28 28L36 28ZM4 28L12 28L12 36Z">
                                                </path>
                                            </svg> </div>
                                        <div class="comment-content">

                                            <div class="comment-metadata">
                                                <b class="fn"><?php echo $vo2['reviewers']; ?></b>
                                                <time datetime="2018/07/27 22:15"><?php echo $vo2['commtime']; ?></time>
                                            </div>
                                            <div class="comment_text">
                                                <p><?php echo $vo2['content']; ?></p>
                                            </div>
                                            
                                        </div>
                                    </article>

                                    <?php if(!(empty($vo2['reply']) || (($vo2['reply'] instanceof \think\Collection || $vo2['reply'] instanceof \think\Paginator ) && $vo2['reply']->isEmpty()))): ?>
                                    <ol class="children">
                                        <li class="comment byuser comment-author-by_xll bypostauthor odd alt depth-2"
                                            id="li-comment-4">

                                            <article id="comment-4" class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img src="http://cdn.byxll.cn/images/portrait.jpg"
                                                        class="avatar avatar-40 photo" height="40" width="40"> </div>
                                                <div class="comment-content">
                                                    <div class="comment-metadata">
                                                        <b class="fn">By_XLL</b>
                                                        <time><?php echo $vo2['commtime']; ?></time>
                                                    </div>
                                                    <div class="comment_text">
                                                        <p><?php echo $vo2['reply']; ?></p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>
                                    <?php endif; ?>
                                </li>
                            </ol>
                            <nav class="commentnav" data-postid="7"></nav>
                        </div>
                        <?php endforeach; ?>
                        <div id="respond" class="comment-respond">
                            <h5 id="replytitle" class="comment-reply-title">发表一条评论 </h5>
                            <div action="#" method="post" id="commentform" class="clearfix"></form>
                                <p class="input-row replay_author">
                                    <input type="text" name="author" class="text_input" id="author" size="22" tabindex="1" placeholder="昵称 *">
                                </p>
                                <p class="input-row message-row">
                                    <textarea class="text_area" rows="3" cols="80" name="comment" id="comment" tabindex="4" placeholder="欢迎在这里畅所欲言..."></textarea>
                                </p>
                                <input type="submit" name="submit" class="button" id="submit" tabindex="5" value="提交评论">
                            </div>
                        </div>
                    </div>

                </div>
            </div>









            <div id="sidebar">
                <aside class="widget mzw_search">
                    <form id="searchform" class="searchform" action="127.0.0.1" method="GET">
                        <div>
                            <input name="s" id="s" size="15" placeholder="输入关键字" type="text">
                            <input value="站内搜索" type="submit">
                        </div>
                    </form>
                </aside>
                <aside class="widget mzw_admin">
                    <img src="/blog/public/static/index/picture/bg_small_1.jpg">
                    <div class="author-body">
                        <div class="author_img">
                            <img src="/blog/public/static/index/picture/portrait_1.jpg" class="avatar avatar-80 photo"
                                height="80" width="80">
                        </div>
                        <div class="author_bio">
                            <h3>By_XLL </h3>
                            <p class="muted">YuLin.霖~，桂中山区里的一个山里娃</p>
                        </div>
                    </div>
                    <div class="social"><a rel="nofollow" target="_blank" class="mail" href="by_xll@163.com"><i
                                class="fa fa-envelope"></i></a><a rel="nofollow" target="_blank" class="github"
                            href="https://github.com/ByXLL"><i class="fa fa-github"></i></a>
                    </div>
                </aside>
                <aside class="widget widget_wpctc_widget">
                    <h3 class="widget-title"><span>网站云图</h3>
                    </span>
                    <div id="wpctc_widget-3-tagcloud" class='wpctc-wpctc_widget-3       wpctc-array'>
                        <canvas id="wpctc_widget-3_canvas" class="tagcloud-canvas" data-tagcloud-color=""
                            data-tagcloud-bordercolor="#ffff99" data-cloud-font=null data-cloud-radiusx="1"
                            data-cloud-radiusy="1" data-cloud-radiusz="1" data-cloud-zoom=1></canvas>
                    </div>
                    <div id="wpctc_widget-3_canvas_tags">
                        <ul>
                            <?php foreach($tags as $vo1): ?>
                            <li>
                                <a href="#" class="tag-cloud-link" style="font-size: 189.1975308642%;"><?php echo $vo1['tag']; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_mzw_siderbar_post">
                    <h3 class="widget-title"><span>文章推荐</h3>
                    </span>
                    <div class="smart_post">
                        <ul>
                        <?php foreach($contents as $vo): ?> 
                            <li class="clearfix">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="rounded" src="/blog/public/static/index/picture/4.jpg" width="45" height="45" />
                                    </a>
                                </div>
                                <div class="post-right">
                                    <h3 style="text-indent: 25px; font-size: 16px; height: 45px; line-height: 45px; overflow: hidden"><a href="<?php echo url('index/detail'); ?>?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></h3>
                                </div>
                            </li>
                        <?php endforeach; ?> 
                        </ul>
                    </div>
                </aside>

                <aside class="widget_text widget widget_custom_html">
                    <h3 class="widget-title"><span>~0.0~ 帮忙喂下我的小仓鼠 啦啦啦 ^_^</h3>
                    </span>
                    <div class="textwidget custom-html-widget">
                        <div class="hamster" style="text-align:center;">
                            <embed allowscriptaccess="never" allownetworking="internal" invokeurls="false"
                                src="/blog/public/static/index/images/hamster.swf"
                                pluginspage="http://www.macromedia.com/go/getflashplayer"
                                type="application/x-shockwave-flash" quality="high" autostart="0" wmode="transparent"
                                align="middle" style="width: 100%;height: 14rem;">
                        </div>
                    </div>
                </aside>
            </div>


        </div>

        <footer id="footer" class="yahei clearfix"> <a class="left saying-bottom">
                生活不止眼前的苟且，还有诗和远方。加油陌生人！ </a>
            <p class="right">桂ICP备18003293号</a>.</p>
        </footer>
    </div>
    <img id="qrimg" src="" /> <a id="qr" href="javascript:;"><i class="fa fa-qrcode"></i></a>
    <a id="gotop" title="点击返回页顶" href="javascript:;"><i class="fa fa-arrow-up"></i></a>










    <script type='text/javascript' src='/blog/public//static/index/js/jquery.tagcanvas.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/wpctc.tagcanvas.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/jquery.style.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/wp-category-tag-cloud.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/global.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/mk.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/tag.pw_custom.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/slimbox2.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/ajax.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/autospace.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/jdenticon.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/mediaelement-and-player.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/mediaelement-migrate.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/wp-mediaelement.min.js'></script>
    <script type='text/javascript' src='/blog/public//static/index/js/layer.js'></script>
    <script>



        function GetRequest() {
            String.prototype.queryURLParameter = function queryURLParameter() {
                var obj = {},
                    reg = /([^=?&]+)=([^=?&]+)/g;
                this.replace(reg, function () {
                    var arg = arguments;
                    obj[arg[1]] = arg[2];
                });
                return obj;
            }
            var str = location.search;
            return str.queryURLParameter();
        }
        //console.log( GetRequest().id);
        page = GetRequest().id;


        $("#submit").click(function(){

            var page,
            reviewers  = $('#author').val(),
            content = $('#comment').val();
            page = GetRequest().id;
            if(reviewers == '' && content == ''){

                layer.msg('请输入昵称和内容');
                
            }
            else{
                $.ajax({
                    type: "POST"
                    ,url: '<?php echo url("index/add_comment"); ?>'
                    ,data:{
                        page:page,
                        reviewers:reviewers,
                        content:content,
                        time:sys_time
                    },success: function(msg){
                        layer.msg(msg);
                        window.location.reload();
                    }
                });
            }  
        });






    </script>
</body>

</html>