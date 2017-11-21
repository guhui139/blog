<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/admins/css/ch-ui.admin.css">
	<link rel="stylesheet" href="/admins/font/css/font-awesome.min.css">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			
                    @if(session('msg'))
                        <div class="mws-form-message info">                 

                            {{session('msg')}}

                        </div>
                    @endif
			<form action="/admin/login" method="post">
				<ul>
					<li>
					<input type="text" name="uname" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
				{{csrf_field()}}
			</form>
			<p> &copy; 2016 Powered by <a href="http://www.itxdl.cn" target="_blank">http://www.itxdl.cn</a></p>
		</div>
	</div>
</body>
</html>