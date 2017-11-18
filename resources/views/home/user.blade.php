@extends('layout.home')

@section('title','wdyBlog')


@section('content')

<div class="container person">
  <div class="row">
    <div class="col-xs-16 main">
      <div class="main-top">
  <a class="avatar" href="/u/082b547b6aed">
    <img src="../homes/picture/3-9a2bcc21a5d89e21dafc73b39dc5f582.jpg" alt="240" />
</a>
    <div class="follow-button" props-data-user-id="8917203" props-data-state="0"></div>
    <a class="btn btn-hollow" href="/notifications#/chats/new?mail_to=8917203">发简信</a>

  <div class="title">
    <a class="name" href="/u/082b547b6aed">王东彦</a>
  </div>
  <div class="info">
    <ul>
      <li>
        <div class="meta-block">
          <a href="/users/082b547b6aed/following">
            <p>18</p>
            关注 <i class="iconfont ic-arrow"></i>
</a>        </div>
      </li>
      <li>
        <div class="meta-block">
          <a href="/users/082b547b6aed/followers">
            <p>1</p>
            粉丝 <i class="iconfont ic-arrow"></i>
</a>        </div>
      </li>
      <li>
        <div class="meta-block">
          <a href="/u/082b547b6aed">
            <p>1</p>
            文章 <i class="iconfont ic-arrow"></i>
</a>        </div>
      </li>
      <li>
        <div class="meta-block">
          <p>8</p>
          <div>字数</div>
        </div>
      </li>
      <li>
        <div class="meta-block">
          <p>1</p>
          <div>收获喜欢</div>
        </div>
      </li>
    </ul>
  </div>
</div>

      <ul class="trigger-menu" data-pjax-container="#list-container"><li class="active"><a href="/u/082b547b6aed?order_by=shared_at"><i class="iconfont ic-articles"></i> 文章</a></li><li class=""><a href="/users/082b547b6aed/timeline"><i class="iconfont ic-feed"></i> 动态</a></li><li class=""><a href="/u/082b547b6aed?order_by=commented_at"><i class="iconfont ic-latestcomments"></i> 最新评论</a></li><li class=""><a href="/u/082b547b6aed?order_by=top"><i class="iconfont ic-hot"></i> 热门</a></li></ul>

      <div id="list-container">
        <!-- 文章列表模块 -->
<ul class="note-list" infinite-scroll-url="/u/082b547b6aed?order_by=shared_at">
    

<li id="note-19437105" data-note-id="19437105" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/082b547b6aed">
        <img src="../homes/picture/3-9a2bcc21a5d89e21dafc73b39dc5f582.jpg" alt="64" />
</a>      <div class="info">
        <a class="nickname" target="_blank" href="/u/082b547b6aed">王东彦</a>
        <span class="time" data-shared-at="2017-11-09T20:37:12+08:00"></span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/4dbdf327e818">浑身脑袋疼,项目逼人</a>
    <p class="abstract">
      天府广场发过火车
    </p>
    <div class="meta">
      <a target="_blank" href="/p/4dbdf327e818">
        <i class="iconfont ic-list-read"></i> 1
</a>        <a target="_blank" href="/p/4dbdf327e818#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 1</span>
    </div>
  </div>
</li>

</ul>

      </div>
    </div>
    
<div class="col-xs-7 col-xs-offset-1 aside">
      <div class="title">暂无个人介绍</div>
  <div class="description">
    <div class="js-intro"></div>
    
    
  </div>
  <div class="publication-list"></div>
  <ul class="list user-dynamic">
    <li>
      <a href="/users/082b547b6aed/subscriptions">
        <i class="iconfont ic-collection"></i> <span>他关注的专题/文集</span>
</a>    </li>
    <li>
      <a href="/users/082b547b6aed/liked_notes">
        <i class="iconfont ic-like"></i> <span>他喜欢的文章</span>
</a>    </li>
  </ul>
  <!-- 专题和文集 -->
  <div class="js-collection-and-notebook-container"></div>
</div>

  </div>
</div>
<div data-vcomp="side-tool"></div>

    <script type="application/json" data-name="page-data">{"user_signed_in":false,"locale":"zh-CN","os":"other","read_mode":"day","read_font":"font2","user":{"slug":"082b547b6aed","gender":0},"has_collections":false}</script>
    
    <script src="../homes/js/babel-polyfill-e27dec85eeb94683dfc7.js" crossorigin="anonymous"></script>
    <script src="../homes/js/web-base-6163a01ec4cfabefb58f.js" crossorigin="anonymous"></script>
<script src="../homes/js/web-fd05b96136ea9da9d50b.js" crossorigin="anonymous"></script>
    
    <script src="../homes/js/entry-8b407974edc172eaf86c.js" crossorigin="anonymous"></script>
    <script>
  (function(){
      var bp = document.createElement('script');
      var curProtocol = window.location.protocol.split(':')[0];
      if (curProtocol === 'https') {
          bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
      }
      else {
          bp.src = 'http://push.zhanzhang.baidu.com/push.js';
      }
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(bp, s);
  })();
</script>
@endsection

@section('js')


@endsection
