@extends('layout.home')

@section('title',$tp->name)

@section('content')
    
    

<div class="container collection">
  <div class="row">
    <div class="col-xs-24 col-sm-16 main">
      <!-- 专题头部模块 -->
      <div class="main-top">
        <a class="avatar-collection" href="/c/8c92f845cd4d">
          <img src="{{$tp->img}}" alt="240" />
</a>        <div class="follow-button" props-data-following="false" props-data-collection-id="283250"></div>
          <a class="btn btn-hollow" href="/list/create">投稿</a>
        <div class="title">
          <a class="name" href="/c/8c92f845cd4d">{{$tp->name}}</a>
        </div>
        <div class="info">
          收录了{{count($res)}}篇文章
        </div>
      </div>
      <div id="list-container">
        <!-- 文章列表模块 -->
  <ul class="note-list" infinite-scroll-url="/c/8c92f845cd4d?order_by=added_at">
    @foreach($cont as $k=>$v)
    <li id="note-20045483" data-note-id="20045483" class="have-img">
        <a class="wrap-img" href="/list/{{$v->id}}" target="_blank">
            <img class="img-blur-done" src="{{$v->cimg}}" alt="作者并没有上传图片" />
        </a>
        <div class="content">
            <div class="author">
                <a class="avatar" target="_blank" href="/info/{{$v->user_id}}">
                    <img src="{{$v->img}}" alt="64" />
                </a>
                <div class="info">
                    <a class="nickname" target="_blank" href="/info/{{$v->user_id}}">
                        {{$v->uname}}
                    </a>
                    <span class="time" data-shared-at="{{$v->time}}">
                    </span>
                </div>
            </div>
            <a class="title" target="_blank" href="/list/{{$v->id}}">
                {{$v->title}}
            </a>
            <p class="abstract">
              {{$v->abstract}}
            </p>
            <div class="meta">
                <a target="_blank" href="/list/{{$v->id}}">
                    <i class="iconfont ic-list-comments">
                    </i>
                    {{$v->review}}
                </a>
                <span>
                    <i class="iconfont ic-list-like">
                    </i>
                    {{$v->zan}}
                </span>
            </div>
        </div>
    </li>
    @endforeach
</ul>
      </div>
    </div>
    <div class="col-xs-24 col-sm-7 col-sm-offset-1 aside">
        <p class="title">专题公告</p>
        <div class="description js-description">
          <p>{{$tp->keywords}}
        </div>
      <div class="share">
        <span>分享到</span>
        <a class="option" href="javascript:void((function(s,d,e,r,l,p,t,z,c){var%20f=&#39;http://v.t.sina.com.cn/share/share.php?appkey=1881139527&#39;,u=z||d.location,p=[&#39;&amp;url=&#39;,e(u),&#39;&amp;title=&#39;,e(t||d.title),&#39;&amp;source=&#39;,e(r),&#39;&amp;sourceUrl=&#39;,e(l),&#39;&amp;content=&#39;,c||&#39;gb2312&#39;,&#39;&amp;pic=&#39;,e(p||&#39;&#39;)].join(&#39;&#39;);function%20a(){if(!window.open([f,p].join(&#39;&#39;),&#39;mb&#39;,[&#39;toolbar=0,status=0,resizable=1,width=440,height=430,left=&#39;,(s.width-440)/2,&#39;,top=&#39;,(s.height-430)/2].join(&#39;&#39;)))u.href=[f,p].join(&#39;&#39;);};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent,&#39;&#39;,&#39;&#39;,&#39;http://upload.jianshu.io/collections/images/283250/%E6%BC%AB%E7%94%BB%E4%B8%93%E9%A2%98.jpg&#39;, &#39;推荐专题《手绘》（ 分享自 @简书 ）&#39;,&#39;http://www.jianshu.com/c/8c92f845cd4d?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=weibo&#39;,&#39;页面编码gb2312|utf-8默认gb2312&#39;));"><i class="iconfont ic-share-weibo"></i></a>
        <a class="option" data-action="weixin-share"><i class="iconfont ic-share-wechat"></i></a>
        <a class="option" tabindex="0" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="focus" href="javascript:void(0);" data-content='
          <ul class="share-list">
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=&#39;+e(&#39;http://www.jianshu.com/c/8c92f845cd4d?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=qzone&#39;)+&#39;&amp;title=&#39;+e(&#39;推荐专题《手绘》&#39;),x=function(){if(!window.open(r,&#39;qzone&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-zone"></i><span>分享到QQ空间</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://twitter.com/share?url=&#39;+e(&#39;http://www.jianshu.com/c/8c92f845cd4d?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=twitter&#39;)+&#39;&amp;text=&#39;+e(&#39;推荐专题《手绘》（ 分享自 @jianshucom ）&#39;)+&#39;&amp;related=&#39;+e(&#39;jianshucom&#39;),x=function(){if(!window.open(r,&#39;twitter&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-twitter"></i><span>分享到Twitter</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://www.facebook.com/dialog/share?app_id=483126645039390&amp;display=popup&amp;href=http://www.jianshu.com/c/8c92f845cd4d?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=facebook&#39;,x=function(){if(!window.open(r,&#39;facebook&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-facebook"></i><span>分享到Facebook</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://plus.google.com/share?url=&#39;+e(&#39;http://www.jianshu.com/c/8c92f845cd4d?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=google_plus&#39;),x=function(){if(!window.open(r,&#39;google_plus&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-google"></i><span>分享到Google+</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:&#39;&#39;,r=&#39;http://www.douban.com/recommend/?url=&#39;+e(&#39;http://www.jianshu.com/c/8c92f845cd4d?utm_campaign=maleskine&amp;utm_content=collection&amp;utm_medium=reader_share&amp;utm_source=douban&#39;)+&#39;&amp;title=&#39;+e(&#39;手绘&#39;)+&#39;&amp;sel=&#39;+e(s)+&#39;&amp;v=1&#39;,x=function(){if(!window.open(r,&#39;douban&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r+&#39;&amp;r=1&#39;};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})()"><i class="social-icon-sprite social-icon-douban"></i><span>分享到豆瓣</span></a></li>
          </ul>
        '><i class="iconfont ic-share-more"></i></a>
      </div>
      <div class="side-list"></div>
    </div>
  </div>
</div>
<div data-vcomp="side-tool"></div>
@endsection
@section('js')
<script type="text/javascript">
 
</script>
@endsection