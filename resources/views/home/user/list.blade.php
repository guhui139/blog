@extends('layout.home')

@section('title','文章详情')

@section('content')
<div class="container">
    <div class="row" style="margin-left:180px">
        <h2></h2>
        <article class="blogs">
            <div class="">
                <div class="line">
                <h2 style="margin-left:80px">文章标题：{{$res->title}}</h2><br/>
            </div>
                
                <span class="avatar" target="_blank" style="display:inline">
                    <img src="{{$res->img}}" alt="" style="width:50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    {{ $res->uname }}            
                </span>
                <br/><br/>
               
                <p>  
                    <span>
                        发表时间: {{$res->time}}
                    </span>
                         
                </p>
                <p>
                    <span>
                        文章简介: {{$res->abstract}}
                    </span>
                </p>
                <figure>
                    <img src="{{$res->cimg}}" width="200px">
                </figure><br/>
                <p class="nlist">
                    <span title="/" href="" target="_blank" class="readmore">
                        阅读全文: 
                    </span>
                </p>
                <p>
                    <span>
                        {{$res->content}}
                    </span>
                </p>
                <p>
                    <span>
                        <a target="_blank" href="">
                        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511413852062" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1764" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="20"><defs><style type="text/css"></style></defs><path d="M490.816 698.133333a21.354667 21.354667 0 0 1-4.906667 2.986667l-176.938666 78.442667c-50.133333 19.797333-89.109333-18.773333-70.549334-69.802667l0.917334-2.176 84.138666-170.090667a21.333333 21.333333 0 0 1 3.434667-5.013333c0.896-1.493333 1.984-2.88 3.264-4.16l422.378667-422.4a64 64 0 0 1 90.496 0l75.434666 75.434667a64 64 0 0 1 0 90.517333L496.106667 694.250667a21.333333 21.333333 0 0 1-5.290667 3.882666z m-130.24-139.413333l-82.432 166.656c-5.461333 15.829333-0.234667 20.586667 14.336 14.826667l172.928-76.650667-104.832-104.832z m135.530667 75.178667l316.8-316.778667-105.6-105.6-316.8 316.8 105.6 105.6z m346.944-346.944l45.269333-45.269334a21.333333 21.333333 0 0 0 0-30.165333L812.885333 136.106667a21.333333 21.333333 0 0 0-30.165333 0L737.472 181.333333l105.6 105.6zM896 454.272a21.333333 21.333333 0 0 1 42.666667 0V789.333333a149.333333 149.333333 0 0 1-149.333334 149.333334H234.666667a149.333333 149.333333 0 0 1-149.333334-149.333334V234.666667a149.333333 149.333333 0 0 1 149.333334-149.333334h338.496a21.333333 21.333333 0 1 1 0 42.666667H234.666667a106.666667 106.666667 0 0 0-106.666667 106.666667v554.666666a106.666667 106.666667 0 0 0 106.666667 106.666667h554.666666a106.666667 106.666667 0 0 0 106.666667-106.666667V454.272z" p-id="1765"></path></svg> 
                        {{$res->review}}
                        </a>      
                        <a target="_blank" href="">
                        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511414202652" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3333" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M757.76 852.906667c36.906667-0.021333 72.832-30.208 79.296-66.56l51.093333-287.04c10.069333-56.469333-27.093333-100.522667-84.373333-100.096l-10.261333 0.085333a19972.266667 19972.266667 0 0 1-52.842667 0.362667 3552.853333 3552.853333 0 0 1-56.746667 0l-30.997333-0.426667 11.498667-28.8c10.24-25.642667 21.76-95.744 21.504-128.021333-0.618667-73.045333-31.36-114.858667-69.290667-114.410667-46.613333 0.554667-69.461333 23.466667-69.333333 91.136 0.213333 112.661333-102.144 226.112-225.130667 225.109333a1214.08 1214.08 0 0 0-20.629333 0l-3.52 0.042667c-0.192 0 0.64 409.109333 0.64 409.109333 0-0.085333 459.093333-0.490667 459.093333-0.490666z m-17.301333-495.914667a15332.288 15332.288 0 0 0 52.693333-0.362667l10.282667-0.085333c84.010667-0.618667 141.44 67.52 126.72 150.250667L879.061333 793.813333c-10.090667 56.661333-63.68 101.696-121.258666 101.76l-458.922667 0.384A42.666667 42.666667 0 0 1 256 853.546667l-0.853333-409.173334a42.624 42.624 0 0 1 42.346666-42.730666l3.669334-0.042667c5.909333-0.064 13.12-0.064 21.333333 0 98.176 0.789333 182.293333-92.437333 182.144-182.378667C504.469333 128.021333 546.24 86.186667 616.106667 85.333333c65.173333-0.768 111.68 62.506667 112.448 156.714667 0.256 28.48-6.848 78.826667-15.701334 115.050667 8.021333 0 17.28-0.042667 27.584-0.106667zM170.666667 448v405.333333h23.466666a21.333333 21.333333 0 0 1 0 42.666667H154.837333A26.709333 26.709333 0 0 1 128 869.333333v-437.333333c0-14.784 12.074667-26.666667 26.773333-26.666667h38.912a21.333333 21.333333 0 0 1 0 42.666667H170.666667z" fill="#3D3D3D" p-id="3334"></path></svg>
                         {{$res->zan}}
                        </a> 
                    </span>
                </p><br/>
                
                <div><div id="comment-list" class="comment-list"><div>@if(session('msg'))<div>{{session('msg')}}</div>@endif<form class="new-comment" method="post" action="/home/content/{{$res->id}}"><div class="text" style="color:blue">智慧如你，不想发表一点想法,咩~ </div><textarea placeholder="写下你的评论..." id="content" name="content"></textarea> <div class="write-function-block"><div><button class="btn btn-success onclick="func({{$res->id}})">发表评论</button></div></div>{{csrf_field()}}{{method_field('PUT')}}</form> <!----></div> <div id="normal-comment-list" class="normal-comment-list"><div><!----> <div> <div class="no-comment"></div> </div> <!----> <div class="comments-placeholder" style="display: none;"><div class="author"><div class="avatar"></div> <div class="info"><div class="name"></div> <div class="meta"></div></div></div> <div class="text"></div> <div class="text animation-delay"></div> <div class="tool-group"><i class="iconfont ic-zan-active"></i><div class="zan"></div> <i class="iconfont ic-list-comments"></i><div class="zan"></div></div></div> </div></div> <!----> <div><!----></div></div></div></div>
                
                <p>
                    <h4>评论内容共{{$num}}条</h4>
                </p><br/>
                <div class="">
                <p>
                    @foreach($data as $k=>$v)
                    <span style='color:lightblue;font-size:18px'>
                        {{$v->uname}} :
                    </span>
                    <span>
                        {{$v->content}}
                    </span>
                </p>
                <p>
                    <span>
                        {{$v->time}}&nbsp;
                    
                        <a href="">回复</a><br/>
                    </span><br/>
                </p>
                    @endforeach
                </div>
              
                <div class="ad">
                    <img src="">
                </div>
                           
                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585">
                </script>
                <script type="text/javascript" id="bdshell_js">
                </script>
                <script type="text/javascript">
                    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
                </script>
                <!-- Baidu Button END -->
            </div>
        </article>
    </div>
</div>
@endsection

@section('js')
<script type="application/json" data-name="page-data">{"user_signed_in":true,"locale":"zh-CN","os":"windows","read_mode":"day","read_font":"font2","current_user":{"id":8917203,"nickname":"王东彦","slug":"082b547b6aed","avatar":"http://cdn2.jianshu.io/assets/default_avatar/3-9a2bcc21a5d89e21dafc73b39dc5f582.jpg","unread_counts":{"chats":0,"total":0}},"user":{"slug":"082b547b6aed","gender":0},"has_collections":false}</script>
    
<script src="/homes/review/babel-polyfill-676833c6a4d68573b4c3.js" crossorigin="anonymous"></script>
<script src="/homes/review/web-base-4a01e43f84ab8aee127b.js" crossorigin="anonymous"></script>
<script src="/homes/review/web-3e8e501357ac427fb326.js" crossorigin="anonymous"></script>

<script src="/homes/review/entry-a295000d74dcee7f4802.js" crossorigin="anonymous"></script>
<script src="/homes/review/babel-polyfill-676833c6a4d68573b4c3.js" crossorigin="anonymous"></script>
<script src="/homes/review/web-base-3aaac7a0c644aebf4eea.js" crossorigin="anonymous"></script>
<script src="/homes/review/web-b8918a321a198d33ec65.js" crossorigin="anonymous"></script>  
<script src="/homes/review/entry-82f36e5dc29a43c2dc42.js" crossorigin="anonymous"></script>
<script src="/layer/layer.js"></script>

<script>
(function(){
  var bp = document.createElement('script');
  var curProtocol = window.location.protocol.split(':')[0];
  if (curProtocol === 'https') {
      bp.src = '/home/review/push.js';
  }
  else {
      bp.src = '/home/review/push.js';
  }
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(bp, s);
})();
</script>

@endsection