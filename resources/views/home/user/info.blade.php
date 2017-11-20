@extends('home.layout.homes')

@section('title','个人资料')

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
      <span>个人资料</span>
  </div>

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
              <input type="text" class="small" name='uname' value="">
            </div>
          </div>
          <div class="mws-form-row">
            <label class="mws-form-label">邮箱:</label>
            <div class="mws-form-item">
              <input type="text" class="small" name='email' value="">
            </div>
          </div>  
          <div class="mws-form-row">
            <label class="mws-form-label">头像:</label>
            <div class="mws-form-item">
              <input type="file" readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="文件上传" name='img'>
            </div>
          </div>
        </div>
        <div class="mws-button-row">
          {{ csrf_field()}}
          
          <input type="submit" class="btn btn-danger" value="设置">
          <a href="/home" class="btn btn-danger">返回主页</a>   
        </div>
      </form>
  </div>      
</div>
@endsection

@section('js')
<script>

  $('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection
