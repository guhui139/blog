@extends('layout.home')

@section('title',$ls->title)

@section('content')
<div class="note">
  <a target="_blank" href="/apps/download?utm_source=sbc" id="web-note-ad-fixed"><span class="close">&times;</span></a>
  <div class="post">
    <div class="article">
        <h1 class="title">{{$ls->title}}</h1>
        <!-- 作者区域 -->
        <div class="author">
          <a class="avatar" href="/u/03f6b7ea3544">
            <img src="{{$user->img}}" alt="96" />
          </a>
          <div class="info">
            <span class="name"><a href="/info/{{$user->id}}">{{$user->uname}}</a></span>
            <!-- 关注用户按钮 -->
            <div props-data-classes="user-follow-button-header" data-author-follow-button></div>
            <!-- 文章数据信息 -->
            <div class="meta">
              <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                <span class="publish-time" data-toggle="tooltip" data-placement="bottom" title="最后编辑于 2017.11.24 10:25">{{$ls->time}}</span>
              <span class="wordage">字数 {{count($res->content)}}</span>
            </div>
          </div>
          <!-- 如果是当前作者，加入编辑按钮 -->
        </div>
        <!-- -->

        <!-- 文章内容 -->
        <div data-note-content class="show-content">
          <div class="image-package">
<div class="image-container" style="max-width: 550px; max-height: 308px;">
<div class="image-container-fill" style="padding-bottom: 56.00000000000001%;"></div>
<div class="image-view" data-height="308"><img src="..{{$ls->cimg}}" data-original-width='auto' data-original-height="auto" data-original-format="image/jpeg" data-original-filesize="32959"></div>
</div>
<div class="image-caption">{{$ls->abstract}}</div>
</div>
     {!! $res->content !!}    
</div>


 
        <!--  -->

        <div class="show-foot">
          <a class="notebook" href="/nb/13730492">
            <i class="iconfont ic-search-notebook"></i>
            <span>{{$user->uname}}</span>
</a>          <div class="copyright" data-toggle="tooltip" data-html="true" data-original-title="转载请联系作者获得授权，并标注“简书作者”。">
            © 著作权归作者所有
          </div>
          <div class="modal-wrap" data-report-note>
            <a id="report-modal">举报文章</a>
          </div>
        </div>
    </div>

    <!-- 文章底部作者信息 -->
      <div class="follow-detail">
        <div class="info">
          <a class="avatar" href="/u/03f6b7ea3544">
            <img src="{{$user->img}}" alt="96" />
