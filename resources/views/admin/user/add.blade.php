@extends('admin.common.head')
@section('content')

<div class="panel admin-panel">
  @if(count($errors) > 0)
      <div class = "alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        <button type="button" class="close" aria-label="Close" style="display:block;padding-top:-10px"><span aria-hidden="true"></span></button>
      </div>
    @endif
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/adminuser/store" enctype="multipart/form-data" id="admin_user_add"> 
         {{ csrf_field() }} 
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="uname" placeholder="请输入8-16位字母开头的数字字母或下划线" id="uname"/>
          <div class="tips"></div>
          <span style="float:left;display:block;padding-left:10px;padding-top:10px;color:red" name="infos"></span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" value="" name="psword" placeholder="请输入8-16位数字字母或下划线" id="psword"/>
          <div class="tips"></div>
          <span style="float:left;display:block;padding-left:10px;padding-top:10px;color:red" name="infos"></span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name"    placeholder="请输入真实姓名" id="names"/>
          <div class="tips"></div>
          <span style="float:left;display:block;padding-left:10px;padding-top:10px;color:red" name="infos"></span>
         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="profile" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <!--<input type="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" name = "profile">-->
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>     
      <div class="form-group">
        <div class="label">
          <label>手机号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="phone" placeholder="请输入11位手机号" id="phone"/>
          <div class="tips"></div>
          <span style="float:left;display:block;padding-left:10px;padding-top:10px;color:red" name="infos"></span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>邮箱：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="email" id="email" placeholder="请输入邮箱"/>
          <div class="tips"></div>
          <span style="float:left;display:block;padding-left:10px;padding-top:10px;color:red" name="infos"></span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    var myform = document.getElementById('admin_user_add');
    var uname = document.getElementById('uname');
    //console.log(uname);
    var psword = document.getElementById('psword');
    var names = document.getElementById('names');
    var phone = document.getElementById('phone');
    var email = document.getElementById('email');
    var span = document.getElementsByName('infos');
    //console.log(span.length);
    var isUname,isPsword,isEmail,isPhone,isName = false;
    uname.onblur = function(){
      //console.log(this.value);
      var uname_preg = /^[a-zA-Z]{1}[a-zA-Z0-9_]{7,15}$/;
      var uname_vals = this.value;
      if(uname_preg.test(uname_vals)){
        isUname = true;
        span[0].innerHTML = '<font color="#249C6D">恭喜用户名格式正确</font>';
      }else{
        isUname = false;
        span[0].innerHTML = '<font color="red">用户名格式不正确</font>';
      }
    }

    psword.onblur = function(){
      //console.log(this.value);
      var uname_preg = /^[a-zA-Z0-9_]{8,16}$/;
      var uname_vals = this.value;
      if(uname_preg.test(uname_vals)){
        isPsword = true;
        span[1].innerHTML = '<font color="#249C6D">恭喜密码可用</font>';
      }else{
        isPsword = false;
        span[1].innerHTML = '<font color="red">密码格式不正确</font>';
      }
    }

    names.onblur = function(){
      console.log(this.value);
      if(this.value != ''){
        isName = true;
        span[2].innerHTML = '<font color="#249C6D">输入成功</font>';
      }else{
        isName = false;
        span[2].innerHTML = '<font color="red">姓名不能为空</font>';
      }
    }



    phone.onblur = function(){
      //console.log(this.value);
      var uname_preg = /^[0-9]{11}$/;
      var uname_vals = this.value;
      if(uname_preg.test(uname_vals)){
        isPhone = true;
        span[3].innerHTML = '<font color="#249C6D">输入成功</font>';
      }else{
        isPhone = false;
        span[3].innerHTML = '<font color="red">手机号格式不正确</font>';
      }
    }

    email.onblur = function(){
      //console.log(this.value);
      var uname_preg = /^[0-9a-zA-Z_]+@[0-9a-zA-Z_]+(\.com|\.cn|\.net)+$/;
      var uname_vals = this.value;
      if(uname_preg.test(uname_vals)){
        isEmail = true;
        span[4].innerHTML = '<font color="#249C6D">恭喜邮箱可用成功</font>';
      }else{
        isEmail = false;
        span[4].innerHTML = '<font color="red">邮箱格式不正确</font>';
      }
    }

    myform.onsubmit = function(){
      if(isUname&&isPsword&&isEmail&&isPhone&&isName){
        return true;
      }else{
        if(!isUname){
          span[0].innerHTML = '<font color="red">此处格式有问题或不能为空</font>';
        }
        if(!isPsword){
          span[1].innerHTML = '<font color="red">此处格式有问题或不能为空</font>';
        }
        if(!isName){
          span[2].innerHTML = '<font color="red">此处格式有问题或不能为空</font>';
        }
        if(!isPhone){
          span[3].innerHTML = '<font color="red">此处格式有问题或不能为空</font>';
        }
        if(!isEmail){
          span[4].innerHTML = '<font color="red">此处格式有问题或不能为空</font>';
        }
        return false;
      }
    }
</script>


@endsection