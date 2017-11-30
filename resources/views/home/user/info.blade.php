@extends('home.layout.homes')

@section('title','个人资料')

@section('content')
<style>
  .social-bind-list li{list-style:none}
</style>
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
      <h2 style="margin-left:600px;margin-top:50px;">个人资料</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="mws-panel-body no-padding">

        @if (count($errors) > 0)
          <div class="mws-form-message error">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li style='font-size:17px;list-style:none'>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        
        @if(session('msg'))
            <div class="mws-form-message info">                 

                {{session('msg')}}

            </div>
        @endif
    
        <form action="/home/user" class="mws-form" method='post' enctype='multipart/form-data'>
          <div class="mws-form-inline">

            <div class="mws-form-row">
              <label class="mws-form-label">用户名:</label>
              <div class="mws-form-item">
                <input type="text" class="form-control" name='uname' value="{{isset($res->uname) ? $res->uname : '' }} ">
              </div>
            </div><br/>
            <div class="mws-form-row">
              <label class="mws-form-label">邮箱:</label>
              <div class="mws-form-item">
                <input type="text" class="form-control" name='email' value="{{isset($res->email) ? $res->email : '' }} ">
              </div>
            </div><br/>  
            <div class="mws-form-row">
              <label class="mws-form-label">头像:</label>
              <div class="mws-form-item">
                <input type="file" readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="文件上传" name='img' value="{{isset($res->img) ? $res->img : '' }} ">
              </div>
            </div>
          </div><br/>
          <div class="mws-button-row">
            {{ csrf_field()}}
         
            <input type="submit" class="btn btn-danger" id ="btns" value="设置">
            <a href="/home/user" class="btn btn-danger">返回主页</a>   
          </div>
        </form>

        <div><tr><td class="setting-title setting-input pull-left">社交帐号</td> <td class="social-bind"><p>你可以通过绑定的社交帐号登录博客。出于安全因素, 你最初用来创建账户的社交帐号不能移除。</p> <ul class="social-bind-list"><li><div class="bind-name"><i class="iconfont ic-weibo"></i> <a href="http://www.jianshu.com/users/auth/weibo">绑定微博</a></div></li><li><div class="bind-name"><i class="iconfont ic-wechat"></i> <a href="http://www.jianshu.com/users/auth/wechat">绑定微信</a></div></li><li class="has-bind"><div class="bind-name"><i class="iconfont ic-qq_connect"></i>  <span>已绑定</span> <a class="cancel-bind">解除绑定</a></div> <!----></li><li><div class="bind-name"><i class="iconfont ic-douban"></i> <a href="http://www.jianshu.com/users/auth/douban">绑定豆瓣</i></a></div></li><li><div class="bind-name"><i class="iconfont ic-google_oauth2"></i> <a href="http://www.jianshu.com/users/auth/google_oauth2">绑定 Google+</a></div></li></ul></td></tr></tbody></table></div> 
      
    </div>
  </div>      
</div>
@endsection

@section('js')
<script>

  $('.error').delay(3000).slideUp(1000);

</script>

<script type="application/json" data-name="page-data">{"user_signed_in":true,"locale":"zh-CN","os":"windows","read_mode":"day","read_font":"font2","current_user":{"id":8917203,"nickname":"王东彦","slug":"082b547b6aed","avatar":"http://cdn2.jianshu.io/assets/default_avatar/3-9a2bcc21a5d89e21dafc73b39dc5f582.jpg","unread_counts":{"chats":0,"total":0}},"user":{"slug":"082b547b6aed","gender":0},"has_collections":false}</script>
    
<script src="/homes/review/babel-polyfill-676833c6a4d68573b4c3.js" crossorigin="anonymous"></script>
<script src="/homes/review/web-base-4a01e43f84ab8aee127b.js" crossorigin="anonymous"></script>
<script src="/homes/review/web-3e8e501357ac427fb326.js" crossorigin="anonymous"></script>

<script src="/homes/review/entry-a295000d74dcee7f4802.js" crossorigin="anonymous"></script>
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
<script>
    /*定时弹框*/
    var a = 3;
    $('#btns').click(function(){
        
        var into = setInterval(function(){
            a--;
            if(a == '0'){
                layer.alert('恭喜,设置成功');
                clearInterval(into);
            }
            
        },1000)
    })   
</script>

@endsection
