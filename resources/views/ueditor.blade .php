
<div class="am-form-group">
    <label for="user-name" class="am-u-sm-3 am-form-label">
        内容 / Content
        
    </label>
    <div class="am-u-sm-9">
        @include('vendor.ueditor.assets')

        <!-- 配置文件 -->
        <script type="text/javascript" src="../ueditor/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
        <script type="text/javascript" src="../ueditor/ueditor.all.js"></script>
        <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain" style="height:60px">
            这里写你的初始化内容
        </script>
       <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
            ue.ready(function() {
                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
            });
        </script>
        编辑器容器
        <script id="container" name="content" type="text/plain"></script>
    </div>
</div>
