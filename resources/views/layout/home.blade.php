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
    <link rel="stylesheet" href="../homes/css/amazeui.min.css" />
    <link rel="stylesheet" href="../homes/css/admin.css">
    <link rel="stylesheet" href="../homes/css/app.css">
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
  <script src="/homes/js/silder.js"></script>
  
  

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
      @if(Session::get('uid')==null)
      <a class="btn write-btn" target="_blank" href="/index"><i class="iconfont ic-write"></i>写文章</a>
    
        <a class="btn sign-up" href="/register">注册</a>
        <a class="btn log-in" href="/index">登录</a>
    @else
    <!-- 如果用户登录，显示下拉菜单 -->
      <a class="btn write-btn" target="_blank" href="/list/create"><i class="iconfont ic-write"></i>写文章</a>
    <div class="user">
      <div data-hover="dropdown">
        <a class="avatar" href="/info/{{Session::get('info')->id}}"><img src="{{Session::get('info')->img}}" alt="120"></a>
      </div>
      <ul class="dropdown-menu">
        <a href="/home/user/create">
                <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511424015098" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6156" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M820.225293 864.365899H201.399596c-12.792242 0-25.584485-6.396121-33.578667-15.99095-7.995475-11.192889-11.192889-23.985131-7.995474-36.777373C191.806061 648.497131 324.525253 526.969535 484.428283 514.177293c6.396121-1.598061 11.192889-1.598061 19.188363-1.598061v15.99095c-6.396121 0-11.192889 0-17.58901 1.59806-153.508202 11.192889-281.430626 127.922424-311.811878 284.628041-1.599354 7.995475 0 17.58901 6.396121 23.985131 4.796768 6.396121 12.792242 9.593535 20.786424 9.593535h618.825697c7.995475 0 15.989657-3.197414 20.787717-9.593535 4.798061-6.396121 7.995475-14.391596 6.396121-23.985131-19.188364-102.337939-81.550222-190.284283-169.496565-239.855192-9.594828-6.396121-20.787717-11.192889-30.382546-15.99095l6.396121-14.390303c11.192889 4.796768 22.385778 11.192889 31.980607 15.989657 92.743111 52.768323 156.704323 143.913374 177.49204 251.048081 3.198707 12.792242 0 25.584485-9.593535 36.777373-7.992889 9.594828-20.786424 15.990949-33.578667 15.99095zM508.414707 528.568889h-3.198707v-15.99095h4.798061l-1.599354 15.99095z" p-id="6157"></path><path d="M514.810828 528.568889c-100.738586 0-183.888162-83.149576-183.888161-183.888162s83.149576-183.888162 183.888161-183.888161S698.69899 243.942141 698.69899 344.680727s-83.149576 183.888162-183.888162 183.888162z m0-351.786667c-92.743111 0-167.898505 75.155394-167.898505 167.898505s75.154101 167.898505 167.898505 167.898505 167.898505-75.154101 167.898505-167.898505S607.555232 176.782222 514.810828 176.782222z" p-id="6158"></path></svg><span>我的基本信息</span>
              </a>          
            </li>
            <li>
              <a href="/home/user">
                <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511423963143" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5294" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M528.671193 89.161692l186.497555 152.72845 0.127913-77.003791 133.285632 0.127913 0.340761 183.982268 110.432135 116.997668-29.67588 31.722492L781.640672 336.716858l25.241894-10.915607 0.959861-119.919207-51.741431 0.064468-0.38374 107.575064-38.885636-15.036461L527.411503 144.676054l-405.121807 353.040638-26.605961-31.722492L528.671193 89.161692zM204.666868 901.410987l226.662323 0 0.340761-230.755548 190.334953-0.340761 0.682545 231.096309 226.15067 0L848.83812 545.532721l-40.932248 0 0 315.456648-144.797827 0 0-232.290507-272.711102 0.511653 0 231.778854-144.797827 0L245.599116 545.532721l-40.932248 0L204.666868 901.410987 204.666868 901.410987z" p-id="5295"></path></svg><span>我的主页</span>
              </a>          
            </li>
            <li>
              <a href="/home/user/account">
              <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511422090968" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3949" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M872.554667 306.304c-22.613333 8.128-45.696 9.941333-69.162667 4.373333a119.722667 119.722667 0 0 1-85.504-158.144c1.749333-4.842667 0.853333-6.954667-3.605333-8.96-17.92-8.106667-35.541333-16.917333-53.674667-24.533333-11.925333-4.992-24.533333-8.384-36.501333-12.373333-23.146667 47.658667-59.456 74.88-112.064 74.88-52.821333 0-89.258667-27.306667-111.978667-74.538667a411.733333 411.733333 0 0 0-95.530667 39.573333c17.216 49.493333 10.922667 94.634667-26.538666 131.925334-37.376 37.205333-82.496 43.712-131.776 26.282666A413.290667 413.290667 0 0 0 106.666667 400.298667c46.933333 22.656 74.197333 58.666667 74.517333 110.997333 0.32 53.162667-26.986667 89.770667-74.538667 112.768a410.154667 410.154667 0 0 0 39.637334 95.530667c47.808-16.789333 91.669333-11.370667 128.64 23.253333 39.957333 37.44 47.274667 83.626667 29.653333 134.933333a404.949333 404.949333 0 0 0 95.530667 39.466667c23.04-47.36 59.349333-74.474667 111.978666-74.453333 52.885333 0.064 89.216 27.541333 111.893334 74.538666a411.584 411.584 0 0 0 95.488-39.616c-17.386667-49.493333-10.816-94.4 26.24-131.626666 37.290667-37.418667 82.432-43.776 132.053333-26.538667a407.637333 407.637333 0 0 0 39.509333-95.509333c-47.786667-23.210667-74.986667-59.946667-74.517333-113.066667 0.448-52.053333 27.562667-87.957333 74.56-110.656a420.394667 420.394667 0 0 0-38.016-92.970667c-2.048-3.712-4.309333-1.92-6.762667-1.066666z m85.952 82.794667a42.666667 42.666667 0 0 1-22.613334 49.642666c-34.602667 16.725333-50.176 39.146667-50.453333 72.618667-0.298667 34.282667 15.253333 57.194667 50.496 74.304a42.666667 42.666667 0 0 1 22.549333 49.536 450.304 450.304 0 0 1-43.669333 105.472 42.666667 42.666667 0 0 1-51.050667 19.178667c-36.650667-12.736-63.850667-7.68-87.808 16.362666-23.914667 24.021333-28.949333 51.093333-16.213333 87.381334a42.666667 42.666667 0 0 1-19.072 51.178666 454.229333 454.229333 0 0 1-105.344 43.690667 42.666667 42.666667 0 0 1-49.770667-22.592c-16.725333-34.688-39.509333-50.368-73.493333-50.389333-33.92-0.021333-56.597333 15.509333-73.578667 50.432a42.666667 42.666667 0 0 1-49.322666 22.570666 447.338667 447.338667 0 0 1-105.6-43.562666 42.666667 42.666667 0 0 1-19.328-50.986667c13.034667-37.973333 7.381333-65.728-18.474667-89.941333-23.594667-22.101333-50.090667-26.517333-85.333333-14.144a42.666667 42.666667 0 0 1-51.157334-19.050667 452.821333 452.821333 0 0 1-43.733333-105.450667 42.666667 42.666667 0 0 1 22.549333-49.706666c35.072-16.938667 50.666667-39.808 50.453334-74.069334-0.213333-33.642667-15.786667-56.149333-50.389334-72.853333A42.666667 42.666667 0 0 1 65.493333 389.12a455.808 455.808 0 0 1 43.541334-105.344 42.666667 42.666667 0 0 1 51.392-19.242667c36.096 12.778667 63.317333 7.722667 87.466666-16.298666 24-23.893333 29.034667-51.072 16.32-87.68a42.666667 42.666667 0 0 1 19.178667-51.050667 454.4 454.4 0 0 1 105.386667-43.669333 42.666667 42.666667 0 0 1 49.706666 22.656c16.725333 34.730667 39.509333 50.389333 73.536 50.368 33.898667 0 56.576-15.616 73.664-50.837334a42.666667 42.666667 0 0 1 51.882667-21.845333c2.517333 0.832 4.992 1.621333 9.28 2.965333l7.530667 2.346667c8.96 2.88 15.786667 5.290667 22.698666 8.192 10.154667 4.245333 18.090667 7.872 35.029334 15.829333 10.069333 4.736 14.4 6.741333 19.733333 9.152 25.024 11.306667 35.349333 36.821333 26.154667 62.336-16 44.352 9.344 91.221333 55.253333 102.144 14.805333 3.52 29.418667 2.538667 44.864-3.029333a33.28 33.28 0 0 1 4.48-1.621333c5.269333-1.621333 10.88-2.453333 17.322667-1.941334 16.853333 1.344 29.525333 11.093333 36.736 24.170667a462.890667 462.890667 0 0 1 41.813333 102.357333zM522.666667 320a202.666667 202.666667 0 1 0 166.4 86.954667 21.333333 21.333333 0 0 0-35.008 24.384 160 160 0 1 1-69.184-56.128 21.333333 21.333333 0 0 0 16.597333-39.317334A202.090667 202.090667 0 0 0 522.666667 320z" fill="#3D3D3D" p-id="3950"></path></svg>
              <span>账号管理</span></a>
            </li>
            <li>
              <a href="/lol">
                <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511423914990" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4610" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M561.022507 877.775684 102.378715 877.775684 102.378715 143.94439l458.643792 0 0 183.457312 73.383334 0L634.405841 154.950048c0-46.594201-37.791721-84.387969-84.409458-84.387969L113.40484 70.562079c-46.616714 0-84.409458 37.793768-84.409458 84.387969l0 711.816908c0 46.599318 37.791721 84.392062 84.409458 84.392062l436.591543 0c46.616714 0 84.409458-37.793768 84.409458-84.392062L634.405841 694.317349l-73.383334 0L561.022507 877.775684z" p-id="4611"></path><path d="M949.127755 469.321992 790.161231 310.37798 745.396701 355.140463 864.443028 474.16837 505.985006 474.16837 505.985006 547.551704 870.88167 547.551704 745.396701 673.016207 790.161231 717.762317 960.39231 547.551704 993.871819 514.071172Z" p-id="4612"></path></svg><span>退出</span>
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
            </a>
          </li>
            
          <li class="search">
            <form target="_blank" action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
              <input type="text" name="q" id="q" value="" autocomplete="off" placeholder="搜索" class="search-input" />
              <a class="search-btn" href="javascript:void(null)"><i class="iconfont ic-search"></i></a>
            </form>   
          </li>
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
