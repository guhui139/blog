@extends('layout.home')

@section('title','wdyBlog')

@section('content')
    
<div class="container index">
  <div class="row">
    <!-- Banner -->
        <div id="indexCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">

        <ol class="carousel-indicators">

            <li class="active" data-target="#indexCarousel" data-slide-to="0"></li>

            <li data-target="#indexCarousel" data-slide-to="1"></li>

            <li data-target="#indexCarousel" data-slide-to="2"></li>

            <li data-target="#indexCarousel" data-slide-to="3"></li>      
            <li data-target="#indexCarousel" data-slide-to="4"></li>      
            <li data-target="#indexCarousel" data-slide-to="5"></li>      
            <li data-target="#indexCarousel" data-slide-to="6"></li>      

         </ol>
          <div class="carousel-inner">
              <div class="item active">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/8a519448b9d7?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/aad0916d50f59176e2270fb468642e03f760aec4.jpg" alt="540" /></a>
              </div>
              <div class="item">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/70bef6809d4d?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/a83382c5357faa5fd5c0e48f03fa078dcb7c5405.jpg" alt="540" /></a>
              </div>
              <div class="item">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/e626c105fe8b?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/66b3ebc30ff4b695069b811049675b36a2b4070e.jpg" alt="540" /></a>
              </div>
              <div class="item">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/b3ad7d9c9c10?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/c080cdcb20d2a2a4d3799f7b1eda61e5d4f33f6c.png" alt="540" /></a>
              </div> 
              <div class="item">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/835b4f118320?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/f150361d64193f9a80b07ee2538e80f1271f6ffc.jpg" alt="540" /></a>
              </div>
              <div class="item">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/3d1dbb6e8317?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/08eaa219e4ff7614cb1937f63a6e0f831d5cafd7.jpg" alt="540" /></a>
              </div>
              <div class="item">
                <div class="carousel-caption"></div>
                <a target="_blank" href="http://www.jianshu.com/p/75270141c0f7?utm_medium=index-banner&amp;utm_source=desktop"><img src="../homes/picture/af1af14d3a9789609d6dee9906c0c3f127a6e28a.jpg" alt="540" /></a>
              </div>
            <a class="left carousel-control" href="#indexCarousel" role="button" data-slide="prev"><i class="iconfont ic-previous-s"></i></a>
            <a class="right carousel-control" href="#indexCarousel" role="button" data-slide="next"><i class="iconfont ic-next-s"></i></a>
          </div>
        </div>
    <!-- Banner -->

    <div class="col-xs-16 main">
        <div class="recommend-collection">
          @foreach($type as $k=>$v)
            <a class="collection" target="_blank" href='{{url("/type/$v->id")}}'>
              <img src="{{$v->img}}" alt="64" />
              <div class="name">{{$v->name}}</div>
            </a>
          @endforeach
            <a class="more-hot-collection" target="_blank" href="{{url('/type')}}">
              更多热门专题 <i class="iconfont ic-link"></i>
            </a>        
          </div>
      <div class="split-line"></div>
      <div id="list-container">
        <!-- 文章列表模块 -->
        <ul class="note-list" infinite-scroll-url="/">
          
@foreach($cont as $key=>$val)
<li id="note-20127267" data-note-id="20127267" class="have-img">
    <a class="wrap-img" href='{{url("/list/$val->id")}}' target="_blank">
      <img data-echo="//upload-images.jianshu.io/upload_images/2631784-d79d1d0126029f38.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/300/h/240" class="img-blur-done" src="..{{$val->cimg}}" alt="120" />
    </a>
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href='{{url("/info/$val->info_id")}}'>
        <img src="{{$val->img}}" alt="64" />
