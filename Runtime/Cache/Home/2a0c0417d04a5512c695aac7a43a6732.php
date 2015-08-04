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

    <link href="/ot/Public/Home/css/textnew.css" rel="stylesheet" type="text/css" />
    <script type="/ot/Public/Home/js/ajax.js"></script>
    <script>
	    $(document).ready(function(){
	    	$(".mulu").click(function(){
	    		$(".main_nav,.mulu").toggleClass("open")
	    	})
		  	$(".sbtn").click(function(){  
		    	$(".site-search").toggleClass("open");
				$(".sbtn").toggleClass("fa-remove");
		  	});
		  	$(".menubtn").click(function(){
		    	$(".left").toggleClass("close");
				$(".fenge").toggleClass("close");
				$(".menujt").toggleClass("fa-caret-right");
		  	}); 
		});
	</script>

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
	

    <script language="javascript">
        function setfont(size) {
            var obj;
            obj = document.getElementById("textinfo");
            obj.className = size;
        }
    </script>
    <div class="titlepic">
        
        <div class="pbg">
        </div>
        <div class="tit2">
            <div class="h1">
                <h2>
                    <?php echo ($info["title"]); ?>
                </h2>
                <p class="author">
                    作者/
                    <span>
                        <?php echo (get_username($info["uid"])); ?>
                    </span>
                    <time>
                        <?php echo (date('Y-m-d H:i',$info["create_time"])); ?>
                    </time>
                </p>
            </div>
        </div>
    </div>
    <div class="text clear">
        <div class="center">
            <ul class="main_nav">
            	<?php $_result=getMenuList();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('Home/Index/index');?>">
                        <i class="fa fa-home">
                        </i>
                        首页
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="textmain">
                <div style="display:none">
                   
                </div>
                <div class="tit">
                    <div class="h1">
                        <h1>
                            <a href="291.html">
                                <?php echo ($info["title"]); ?>
                            </a>
                        </h1>
                        <p class="author">
                            作者/
                            <span>
                                <?php echo (get_username($info["uid"])); ?>
                            </span>
                            <time>
                                <?php echo (date('Y-m-d H:i',$info["create_time"])); ?>
                            </time>
                        </p>
                        <i class="fa fa-search sbtn">
                        </i>
                    </div>
                </div>
                <div id="textinfo">
                    <?php echo ($info["content"]); ?>
                    <div class="fava clear"> 
                        <a href="JavaScript:void(0);" class="diggit">
                            <i class="fa fa-thumbs-o-up"></i>感觉不错，赞哦！ <em>(<span id="diggnum">
                            <script type="text/javascript" src="../e/public/ViewClick/-classid=3&id=291&down=5"></script></span>)</em>
                        </a> 
                    </div>
                    <div class="bdsharebuttonbox">
                        <a href="#" class="bds_more" data-cmd="more"> </a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <script>
                    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                    <div class="fava clear">
                        <?php echo hook('documentDetailAfter',$info);?>
                    </div>
                    <div id="pl">
                        <!--Duoshuo Comment BEGIN-->
                        <div class="ds-thread" data-category="3" data-thread-key="3-291" data-title="新浪微博是怎样花样作死的？"
                        data-author-key="" data-url="http://www.moyublog.com/essay/291.html">
                        </div>
                        <!--Duoshuo Comment END-->
                    </div>
                </div>
            </div>
        </div>
        <div class="left">
            <figure class="about">
                <div class="aboutme clear">
                    <img src="/ot/Public/Home/images/me.jpg">
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
                            <a href="../zt/weixin/index.htm" title="添加微信，来聊天" target="_blank" rel="nofollow">
                                <i class="fa fa-wechat">
                                </i>
                            </a>
                        </dd>
                        <dd class="timeline">
                            <a href="../zt/timeline/index.htm" title="墨鱼部落格，始于2007年11月02日" target="_blank" rel="nofollow">
                                <i class="fa fa-clock-o">
                                </i>
                            </a>
                        </dd>
                        <dd class="phone">
                            <a href="http://weibo.com/lixuanjin/" title="手机联系" target="_blank"> 
                                <i class="fa fa-mobile">
                                </i>
                            </a>
                        </dd>
                    </dl>
                </div>
                <div class="qrcode">
                    <img src="/ot/Public/Home/images/weixinapi.png"  alt="用手机阅读《新浪微博是怎样花样作死的？》" />
                    <p>
                        扫描用手机阅读此文
                        <br />
                        支持Android/iPhone
                    </p>
                </div>
            </figure>
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-bars mulu">
                        </i>
                    </a>
                    <span>
                        目录
                    </span>
                </li>
                <li>
                    <a href="../e/member/fava/add/-classid=3&id=291.htm">
                        <i class="fa fa-bookmark-o">
                        </i>
                    </a>
                    <span>
                        加入收藏( 0)
                    </span>
                </li>
                <li>
                    <a href="#pl">
                        <i class="fa fa-edit">
                        </i>
                    </a>
                    <span>
                        写评论
                    </span>
                </li>
                <li>
                    <a href="291.html#fx">
                        <i class="fa fa-share-alt">
                        </i>
                    </a>
                    <span>
                        分享此文
                    </span>
                </li>
                <li class="fontsize">
                    <a href="javascript:;" onclick="javascript:setfont('big')">
                        字
                        <em>
                            [大]
                        </em>
                    </a>
                    <span>
                        字体放大
                    </span>
                </li>
                <li class="fontsize">
                    <a href="javascript:;" onclick="javascript:setfont('middle');">
                        字
                        <em>
                            [中]
                        </em>
                    </a>
                    <span>
                        字体适中
                    </span>
                </li>
                <li class="fontsize">
                    <a href="javascript:;" onclick="javascript:setfont 
                    ('small');">
                        字
                        <em>
                            [小]
                        </em>
                    </a>
                    <span>
                        字体缩小
                    </span>
                </li>
                <li class="fontsize zt">
                    <a href="javascript:;" onclick="javascript:setfont 
                    ('songti');">
                        宋体
                    </a>
                    <span>
                        使用“宋体”
                    </span>
                </li>
                <li class="fontsize zt">
                    <a href="javascript:;" onclick="javascript:setfont 
                    ('yahei');">
                        雅黑
                    </a>
                    <span>
                        使用“雅黑体”
                    </span>
                </li>
            </ul>
        </div>
        <div class="fenge">
            <div class="menubtn">
                <i class="fa fa-caret-left menujt">
                </i>
            </div>
        </div>
        <div class="outread">
            <a href="<?php echo U('Article/lists',array('category'=>$category['name']));?>">
                <i class="fa fa-chevron-circle-left">
                </i>
                退出阅读
            </a>
            <em>
                |
            </em>
            <a href="<?php echo U('Home/Index/index');?>">
                首页
            </a>
        </div>
        <div class="site-search">
            <div class="top clearfix">
                <form method="post" class="site-search-form" action="http://www.moyublog.com/e/search/index.php" name="searchform">
                    <input class="search-input" name="keyboard" id="keyboard" type="text"
                    placeholder="输入关键词搜索..." />
                    <input type="hidden" name="show" value="title,smalltext" />
                    <input type="hidden" name="tempid" value="1" />
                    <input type="hidden" name="classid" value="1,2,3" />
                    <button class="search-btn" type="submit">
                        <i class="fa fa-search">
                        </i>
                    </button>
                </form>
            </div>
        </div>
        <div class="yincang">
            <ul>
                <li>
                    <a href="291.html">
                        <span class="text">
                            新浪微博是怎样花样作死的？
                        </span>
                        <span class="muted">
                            2015-06-23
                        </span>
                        <span class="muted">
                            109浏览
                        </span>
                    </a>
                </li>
                
            </ul>
        </div>


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