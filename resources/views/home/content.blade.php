@extends('layout.home')

@section('title',$ls->title)


@section('content')
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="/">首页</a>--><a href="/type/{{$tp->id}}">{{$tp->name}}</a>--><a href="#">{{$ls->title}}</a></span></h1>
  <div class="index_about">
    <h2 class="c_titile">{{trim('.'.$ls->abstract)}}</h2>
    <p class="box_c"><span class="d_time">发布时间:{{$ls->time}}</span>&nbsp;&nbsp;<span>编辑:{{$ls->info_id}}</span>&nbsp;&nbsp;<span>查看次数:x</span></p>
    <ul class="infos">
      {{$res->content}}
      <p><img src="../{{$ls->cimg}}" alt="分手" width="200px"></p>
    </ul>
    <div class="keybq">
    </div>
    <div class="ad"> </div>
    <div class="nextinfo">
      @if($pls)
        <p>上一篇：<a href="/list/{{$pls->id}}">{{$pls->title}}</a></p>
      @else
        <p>上一篇：没有了</p>
      @endif

      @if($nls)
        <p>下一篇：<a href="/list/{{$nls->id}}">{{$nls->title}}</a></p>
      @else
        <p>下一篇：没有了</p>
      @endif
    </div>
    <div class="nextinfo">
       <button id="zan">喜欢</button>
        <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    </div>
  <div>
    <form class="new-comment" method="post" action="/review/add" id="form">
      <a class="avatar" href="用户主页">
        @if($user)
        <img src="{{$user->img}}" alt="" style="width:100%">
        @else
        <img src="./homes/picture/logo.png" alt="" style="width:50%;border-radius:0%:">
        @endif
      </a>
      <textarea id="cont" name="content" rows="6" cols="80" onpropertychange="if(this.scrollHeight>80) this.style.posHeight=this.scrollHeight+5" placeholder="写下你的评论..."></textarea> 
     
      <input type="hidden" name="uid" value="{{session('uid')}}">
      <input type="hidden" name="lid" value="{{$ls->id}}">

      <div class="write-function-block">
        <div data-v-b36e9416="" class="emoji-modal-wrap">
          <a data-v-b36e9416="" class="emoji">
            <i data-v-b36e9416="" class="iconfont ic-comment-emotions">
            </i>
          </a>
          <!---->
        </div>
        <div class="hint">
          {{csrf_field()}}
          <button id="comment" type="button">评论</button>
        </div>
      </div>
    </form>
    <!---->
  </div>
  <div id="normal-comment-list" class="normal-comment-list">
    <div>
      <div>
        <div class="top-title">
          <span id="count">
            共{{$cont}}条评论
          </span>
          <a class="author-only">
            只看作者
          </a>
          <a class="close-btn" style="">
            关闭评论 隐藏div
          </a>
          <div class="pull-right">
            <a class="active">
              按喜欢排序 order by zan
            </a>
            <a class="">
              按时间正序 order by time 
            </a>
            <a class="">
              按时间倒序 order by time desc
            </a>
          </div>
        </div>
      </div>
      <!---->
      <!---->
      <div class="comments-placeholder" style="display: none;">
        <div class="author">
          <div class="avatar">
          </div>
          <div class="info">
            <div class="name">
            </div>
            <div class="meta">
            </div>
          </div>
        </div>
        <div class="text">
        </div>
        <div class="text animation-delay">
        </div>
        <div class="tool-group">
          <i class="iconfont ic-zan-active">
          </i>
          <div class="zan">
          </div>
          <i class="iconfont ic-list-comments">
          </i>
          <div class="zan">
          </div>
        </div>
      </div>
        @foreach($com as $key=>$v)
      <div id="comment-17623862" class="comment">
        <div>
          <div class="author">
            <a href="/u/3b38a5b61f2a" target="_blank" class="avatar">
              <img src="{{$v->img}}" width="100%">
            </a>
            <div class="info">
              <a href="/" target="_blank" class="name">
                {{$v->uname}}
              </a>
              <!---->
              <!---->
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
            <div class="tool-group">
              <a class="">
                <i class="iconfont ic-zan">
                </i>
                <span>
                  点赞数 count zan_review_id zan
                </span>
              </a>
              <a class="">
                <i class="iconfont ic-comment">
                </i>
                <span>
                  评论 comment 
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
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <aside class="right">
    <!-- Baidu Button BEGIN -->
   
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->
    <div class="news">
      <h3>
        <p>栏目<span>最新</span></p>
      </h3>
      <ul class="rank">
        <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/" title="with love for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
        <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
        <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
        <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
        <li><a href="/" title="建站流程篇——教你如何快速学会做网站" target="_blank">建站流程篇——教你如何快速学会做网站</a></li>
        <li><a href="/" title="box-shadow 阴影右下脚折边效果" target="_blank">box-shadow 阴影右下脚折边效果</a></li>
        <li><a href="/" title="打雷时室内、户外应该需要注意什么" target="_blank">打雷时室内、户外应该需要注意什么</a></li>
      </ul>
      <h3 class="ph">
        <p>点击<span>排行</span></p>
      </h3>
      <ul class="paih">
        <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
        <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
        <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
        <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
      </ul>
    </div>
    <div class="visitors">
      <h3>
        <p>最近访客</p>
      </h3>
      <ul>
      </ul>
    </div>
  </aside>
</article>
@endsection

@section('js')
  <script>
    $('#comment').on('click',function(){ var content = $('#cont').val();
      $.post("{{ url('/review/add')}}",
        {_token:'{{csrf_token()}}',
          uid:'{{session("uid")}}',
          lid:'{{$ls->id}}',
          content:content  
        },
        function(data){
          $("#comment-17623862").after('<div id="comment-17623862" class="comment"><div><div class="author"><a href="/u/3b38a5b61f2a" target="_blank" class="avatar"><img src="'+data.img+'" width="100%"><a><div class="info"><a href="/" target="_blank" class="name">'+data.uname+'</a><div class="meta"><span>'+data.time+'</span></div></div></div><div class="comment-wrap"><p>'+data.content+'</p><div class="tool-group"><a class=""><i class="iconfont ic-zan"></i><span>点赞数 count zan_review_id zan</span></a><a class=""><i class="iconfont ic-comment"></i><span>评论 comment </span></a><a class="report"><span>举报</span></a></div></div></div></div>')
          $('#count').html('共'+parseInt(data.cont+1)+'条评论');
      });
    })
      
  </script>

@endsection