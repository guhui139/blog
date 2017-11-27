@extends('admin.layout.admins')
@section('title','个人中心')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
	        <span>
	            <i class="icon-table">
	            </i>
	            个人中心
	        </span>
	    </div>
	<div class="mws-panel-body no-padding">
		

		<form class="mws-form" action="/admin/center/{{$res->id}}" method="post" enctype="multipart/form-data">
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
					<label class="mws-form-label">头像</label>
					<img src="/{{$res->profile}}" alt="" width="120" height="120">
					<div class="mws-form-item" style="width:400px">
						<input class="small" type="file" name="profile" value="">
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


