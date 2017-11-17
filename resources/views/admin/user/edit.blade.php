@extends('admin.layout.admins')
@section('title','用户修改页面')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
	        <span>
	            <i class="icon-table">
	            </i>
	            用户修改页面
	        </span>
	    </div>
	<div class="mws-panel-body no-padding">
		@if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<form class="mws-form" action="/Admin/user/{{$res->id}}" method="post" enctype="multipart/form-data">
			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">用户名</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="uname" value="{{$res->uname}}">
					</div>
				</div>

				<div class="mws-form-row">
					<label class="mws-form-label">手机号</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="phone" value="{{$res->phone}}">
					</div>
				</div>

				<div class="mws-form-row">
					<label class="mws-form-label">邮箱</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="email" value="{{$res->email}}">
					</div>
				</div>
				
				<div class="mws-form-row">
					<label class="mws-form-label">状态</label>
					<div class="mws-form-item clearfix">
						<ul class="mws-form-list inline">
							<li><label><input type="radio" name="status" value='1' @if($res->status == 1) checked @endif > 开启</label></li>
							<li><label><input type="radio" name="status" value='0' @if($res->status == 0) checked @endif > 关闭</label></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="mws-button-row">
				<input class="btn btn-danger" value="修改" type="submit">
				{{ csrf_field()}}

	    		{{method_field('PUT')}}
			</div>

			{{ csrf_field() }}
		</form>
	</div>    	
</div>
@endsection


@section('js')
<script>
	$('.mws-form-message').delay(3000).slideUp(1000);
</script>

@endsection