</a>          <div props-data-classes="user-follow-button-footer" data-author-follow-button></div>
          <a class="title" href="/u/03f6b7ea3544">{{$user->uname}}</a>
          
        </div>
          <div class="signature"></div>
      </div>

      <div class="support-author"></div>

    <div class="meta-bottom">
      @if(session('uid'))
        @if($zan==null)
          <div id="zan" class="btn like-group"><div class="btn-like"><a><i id="zi" class="iconfont ic-like"></i>喜欢</a></div> <div class="modal-wrap"><a id="conts">{{$ls->zan}}</a></div></div>
        @else
          <div class="btn like-group active"><div class="btn-like"><a><i id="zi" class="iconfont ic-like"></i>已喜欢</a></div> <div class="modal-wrap"><a id="conts">{{$ls->zan}}</a></div></div>
        @endif
      @else
        <div class="btn like-group"><div class="btn-like"><a href="/index"><i id="zi" class="iconfont ic-like"></i>喜欢</a></div> <div class="modal-wrap"><a href="/index">{{$ls->zan}}</a></div></div>
      @endif
      <div class="share-group">
        <a class="share-circle" data-action="weixin-share" data-toggle="tooltip" data-original-title="分享到微信">
          <i class="iconfont ic-wechat"></i>
        </a>
        <a class="share-circle" data-action="weibo-share" data-toggle="tooltip" href="javascript:void((function(s,d,e,r,l,p,t,z,c){var%20f=&#39;http://v.t.sina.com.cn/share/share.php?appkey=1881139527&#39;,u=z||d.location,p=[&#39;&amp;url=&#39;,e(u),&#39;&amp;title=&#39;,e(t||d.title),&#39;&amp;source=&#39;,e(r),&#39;&amp;sourceUrl=&#39;,e(l),&#39;&amp;content=&#39;,c||&#39;gb2312&#39;,&#39;&amp;pic=&#39;,e(p||&#39;&#39;)].join(&#39;&#39;);function%20a(){if(!window.open([f,p].join(&#39;&#39;),&#39;mb&#39;,[&#39;toolbar=0,status=0,resizable=1,width=440,height=430,left=&#39;,(s.width-440)/2,&#39;,top=&#39;,(s.height-430)/2].join(&#39;&#39;)))u.href=[f,p].join(&#39;&#39;);};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();})(screen,document,encodeURIComponent,&#39;&#39;,&#39;&#39;,&#39;http://cwb.assets.jianshu.io/notes/images/20127267/weibo/image_1d250ec0017f.jpg&#39;, &#39;推荐 亦侵晓 的文章《【红黄蓝虐童案】人人痛恨凶手，有多少人想过孩子的以后？》（ 分享自 @简书 ）&#39;,&#39;http://www.jianshu.com/p/d432bd180ab8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=weibo&#39;,&#39;页面编码gb2312|utf-8默认gb2312&#39;));" data-original-title="分享到微博">
          <i class="iconfont ic-weibo"></i>
        </a>
          <a class="share-circle" data-toggle="tooltip" href="http://cwb.assets.jianshu.io/notes/images/20127267/weibo/image_1d250ec0017f.jpg" target="_blank" data-original-title="下载长微博图片">
            <i class="iconfont ic-picture"></i>
          </a>
        <a class="share-circle more-share" tabindex="0" data-toggle="popover" data-placement="top" data-html="true" data-trigger="focus" href="javascript:void(0);" data-content='
          <ul class="share-list">
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=&#39;+e(&#39;http://www.jianshu.com/p/d432bd180ab8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=qzone&#39;)+&#39;&amp;title=&#39;+e(&#39;推荐 亦侵晓 的文章《【红黄蓝虐童案】人人痛恨凶手，有多少人想过孩子的以后？》&#39;),x=function(){if(!window.open(r,&#39;qzone&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-zone"></i><span>分享到QQ空间</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://twitter.com/share?url=&#39;+e(&#39;http://www.jianshu.com/p/d432bd180ab8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=twitter&#39;)+&#39;&amp;text=&#39;+e(&#39;推荐 亦侵晓 的文章《【红黄蓝虐童案】人人痛恨凶手，有多少人想过孩子的以后？》（ 分享自 @jianshucom ）&#39;)+&#39;&amp;related=&#39;+e(&#39;jianshucom&#39;),x=function(){if(!window.open(r,&#39;twitter&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=600,height=600&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-twitter"></i><span>分享到Twitter</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://www.facebook.com/dialog/share?app_id=483126645039390&amp;display=popup&amp;href=http://www.jianshu.com/p/d432bd180ab8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=facebook&#39;,x=function(){if(!window.open(r,&#39;facebook&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-facebook"></i><span>分享到Facebook</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,r=&#39;https://plus.google.com/share?url=&#39;+e(&#39;http://www.jianshu.com/p/d432bd180ab8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=google_plus&#39;),x=function(){if(!window.open(r,&#39;google_plus&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})();"><i class="social-icon-sprite social-icon-google"></i><span>分享到Google+</span></a></li>
            <li><a href="javascript:void(function(){var d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:&#39;&#39;,r=&#39;http://www.douban.com/recommend/?url=&#39;+e(&#39;http://www.jianshu.com/p/d432bd180ab8?utm_campaign=maleskine&amp;utm_content=note&amp;utm_medium=reader_share&amp;utm_source=douban&#39;)+&#39;&amp;title=&#39;+e(&#39;【红黄蓝虐童案】人人痛恨凶手，有多少人想过孩子的以后？&#39;)+&#39;&amp;sel=&#39;+e(s)+&#39;&amp;v=1&#39;,x=function(){if(!window.open(r,&#39;douban&#39;,&#39;toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330&#39;))location.href=r+&#39;&amp;r=1&#39;};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})()"><i class="social-icon-sprite social-icon-douban"></i><span>分享到豆瓣</span></a></li>
          </ul>
        '>更多分享</a>
      </div>
    </div>
     
    <div id="comment-list" class="comment-list">
    <div>
      @if(!Session::get('uid')==null)
        <form class="new-comment">
            <a class="avatar">
                <img src="{{$user->img}}">
            </a>
            <textarea id="cont" placeholder="写下你的评论..."></textarea>
            <button class="btn btn-warning" id="comment">发表</button>
            <!---->
        </form>
      @else
            <form class="new-comment"><a class="avatar"><img src="../homes/picture/3d1108d79ee943bc86eb65961e3290f7.gif"></a> <div class="sign-container"><a href="/index" class="btn btn-sign">登录</a> <span>后发表评论</span></div></form>
      @endif
        <!---->
    </div>
    <div id="normal-comment-list" class="normal-comment-list">
        <div id="ping">
            <!---->
            <!---->
            @if($com!=null)
            @foreach($com as $k=>$v)
            <div id="comment-{{$v->id}}" class="comment">
                <div>
                    <div class="author">
                        <a href="/info/{{$v->user_id}}" target="_blank" class="avatar">
                            <img src="{{$v->img}}">
                        </a>
                        <div class="info">
                            <a href="/info/{{$v->user_id}}" target="_blank" class="name">
                              {{$v->uname}}
                            </a>
                            <div class="meta">
                                <span>
                                    {{$v->time}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-wrap">
                        <p>
                            {{$v->content}}
                        </p>
                        <div class="tool-group pingzan"> 
                          @if(session('uid'))
                            <a id="lid" class="active" onclick="dzan({{$v->id}},$(this))">
                              <i class="iconfont ic-zan"></i>
                              <span id="review_zan">{{$v->review_zan}}</span>
                            </a>
                          @else
                            <a id="lid" href="/index">
                              <i class="iconfont ic-zan"></i>
                              <span id="review_zan">{{$v->review_zan}}</span>
                            </a>
                          @endif    

                          @if(session('uid'))
                              <a class="wocao" onclick="show({{$v->id}})">
                                <i class="iconfont ic-comment"></i>
                                <span>回复</span>
                              </a>
                          @else
                            <a id="lid" href="/index">
                              <i class="iconfont ic-comment"></i>
                              <span>回复</span>
                            </a>
                          @endif  

                            <a class="report">
                            </a>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="sub-comment-list">
                  @foreach($review as $key=>$val)
                  @if($v->id==$val->comment_id)
                  <div id="comment-{{$val->id}}" class="sub-comment">
                      <p>
                          <div data-v-f3bf5228="" class="v-tooltip-container" style="z-index: 0;">
                              <div class="v-tooltip-content">
                                  <a href="/info/{{$val->user_id}}" target="_blank">
                                      {{$val->uname}}
                                  </a>
                                  ：
                                  <span>
                                    <a href="/info/{{$val->uid}}" class="maleskine-author" target="_blank"
                                    data-user-slug="55569f43db1e">
                                        <span>@</span>{{$v->uname}}
                                    </a>
                                    {{$val->content}}
                                </span>
                              </div>
                              <!---->
                          </div>
                          
                      </p>
                      <div class="sub-tool-group">
                          <span>
                              {{$val->rtime}}
                          </span>
                          <a class="">
                              <i class="iconfont ic-comment">
                              </i>
                              <span>
                                  回复
                              </span>
                          </a>
                          <a class="report">
                              <span>
                                  举报
                              </span>
                          </a>
                          <!---->
                      </div>
                  </div>
                  @endif
                  @endforeach
              </div>

                <!---->
            </div>
            <div id="{{$v->id}}" class="sub-comment-list hide"> 
              <div>
                <form class="new-comment"><!----> 
                  <textarea placeholder="写下你的评论..."></textarea> 
                  <div class="write-function-block">
                    <div data-v-b36e9416="" class="emoji-modal-wrap">
                      <a data-v-b36e9416="" class="emoji">
                        <i data-v-b36e9416="" class="iconfont ic-comment-emotions"></i>
                      </a> <!---->
                    </div> 
                    <div class="hint">发表</div> 
                    <a class="btn btn-send {{$v->id}}" onclick="plun({{$v->id}},$(this))">发送</a> 
                  </div>
                </form> 
                <!---->
              </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <!---->
    <div>
        <!---->
    </div>
</div>
  </div>

  <div class="vue-side-tool" props-data-props-show-qr-code="0"></div>
</div>
<div class="note-bottom">
  <div class="js-included-collections">
    
  </div>
  
</div>
@endsection
@section('js')
<script type="text/javascript">
    $('#comment').on('click',function(){ 
      var content = $('#cont').val();
      $.post("{{ url('/review/add')}}",
        {
          _token:'{{csrf_token()}}',
          uid:'{{session("uid")}}',
          lid:'{{$ls->id}}',
          content:content  
        },
        function(data)
        {
          console.log(data);
          $('#ping:last').after('<div id="comment-'+data.id+'" class="comment"><div><div class="author"><a href="/info/'+data.user_id+'" target="_blank" class="avatar"><img src="'+data.img+'"></a><div class="info"><a href="/info/'+data.user_id+'" target="_blank" class="name">'+data.uname+'</a><div class="meta"><span>'+data.time+'</span></div></div></div><div class="comment-wrap"><p>'+data.content+'</p><div class="tool-group"><a class="" onclick="dzan('+data.id+')"><i class="iconfont ic-zan"></i><span>0</span></a><a class="wocao"><i class="iconfont ic-comment"></i><span>回复</span></a><a class="report"><span>举报</span></a><!----></div></div></div></div><div class="sub-comment-list hide"> <div><form class="new-comment"><!----> <textarea placeholder="写下你的评论..."></textarea> <div class="write-function-block"><div data-v-b36e9416="" class="emoji-modal-wrap"><a data-v-b36e9416="" class="emoji"><i data-v-b36e9416="" class="iconfont ic-comment-emotions"></i></a> <!----></div> <div class="hint">Ctrl+Return 发表</div> <a class="btn btn-send">发送</a> <a class="cancel">取消</a></div></form> <!----></div></div>');
      });
      return false;
    })
  </script>
  <script type="text/javascript">

    function show(id){
      if($('#'+id).hasClass('hide')){
        $('#'+id).removeClass('hide');
      }else{
        $('#'+id).addClass('hide');
      }
    };

    function plun(id,obj){
      var content = obj.parent().parent().find("textarea").val();
      $.post("{{ url('/review/ping')}}",
      {
          _token:'{{csrf_token()}}',
          user_id:'{{session("uid")}}',
          comment_id:id,
          content:content
      },function(data)
        {
          $('#comment-'+id).find('div').eq(0).after('<div class="sub-comment-list"><div id="comment-17952621" class="sub-comment"><p><div data-v-f3bf5228="" class="v-tooltip-container" style="z-index: 0;"><div class="v-tooltip-content"><a href="/info/'+data[0].user_id+'" target="_blank">'+data[0].uname+'</a>：<span><a href="/info/'+data[1].user_id+'" class="maleskine-author" target="_blank" data-user-slug="33479e9f01d7">@'+data[1].uname+'</a> '+data[0].content+'</span></p> <div class="sub-tool-group"><span>'+data[0].rtime+'</span><a class="report"><span>举报</span></a> <!----></div></div></div>');
          $('#'+id).addClass('hide');
      });
    }
  </script>
  <script type="text/javascript">
    //文赞
    $('#zan').on('click',function(){
      $.post("{{ url('/like/zan')}}",
      {
          _token:'{{csrf_token()}}',
          list_id:'{{$ls->id}}',
          uid:'{{Session::get("uid")}}'
      },
      function(data){
        if (data) {
          parent.location.reload(); 
          $('#conts').html(parseInt(data)+1);
          $('#zi').html('已');
          $('#zan').setAttr('class','active');
        }else{
          alert(data);
        }
      });
    });
  </script>

  <script type="text/javascript">
    //评赞
    function dzan(id,obj){
      
      $.post("{{ url('/like/review_zan')}}",
      {
        _token:'{{csrf_token()}}',
        list_id:'{{$ls->id}}',
        review_id:id,
        uid:'{{Session::get("uid")}}'
      },
      function(data){
        if (data.info==1) {
          obj.find('span').text(data.msg);
        }else{
          layer.msg('点赞成功!');
          obj.find('span').text(data.msg);
        }
      });
    };
  </script>

  <script type="text/javascript">
    
  </script>
@endsection