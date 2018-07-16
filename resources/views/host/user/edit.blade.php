@extends('host.common.default')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        <script >layer.alert('{{ session('success') }}', {icon: 6});</script>
    </div>
@endif

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
<script type="text/javascript" src="/layui/layui.all.js"></script>
<script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>
<title>用户信息</title>
</head>

<body>
<!--用户中心样式-->
 <form action="/user/update/{{ $data -> id }}" method = "post" enctype="multipart/form-data">
     {{ csrf_field() }}
<div class="user_style clearfix">
<<<<<<< HEAD
@include('host.common.vip')
=======
 <div class="user_center clearfix">
   <!--左侧样式-->
    <div class="left_style">
     <div class="menu_style">
     <div class="user_title">用户中心</div>
     <div class="user_Head">
     <div class="user_portrait">
     @if(session('username') != null)
      <a href="#" title="修改头像" class="btn_link"></a> <img src="/common/host/images/people.png">
     @endif
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name">{{ $data -> uname }}</span><a href="/repass/edit/{{ $data -> id }}">[修改密码]</a></p>

       </div>           
     </div>
     <div class="sideMen">
     <!--菜单列表图层-->
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_1"></em>订单管理</dt>
      <dd>
        <ul>
          <li> <a href="/hostorder/index/{{$data->id}}">我的订单</a></li>
          <li> <a href="/address/index/{{$data->id}}">收货地址</a></li>
          <li> <a href="#">缺货登记</a></li>
          <li><a href="#">跟踪包裹</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
      <ul>
        <li> <a href="用户中心-用户信息.html"> 用户信息</a></li>
        <li> <a href="用户中心-我的收藏.html"> 我的收藏</a></li>
        <li> <a href="#"> 我的留言</a></li>
        <li> <a href="#">我的标签</a></li>
        <li> <a href="#"> 我的推荐</a></li>
        <li><a href="#"> 我的评论</a></li>
      </ul>
    </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_3"></em>账户管理</dt>
      <dd>
       <ul>
        <li><a href="用户中心-账户管理.html">账户余额</a></li>
       <li><a href="用户中心-消费记录.html">消费记录</a></li>     
       <li><a href="#">资金管理</a></li>
      </ul>
     </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_4"></em>分销管理</dt>
      <dd>
        <ul>
          <li> <a href="#">店铺管理</a></li>
          <li> <a href="#">我的盟友</a></li>
          <li> <a href="#">我的佣金</a></li>
          <li> <a href="#">申请提现</a></li>
        </ul>
      </dd>
    </dl>
    </div>
      <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
   </div>
 </div>
>>>>>>> origin/xyf
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
         <li><label>用户名：</label>  <span><input name="uname" type="text" value="{{ $data -> uname }}"  class="text" disabled="disabled"/></span></li>
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
          <li><label>年龄：</label>  <span><input name="age" type="text" value="{{ $data -> age }}"  class="text"  disabled="disabled" /></span></li>
          <li><label>电子邮箱：</label>  <span><input name="email" type="text" value="{{ $data -> email }}"  class="text"  disabled="disabled"/></span></li>
          <li><label>用户QQ：</label>  <span><input name="qq" type="text" value="{{ $data -> qq }}"  class="text" disabled="disabled"/></span></li>        
          <li><label>移动电话：</label>  <span><input name="phone" type="text" value="{{ $data -> phone }}"  class="text" disabled="disabled"/></span></li>
          <div class="bottom"><input name="" type="submit" value="修改信息"  class="modify" onclick ="return false;"/><input name="" type="submit" value="确认修改"  class="confirm"/></div>
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
