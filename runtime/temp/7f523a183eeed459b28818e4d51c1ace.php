<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\xampp\htdocs\blog\public/../application/index\view\index\index.html";i:1562261443;}*/ ?>
<!DOCTYPE html>
<html class="han-la">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>小脚印 &#8211; YuLin.霖~</title>



    <link rel='stylesheet' href='/blog/public//static/index/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/blog/public//static/index/css/wpctc.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/blog/public//static/index/css/font-awesome.min.css' type='text/css' media='all' />

    <script type='text/javascript' src='/blog/public//static/index/js/jquery.js'></script>


    <script type='text/javascript'>
        var ajax = {
            "fly1": "4",
            "fly2": "6"
        };
    </script>
</head>

<body class="nav-open">
    <div id="wrap">
        <div id="preheader"></div>
        <header id="header" class="clearfix">
            <div class="head">
                <h1><a href="index.html">YuLin.霖~</a></h1>
                <p class="desc yahei"> <span class="saying-title">
                    我在小溪边捉螃蟹~                </span>
                </p>
            </div>
            <nav id="main-nav" class="clearfix yahei">
                <ul id="menu" class="nav">
                    <li class="menu-item current-menu-item"><a title="" href="<?php echo url('index/index'); ?>?page=1001">首页</a>
                    </li>
                    <li class="menu-item"><a title="" href="<?php echo url('index/footer'); ?>?page=1002">小脚印</a>
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
            <div id="content">
                <div class="home blog elementor-default">
                    <!-- <article class="post-116 post type-post status-publish format-standard sticky hentry category-javascript category-7 tag-js tag-19">
                        <header class="entry-header">
                            <h2 class="entry-name"><a href="queryurlparameter.html" rel="bookmark">获取URL传递的参数值queryURLParameter的几个实现方法</a>
                            </h2>
                            <ul class="entry-meta">
                                <li class="time_meta"><i class="fa fa-clock-o"></i> 2018-01-28 20:36</li>
                                <li class="cat_meta"><i class="fa fa-pencil-square-o"></i>  
                                    <a href="#" rel="category tag">JavaScript</a>,<a href="#" rel="category tag">前端</a>
                                </li>
                                <li class="comments_meta"><i class="fa fa-comments-o"></i>  <a href="#">暂无评论</a>
                                </li>
                                <li class="views_meta"><i class="fa fa-eye"></i>  <a>100 访问量</a>
                                </li>
                            </ul>
                        </header>
                        <div class="entry-content" itemprop="description">
                            <p>在真实项目中，我们经常会获取URL传递过来的参数，本文简单提出了三个获取url参数的方法
                                <br />1.基本操作，通过字符串的拆分
                                <br />2.普遍用法，通过正则拆分
                                <br />3.扩展用法，通过动态创建a标签，结合正则拆分</p>
                        </div>
                        <footer class="entry-footer clearfix"> <span class="tag-links in-list"><a href="#" rel="tag">JavaScript</a><a href="#" rel="tag">前端</a></span>
                            <div class="post-more"> <a href="queryurlparameter.html">阅读全文</a>
                            </div>
                            <div class="post-love"> <a href="javascript:;" data-action="ding" data-id="116" class="favorite post-love-link " title="点个赞"><i class="fa fa-heart-o"></i>
            <span class="love-count">
                2            </span></a>
                            </div>
                        </footer>
                    </article> -->
                    
                    
                    
                    
                    <?php foreach($contents as $vo): ?> 
                    

                    <article class="post-248 post type-post status-publish format-standard has-post-thumbnail hentry category-7 category-13 tag-19 tag-24">
                        <header class="entry-header">
                            <h2 class="entry-name">
                                <a href="<?php echo url('index/detail'); ?>?id=<?php echo $vo['id']; ?>" rel="bookmark"><?php echo $vo['title']; ?></a>
                            </h2>
                            <ul class="entry-meta">
                                <li class="time_meta"><i class="fa fa-clock-o"></i><?php echo $vo['uploadtime']; ?></li>
                            </ul>
                        </header>
                        <div class="entry-content" itemprop="description">
                            <p><?php echo $vo['author']; ?></p>
                        </div>
                        <footer class="entry-footer clearfix">
                            <span class="tag-links in-list">
                                <?php $_5d1e380abf657=explode(',',$vo['label']); if(is_array($_5d1e380abf657) || $_5d1e380abf657 instanceof \think\Collection || $_5d1e380abf657 instanceof \think\Paginator): if( count($_5d1e380abf657)==0 ) : echo "" ;else: foreach($_5d1e380abf657 as $key=>$item): ?>
                                <a href="#" rel="tag"><?php echo $item; ?></a>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </span>
                            <div class="post-more"><a href="<?php echo url('index/detail'); ?>?id=<?php echo $vo['id']; ?>">阅读全文</a></div>
                        </footer>
                    </article>






                    <?php endforeach; ?>
                    
                    









                    <article class="post-119 post type-post status-publish format-standard hentry category-javascript category-7 tag-js tag-19">
                      
                    
                    <!-- <div class="pagination clearfix"> <a href='#' class='current'>1</a><a href='#'>2</a><a href="#">></a> 
                    </div> -->
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
                            <img src="/blog/public/static/index/picture/portrait_1.jpg" class="avatar avatar-80 photo" height="80" width="80">
                        </div>
                        <div class="author_bio">
                            <h3>By_XLL </h3>
                            <p class="muted">YuLin.霖~，桂中山区里的一个山里娃</p>
                        </div>
                    </div>
                    <div class="social"><a rel="nofollow" target="_blank" class="mail" href="by_xll@163.com"><i class="fa fa-envelope"></i></a><a rel="nofollow" target="_blank" class="github" href="https://github.com/ByXLL"><i class="fa fa-github"></i></a>
                    </div>
                </aside>
                <aside class="widget widget_wpctc_widget">
                    <h3 class="widget-title"><span>网站云图</h3>
                    </span>
                    <div id="wpctc_widget-3-tagcloud" class='wpctc-wpctc_widget-3       wpctc-array'>
                        <canvas id="wpctc_widget-3_canvas" class="tagcloud-canvas" data-tagcloud-color="" data-tagcloud-bordercolor="#ffff99" data-cloud-font=null data-cloud-radiusx="1" data-cloud-radiusy="1" data-cloud-radiusz="1" data-cloud-zoom=1></canvas>
                    </div>
                    <div id="wpctc_widget-3_canvas_tags">
                        <ul>
                            <?php foreach($tags as $vo1): ?>
                                <li>
                                    <a href="#" class="tag-cloud-link" style="font-size: 189.1975308642%;" ><?php echo $vo1['tag']; ?></a>
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
                        <embed allowscriptaccess="never" allownetworking="internal" invokeurls="false" src="/blog/public/static/index/images/hamster.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" quality="high" autostart="0" wmode="transparent" align="middle" style="width: 100%;height: 14rem;">
                        </div>
                    </div>
                </aside>
            </div>


        </div>
        <footer id="footer" class="yahei clearfix"> <a class="left saying-bottom">
                生活不止眼前的苟且，还有诗和远方。加油陌生人！            </a>
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
</body>

</html>