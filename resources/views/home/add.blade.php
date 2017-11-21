@extends('layout.home')

@section('title','发布文章')


@section('content')
<div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">

            </div>
            <div class="widget-body am-fr">
                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="{{url('/list')}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            标题
                        </label>
                        <div class="am-u-sm-9">
                            <input name="title" type="text" class="tpl-form-input" id="user-name" placeholder="请填写标题文字10-20字左右">
                            
                        </div>
                    </div>
                    <div class="widget-head am-cf">

                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            文章摘要
                        </label>
                        <div class="am-u-sm-9">
                            <input name="abstract" type="text" class="tpl-form-input" id="user-name" placeholder="文章说明">
                            
                        </div>
                    </div>
                    <div class="widget-head am-cf">

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
                    <div class="widget-head am-cf">

            		</div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            文章类别
                            
                        </label>
                        <div class="am-u-sm-9">
                            <select name="type_id" data-am-selected="{searchBox: 1}" style="display: none;">
                                <option value="">-=请选择文章类别=-</option>
                                <option value="1">PHP</option>
                                <option value="2">Python</option>
                                <option value="3">H5</option>
                                <option value="4">Java</option>
                                <option value="5">UI</option>
                                <option value="6">云计算</option>
                            </select>
                        </div>
                    </div>
                    <div class="widget-head am-cf">

            		</div>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">
                            文章内容
                        </label>
                        <div class="am-u-sm-9">
                            <textarea name="content" class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea>
                            
                        </div>
                    </div>
                    <div class="am-form-group">
                    	{{csrf_field()}}
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" id="tj" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                提交
                            </button>
                        </div>
                    </div>
                </form>
            </div>
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
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
    });
</script>
 
@endsection