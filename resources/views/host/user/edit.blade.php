@extends('host.common.default')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        <script >layer.alert('{{ session('success') }}', {icon: 6});</script>
    </div>
@endif

<!--用户中心样式-->
 
     {{ csrf_field() }}
<div class="user_style clearfix">
@include('host.vip.index')
 <!--右侧样式-->
   <div class="right_style">
 <!--消费记录样式-->
  <div class="user_address_style">
    <div class="title_style"><em></em>用户信息</div> 
      <!--用户信息样式-->
     <!--个人信息-->
<<<<<<< HEAD
    <form action="/user/update/{{ $user -> id }}" method = "post" enctype="multipart/form-data">
      <div class="Personal_info" id="Personal">
         <ul class="xinxi">
         <li><label>修改头像：</label><input type="file" name = "pic" value = "上传头像"/></li>
         <li><label>用户名：</label>  <span><input name="uname" type="text" value="{{ $user -> uname }}"  class="text" disabled="disabled"/></span></li>
=======

      <div class="Personal_info" id="Personal">
         <ul class="xinxi">
         <li><label>修改头像：</label><input type="file" name = "pic" value = "上传头像"/></li>
         <!-- <li><label>用户名：</label>  <span><input name="uname" type="text" value="{{ $data -> uname }}"  class="text" disabled="disabled"/></span></li> -->
>>>>>>> origin/zsg
          <li><label>用户性别：</label>
          @if($user -> sex == '')
              <input type="radio" name = "sex" value = "m"/>男
              <input type="radio" name = "sex" value = "w"/>女
<<<<<<< HEAD
          @endif 
          @if($user -> sex == 'm')
=======
          @endif
          @if($data -> sex == 'm')
>>>>>>> origin/zsg
              <input type="radio" name = "sex" value = "m" checked/>男
              <input type="radio" name = "sex" value = "w" />女
          @endif 
          @if($user -> sex == 'w')
              <input type="radio" name = "sex" value = "m"/>男
              <input type="radio" name = "sex" value = "w" checked />女
          @endif
          </li>
<<<<<<< HEAD
          <li><label>年龄：</label>  <span><input name="age" type="text" value="{{ $user -> age }}"  class="text"  disabled="disabled" /></span></li>
          <li><label>电子邮箱：</label>  <span><input name="email" type="text" value="{{ $user -> email }}"  class="text"  disabled="disabled"/></span></li>
          <li><label>用户QQ：</label>  <span><input name="qq" type="text" value="{{ $user -> qq }}"  class="text" disabled="disabled"/></span></li>        
          <li><label>移动电话：</label>  <span><input name="phone" type="text" value="{{ $user -> phone }}"  class="text" disabled="disabled"/></span></li>
          <div class="bottom"><input name="" type="submit" value="修改信息"  class="modify" onclick ="return false;"/><input name="" type="submit" value="确认修改"  class="confirm"/></div>
         </ul>
          <ul class="Head_portrait">
          <li class="User_avatar"><img src="/common/host/images/people.png" /></li>
          <li><input name="pic" type="submit" value="上传头像"  class="submit"/></li>
         </ul> 
      </div>
      </form>      
=======
          <li><label>年龄：</label>  <span><input name="age" type="text" value="{{ $data -> age }}"  class="text"   /></span></li>
          <li><label>电子邮箱：</label>  <span><input name="email" type="text" value="{{ $data -> email }}"  class="text"  /></span></li>
          <li><label>用户QQ：</label>  <span><input name="qq" type="text" value="{{ $data -> qq }}"  class="text" /></span></li>        
          <li><label>移动电话：</label>  <span><input name="phone" type="text" value="{{ $data -> phone }}"  class="text" /></span></li>
          <div class="bottom">
          <!-- <input name="" type="submit" value="修改信息"  class="modify" onclick ="return false;"/> -->
          <input name="" type="submit" value="确认修改"  class="confirm"/>
          </div>
         </ul> 
      </form>
          <!-- <ul class="Head_portrait">
          <li class="User_avatar"><img src="/common/host/images/pro-1.jpg" /></li>
          <li><input name="pic" type="submit" value="上传头像"  class="submit"/></li>
         </ul>  -->
    </div>     
>>>>>>> origin/zsg
   </div>
  </div>
 </div>
 </div>
<<<<<<< HEAD
 </div>
=======
 
>>>>>>> origin/zsg


@endsection
