<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<title>博客</title>
<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible"content="IE=10,IE=9,IE=8,chrome=1"/>
<meta name="viewport"content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="keywords" content="李炫进博客,李炫进博客,李炫进博客" />
<meta name="description" content="李炫进博客 " />
<link rel="stylesheet"type="text/css"href="/ot/Public/Home/css/font-awesome.min.css"/>
<link href="/ot/Public/Home/css/com.css"rel="stylesheet"type="text/css"/>
<link rel="stylesheet" href="/ot/Public/Home/css/slippry.css">
<script src="/ot/Public/Home/js/jquery.min.js"></script>
<script src="/ot/Public/Home/js/slippry.min.js"></script>
<script>
	$(document).ready(function(){
		$(".gglink,.fa-close,.ggbg").click(function(){
			$(".gginfo,.ggbg").toggleClass("open")
		})
	});
</script>
<!–[if lt IE9]>
<script src="/ot/Public/Home/js/html5.js" ></script>
<![endif]–>

    <link href="/ot/Public/Home/css/list.css" rel="stylesheet" type="text/css" />

<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>


</head>
<body>
	<!-- 头部 -->
	<header class="header">
  <div class="m-sitenav">
    <div class="wrap">
      <ul class="total">
        <li><a class="top-btn1" href="site_misc/grant/index.htm" title="域名认证"  target="_blank">域名认证</a></li>
        <li>作品：<i>69</i>个</li>
        <li>记录：<i>90</i>篇<em>|</em></li>
        <li>随笔：<i>28</i>篇<em>|</em></li>
        <li>资源：<i>69</i>个<em>|</em></li>
        <!--<li>评论：<i><span class="ds-thread-count" data-thread-key="moyublog" data-count-type="comments"></span></i>条<em>|</em></li>-->
        <li>总访问量：<i>41047</i>次<em>|</em></li>
      </ul>
      <ul class="m-login" id="clickmenubotton">
        <script src="e/member/login/loginjs.php"></script>
      </ul>
    </div>
  </div>
  <div class="inner">
    <hgroup>
      <h1 class="logo"><a href="<?php echo U('Home/Index/index');?>" title="李炫进"><i>x</i>
        李炫进       </a></h1>
    </hgroup>
    <?php
 $icoArr = array('home','gzs','books','essay','resource','kubao','kubao'); ?>
    <div class="nav">
      <nav>
        <ul id="main_nav">
          <?php $_result=getMenuList();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($icoArr[$key]); ?>"><a href="<?php echo U($vo['url']);?>" ><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
      </nav>
      <div id="search">
        <form action="http://www.moyublog.com/e/search/index.php" method="post" name="searchform" id="searchform">
          <input name="keyboard" type="text" id="keyboard" value="" placeholder="请输入关键词..." />
          <input type="hidden" name="show" value="title,smalltext" />
          <input type="hidden" name="tempid" value="1" />
          <input type="hidden" name="classid" value="2,3" />
          <button id="search-submit" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
  <a href="javascript:;" class="mso"><i class="fa fa-search sch"></i></a> 
 </header>
<script type="text/javascript">
  $().ready(function(){
    $("#clickmenubotton li span").hover(
      function(){
        $(this).addClass("bgmenuhove2");
        $(this).parent().find("ul.subnav").slideDown('fast').show();
        $(this).parent().hover(function(){},function(){
          $(this).parent().find("ul.subnav").fadeOut('fast');$(this).parent().find("span").removeClass("bgmenuhove2")
        })
      })
  });
