<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/user/store" method = "post">
	 {{ csrf_field() }}
		<h1>用户注册</h1>
		用 户 名：<input type="text" name = "uname" value ""><br><br><br>
		密    码：<input type="password" name = "pass" value = ""><br><br><br>
		确认密码：<input type="password" name = "upass" value = ""><br><br><br>
		手机号  ：<input type="text" name = "phone" value = ""><br><br><br>
		<input type="submit" value = "注册">
	</form>
</body>
</html>