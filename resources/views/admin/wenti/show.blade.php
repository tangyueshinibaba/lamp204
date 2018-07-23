@extends('admin.common.head')
@section('content')
<form action="/adminwenti/update/{{$data->id}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">用户名:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->uname}}" disabled="disabled">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">QQ</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  value="{{$data->qq}}" disabled="disabled">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">手机:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$data->phone}}" disabled="disabled">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">邮箱:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$data->email}}" disabled="disabled">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">反馈信息:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$data->contetn}}" disabled="disabled">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">回馈信息:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="huikui">
  </div>

  <button type="submit" class="btn btn-default btn-info form-control" >提交</button>
</form>
@endsection