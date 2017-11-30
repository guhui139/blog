<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

<title>前台登录</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>登录</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                

                    @if(session('msg'))
                        <div class="mws-form-message info">                 

                            {{session('msg')}}

                        </div>
                    @endif

                <form class="mws-form" action="/index" method="post" id="signupForm">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="tel"  class="mws-login-username required tel" placeholder="请输入手机号">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required password" placeholder="请输入密码">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="code" class="mws-login required code" placeholder="请输入验证码" style='width:120px;height:35px;margin-right:20px'>
                            <img src="/index/code" alt=""  class="img-rounded" onclick="this.src = this.src += '?1'">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        {{csrf_field()}}
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                        <a href="/register" style="width:50px;margin-left:50px">去注册</a>          
                        <a href="/homed" style="width:50px;margin-left:80px">忘记密码?</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
   <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
   <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
   <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
   <script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
   <script src="/admins/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
   <script src="/admins/js/core/login.js"></script>
   <script src="/layer/layer.js"></script>
   <script>
        $.ajaxSetup ({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btn').click(function(){
           
            var tels = $('.tel').val();
            var pass = $('.password').val();
            var codes = $('.code').val();
      
            $.post("/index",{_token:'{{ csrf_token() }}',tel:tels,password:pass,code:codes},function(data){
                if(data.status == '0'){
                    layer.alert(data.info);    
                }else if(data.status == '1'){
                    layer.alert(data.info);
                }else if(data.status == '2'){
                    layer.alert(data.info);
                }
            },'json')
        })
    </script>
   
    <script>
        $('.mws-form-message').delay(3000).slideUp(1000);
    </script>
    <script type="text/javascript">
        $('#tj').on('click', function(){
            layer.msg('登陆成功');
            window.parent.location.reload('wdy.cn'); //刷新父页面
            var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
            parent.layer.close(index);  // 关闭layer
        });
</script>
    

</body>
</html>
