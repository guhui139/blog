<!DOCTYPE html>
<html>

<head>
  <meta name="_token" content="{{ csrf_token() }}"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <script src="../homes/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!-- Start of Baidu Transcode -->
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta name="applicable-device" content="pc,mobile">
  <meta name="MobileOptimized" content="width"/>
  <meta name="HandheldFriendly" content="true"/>
  <meta name="mobile-agent" content="format=html5;url=http://localhost/">
  <!-- End of Baidu Transcode -->

    <meta name="description"  content="简书是一个优质的创作社区，在这里，你可以任性地创作，一篇短文、一张照片、一首诗、一幅画……我们相信，每个人都是生活中的艺术家，有着无穷的创造力。">
    <meta name="keywords"  content="简书,简书官网,图文编辑软件,简书下载,图文创作,创作软件,原创社区,小说,散文,写作,阅读">

  <meta name="360-site-verification" content="604a14b53c6b871206001285921e81d8" />
  <meta property="wb:webmaster" content="294ec9de89e7fadb" />
  <meta property="qc:admins" content="104102651453316562112116375" />
  <meta property="qc:admins" content="11635613706305617" />
  <meta property="qc:admins" content="1163561616621163056375" />
  <meta name="google-site-verification" content="cV4-qkUJZR6gmFeajx_UyPe47GW9vY6cnCrYtCHYNh4" />
  <meta name="google-site-verification" content="HF7lfF8YEGs1qtCE-kPml8Z469e2RHhGajy6JPVy5XI" />
  <meta http-equiv="mobile-agent" content="format=html5; url=http://localhost/">

  <!-- Apple -->
  <meta name="apple-mobile-web-app-title" content="简书">

  

    <title>@yield("title")</title>

  <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="cKUPNOs4CPPtw1Mi7bZT1scNV6Tv1AbkDQOB+O3gK1saPB5okJv/P8Ty4Gf9/5kHUZjED0Yq9J3f4aklnJhJkg==" />

  <link rel="stylesheet" media="all" href="../homes/css/web-fa63c74b17a87d74afb5.css" />
  
  <link rel="stylesheet" media="all" href="../homes/css/entry-c39de320ab2c85be4ee5.css" />
  <link rel="stylesheet" media="all" href="../homes/css/entry-355d9da965e3c43206d6.css" />
  <link rel="stylesheet" media="all" href="../homes/css/entry-842a8f71e15edbd1cb5d.css" />

  <link href="//cdn2.jianshu.io/assets/favicons/favicon-03411b154a430b85d807b4366489c21122fb983a38f3d7ca926f882e6367b13e.ico" rel="icon">
      <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/57-a6f1f1ee62ace44f6dc2f6a08575abd3c3b163288881c78dd8d75247682a4b27.png" sizes="57x57" />
      <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/72-fb9834bcfce738fd7b9c5e31363e79443e09a81a8e931170b58bc815387c1562.png" sizes="72x72" />
      <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/76-49d88e539ff2489475d603994988d871219141ecaa0b1a7a9a1914f4fe3182d6.png" sizes="76x76" />
      <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/114-24252fe693524ed3a9d0905e49bff3cbd0228f25a320aa09053c2ebb4955de97.png" sizes="114x114" />
      <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/120-1bb7371f5e87f93ce780a5f1a05ff1b176828ee0d1d130e768575918a2e05834.png" sizes="120x120" />
      <link rel="apple-touch-icon-precomposed" href="//cdn2.jianshu.io/assets/apple-touch-icons/152-bf209460fc1c17bfd3e2b84c8e758bc11ca3e570fd411c3bbd84149b97453b99.png" sizes="152x152" />

  <!-- Start of 访问统计 -->
  <script src="../homes/js/jquery.min.js"></script>
  <script src="../homes/js/theme.js"></script>
  

  <!-- End of 访问统计 -->
