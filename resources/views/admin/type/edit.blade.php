@extends('admin.layout.admins')
@section('title','类型修改页面')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
	        <span>
	            <i class="icon-table">
	            </i>
	            类型修改页面
	        </span>
	    </div>
	<div class="mws-panel-body no-padding">
		

		<form class="mws-form" action="/admin/type/{{$res->id}}" method="post" enctype="multipart/form-data">
			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">类型</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="name" value="{{$res->name}}">
					</div>
				</div>

				<div class="mws-form-row">
					<label class="mws-form-label">图片</label>
					<div class="mws-form-item">
						<!--  -->
					
						<img src="/{{$res->img}}" alt="" width="10%">
						
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">修改图片</label>
					<div class="mws-form-item">
					<input class="small" type="file" name="img" value="">
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


