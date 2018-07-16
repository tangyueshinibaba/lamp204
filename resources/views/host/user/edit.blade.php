@extends('host.common.default')
@section('content')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/common/host/css/common.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/style.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/user_style.css" rel="stylesheet" type="text/css" />
<link href="/common/host/skins/all.css" rel="stylesheet" type="text/css" />
<script src="/common/host/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/common/host/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/common/host/js/common_js.js" type="text/javascript"></script>
<script src="/common/host/js/footer.js" type="text/javascript"></script>
<script src="/common/host/layer/layer.js" type="text/javascript"></script>
<script src="/common/host/js/iCheck.js" type="text/javascript"></script>
<script src="/common/host/js/custom.js" type="text/javascript"></script>
<title>用户信息</title>
</head>

<body>

<!--用户中心样式-->
 <form action="/user/update/{{ $data -> id }}" method = "post" enctype="multipart/form-data">
     {{ csrf_field() }}
<div class="user_style clearfix">
@include('host.common.vip')
 <!--右侧样式-->
   <div class="right_style">
 <!--消费记录样式-->
  <div class="user_address_style">
    <div class="title_style"><em></em>用户信息</div> 
      <!--用户信息样式-->
     <!--个人信息-->
    
      <div class="Personal_info" id="Personal">
         <ul class="xinxi">
         <li><label>修改头像：</label><input type="file" name = "pic" value = "上传头像"/></li>
         <li><label>用户名：</label>  <span><input name="uname" type="text" value="{{ $data -> uname }}"  class="text" /></span></li>
          <li><label>用户性别：</label>
          @if($data -> sex == '')
              <input type="radio" name = "sex" value = "m"/>男
              <input type="radio" name = "sex" value = "w"/>女
          @endif 
          @if($data -> sex == 'm')
              <input type="radio" name = "sex" value = "m" checked/>男
              <input type="radio" name = "sex" value = "w" />女
          @endif 
          @if($data -> sex == 'w')
              <input type="radio" name = "sex" value = "m"/>男
              <input type="radio" name = "sex" value = "w" checked />女
          @endif
          </li>
          <li><label>年龄：</label>  <span><input name="age" type="text" value="{{ $data -> age }}"  class="text"  /></span></li>
          <li><label>电子邮箱：</label>  <span><input name="email" type="text" value="{{ $data -> email }}"  class="text"  /></span></li>
          <li><label>用户QQ：</label>  <span><input name="qq" type="text" value="{{ $data -> qq }}"  class="text" /></span></li>        
          <li><label>移动电话：</label>  <span><input name="phone" type="text" value="{{ $data -> phone }}"  class="text"/></span></li>
          <div class="bottom"><input name="" type="submit" value="确认修改"  class="confirm"/></div>
         </ul>
          <ul class="Head_portrait">
          <li class="User_avatar"><img src="/common/host/images/people.png" /></li>
          <li><input name="pic" type="submit" value="上传头像"  class="submit"/></li>
         </ul> 
      </div>     
   </div>
  </div>
 </div>
 </div>
 </form> 


@endsection
