<div id="ueditor" class="edui-default">
    @include('vendor.ueditor.assets')
</div>
<script type="text/javascript">
    var ue = UE.getEditor('container');
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
    });
</script>
<script id="container" name="content" type="text/plain"></script>