<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎登录</title>
<link rel="stylesheet" type="text/css" href="/common/host/login/css/style.css" />
<link rel="stylesheet" type="text/css" href="/common/host/login/css/body.css"/> 
<script src="/common/host/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/layui/layui.all.js"></script>
<script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>
</head>
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <script>
                 layer.alert('{{$error}}', {icon: 6});
               </script>
            @endforeach
        </ul>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-success">
        <script >layer.alert('{{ session('error') }}', {icon: 6})</script>;
    </div>  
@endif
<div class="container">
    <section id="content">
        <form action="/login/dologin" method = "post">
        {{ csrf_field()}}
            <h1>会员登录</h1>
            <div>
                <input type="text" placeholder="用户名" required="" id="username" name = "username"/>
            </div>
            <div>
                <input type="password" placeholder="密码" required="" id="password" name = "password"/>
            </div>
            <div style="float:left;">
                <input type="text" placeholder="验证码" required="" id="password" name = "captcha"/ style ="width:62%" >
            </div> 
            <div style="float:left;">
                <img src="{{captcha_src()}}" title="点击切换" onclick = "rand_code(this)">
            </div>
            <script type="text/javascript">
                function rand_code(obj){
                    obj.src = obj.src+'?a'+Math.random();
                }
            </script>
             <div class="">
                <span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>           
            </div> 
            <div style="clear:both">
                <!-- <input type="submit" value="Log in" /> -->
                <input type="submit" value="登录" class="btn btn-primary" id="js-btn-login"/>
                <a href="/host"><h4>回到首页</h4></a>
                <!-- <a href="#">Register</a> -->
            </div>
        </form><!-- form -->
         <div class="button">
            <span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>
            <a href="/gywm/index">联系我们</a>    
        </div> <!-- button -->
    </section><!-- content -->
</div>
<!-- container -->


<br><br><br><br>

</body>
</html>