</a>      <div class="info">
        <a class="nickname" target="_blank" href='{{url("/info/$val->info_id")}}'>{{$val->uname}}</a>
        <span class="time" data-shared-at="">{{$val->time}}</span>
      </div>
    </div>
    <a class="title" target="_blank" href='{{url("/list/$val->id")}}'>{{$val->title}}</a>
    <p class="abstract">
      {{$val->abstract}}
    </p>
    <div class="meta">
      <a class="collection-tag" target="_blank" href='{{url("/type/$val->type_id")}}'>{{$v->name}}</a>
      <a target="_blank" href='{{url("/list/$val->id")}}'>
          <i class="iconfont ic-list-comments"></i> 
          {{$val->review}}
      </a>      
      <span><i class="iconfont ic-list-like"></i>{{$val->zan}}</span>
    </div>
  </div>
</li>
@endforeach
        </ul>
        <!-- 文章列表模块 -->
        {!! $cont->render() !!}
      </div>
    </div>
    <div class="col-xs-7 col-xs-offset-1 aside">
      <div class="board">
          <a target="_blank" href="/recommendations/notes?category_id=56&amp;utm_medium=index-banner-s&amp;utm_source=desktop">
            <img src="../homes/picture/banner-s-1-b8ff9ec59f72ea88ecc8c42956f41f78.png" alt="Banner s 1" />
</a>        <a target="_blank" href="/trending/weekly?utm_medium=index-banner-s&amp;utm_source=desktop"><img src="../homes/picture/banner-s-3-7123fd94750759acf7eca05b871e9d17.png" alt="Banner s 3" /></a>
        <a target="_blank" href="/trending/monthly?utm_medium=index-banner-s&amp;utm_source=desktop"><img src="../homes/picture/banner-s-4-b70da70d679593510ac93a172dfbaeaa.png" alt="Banner s 4" /></a>
        <a utm_medium="index-banner-s" target="_blank" href="/publications"><img src="../homes/picture/banner-s-5-291e00e9156f30791fe24e3de9c39171.png" alt="Banner s 5" /></a>
        <a target="_blank" href="/c/e048f1a72e3d?utm_medium=index-banner-s&amp;utm_source=desktop"><img src="../homes/picture/banner-s-6-c4d6335bfd688f2ca1115b42b04c28a7.png" alt="Banner s 6" /></a>
      </div>

      <!-- 首页右侧 App 下载提示 -->
      <a class="col-xs-8 download" data-toggle="popover" data-placement="top" data-html="true" data-trigger="hover" data-content="&lt;img src=&quot;//cdn2.jianshu.io/assets/web/download-index-side-qrcode-0a0cf38b7413c60bb8d2627fd9eebd00.png&quot; alt=&quot;Download index side qrcode&quot; /&gt;" href="/apps?utm_medium=desktop&amp;utm_source=index-aside-click">
        <img class="qrcode" src="../homes/picture/download-index-side-qrcode-0a0cf38b7413c60bb8d2627fd9eebd00.png" alt="Download index side qrcode" />
        <div class="info">
          <div class="title">下载简书手机App<i class="iconfont ic-link"></i></div>
          <div class="description">随时随地发现和创作内容</div>
        </div>
</a>
      <!-- 简书日报 -->
        <div class="jianshu-daily">
          <div class="title">
            简书日报
            <a target="_blank" href="/c/80e7d5d15e71?utm_medium=index-jianshu-daily-page&amp;utm_source=desktop">查看往期</a>
          </div>
            <a target="_blank" class="note" href="/p/d25415e22038?utm_medium=index-jianshu-daily-note&amp;utm_source=desktop">
                <img src="../homes/picture/610871-9b98481c0cb106c1.png" alt="96" />
              <div class="note-title">简书学院003：古代的人穿不穿内裤</div>
</a>            <a target="_blank" class="note" href="/p/4bf9168bdb19?utm_medium=index-jianshu-daily-note&amp;utm_source=desktop">
                <img src="../homes/picture/5596670-e14771cc34b3b852.jpg" alt="96" />
              <div class="note-title">简小妹005—“维多利亚的秘密”到底是个啥秘密?</div>
</a>        </div>

      <!-- 推荐作者 -->
      <div data-vcomp="recommended-author-list"></div>
    </div>
  </div>
</div>
<div data-vcomp="side-tool"></div>

    
  </body>
</html>
@endsection
@section('js')
<script type="text/javascript">
 
</script>
@endsection