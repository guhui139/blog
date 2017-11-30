@extends('layout.home')

@section('title','我的个人中心')

@section('content')

<div class="mws-panel grid_8">
  <div class="mws-panel-header">
      <h2 style="margin-left:600px;margin-top:50px;">账号管理</h2>
  </div><br/><br/>
  <div class="container">
    <div class="row" style="margin-left:200px">
        <form action="/home/user/{{$res->id}}" class="mws-form" method='post'>
            <div class="mws-form-row">	

              <label class="mws-form-label" style="padding:50px">打包下载文章:</label>
              <label class="mws-form-label"><a href="http://www.jianshu.com/backup/download" class="btn btn-hollow">下载所有文章:</a></label>
	            
            </div>
          	<div class="mws-form-row">   	
	              <label class="mws-form-label" style="padding:50px">删除帐号:</label>
	              <label class="mws-form-label">
	              	<input  id="shanchu" type="submit" class="btn btn-delete" value="删除帐号">
	              </label>
	              {{ csrf_field()}}
	              {{ method_field('DELETE')}}
	            
            </div>    
        </form> 
    </div>
  </div>      
</div>
@endsection

@section('js')

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
    $('#shanchu').click(function(){
        
		alert('恭喜,删除成功');
        
    })   
</script>
@endsection