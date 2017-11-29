@section('container')
    @include('vendor.ueditor.assets')


<!-- 加载编辑器的容器 -->
<script id="container" name="content" type="text/plain">
    这里写你的初始化内容
</script>
<!-- 配置文件 -->
<script type="text/javascript" src="../ueditor/config/js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="../ueditor/all/js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('container');
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
    });
</script>
@endsection
