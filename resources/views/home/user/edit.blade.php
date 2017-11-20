<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/Homes/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Homes/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Homes/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/Homes/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/Homes/css/mws-theme.css" media="screen">

<title>密码修改页</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>修改</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                

                    @if(session('msg'))
                        <div class="mws-form-message info">                 

                            {{session('msg')}}

                        </div>
                    @endif

                <form class="mws-form" action="/homed" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="tel" class="mws-login-username required" placeholder="请输入手机号">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-username required" placeholder="请输入新密码">
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="code" class="mws-login required" placeholder="请输入验证码" style='width:120px;height:35px;margin-right:20px' value="">         
                            <input class="img-rounded" style='width:100px;height:32px;margin-right:20px' type="button" value="发送验证码">                          
                        </div>
                    </div> 
                    <div class="mws-form-row">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <input type="submit" value="修改" class="btn btn-success mws-login-button">                 
                     </div> 
                     {{csrf_field()}}   
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
   <script src="/Homes/js/libs/jquery-1.8.3.min.js"></script>
   <script src="/Homes/js/libs/jquery.placeholder.min.js"></script>
  <script src="/Homes/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
   <script src="/Homes/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
   <script src="/Homes/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
   <script src="/Homes/js/core/login.js"></script>
    
   
    <script>
        $('.mws-form-message').delay(3000).slideUp(1000);
    </script>

    <script type="text/JavaScript">       
        $('.img-rounded').click(function(){
            var tels = $('.mws-login-username').val();
            $.get('{{ url("/homed") }}',{_token:'{{ csrf_token() }}',tel:tels},function(data){
                console.log(data);
            });
            
        });
    </script>

</body>
</html>
