@extends('admin.layout.admins')
@section('title','链接修改页面')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
	        <span>
	            <i class="icon-table">
	            </i>
	            链接修改页面
	        </span>
	    </div>
	<div class="mws-panel-body no-padding">
		

		<form class="mws-form" action="/admin/link/{{$res->id}}" method="post" enctype="multipart/form-data">
			<div class="mws-form-inline">
				<div class="mws-form-row" style="width:500px;">
					<label class="mws-form-label">名称</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="link_name" value="{{$res->link_name}}">
					</div>
				</div>

				<div class="mws-form-row" style="width:500px;">
					<label class="mws-form-label">地址</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="url" value="{{$res->url}}">
					</div>
				</div>

				<div class="mws-form-row" style="width:400px;">
					<label class="mws-form-label">图片</label>
					<div class="mws-form-item">
						<img src='/{{$res->image}}' height='30' width="50">
						<input class="small" type="file" name="image" value="{{$res->url}}">
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


