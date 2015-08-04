<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	
<title>李炫进博客</title>
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
	
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h2>源自相同起点，演绎不同精彩！</h2>
            <p class="lead"></p>
        </div>
    </header>


    <div class="span9">
        <!-- Contents
        ================================================== -->
        <section id="contents">
            <?php $category=D('Category')->getChildrenId($category['id']);$__LIST__ = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1,10)->lists($category, '`level` DESC,`id` DESC', 1,true); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="">
                    <h3><a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a></h3>
                </div>
                <div>
                    <p class="lead"><?php echo ($list["description"]); ?></p>
                </div>
                <div>
                    <span><a href="<?php echo U('Article/detail?id='.$list['id']);?>">查看全文</a></span>
                    <span class="pull-right">
                        <span class="author"><?php echo (get_username($list["uid"])); ?></span>
                        <span>于 <?php echo (date('Y-m-d H:i',$list["create_time"])); ?></span> 发表在 <span>
                        <a href="<?php echo U('Article/lists?category='.get_category_name($list['category_id']));?>"><?php echo (get_category_title($list["category_id"])); ?></a></span> 
                        <span>阅读( <?php echo ($list["view"]); ?> )</span>&nbsp;&nbsp;
                    </span>
                </div>
                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>

        </section>
    </div>
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