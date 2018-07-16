<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	点击这里重置密码: {{ url('password/reset/'.$token) }}
</body>
</html>