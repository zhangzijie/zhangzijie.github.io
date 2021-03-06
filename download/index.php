<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  
  <title>下载 | 张子杰的博客</title>
  <meta name="author" content="张子杰">
  
  <meta name="description" content="欢迎来到张子杰的Github博客。">
  
  <meta name="keywords" content="张子杰,博客">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <meta property="og:site_name" content="张子杰的博客"/>
  
    <meta property="og:image" content="/img/logo2.png"/>
  
  
  
	<link href="/img/favicon.ico" rel="icon" type="image/x-ico">
  
  <link rel="stylesheet" href="/css/index.css" media="screen" tyep="text/css">
  
  <link rel="stylesheet" href="/css/bootstrap.cerulean.min.css" media="screen" type="text/css">
  
  <link rel="stylesheet" href="/css/font-awesome.css" media="screen" type="text/css">
  <link rel="stylesheet" href="/css/style.css" media="screen" type="text/css">
  <link rel="stylesheet" href="/css/highlight.css" media="screen" type="text/css">
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script src="/js/jquery-2.0.3.min.js"></script>
  <!-- analytics -->
  <!-- _partial/post/google_analytics -->


  <meta name="baidu-site-verification" content="CLJNal3Osm" />
  <meta name="sogou_site_verification" content="vIsarwofbh"/>
  <meta name="msvalidate.01" content="C14C91E65E6A27FD03D26391E29BB2E7" />
  <meta name="shenma-site-verification" content="9371bdccb3b7d9f3b700285b0271b069" />
  <meta name="google-site-verification" content="na-P7V2fYBnMhXbCm0c55oRF5ETB5rxDJnAI10SBVis" />
  <script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?173d7ff2c96464fcd08f3e1baafd4f12";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
	})();
  </script>
</head>

<body>
	<!-- _partial/navigation -->
	<nav id="main-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
		  <button type="button" class="navbar-header navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/">张子杰的博客</a>
		  <div class="collapse navbar-collapse nav-menu">
			<ul class="nav navbar-nav">
			  
			  <li>
				<a href="/" title="Home Page.">
				  <i class="fa fa-home"></i>首页
				</a>
			  </li>
			  
			  <li>
				<a href="/archives/" title="All the articles.">
				  <i class="fa fa-archive"></i>存档
				</a>
			  </li>
			  
			  <li>
				<a href="http://zhangzj.com/download/" title="Data download.">
				  <i class="fa fa-download"></i>下载
				</a>
			  </li>
			  
			  <li>
				<a href="http://mail.zhangzj.com/" title="Mail service.">
				  <i class="fa fa-envelope-o"></i>邮箱
				</a>
			  </li>
			  
			  <li>
				<a href="http://hosting.zhangzj.com/" title="Hosting service.">
				  <i class="fa fa-hdd-o"></i>主机
				</a>
			  </li>
			  
			  <li>
				<a href="http://hy.zhangzj.com/" title="Pages for huiying.">
				  <i class="fa fa-heart"></i>专栏
				</a>
			  </li>
			  
			  <li>
				<a href="/about/" title="About me.">
				  <i class="fa fa-user"></i>关于
				</a>
			  </li>
			  
			</ul>
		  </div>
		</div> <!-- container -->
	</nav>
	
	<div class="container">
		<div class="content">
			<!-- download container -->
            <div>
				<h3>下载列表</h3>
                <ul>
					<?php 
						$xml = simplexml_load_file('downloadList.xml'); //读取 XML文件 
						foreach ($xml->children() as $file) {
							if (null!=$file['id']) {
								echo '<li><a href="downloadList.php?id='.$file['id'].'">'.$file->name.'</a></li>';
							}
						}
					?>
				</ul>
            </div>
        </div>
		
<footer> <!-- _partial/footer -->
<div class="pull-left">
  <p>
  <span class="text-muted">Powered by <a class="text-muted" href="http://hexo.io/" target="_blank">Hexo</a>. Hosted on <a class="text-muted" href="http://pages.github.com/" target="_blank">GitHub Pages</a> and <a class="text-muted" href="http://technetcal.com/" target="_blank">TECHNETCAL</a>. Theme modify from <a class="text-muted" href="http://github.com/yieme/hexo-theme-freewill/">Freewill</a></span>&nbsp;
  <span style="display:none;">
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254021177'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1254021177' type='text/javascript'%3E%3C/script%3E"));</script>
  </span>
  </p>
  <p>
  
  &copy; 2014-2015 by <a class="text-default" href="mailto:zzj@zhangzj.com" target="_blank">张子杰</a>
  &nbsp;
  </p>
</div>
<div class="pull-right">
  <ul class="inline list-inline foot-icon">
	<li><a href="http://zhanzhang.anquan.org/physical/report/?domain=www.zhangzj.com" name="JhJfuNBAoEYAOhT9DbfQJWhPaaoDeqUxzW4ALCGV9emI8OgImk" target="_blank"><img height="47" src="http://zhanzhang.anquan.org/static/common/images/zhanzhang.png" alt="安全联盟站长平台" /></a></li>
    <li><a href="http://webscan.360.cn/index/checkwebsite/url/zhangzj.com" target="_blank"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/295fd5933a27ae2eec30a188d85ad61a" alt="360网站安全检测"/></a></li>
	<li><script type="text/javascript">     var locationUrl = escape(document.location.href);     document.write(unescape("%3Cscript")+" charset='utf-8' src='http://union.rising.com.cn//InfoManage/TrojanInspect.aspx?p1=n2NcF96gOLA9Z58CaYNN8usYQwa-iyk8WU3Ux-UBl-w=&p2=PeqIkh03xcY=&p3=n2NcF96gOLA9Z58CaYNN8nWyBHKenNUM&url="+ locationUrl  + "' type='text/javascript'"+unescape("%3E%3C/script%3E"));</script></li>
  </ul>
</div> </footer>
  </div> <!-- container-narrow -->
  <!-- _partial/after_footer -->
<a id="gotop" href="#">
  <span>▲</span>
</a>
<script src="/js/jquery.imagesloaded.min.js"></script>
<script src="/js/gallery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>


<link rel="stylesheet" href="/fancybox/jquery.fancybox.css" media="screen" type="text/css">
<script src="/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
(function($){
  $('.fancybox').fancybox();
})(jQuery);
</script>


</body>
</html>