</head>

  <body lang="zh-CN" class="reader-black-font">
    <!-- 全局顶部导航栏 -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="width-limit">
    <!-- 左上方 Logo -->
    <a class="logo" href="/"><img src="../homes/picture/logo-58fd04f6f0de908401aa561cda6a0688.png" alt="Logo" /></a>
    <!-- 右上角 -->
      <!-- 未登录显示登录/注册/写文章 -->
      <a class="btn write-btn" target="_blank" href="/list/create"><i class="iconfont ic-write"></i>写文章</a>
    @if(Session::get('uid')==null)
        <a class="btn sign-up" href="/register">注册</a>
        <a class="btn log-in" href="/index">登录</a>
    @else
    <!-- 如果用户登录，显示下拉菜单 -->
    <div class="user">
      <div data-hover="dropdown">
        <a class="avatar" href="/info/{{Session::get('info')->id}}"><img src="{{Session::get('info')->img}}" alt="120"></a>
      </div>
      <ul class="dropdown-menu">
        <li>
          <a href="/info/{{Session::get('info')->id}}">
            <i class="iconfont ic-navigation-profile"></i><span>我的主页</span></a>
          </li>
        <li>
          <a rel="nofollow" href="/lol" >
            <i class="iconfont ic-navigation-signout"></i><span>退出</span>
          </a>          
        </li>
      </ul>
    </div>
    @endif
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav">
            <li class="tab active">
              <a href="/">
                <span class="menu-text">首页</span><i class="iconfont ic-navigation-discover menu-icon"></i>
</a>            </li>
            
          <li class="search">
            <form target="_blank" action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
              <input type="text" name="q" id="q" value="" autocomplete="off" placeholder="搜索" class="search-input" />
              <a class="search-btn" href="javascript:void(null)"><i class="iconfont ic-search"></i></a>
</form>          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
@section('content')

@show
@section('js')
            
@show  

<footer class="container">
  <div class="row">
    <div class="col-xs-17 main">
<a target="_blank" href="http://www.jianshu.com/c/jppzD2">关于简书</a><em> · </em><a target="_blank" href="http://www.jianshu.com/contact">联系我们</a><em> · </em><a target="_blank" href="http://www.jianshu.com/c/bfeec2e13990">加入我们</a><em> · </em><a target="_blank" href="http://www.jianshu.com/p/fc1c113e5b6b">简书出版</a><em> · </em><a target="_blank" href="http://www.jianshu.com/press">品牌与徽标</a><em> · </em><a target="_blank" href="http://www.jianshu.com/faqs">帮助中心</a><em> · </em><a target="_blank" href="http://www.jianshu.com/p/cabc8fa39830">合作伙伴</a>      <div class="icp">
        ©2012-2017 上海佰集信息科技有限公司 / 简书 / 沪ICP备11018329号-5 /  <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010402002252">沪公网安备31010402002252号 / </a>
        <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010402002252">
          <img src="../homes/picture/smrz-557fa318122c99a66523209bf9753a27.png" alt="Smrz" />
</a>        <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010402002252">沪公网安备31010402002252号 / </a>
        <a target="_blank" href="http://www.shjbzx.cn/">
          <img src="../homes/picture/wxb-a216456895eb66c17497dbd3da443cf8.png" alt="Wxb" />
</a>        举报电话：021-34770013 / 
        <a target="_blank" href="http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&amp;serial=9031000020171107081457000002158769-SAIC_SHOW_310000-20171115131223587837&amp;signData=MEQCIADWZ5aTcBeER5SOVp0ly+ElvKnwtjczum6Gi6wZ7/wWAiB9MAPM22hp947ZaBobux5PDkd0lfqoCOkVV7zjCYME6g==">
          <img src="../homes/picture/zggsrz-5695587dccf490ca3e651f4228f7479e.png" alt="Zggsrz" />
</a>      </div>
    </div>
  </div>
</footer>
</body>
</html>
