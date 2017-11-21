@extends('layout.home')

@section('title','文章详情')


@section('content')
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="/">首页</a>--><a href="/type">{{$tp->name}}</a>--><a href="#">{{$ls->title}}</a></span></h1>
  <div class="index_about">
    <h2 class="c_titile">{{trim('.'.$ls->abstract)}}</h2>
    <p class="box_c"><span class="d_time">发布时间:{{$ls->time}}</span>&nbsp;&nbsp;<span>编辑:{{$ls->info_id}}</span>&nbsp;&nbsp;<span>查看次数:x</span></p>
    <ul class="infos">
      {{$res->content}}
      <p><img src="{{$ls->cimg}}" alt="分手"></p>
    </ul>
    <div class="keybq">
    <p><span>关键字词</span>：爱情,犯错,原谅,分手</p>
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
     
       <button>喜欢</button>
        <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
       
    </div>
  <div>
    <form class="new-comment">
      <a class="avatar" href="用户主页">
        info_img
      </a>
      <textarea name="content" rows="6" cols="80" onpropertychange="if(this.scrollHeight>80) this.style.posHeight=this.scrollHeight+5" placeholder="写下你的评论..."></textarea> 
      <div class="write-function-block">
        <div data-v-b36e9416="" class="emoji-modal-wrap">
          <a data-v-b36e9416="" class="emoji">
            <i data-v-b36e9416="" class="iconfont ic-comment-emotions">
            </i>
          </a>
          <!---->
        </div>
        <div class="hint">
          <button>评论</button>
        </div>
        <a class="btn btn-send">
          发送
        </a>
        <a class="cancel">
          取消
        </a>
      </div>
    </form>
    <!---->
  </div>
  <div id="normal-comment-list" class="normal-comment-list">
    <div>
      <div>
        <div class="top-title">
          <span>
            评论数 评论id对应文章id数量
          </span>
          <a class="author-only">
            where id = info_id 评论表
          </a>
          <a class="close-btn" style="display: none;">
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
      <div id="comment-17623862" class="comment">
        <div>
          <div class="author">
            <a href="/u/3b38a5b61f2a" target="_blank" class="avatar">
              <img src="//upload.jianshu.io/users/upload_avatars/4314760/407fd2abf8bf.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/114/h/114">
            </a>
            <div class="info">
              <a href="/u/3b38a5b61f2a" target="_blank" class="name">
                info_uname
              </a>
              <!---->
              <!---->
              <div class="meta">
                <span>
                  时间正序判断楼层 comment_time
                </span>
              </div>
            </div>
          </div>
          <div class="comment-wrap">
            <p>
              comment_content 
               <img src="//static.jianshu.io/assets/emojis/smile.png" alt=":smile:" title=":smile:"
              class="emoji" width="20" height="20">
              <img src="//static.jianshu.io/assets/emojis/smile.png" alt=":smile:" title=":smile:"
              class="emoji" width="20" height="20">
              <img src="//static.jianshu.io/assets/emojis/smile.png" alt=":smile:" title=":smile:"
              class="emoji" width="20" height="20">
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
        <div class="sub-comment-list">
          <div id="comment-17624221" class="sub-comment">
            <p>
              <a href="/u/e2073c34b346" target="_blank">
                info_uname
              </a>
              ：
              <span>
                info_img
              </span>
            </p>
            <div class="sub-tool-group">
              <span>
                comment_time
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
            </div>
          </div>
        </div>
      </div>
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
    <div class="blank"></div>
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


@endsection