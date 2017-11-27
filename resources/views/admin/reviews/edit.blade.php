@extends('admin/layout/admins')
@section('title', '修改页面')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>用户修改页面</span>
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
        @if (session('msg'))
            <div class="mws-form-message error">
                <ul> 
                    <li style='font-size:17px;list-style:none'>{{ session('msg') }}</li>                  
                </ul>
            </div>
        @endif

    	<form action="/admin/review/{{$res->id}}" class="mws-form" method='post'>
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='uid' readonly value="{{$res->uid}}">
    				</div>
    			</div>
    				
    			<div class="mws-form-row">
    				<label class="mws-form-label">文章标题:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='lid' readonly value="{{$res->lid}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">文章内容:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='content' value="{{$res->content}}">
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">发表时间:</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='time' value="{{$res->time}}">
                    </div>
                </div>
    		</div>
    		<div class="mws-button-row">
    			{{ csrf_field() }}
    			{{ method_field('PUT') }}
    			<input type="submit" class="btn btn-danger" value="修改">
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
