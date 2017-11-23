@extends('layout.home')

@section('title','个人详情')


@section('content')
<div class="container">
  <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <h1>个人资料</h1>
    </div>

    <div class="mws-panel-body no-padding">

      @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                       <li style='font-size:17px;list-style:none'>{{ $error }}</li>
                    </div>
                @endforeach
            </ul>
        </div>
      @endif
      
      @if(session('msg'))
          <div class="alert alert-success" role="alert">                 

              {{session('msg')}}

          </div>
      @endif
      
          <form action="/info" class="mws-form" method='post' enctype='multipart/form-data'>
          <div class="form-group">
              <label for="exampleInputEmail1">
                  昵称:
              </label>
              <input type="text" name="uname" class="form-control" id="exampleInputEmail1" placeholder="输入用户名">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">
                  邮箱:
              </label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
              <label for="exampleInputFile">
                  个人头像
              </label>
              <input type="file" id="exampleInputFile" name="img">
          </div>
          <button type="submit" class="btn btn-default">
              保存
          </button>
           {{ csrf_field()}}
      </form>
    </div>      
  </div>
</div>
@endsection

@section('js')
<script>

  $('.alert-danger').delay(2000).slideUp(1000);
  $('.alert-success').delay(2000).slideUp(1000);

</script>

@endsection