@extends('layout.home')

@section('title','评论页面')

@section('content')
<div class="container person">
  <div class="row">
    <div class="col-xs-16 main">
      <div class="main-top">
        <a class="avatar" href="">
          <img src="{{isset($ress->img) ? $ress->img  : '/homes/review/3-9a2bcc21a5d89e21dafc73b39dc5f582.jpg'}}" alt="">
        </a>
      </div>


      <ul class="trigger-menu" data-pjax-container="#list-container">
      <li class=""><a href="/home/user">
        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511423896703" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3939" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M854.869333 0l-707.047619 0C48.761905 0 48.761905 97.52381 48.761905 97.52381l0 828.952381c0 0 0 97.52381 100.571429 97.52381 0 0 559.250286 0 585.142857 0L950.857143 853.333333 950.857143 97.52381C950.857143 97.52381 949.345524 0 854.869333 0zM902.095238 828.952381l-195.047619 146.285714c-24.380952 0-536.380952 0-536.380952 0-73.142857 0-73.142857-73.142857-73.142857-73.142857L97.52381 121.904762c0 0 0-73.142857 73.142857-73.142857 48.761905 0 658.285714 0 658.285714 0 73.142857 0 73.142857 73.142857 73.142857 73.142857L902.095238 828.952381z" p-id="3940"></path><path d="M219.428571 536.380952l560.761905 0 0 48.761905-560.761905 0 0-48.761905Z" p-id="3941"></path><path d="M219.428571 341.333333l560.761905 0 0 48.761905-560.761905 0 0-48.761905Z" p-id="3942"></path><path d="M219.428571 146.285714l268.190476 0 0 48.761905-268.190476 0 0-48.761905Z" p-id="3943"></path><path d="M853.333333 707.047619 682.666667 707.047619 633.904762 707.047619 633.904762 755.809524 633.904762 926.47619 682.666667 926.47619 682.666667 755.809524 853.333333 755.809524Z" p-id="3944"></path></svg>
       文章</a></li>
      <li class=""><a href="">
        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511423062781" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2718" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M392.6 459c63.9 23.5 140.3-22.8 169.8-103l68.8-186.7c29.6-80.2-8.9-114.7-85.4-76.7l-44.7 22.3c-76.5 38-158.4 121.4-181.9 185.3-23.5 63.8 9.4 135.3 73.4 158.8z m68.3 172.6c23.5-63.9-22.8-140.3-103-169.8L171.1 393c-80.1-29.5-114.6 9-76.6 85.4l22.2 44.7c38 76.5 121.4 158.4 185.3 181.9 63.8 23.5 135.4-9.4 158.9-73.4z m470.6-87.7l-22.2-44.7c-38-76.5-121.3-158.4-185.2-181.9-63.9-23.5-135.4 9.4-158.9 73.4-23.5 63.9 22.8 140.3 103 169.8L855 629.3c80.1 29.6 114.6-8.9 76.5-85.4z m-298.1 19.4c-63.9-23.5-140.3 22.8-169.8 103L394.8 853c-29.6 80.2 8.9 114.7 85.4 76.7l44.7-22.2c76.5-38 158.4-121.3 181.9-185.3 23.6-63.8-9.4-135.3-73.4-158.9z" fill="#999999" p-id="2719"></path></svg>
       动态</a></li>
      <li class=""><a href="/home/content">
        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511422114130" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4177" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M853.333333 768c35.413333 0 64-20.650667 64-55.978667V170.581333A63.978667 63.978667 0 0 0 853.333333 106.666667H170.666667C135.253333 106.666667 106.666667 135.253333 106.666667 170.581333v541.44C106.666667 747.285333 135.338667 768 170.666667 768h201.173333l110.016 117.44a42.752 42.752 0 0 0 60.586667 0.042667L651.904 768H853.333333z m-219.029333-42.666667h-6.250667l-115.797333 129.962667c-0.106667 0.106667-116.010667-129.962667-116.010667-129.962667H170.666667c-11.776 0-21.333333-1.621333-21.333334-13.312V170.581333A21.205333 21.205333 0 0 1 170.666667 149.333333h682.666666c11.776 0 21.333333 9.536 21.333334 21.248v541.44c0 11.754667-9.472 13.312-21.333334 13.312H634.304zM341.333333 490.666667a42.666667 42.666667 0 1 0 0-85.333334 42.666667 42.666667 0 0 0 0 85.333334z m170.666667 0a42.666667 42.666667 0 1 0 0-85.333334 42.666667 42.666667 0 0 0 0 85.333334z m170.666667 0a42.666667 42.666667 0 1 0 0-85.333334 42.666667 42.666667 0 0 0 0 85.333334z" fill="#3D3D3D" p-id="4178"></path></svg>
       我的评论</a></li>
      </ul>
      <div id="list-container">
        <!-- 文章评论模块 -->
      @foreach($res as $k=>$v)
      <ul class="note-list">
       
          <li id="note-19437105" data-note-id="19437105" class="">
              <div class="content">           
                  <div class="author">
                      <a class="avatar" target="_blank" href="">
                          <img src="{{$v->img}}" alt="" style="width:100%">
                      </a>
                      <div class="info">
                          <a class="nickname" target="_blank" href="">
                              {{ $v->uname }}
                          </a>
                          <span class="time" data-shared-at="2017-11-09T20:37:12+08:00">
                              {{ $v->time }}
                          </span>
                      </div>
                  </div>
                  <div>
                    <a class="title" target="_blank" href="">
                        <h3>{{ $v->title }}</h3>
                    </a>
                    <p class="abstract">
                        {{ $v->content }}
                    </p>
                  </div>
              
                  <a target="_blank" href="">
                        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511413852062" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1764" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="20"><defs><style type="text/css"></style></defs><path d="M490.816 698.133333a21.354667 21.354667 0 0 1-4.906667 2.986667l-176.938666 78.442667c-50.133333 19.797333-89.109333-18.773333-70.549334-69.802667l0.917334-2.176 84.138666-170.090667a21.333333 21.333333 0 0 1 3.434667-5.013333c0.896-1.493333 1.984-2.88 3.264-4.16l422.378667-422.4a64 64 0 0 1 90.496 0l75.434666 75.434667a64 64 0 0 1 0 90.517333L496.106667 694.250667a21.333333 21.333333 0 0 1-5.290667 3.882666z m-130.24-139.413333l-82.432 166.656c-5.461333 15.829333-0.234667 20.586667 14.336 14.826667l172.928-76.650667-104.832-104.832z m135.530667 75.178667l316.8-316.778667-105.6-105.6-316.8 316.8 105.6 105.6z m346.944-346.944l45.269333-45.269334a21.333333 21.333333 0 0 0 0-30.165333L812.885333 136.106667a21.333333 21.333333 0 0 0-30.165333 0L737.472 181.333333l105.6 105.6zM896 454.272a21.333333 21.333333 0 0 1 42.666667 0V789.333333a149.333333 149.333333 0 0 1-149.333334 149.333334H234.666667a149.333333 149.333333 0 0 1-149.333334-149.333334V234.666667a149.333333 149.333333 0 0 1 149.333334-149.333334h338.496a21.333333 21.333333 0 1 1 0 42.666667H234.666667a106.666667 106.666667 0 0 0-106.666667 106.666667v554.666666a106.666667 106.666667 0 0 0 106.666667 106.666667h554.666666a106.666667 106.666667 0 0 0 106.666667-106.666667V454.272z" p-id="1765"></path></svg> 
                        {{$v->review}}
                  </a>      
                  <a target="_blank" href="">
                        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511414202652" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3333" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M757.76 852.906667c36.906667-0.021333 72.832-30.208 79.296-66.56l51.093333-287.04c10.069333-56.469333-27.093333-100.522667-84.373333-100.096l-10.261333 0.085333a19972.266667 19972.266667 0 0 1-52.842667 0.362667 3552.853333 3552.853333 0 0 1-56.746667 0l-30.997333-0.426667 11.498667-28.8c10.24-25.642667 21.76-95.744 21.504-128.021333-0.618667-73.045333-31.36-114.858667-69.290667-114.410667-46.613333 0.554667-69.461333 23.466667-69.333333 91.136 0.213333 112.661333-102.144 226.112-225.130667 225.109333a1214.08 1214.08 0 0 0-20.629333 0l-3.52 0.042667c-0.192 0 0.64 409.109333 0.64 409.109333 0-0.085333 459.093333-0.490667 459.093333-0.490666z m-17.301333-495.914667a15332.288 15332.288 0 0 0 52.693333-0.362667l10.282667-0.085333c84.010667-0.618667 141.44 67.52 126.72 150.250667L879.061333 793.813333c-10.090667 56.661333-63.68 101.696-121.258666 101.76l-458.922667 0.384A42.666667 42.666667 0 0 1 256 853.546667l-0.853333-409.173334a42.624 42.624 0 0 1 42.346666-42.730666l3.669334-0.042667c5.909333-0.064 13.12-0.064 21.333333 0 98.176 0.789333 182.293333-92.437333 182.144-182.378667C504.469333 128.021333 546.24 86.186667 616.106667 85.333333c65.173333-0.768 111.68 62.506667 112.448 156.714667 0.256 28.48-6.848 78.826667-15.701334 115.050667 8.021333 0 17.28-0.042667 27.584-0.106667zM170.666667 448v405.333333h23.466666a21.333333 21.333333 0 0 1 0 42.666667H154.837333A26.709333 26.709333 0 0 1 128 869.333333v-437.333333c0-14.784 12.074667-26.666667 26.773333-26.666667h38.912a21.333333 21.333333 0 0 1 0 42.666667H170.666667z" fill="#3D3D3D" p-id="3334"></path></svg>
                        {{$v->review_zan}}
                  </a> 
                        
          </li>
          
      </ul>
       @endforeach
      <div class="dataTables_paginate paging_full_numbers">

            {!! $res->render()!!}
          
    </div>
      </div>
    </div>
    
