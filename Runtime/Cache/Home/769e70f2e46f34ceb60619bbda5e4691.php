<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<title>博客</title>
<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible"content="IE=10,IE=9,IE=8,chrome=1"/>
<meta name="viewport"content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="keywords" content="李炫进博客,李炫进博客,李炫进博客" />
<meta name="description" content="李炫进博客 " />
<link rel="stylesheet"type="text/css"href="/blog/Public/Home/css/font-awesome.min.css"/>
<link href="/blog/Public/Home/css/com.css"rel="stylesheet"type="text/css"/>
<link rel="stylesheet" href="/blog/Public/Home/css/slippry.css">
<script src="/blog/Public/Home/js/jquery.min.js"></script>
<script src="/blog/Public/Home/js/slippry.min.js"></script>
<script>
	$(document).ready(function(){
		$(".gglink,.fa-close,.ggbg").click(function(){
			$(".gginfo,.ggbg").toggleClass("open")
		})
	});
</script>
<!–[if lt IE9]>
<script src="/blog/Public/Home/js/html5.js" ></script>
<![endif]–>

    <link href="/blog/Public/Home/css/index.css" rel="stylesheet" type="text/css" />

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
	

    <div class="minnav">
        <i class="fa fa-bars">
        </i>
    </div>
    <ul class="minul">
        <li class="on">
            <a href="index.htm" title="网站首页">
                网站首页
            </a>
        </li>
        <li class="">
            <a href="studio/index.htm">
                工作室
            </a>
        </li>
        <li class="">
            <a href="notes/index.htm">
                记录
            </a>
        </li>
        <li class="">
            <a href="essay/index.htm">
                随笔
            </a>
        </li>
        <li class="">
            <a href="resource/index.htm">
                资源
            </a>
        </li>
        <li class="">
            <a href="guestbook.html">
                留言
            </a>
        </li>
    </ul>
    <script>
        $(document).ready(function() {
            $(".minnav").click(function() {
                $(".minul").toggleClass("active")
            })
        });
    </script>
    <div class="hconly_ad">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td width="30%" height="50">
                        <div align="right">
                            <img src="/blog/Public/Home/images/hconly2_dt.png" tppabs="http://www.moyublog.com//blog/Public/Home/images/hconly2_dt.png"
                            width="75" height="50" />
                        </div>
                    </td>
                    <td height="50">
                        <div class="talk_icon">
                            <script language="javaScript">
                                < !--now = new Date(),
                                hour = now.getHours() if (hour < 6) {
                                    document.write("早点休息，")
                                } else if (hour < 9) {
                                    document.write("早安！")
                                } else if (hour < 12) {
                                    document.write("上午好！")
                                } else if (hour < 14) {
                                    document.write("中午好！")
                                } else if (hour < 17) {
                                    document.write("下午好！")
                                } else if (hour < 19) {
                                    document.write("傍晚好！")
                                } else if (hour < 22) {
                                    document.write("晚上好，")
                                } else {
                                    document.write("夜深了，")
                                }
                                // -->
                                
                            </script>
                            欢迎来到墨鱼的部落格！
                        </div>
                    </td>
                    <td width="15%" height="50">
                        <div align="left">
                            <img src="/blog/Public/Home/images/hconly2_3.png" tppabs="http://www.moyublog.com//blog/Public/Home/images/hconly2_3.png"
                            width="16" height="50" />
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <section class="wrapper">
        <div class="newslist">
            <div class="newslistL">
                <figure class="about">
                    <div class="aboutme clear">
                        <img src="/blog/Public/Home/images/me.jpg" tppabs="http://www.moyublog.com//blog/Public/Home/images/me.jpg">
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
                                <a href="zt/weixin/index.htm" tppabs="http://www.moyublog.com/zt/weixin/"
                                title="添加微信，来聊天" target="_blank" rel="nofollow">
                                    <i class="fa fa-wechat">
                                    </i>
                                </a>
                            </dd>
                            <dd class="timeline">
                                <a href="zt/timeline/index.htm" tppabs="http://www.moyublog.com/zt/timeline/"
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
                    <div class="goodlife">
                        <span class="clear">
                            <h3>
                                【记录】随机阅读
                            </h3>
                            <a href="notes/index.htm" tppabs="http://www.moyublog.com/notes/">
                                更多
                            </a>
                        </span>
                        <div class="shaninfo clear">
                            <a href="notes/177.php.htm" tppabs="http://www.moyublog.com/notes/177.php">
                                <img src="/blog/Public/Home/images/93c51fb5f908a4fd5bcb96da89a97edc.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/93c51fb5f908a4fd5bcb96da89a97edc.jpg"
                                alt="修改过的会员中心安装图文教程！">
                            </a>
                            <p>
                                <a href="notes/177.php.htm" tppabs="http://www.moyublog.com/notes/177.php">
                                    第一步：复制我给你的安装包到你的网站，覆盖原来的的文件，默认发送UTF8版本的，请按照你网站的编码向墨鱼索要对应
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="goodlife">
                        <span class="clear">
                            <h3>
                                【随笔】随机阅读
                            </h3>
                            <a href="essay/index.htm" tppabs="http://www.moyublog.com/essay/">
                                更多
                            </a>
                        </span>
                        <div class="shaninfo clear">
                            <a href="essay/215.html" tppabs="http://www.moyublog.com/essay/215.html">
                                <img src="/blog/Public/Home/images/93c51fb5f908a4fd5bcb96da89a97edc.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/cb5bfa373c407a9395bc659db92c426f.jpg"
                                alt="泪崩~童年歌曲串烧 听完觉得自己老了么？">
                            </a>
                            <p>
                                <a href="essay/215.html" tppabs="http://www.moyublog.com/essay/215.html">
                                    泪崩~童年歌曲串烧 听完觉得自己老了么？
                                </a>
                            </p>
                        </div>
                    </div>
                </figure>
                <div class="tuijian">
                    <div class="hc_slider">
                        <ul id="slide">
                            <!-- <li><a href="http://www.moyublog.com/studio/336.html" target="_blank"><img src="http://www.moyublog.com/e/data/tmp/titlepic/33f2bb6ef28a28faa698854b53274d52.jpg" alt="图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机"></a></li>
                            <li><a href="http://www.moyublog.com/studio/300.html" target="_blank"><img src="http://www.moyublog.com/e/data/tmp/titlepic/34400ca8f06c958c88d041f62137e759.jpg" alt="帝国CMS文章微信资讯新闻博客网站模板源码自适应响应式HTML5手机"></a></li>
                            <li><a href="http://www.moyublog.com/studio/335.html" target="_blank"><img src="http://www.moyublog.com/e/data/tmp/titlepic/ca8ed96ed8c86a1bd934d341b624f1a1.jpg" alt="html5响应式自适应帝国CMS整站模板源码瀑布流文章图片资讯文章站"></a></li>
                            <li><a href="http://www.moyublog.com/studio/271.html" target="_blank"><img src="http://www.moyublog.com/e/data/tmp/titlepic/d9d8d19023d3731e43609096d9906097.jpg" alt="个人博客资讯文章新闻帝国CMS网站模板整站自适应HTML5响应式手机"></a></li>
                            <li><a href="http://www.moyublog.com/studio/294.html" target="_blank"><img src="http://www.moyublog.com/e/data/tmp/titlepic/ade40c2b7b6ff451b1877a7edb67acd9.jpg" alt="PHP瀑布流帝国CMS整站模板功能强大响应布局HTML5自适应手机浏览"></a></li>
                            -->
                            <li>
                                <a href="index.htm" tppabs="http://www.moyublog.com/" target="_blank">
                                    <img src="/blog/Public/Home/images/huandeng/1.jpg" tppabs="http://www.moyublog.com//blog/Public/Home/images/huandeng/1.jpg"
                                    alt="墨鱼部落格">
                                </a>
                            </li>
                        </ul>
                        <a href="#glob" class="prev">
                            <i class="fa fa-chevron-left">
                            </i>
                        </a>
                        <a href="#glob" class="next">
                            <i class="fa fa-chevron-right">
                            </i>
                        </a>
                        <script>
                            $(function() {
                                var slide = $("#slide").slippry({
                                    transition: 'fade',
                                    useCSS: true,
                                    speed: 1000,
                                    pause: 4000,
                                    auto: true,
                                    preload: 'visible'
                                });
                                $('.prev').click(function() {
                                    slide.goToPrevSlide();
                                    return false
                                });
                                $('.next').click(function() {
                                    slide.goToNextSlide();
                                    return false
                                })
                            });
                        </script>
                    </div>
                    <ul class="tjlist clear">
                        <li>
                            <div class="cover">
                                <div class="img">
                                    <img src="/blog/Public/Home/images/design.jpg" tppabs="http://www.moyublog.com//blog/Public/Home/images/design.jpg"
                                    alt="墨鱼的工作室">
                                </div>
                            </div>
                            <div class="info">
                                <div class="wrap">
                                    <span class="title">
                                        墨鱼的工作室
                                    </span>
                                    <div class="ftit" style="margin-top: 7px;">
                                        闲暇小玩意儿，赚点零花钱
                                    </div>
                                    <p class="desc">
                                        销售精美网站模版、提供网站建设服务（含手机网站）
                                    </p>
                                </div>
                                <a href="studio/index.htm" tppabs="http://www.moyublog.com/studio/" class="tj-btn taobao">
                                    官网
                                </a>
                                <a href="javascript:if(confirm('http://moyu2013.taobao.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://moyu2013.taobao.com/'"
                                tppabs="http://moyu2013.taobao.com/" class="tj-btn guanwang" target="_blank"
                                rel="nofollow">
                                    网店
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="cover">
                                <div class="img">
                                    <img src="/blog/Public/Home/images/99ym.jpg" tppabs="http://www.moyublog.com//blog/Public/Home/images/99ym.jpg"
                                    alt="久久源码官方网站">
                                </div>
                            </div>
                            <div class="info">
                                <div class="wrap">
                                    <span class="title">
                                        精品资源购买下载入口
                                    </span>
                                    <div class="ftit">
                                        墨鱼部落格旗下精品资源交易网站!
                                    </div>
                                    <p class="desc">
                                        收集自网络，里面一些资源还是蛮好的，如果有需要的可以去看看！
                                    </p>
                                </div>
                                <a href="resource/index.htm" tppabs="http://www.moyublog.com/resource/"
                                class="tj-btn" target="_blank">
                                    立即访问
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="gonggao" style="margin-top:30px">
                        <strong>
                            <i class="fa fa-volume-up">
                            </i>
                            通知公告：
                        </strong>
                        <a href="javascript:;" class="gglink">
                            墨鱼部落格邮件订阅系统修复完毕了！
                        </a>
                        <time>
                            2015-4-30
                        </time>
                        <div class="ggbg">
                        </div>
                        <div class="gginfo">
                            <div class="ggtit">
                                <strong>
                                    通知公告
                                </strong>
                                <i class="fa fa-close">
                                </i>
                            </div>
                            <div class="ggtxt">
                                <p style="margin-bottom:20px;padding: 0 10px;font-size:16px">
                                    墨鱼部落格邮件订阅系统修复完毕了！欢迎大家订阅邮件！~~~
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listmain">
                    <div class="navtit">
                        <h4>
                            最新博文
                        </h4>
                        <a href="essay/index.htm" tppabs="http://www.moyublog.com/essay/">
                            完整列表
                            <span>
                                &gt;&gt;
                            </span>
                        </a>
                    </div>
                    <ul class="right_content1">
                        <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <div class="bwtext">
                                <div class="news1_img">
                                    <a href="<?php echo U('Home/article/detail',array('id'=>$vo['id']));?>">
                                        <img src="<?php echo (get_cover($vo["cover_id"],'path')); ?>" alt="<?php echo ($vo["title"]); ?>" width="180" height="130">
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
                                            <a href="notes/300.html#pl" tppabs="http://www.moyublog.com/notes/300.html#pl">
                                                评论(
                                                <span class="ds-thread-count" data-thread-key="2-300" data-count-type="comments">
                                                    0
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
                                        帝国后台设置水印的地方如下图：其中图片水印的默认地址为：/e/data/mark/maskdef.gif，你可以做个图，然后重新换个地址，也可以直接去换了这个图片！这个配置不多说了！主要说一下从哪……
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
                        <a href="index_2.html" tppabs="http://www.moyublog.com/index_2.html">
                            2
                        </a>
                        &nbsp;
                        <a href="index_3.html" tppabs="http://www.moyublog.com/index_3.html">
                            3
                        </a>
                        &nbsp;
                        <a href="index_4.html" tppabs="http://www.moyublog.com/index_4.html">
                            4
                        </a>
                        &nbsp;
                        <a href="index_5.html" tppabs="http://www.moyublog.com/index_5.html">
                            5
                        </a>
                        &nbsp;
                        <a href="index_2.html" tppabs="http://www.moyublog.com/index_2.html">
                            下一页
                        </a>
                        &nbsp;
                        <a href="index_12.html" tppabs="http://www.moyublog.com/index_12.html">
                            尾页
                        </a>
                    </div>
                </div>
            </div>
            <div class="newslistR">
                <div class="duzheqiang clear">
                    <h4>
                        活跃读者
                        <a href="guestbook.html" tppabs="http://www.moyublog.com/guestbook.html"
                        title="有朋自远方来个留言，不亦乐乎">
                            留言板
                        </a>
                    </h4>
                    <style>
                        #ds-recent-visitors .ds-avatar {display: inline-block;padding: 0 !important;margin:
                        0 10px 12px 0 !important;width: 32px;height: 32px;opacity: 0.8;}
                    </style>
                    <ul class="ds-recent-visitors" data-num-items="24" style="margin:16px 0 0;float:left">
                    </ul>
                </div>
                <!-- <figure class="hot_list clear">
                    <figcaption class="h4 books">
                        最近更新作品
                        <a href="studio/index.htm" tppabs="http://www.moyublog.com/studio/" title="已有 69 个">
                            更多
                        </a>
                    </figcaption>
                    <div class="cpbox">
                        <div class="fl headimg">
                            <a href="studio/336.html" tppabs="http://www.moyublog.com/studio/336.html"
                            target="_blank">
                                <img src="e/data/tmp/titlepic/3489af5953de58b760b4e5761720e3af.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/3489af5953de58b760b4e5761720e3af.jpg"
                                alt="图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机">
                            </a>
                        </div>
                        <div class="cptext">
                            <div class="cptit">
                                <a href="studio/336.html" tppabs="http://www.moyublog.com/studio/336.html"
                                target="_blank" title="图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机">
                                    图片美女妹子站6G数据帝国CMS网站模板源码自适应响应式HTML5手机
                                </a>
                            </div>
                            <div class="cpwzjj">
                                <a href="studio/336.html" tppabs="http://www.moyublog.com/studio/336.html"
                                target="_blank">
                                    采用帝国CMS最新核心制作，安全稳定自然不用多说啦。自带了6.2G数据，整站7G左右，如果不要数据30M左右。带两种 ……
                                </a>
                                <p>
                                    316 人已经看过了！
                                </p>
                            </div>
                        </div>
                    </div>
                </figure> -->
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
                                <a href="notes/148.html" tppabs="http://www.moyublog.com/notes/148.html"
                                target="_blank" title="(2014-06-23)帝国CMS搭建的网站，图片如何修改，模板内文字如何修改！">
                                    帝国CMS搭建的网站，图片如何修改，模板内文字如何修改！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum active">
                                2
                            </div>
                            <div class="diggLink">
                                <a href="notes/144.html" tppabs="http://www.moyublog.com/notes/144.html"
                                target="_blank" title="(2014-06-21)2014年做过的修过的移植过的那些模板！全部帝国CMS核心！">
                                    2014年做过的修过的移植过的那些模板！全部帝国CMS核心！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum active">
                                3
                            </div>
                            <div class="diggLink">
                                <a href="notes/173.html" tppabs="http://www.moyublog.com/notes/173.html"
                                target="_blank" title="(2014-07-22)帝国CMS替换编辑器为百度编辑器的方法：插件形式！改动量超少！">
                                    帝国CMS替换编辑器为百度编辑器的方法：插件形式！改动量超少！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                4
                            </div>
                            <div class="diggLink">
                                <a href="notes/145.html" tppabs="http://www.moyublog.com/notes/145.html"
                                target="_blank" title="(2014-06-23)帝国CMS安装以及恢复数据模板视频教程">
                                    帝国CMS安装以及恢复数据模板视频教程
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                5
                            </div>
                            <div class="diggLink">
                                <a href="notes/168.html" tppabs="http://www.moyublog.com/notes/168.html"
                                target="_blank" title="(2014-07-10)帝国CMS统一修改已添加内容页存放目录修改成自定义">
                                    帝国CMS统一修改已添加内容页存放目录修改成自定义
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                6
                            </div>
                            <div class="diggLink">
                                <a href="notes/176.html" tppabs="http://www.moyublog.com/notes/176.html"
                                target="_blank" title="(2014-08-23)帝国CMS 开启商城支付宝支付模式的方法！">
                                    帝国CMS 开启商城支付宝支付模式的方法！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                7
                            </div>
                            <div class="diggLink">
                                <a href="notes/163.html" tppabs="http://www.moyublog.com/notes/163.html"
                                target="_blank" title="(2014-07-04)虚拟货源代理平台,帝国CMS整站源码 增加友情链接的方法">
                                    虚拟货源代理平台,帝国CMS整站源码 增加友情链接的方法
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                8
                            </div>
                            <div class="diggLink">
                                <a href="notes/166.html" tppabs="http://www.moyublog.com/notes/166.html"
                                target="_blank" title="(2014-07-10)帝国CMS 弹出下载和直接下载 的修改方法！">
                                    帝国CMS 弹出下载和直接下载 的修改方法！
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="diggNum ">
                                9
                            </div>
                            <div class="diggLink">
                                <a href="javascript:void()" target="_blank" title="(2014-12-21)帝国CMS使用自定义列表时，如何使用栏目设置里的"
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
                                <a href="essay/155.html" tppabs="http://www.moyublog.com/essay/155.html"
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
                <figure class="hot_list clear">
                    <figcaption class="h5 duzhe">
                        读者/朋友的博客
                    </figcaption>
                    <ul class="duzhelist clear">
                        <li>
                            <a href="javascript:if(confirm('http://moyu2013.taobao.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://moyu2013.taobao.com/'"
                            tppabs="http://moyu2013.taobao.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/7dae8c256b06487f1bf1aa8b1b9a1171.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/7dae8c256b06487f1bf1aa8b1b9a1171.jpg"
                                alt="淘宝店铺" />
                                <p>
                                    淘宝店铺
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.99yuanma.net/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.99yuanma.net/'"
                            tppabs="http://www.99yuanma.net/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/87f3bd490d8912a34e3269fca659f9bf.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/87f3bd490d8912a34e3269fca659f9bf.jpg"
                                alt="久久源码" />
                                <p>
                                    久久源码
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.99ziyuan.net/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.99ziyuan.net/'"
                            tppabs="http://www.99ziyuan.net/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/7dae8c256b06487f1bf1aa8b1b9a1171.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/7dae8c256b06487f1bf1aa8b1b9a1171.jpg"
                                alt="久久资源" />
                                <p>
                                    久久资源
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.cangyunge.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.cangyunge.com/'"
                            tppabs="http://www.cangyunge.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/70d42eeed2cd55f7c9ff7bbfcbb32bca.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/70d42eeed2cd55f7c9ff7bbfcbb32bca.jpg"
                                alt="藏云阁" />
                                <p>
                                    藏云阁
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.ziyuangou.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.ziyuangou.com/'"
                            tppabs="http://www.ziyuangou.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/17a90028a9158aa4764854e0d194b56a.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/17a90028a9158aa4764854e0d194b56a.jpg"
                                alt="资源狗" />
                                <p>
                                    资源狗
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.yuzhouaomi.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.yuzhouaomi.com/'"
                            tppabs="http://www.yuzhouaomi.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/c29096bf0dafeca028ef9cc504b4edc7.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/c29096bf0dafeca028ef9cc504b4edc7.jpg"
                                alt="宇宙奥秘" />
                                <p>
                                    宇宙奥秘
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.10086yes.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.10086yes.com/'"
                            tppabs="http://www.10086yes.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/9ad68b8918c05fc05ae46e8aeb265a15.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/9ad68b8918c05fc05ae46e8aeb265a15.jpg"
                                alt="移动网址导航" />
                                <p>
                                    移动网址导航
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.neimengseo.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.neimengseo.com/'"
                            tppabs="http://www.neimengseo.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/a485250dc86cc8b5ee67d68886a904e0.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/a485250dc86cc8b5ee67d68886a904e0.jpg"
                                alt="内蒙古seo" />
                                <p>
                                    内蒙古seo
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.pxln.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.pxln.com/'"
                            tppabs="http://www.pxln.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/1355d9af5c187a6548818247d874256d.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/1355d9af5c187a6548818247d874256d.jpg"
                                alt="老栾博客" />
                                <p>
                                    老栾博客
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://mqiqi.net/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://mqiqi.net/'"
                            tppabs="http://mqiqi.net/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/e7a08c18c1f9171426d17c61b18cd906.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/e7a08c18c1f9171426d17c61b18cd906.jpg"
                                alt="麦奇奇网" />
                                <p>
                                    麦奇奇网
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:if(confirm('http://www.ssjjtt.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.ssjjtt.com/'"
                            tppabs="http://www.ssjjtt.com/" target="_blank" rel="nofollow">
                                <img src="e/data/tmp/titlepic/16cf277dd3158167b4285c37cb6e148b.jpg" tppabs="http://www.moyublog.com/e/data/tmp/titlepic/16cf277dd3158167b4285c37cb6e148b.jpg"
                                alt="水景堂" />
                                <p>
                                    水景堂
                                </p>
                            </a>
                        </li>
                    </ul>
                    <a style="float: right;" href="javascript:if(confirm('http://www.moyublog.com/e/extend/doaddlink/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ һࠉԃ, ܲ؅ǺЂ՘, ܲЮĿܴݫֹͣc  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.moyublog.com/e/extend/doaddlink/'"
                    tppabs="http://www.moyublog.com/e/extend/doaddlink/">
                        申请友链
                        <span>
                            &gt;&gt;
                        </span>
                    </a>
                </figure>
            </div>
            <div class="cl">
            </div>
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
		"ROOT"   : "/blog", //当前网站地址
		"APP"    : "/blog/index.php?s=", //当前项目地址
		"PUBLIC" : "/blog/Public", //项目公共目录地址
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