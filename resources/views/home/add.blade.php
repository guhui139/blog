@extends('layout.home')

@section('title','发布文章')


@section('content')

                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" method="post" action="{{url('/list')}}" enctype="multipart/form-data">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">文章标题 / Title</label>
                                    <div class="am-u-sm-9">
                                        <input name="title" id="user-name" placeholder="文章标题 / Title" type="text">
                                        <small>请输入文章标题</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">文章摘要 / abstract</label>
                                    <div class="am-u-sm-9">
                                        <input name="abstract" id="user-email" placeholder="输入文章摘要 / abstract" type="text">
                                        <small>摘要你懂得...</small>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label class="am-u-sm-3 am-form-label" for="user-weibo">
                                        封面图
                                    </label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img alt="" src="assets/img/a5.png">
                                            </div>
                                            <button class="am-btn am-btn-danger am-btn-sm" type="button">
                                                <i class="am-icon-cloud-upload">
                                                </i>
                                                添加图片（非必选）
                                            </button>
                                            <input type="file" multiple="" id="doc-form-file" name="cimg">
                                        </div>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">
                                        文章类别
                                        
                                    </label>
                                    <div class="am-u-sm-9">
                                        <select name="type_id" data-am-selected="{searchBox: 1}">
                                            <option value="">-=请选择文章类别=-</option>
                                            @foreach($res as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">内容 / Content</label>
                                    <div class="am-u-sm-9">
                                        <textarea name="content" class="" rows="5" id="user-intro" placeholder="输入文章内容"></textarea>
                                        <small>写出你想写的..</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                                {{csrf_field()}}
                                        <button type="submit" class="am-btn am-btn-primary">发表文章</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            
@endsection

@section('js')
<script src="../homes/js/amazeui.min.js"></script>
<script src="../homes/js/amazeui.datatables.min.js"></script>
<script src="../homes/js/dataTables.responsive.min.js"></script>
<script src="../homes/js/app.js"></script>
<script src="../layer/layer.js"></script>
<script type="text/javascript">
	$('#tj').on('click', function(){
    	layer.msg('发表成功');
 	});
</script>
<script type="text/javascript">
    var ue = UE.getEditor('container');
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); 
    });
</script>
 
@endsection