<div class="col-xs-7 col-xs-offset-1 aside">
    <div class="title">个人介绍</div>
    <a class="function-btn" data-action="start-edit-intro" href="javascript:void(0)"><i class="iconfont ic-edit-s"></i>编辑</a>
    <form class="profile-edit js-intro-form" data-type="json" id="edit_user_8917203" action="/users/082b547b6aed" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" value="✓" type="hidden"><input name="_method" value="patch" type="hidden">
      <textarea name="user[intro]" id="user_intro"></textarea>
      <input name="commit" value="保存" class="btn btn-hollow" data-action="save-edit-intro" data-disable-with="保存" type="submit">
      <a data-action="cancel-edit-intro" href="javascript:void(null);">取消</a>
</form>  <div class="description">
    <div class="js-intro"></div>
    
    
  </div>
  <div id="user-publications"><!----></div>
  <ul class="list user-dynamic">
    <li>
      <a href="http://www.jianshu.com/users/082b547b6aed/subscriptions">
        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511522579115" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5571" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M807.424 59.392c1.024 0.512 1.536 1.536 2.56 2.048 25.088 9.216 35.328 23.552 35.328 50.688v319.488c-27.136-6.656-52.736-12.8-79.872-19.456v-10.752-216.064c0-29.184-16.384-45.568-45.568-45.568H193.536c-29.184 0-45.568 16.384-45.568 45.568V793.6c0 28.672 16.384 44.544 45.056 44.544h215.04c8.192 0 11.264 2.048 13.824 9.728 8.704 23.04 18.944 45.568 29.184 70.144H440.32c-98.816 0-212.992-0.512-311.296 0.512-30.208 0.512-50.688-9.728-60.416-38.912V97.28c6.656-18.432 19.456-31.232 37.888-37.888h700.928z" fill="" p-id="5572"></path><path d="M672.768 961.024c-12.288-2.048-24.576-4.096-36.352-6.656-104.448-25.088-179.712-110.08-192-217.088-14.848-131.584 81.408-254.976 211.968-272.384 138.752-18.944 263.168 74.24 283.136 212.48 0.512 4.608 1.536 9.728 2.56 14.336v38.912c-0.512 2.56-1.536 5.12-2.048 8.192-10.24 99.84-82.432 185.344-179.712 212.48-15.872 4.608-32.768 6.656-48.64 9.728h-38.912z m204.288-250.368c0-101.376-82.432-183.808-183.808-183.808-101.376 0-184.32 82.432-183.808 183.808 0 101.376 82.432 183.808 183.808 183.808 101.376 0 183.808-82.432 183.808-183.808zM229.888 272.896v-51.2h453.12v51.2H229.888zM683.008 382.464c2.56 26.112 2.56 25.088-20.992 30.72-20.48 5.12-39.936 11.776-60.416 17.92-5.632 1.536-11.264 3.072-17.408 3.072H240.64c-3.584 0-6.656-0.512-10.752-0.512v-51.2h453.12zM230.4 595.456v-51.712h224.768l-3.072 6.144c-4.608 6.656-10.24 12.8-12.8 20.48-7.68 23.552-24.064 27.136-46.592 26.112-50.176-1.536-99.84-0.512-150.016-0.512l-12.288-0.512zM390.656 705.024v51.2H230.4v-51.2h160.256z" fill="" p-id="5573"></path></svg> <span>我关注的专题/文集</span>
      </a>    
    </li>
    <li>
      <a href="http://www.jianshu.com/users/082b547b6aed/liked_notes">
        <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1511423896703" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3939" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="20"><defs><style type="text/css"></style></defs><path d="M854.869333 0l-707.047619 0C48.761905 0 48.761905 97.52381 48.761905 97.52381l0 828.952381c0 0 0 97.52381 100.571429 97.52381 0 0 559.250286 0 585.142857 0L950.857143 853.333333 950.857143 97.52381C950.857143 97.52381 949.345524 0 854.869333 0zM902.095238 828.952381l-195.047619 146.285714c-24.380952 0-536.380952 0-536.380952 0-73.142857 0-73.142857-73.142857-73.142857-73.142857L97.52381 121.904762c0 0 0-73.142857 73.142857-73.142857 48.761905 0 658.285714 0 658.285714 0 73.142857 0 73.142857 73.142857 73.142857 73.142857L902.095238 828.952381z" p-id="3940"></path><path d="M219.428571 536.380952l560.761905 0 0 48.761905-560.761905 0 0-48.761905Z" p-id="3941"></path><path d="M219.428571 341.333333l560.761905 0 0 48.761905-560.761905 0 0-48.761905Z" p-id="3942"></path><path d="M219.428571 146.285714l268.190476 0 0 48.761905-268.190476 0 0-48.761905Z" p-id="3943"></path><path d="M853.333333 707.047619 682.666667 707.047619 633.904762 707.047619 633.904762 755.809524 633.904762 926.47619 682.666667 926.47619 682.666667 755.809524 853.333333 755.809524Z" p-id="3944"></path></svg> <span>我喜欢的文章</span>
      </a>    
    </li>
  </ul>
  <!-- 专题和文集 -->
  <div><div><!----> <div class="title">我创建的专题</div> <div class="new-collection-block"><a href="http://www.jianshu.com/collections/new" class="new-collection-btn"><i class="iconfont ic-follow"></i><span>创建一个新专题</span></a></div></div> <!----> <div><div class="title">
    我的文集
  </div> <ul class="list"><li><a href="http://www.jianshu.com/nb/18607138" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="http://www.jianshu.com/nb/18607138" target="_blank" class="name">日记本</a></li> <li><!----> <!----></li></ul></div></div>
