<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="寻梦主题的个人博客模板，优雅、稳重、大气,低调。" /> 

<link href="../homes/css/base.css" rel="stylesheet">
<link href="../homes/css/index.css" rel="stylesheet">  
<link rel="icon" type="image/png" href="../homes/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="../homes/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<script src="../homes/js/echarts.min.js"></script>
<link rel="stylesheet" href="../homes/css/amazeui.min.css" />
<link rel="stylesheet" href="../homes/css/amazeui.datatables.min.css" />
<link rel="stylesheet" href="../homes/css/app.css">
<script src="../homes/js/jquery.min.js"></script>
<script src="../homes/js/theme.js"></script>



<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.html"><span>首页</span>
    <span class="en">Protal</span></a>
    <a href="about.html"><span>关于我</span>
      <span class="en">About</span>
    </a>
    <a href="newlist.html"><span>慢生活</span>
      <span class="en">Life</span>
    </a>
    <a href="moodlist.html"><span>碎言碎语</span>
      <span class="en">Doing</span>
    </a>
    <a href="share.html"><span>模板分享</span>
      <span class="en">Share</span>
    </a>
    <a href="knowledge.html"><span>学无止境</span>
      <span class="en">Learn</span>
    </a>
    <a href="book.html"><span>留言版</span>
      <span class="en">Gustbook</span>
    </a>
  </nav>
</header>
@section('content')

@show
<footer>
  <p>Design by 兄弟连 <a href="http://www.itxdl.cn/" target="_blank">http:///www.itxdl.cn</a> <a href="/">网站统计</a></p>
</footer>
@section('js')
            
@show  
<script src="../homes/js/silder.js"></script>
</body>
</html>
