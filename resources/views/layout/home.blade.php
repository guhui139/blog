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
  @if(Session::get('uid'))
  <nav class="topnav" id="topnav">
    <a href="/"><span>首页</span>
      <span class="en">Protal</span>
    </a>
    <a href="/info"><span>我的个人中心</span>
      <span class="en">Personal</span>
    </a>
    <a href="/list/create"><span>写文章</span>
      <span class="en">Issue</span>
    </a>
    <a href="share.html"><span>模板分享</span>
      <span class="en">Share</span>
    </a>
    <a href="/lol"><span style="color:red">退出</span>
      <span class="en">Sign out</span>
    </a>
  </nav>
  @else
  <nav class="topnav" id="topnav">
    <a href="/"><span>首页</span>
      <span class="en">Protal</span>
    </a>
    <a href="/index"><span>登录</span>
      <span class="en">Sign in</span>
    </a>
    <a href="/register/create"><span>注册</span>
      <span class="en">Register</span>
    </a>
  </nav>
  @endif
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