</div>

  </div>
</div>
<div class="side-tool"><ul><li data-placement="left" data-toggle="tooltip" data-container="body" data-original-title="回到顶部" style="display: none;"><a class="function-button"><i class="iconfont ic-backtop"></i></a></li> <!----> <!----> <!----> <!----></ul></div>

@endsection

@section('js')
<script>

  $('.mws-form-message').delay(3000).slideUp(1000);

</script>

<script type="application/json" data-name="page-data">{"user_signed_in":true,"locale":"zh-CN","os":"windows","read_mode":"day","read_font":"font2","current_user":{"id":8917203,"nickname":"王东彦","slug":"082b547b6aed","avatar":"http://cdn2.jianshu.io/assets/default_avatar/3-9a2bcc21a5d89e21dafc73b39dc5f582.jpg","unread_counts":{"chats":0,"total":0}},"user":{"slug":"082b547b6aed","gender":0},"has_collections":false}</script>
    
    <script src="/homes/review/babel-polyfill-676833c6a4d68573b4c3.js" crossorigin="anonymous"></script>
    <script src="/homes/review/web-base-4a01e43f84ab8aee127b.js" crossorigin="anonymous"></script>
    <script src="/homes/review/web-3e8e501357ac427fb326.js" crossorigin="anonymous"></script>
    
    <script src="/homes/review/entry-a295000d74dcee7f4802.js" crossorigin="anonymous"></script>
    <script>
    (function(){
      var bp = document.createElement('script');
      var curProtocol = window.location.protocol.split(':')[0];
      if (curProtocol === 'https') {
          bp.src = '/homes/review/push.js';
      }
      else {
          bp.src = '/homes/review/push.js';
      }
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(bp, s);
    })();
</script>

@endsection