</script> 
<script>
$(document).ready(function(){
  $(".sch").click(function(){  
    $("#search").toggleClass("open");
    $(".sch").toggleClass("fa-remove");
  });
 });
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	

    <section class="wrapper">
        <div class="newslist">
            <div class="newslistL">
                <div class="spiderlink">
                    您的位置：
                    <a href="<?php echo U('Index/index');?>">
                        首页
                    </a>
                    &nbsp;>&nbsp;
                    <a href="<?php echo U('Article/lists',array('category'=>$category['name']));?>">
                        <?php echo ($category["title"]); ?>
                    </a>
                </div>
                <ul class="right_content1">
                	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div class="bwtext">
                            <div class="news1_img">
                                <a href="<?php echo U('Home/article/detail',array('id'=>$vo['id']));?>">
                                    <img src="<?php echo (get_cover($vo["cover_id"],'path')); ?>"
                                    alt="<?php echo ($vo["title"]); ?>" width="180" height="130">
                                </a>
                            </div>
                            <div class="news_content1">
                                <div class="news_title">
                                    <h2>
                                        <span class="label">
                                            记录
                                            <i class="label-arrow">
                                            </i>
                                        </span>
                                        <a href="<?php echo U('Home/article/detail',array('id'=>$vo['id']));?>" tppabs="http://www.moyublog.com/notes/300.html">
                                            <?php echo ($vo["title"]); ?>
                                        </a>
                                    </h2>
                                </div>
                                <div class="time">
                                    <time class="font">
                                        <i class="fa fa-clock-o">
                                        </i>
                                        <?php echo (date('Y-m-d H:i',$vo["create_time"])); ?>
                                    </time>
                                    <span class="font">
                                        <i class="fa fa-eye">
                                        </i>
                                        <?php echo ($vo["view"]); ?>阅读
                                    </span>
                                    <span class="font">
                                        <i class="fa fa-comments-o">
                                        </i>
                                        <a href="300.html#pl" tppabs="http://www.moyublog.com/notes/300.html#pl">
                                            评论(
                                            <span class="ds-thread-count" data-thread-key="2-300" data-count-type="comments">
                                            </span>
                                            )
                                        </a>
                                    </span>
                                    <span class="font">
                                        <i class="fa fa-heart-o">
                                        </i>
                                        2个赞
                                    </span>
                                </div>
                                <div class="content_wzb">
                                    <?php echo ((isset($vo["description"]) && ($vo["description"] !== ""))?($vo["description"]):"该文章没有详情说明"); ?>
                                </div>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="pagination">
                    &nbsp;
                    <b>
                        1
                    </b>
                    &nbsp;
                    <a href="index_2.html" tppabs="http://www.moyublog.com/notes/index_2.html">
                        2
                    </a>
                    &nbsp;
                    <a href="index_3.html" tppabs="http://www.moyublog.com/notes/index_3.html">
                        3
                    </a>
                    &nbsp;
                    <a href="index_4.html" tppabs="http://www.moyublog.com/notes/index_4.html">
                        4
                    </a>
                    &nbsp;
                    <a href="index_5.html" tppabs="http://www.moyublog.com/notes/index_5.html">
                        5
                    </a>
                    &nbsp;
                    <a href="index_2.html" tppabs="http://www.moyublog.com/notes/index_2.html">
                        下一页
                    </a>
                    &nbsp;
                    <a href="index_9.html" tppabs="http://www.moyublog.com/notes/index_9.html">
                        尾页
                    </a>
                </div>
            </div>
            <div class="newslistR">
                <figure class="about">
                    <div class="aboutme clear">
                        <img src="/ot/Public/Home/images/me.jpg" tppabs="http://www.moyublog.com/skin/moyublog/images/me.jpg">
                        <span>
                            关于墨鱼
                        </span>
                        <p>
                            31岁，山东滕州人，职业网络经理人、前端设计师。爱读书爱设计爱思考...
                            <a href="#" title="没专门写自我介绍，暂且用这篇顶一下" rel="nofollow">
                                [更多]
                            </a>
                        </p>
                    </div>
                    <div class="qrcode">
                        <span id="rss">
                            邮箱订阅框正在载入中...
                        </span>
                    </div>
                    <div class="about_me">
                        <dl class="clear">
                            <dd class=" contact">
                                <strong>
                                    E-mail：
                                </strong>
                                48444431@qq.com
                                <br>
                                <strong>
                                    QQ：
                                </strong>
                                48444431
                            </dd>
                            <dd class="weixin">
                                <a href="../zt/weixin/index.htm" tppabs="http://www.moyublog.com/zt/weixin/"
                                title="添加微信，来聊天" target="_blank" rel="nofollow">
                                    <i class="fa fa-wechat">
                                    </i>
                                </a>
                            </dd>
                            <dd class="timeline">
                                <a href="../zt/timeline/index.htm" tppabs="http://www.moyublog.com/zt/timeline/"
                                title="墨鱼部落格，始于2007年11月02日" target="_blank" rel="nofollow">
                                    <i class="fa fa-clock-o">
                                    </i>
                                </a>
                            </dd>
                            <dd class="phone">
                                <a onclick="{alert('对着显示器连说10遍”墨鱼你好帅“，网页就会自动显示我的手机号（这是项新技术，声控的~）')} "
                                title="手机联系">
                                    <i class="fa fa-mobile">
                                    </i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <!--<div class="goodlife"><span class="clear">
                    <h3>读书笔记</h3>
                    <a href="/book/index.htm">更多</a></span>
                    <div class="shaninfo clear"><img src="/d/file/45af331b10610ee14dd9b6124405bf2a.jpg" alt="旧山河">
                    <p><a href="/books/8880.html">这不是一本严格意义上的“讲史书”，在我看来刀尔登只是以历史上出...</a></p>
                    </div>
                    </div>-->
                </figure>
                <figure class="hot_list clear">
                    <figcaption class="h4 books">
                        最近更新作品
                        <a href="../studio/index.htm" tppabs="http://www.moyublog.com/studio/"
                        title="已有 69 个">
                            更多
                        </a>
                    </figcaption>
                    <div class="cpbox">
                        <div class="fl headimg">
                            <a href="../studio/336.html" tppabs="http://www.moyublog.com/studio/336.html"
                            target="_blank">
                                <img src="../e/data/tmp/titlepic/3489af5953de58b760b4e5761720e3af.jpg"
                                tppabs="http://www.moyublog.com/e/data/tmp/titlepic/3489af5953de58b760b4e5761720e3af.jpg"
                                alt="图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机">
                            </a>
                        </div>
                        <div class="cptext">
                            <div class="cptit">
                                <a href="../studio/336.html" tppabs="http://www.moyublog.com/studio/336.html"
                                target="_blank" title="图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机">
                                    图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机
                                </a>
                            </div>
                            <div class="cpwzjj">
                                <a href="../studio/336.html" tppabs="http://www.moyublog.com/studio/336.html"
                                target="_blank">
                                    采用帝国CMS最新核心制作，安全稳定自然不用多说啦。自带了6.2G数据，整站7G左右，如果不要数据30M左右。带两种 ……
                                </a>
                                <p>
                                    316 人已经看过了！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cpbox">
                        <div class="fl headimg">
                            <a href="../studio/300.html" tppabs="http://www.moyublog.com/studio/300.html"
                            target="_blank">
                                <img src="../e/data/tmp/titlepic/bec9c372b5633330f184f8b424023b0f.jpg"
                                tppabs="http://www.moyublog.com/e/data/tmp/titlepic/bec9c372b5633330f184f8b424023b0f.jpg"
                                alt="帝国CMS文章微信资讯新闻博客网站模板源码自适应响应式HTML5手机">
                            </a>
                        </div>
                        <div class="cptext">
                            <div class="cptit">
                                <a href="../studio/300.html" tppabs="http://www.moyublog.com/studio/300.html"
                                target="_blank" title="帝国CMS文章微信资讯新闻博客网站模板源码自适应响应式HTML5手机">
                                    帝国CMS文章微信资讯新闻博客网站模板源码自适应响应式HTML5手机
                                </a>
                            </div>
                            <div class="cpwzjj">
                                <a href="../studio/300.html" tppabs="http://www.moyublog.com/studio/300.html"
                                target="_blank">
                                    采用帝国CMS最新版程序做为底层，安全稳定高效。改了网站名称即可运营，非常适合做微信资讯或者网站资讯类网站 ……
                                </a>
                                <p>
                                    386 人已经看过了！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cpbox">
                        <div class="fl headimg">
                            <a href="../studio/335.html" tppabs="http://www.moyublog.com/studio/335.html"
                            target="_blank">
                                <img src="../e/data/tmp/titlepic/1ad3d1cc1848b70682363f4112dfd75b.jpg"
                                tppabs="http://www.moyublog.com/e/data/tmp/titlepic/1ad3d1cc1848b70682363f4112dfd75b.jpg"
                                alt="html5响应式自适应帝国CMS整站模板源码瀑布流文章图片资讯文章站">
                            </a>
                        </div>
                        <div class="cptext">
                            <div class="cptit">
                                <a href="../studio/335.html" tppabs="http://www.moyublog.com/studio/335.html"
                                target="_blank" title="html5响应式自适应帝国CMS整站模板源码瀑布流文章图片资讯文章站">
                                    html5响应式自适应帝国CMS整站模板源码瀑布流文章图片资讯文章站
                                </a>
                            </div>
                            <div class="cpwzjj">
                                <a href="../studio/335.html" tppabs="http://www.moyublog.com/studio/335.html"
                                target="_blank">
                                    帝国CMS最新核心搭建，使用曾经做过的一个模板，再次优化改版重新制作模板响应速度飞快，布局合理。瀑布流布局适 ……
                                </a>
                                <p>
                                    215 人已经看过了！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cpbox">
                        <div class="fl headimg">
                            <a href="../studio/271.html" tppabs="http://www.moyublog.com/studio/271.html"
                            target="_blank">
                                <img src="../e/data/tmp/titlepic/cbd7b17f66c0075c4728705ff78eda82.jpg"
                                tppabs="http://www.moyublog.com/e/data/tmp/titlepic/cbd7b17f66c0075c4728705ff78eda82.jpg"
                                alt="个人博客资讯文章新闻帝国CMS网站模板整站自适应HTML5响应式手机">
                            </a>
                        </div>
                        <div class="cptext">
                            <div class="cptit">
                                <a href="../studio/271.html" tppabs="http://www.moyublog.com/studio/271.html"
                                target="_blank" title="个人博客资讯文章新闻帝国CMS网站模板整站自适应HTML5响应式手机">
                                    个人博客资讯文章新闻帝国CMS网站模板整站自适应HTML5响应式手机
                                </a>
                            </div>
                            <div class="cpwzjj">
                                <a href="../studio/271.html" tppabs="http://www.moyublog.com/studio/271.html"
                                target="_blank">
                                    模板用帝国CMS最新版为核心。扁平化风格设计。高端大气上档次！适合个人博客、资讯、文章、图片类网站建设，自 ……
                                </a>
                                <p>
                                    554 人已经看过了！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cpbox">
                        <div class="fl headimg">
                            <a href="../studio/294.html" tppabs="http://www.moyublog.com/studio/294.html"
                            target="_blank">
                                <img src="../e/data/tmp/titlepic/98c06f50164f0be6b9d10ad309f1e1e6.jpg"
                                tppabs="http://www.moyublog.com/e/data/tmp/titlepic/98c06f50164f0be6b9d10ad309f1e1e6.jpg"
                                alt="PHP瀑布流帝国CMS整站模板功能强大响应布局HTML5自适应手机浏览">
                            </a>
                        </div>
                        <div class="cptext">
                            <div class="cptit">
                                <a href="../studio/294.html" tppabs="http://www.moyublog.com/studio/294.html"
                                target="_blank" title="PHP瀑布流帝国CMS整站模板功能强大响应布局HTML5自适应手机浏览">
                                    PHP瀑布流帝国CMS整站模板功能强大响应布局HTML5自适应手机浏览
                                </a>
                            </div>
                            <div class="cpwzjj">
                                <a href="../studio/294.html" tppabs="http://www.moyublog.com/studio/294.html"
                                target="_blank">
                                    这个模板可以做资源下载，视频播放，图片展示，文章资讯，购物商城等站点。基本上属于全能了！包含了下载/播放 用户权 ……
                                </a>
                                <p>
                                    560 人已经看过了！
                                </p>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="hot_list clear">
                    <figcaption class="h4 hot">
                        近期最受欢迎
                        <!--<a href="/hot/"title="查看完整榜单">排行榜</a>-->
                    </figcaption>
                    <ul id="zx">
                        <li>
                            <div class="diggNum active">
                                1
                            </div>
                            <div class="diggLink">
                                <a href="148.html" tppabs="http://www.moyublog.com/notes/148.html" target="_blank"
                                title="(2014-06-23)帝国CMS搭建的网站，图片如何修改，模板内文字如何修改！">
                                    帝国CMS搭建的网站，图片如何修改，模板内文字如何修改！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum active">
                                2
                            </div>
                            <div class="diggLink">
                                <a href="144.html" tppabs="http://www.moyublog.com/notes/144.html" target="_blank"
                                title="(2014-06-21)2014年做过的修过的移植过的那些模板！全部帝国CMS核心！">
                                    2014年做过的修过的移植过的那些模板！全部帝国CMS核心！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum active">
                                3
                            </div>
                            <div class="diggLink">
                                <a href="173.html" tppabs="http://www.moyublog.com/notes/173.html" target="_blank"
                                title="(2014-07-22)帝国CMS替换编辑器为百度编辑器的方法：插件形式！改动量超少！">
                                    帝国CMS替换编辑器为百度编辑器的方法：插件形式！改动量超少！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                4
                            </div>
                            <div class="diggLink">
                                <a href="145.html" tppabs="http://www.moyublog.com/notes/145.html" target="_blank"
                                title="(2014-06-23)帝国CMS安装以及恢复数据模板视频教程">
                                    帝国CMS安装以及恢复数据模板视频教程
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                5
                            </div>
                            <div class="diggLink">
                                <a href="168.html" tppabs="http://www.moyublog.com/notes/168.html" target="_blank"
                                title="(2014-07-10)帝国CMS统一修改已添加内容页存放目录修改成自定义">
                                    帝国CMS统一修改已添加内容页存放目录修改成自定义
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                6
                            </div>
                            <div class="diggLink">
                                <a href="176.html" tppabs="http://www.moyublog.com/notes/176.html" target="_blank"
                                title="(2014-08-23)帝国CMS 开启商城支付宝支付模式的方法！">
                                    帝国CMS 开启商城支付宝支付模式的方法！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                7
                            </div>
                            <div class="diggLink">
                                <a href="163.html" tppabs="http://www.moyublog.com/notes/163.html" target="_blank"
                                title="(2014-07-04)虚拟货源代理平台,帝国CMS整站源码 增加友情链接的方法">
                                    虚拟货源代理平台,帝国CMS整站源码 增加友情链接的方法
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                8
                            </div>
                            <div class="diggLink">
                                <a href="166.html" tppabs="http://www.moyublog.com/notes/166.html" target="_blank"
                                title="(2014-07-10)帝国CMS 弹出下载和直接下载 的修改方法！">
                                    帝国CMS 弹出下载和直接下载 的修改方法！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                9
                            </div>
                            <div class="diggLink">
                                <a href="javascript:if(confirm('http://www.moyublog.com/notes/197.html  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ һࠉԃ, ܲ؅ǺЂ՘, ܲЮĿܴݫֹͣc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.moyublog.com/notes/197.html'"
                                tppabs="http://www.moyublog.com/notes/197.html" target="_blank" title="(2014-12-21)帝国CMS使用自定义列表时，如何使用栏目设置里的"
                                发布同时生成当前栏目、父栏目与首页 "功能！">
                                    帝国CMS使用自定义列表时，如何使用栏目设置里的"发布同时生成当前栏目、父栏目与首页"功能！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                10
                            </div>
                            <div class="diggLink">
                                <a href="javascript:if(confirm('http://www.moyublog.com/notes/147.html  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ һࠉԃ, ܲ؅ǺЂ՘, ܲЮĿܴݫֹͣc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.moyublog.com/notes/147.html'"
                                tppabs="http://www.moyublog.com/notes/147.html" target="_blank" title="(2014-06-23)帝国CMS的基本操作视频教程-墨鱼出品">
                                    帝国CMS的基本操作视频教程-墨鱼出品
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                11
                            </div>
                            <div class="diggLink">
                                <a href="../essay/155.html" tppabs="http://www.moyublog.com/essay/155.html"
                                target="_blank" title="(2014-06-24)给工作站安了个新家，IBM W500扩展坞。">
                                    给工作站安了个新家，IBM W500扩展坞。
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                12
                            </div>
                            <div class="diggLink">
                                <a href="javascript:if(confirm('http://www.moyublog.com/notes/269.html  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ һࠉԃ, ܲ؅ǺЂ՘, ܲЮĿܴݫֹͣc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.moyublog.com/notes/269.html'"
                                tppabs="http://www.moyublog.com/notes/269.html" target="_blank" title="(2015-05-10)网页设计 不规则多边形 渐变背景素材">
                                    网页设计 不规则多边形 渐变背景素材
                                </a>
                            </div>
                        </li>
                    </ul>
                </figure>
            </div>
            <style>
                .rssbook.light{padding:0;margin:0;background:none;border:none}.light.info{margin-bottom:10px}.mailInput{margin-top:12px}input#to{border-color:inherit;border:1px
                solid#dbd6d2;padding:5px 0;height:auto;text-indent:6px;width:69.8%;float:left;margin:0;border-right:none;border-radius:3px
                0 0 3px}div.rssbutton{border:none;width:29%}div.rssbutton input{background:#E9644E;border-radius:0
                3px 3px 0;width:100%;height:auto;line-height:normal;padding:6px 0;margin:0;border:1px
                solid#E9644E}.rssbutton input:hover{background:#F77A65;border:1px solid#F77A65}
            </style>
            <span id="span_rss">
                <script>
                    var nId = "17ad7d4ca15ea7f5180396dd17b5c028cbae6d81271c49e6",
                    nWidth = "auto",
                    sColor = "light",
                    sText = "填写您的邮箱地址，及时获取更新：";
                </script>
                <script src="../../list.qq.com/zh_CN/htmledition/js/qf/page/qfcode.js"
                tppabs="http://list.qq.com/zh_CN/htmledition/js/qf/page/qfcode.js" charset="gb18030">
                </script>
            </span>
            <script>
                try {
                    document.getElementById("rss").innerHTML = document.getElementById("span_rss").innerHTML;
                    document.getElementById("span_rss").innerHTML = ""
                } catch(e) {}
            </script>
        </div>
    </section>


<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer id="footer">
	  <div id="Copyright">
	    <p>© 2009-2015 李炫进博客 www.lixuanjin.com</p>
	    <p><a href="javascript:void(0)" rel="nofollow">
	      鲁ICP备12345678号      </a>
	      <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_4697232'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s6.cnzz.com/stat.php%3Fid%3D4697232' type='text/javascript'%3E%3C/script%3E"));</script>    </p>
	  </div>
	</footer>
	<script type="text/javascript">
		var duoshuoQuery={short_name:"moyublog"};(function(){var ds=document.createElement('script');ds.type='text/javascript';ds.async=true;ds.src='../static.duoshuo.com/embed.js'/*tpa=http://static.duoshuo.com/embed.js*/;ds.charset='UTF-8';(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(ds)})();</script><i class="fa fa-moon-o"></i><script>$(document).ready(function(){$(".fa-moon-o").click(function(){$("body").toggleClass("moon");$(".fa-moon-o").toggleClass("fa-sun-o");})});</script>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/ot", //当前网站地址
		"APP"    : "/ot/index.php?s=", //当前项目地址
		"PUBLIC" : "/ot/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>