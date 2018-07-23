<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/zhanghu/store" method="post">
		{{csrf_field()}}
	账号：{{$user->uname}} <br><br>
	金额：<input type="text" name="money" value=""><br><br>
	<input type="submit" value="提交">
	</form>
</body>
</html>