@extends('admin.common.head')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
   	<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
     	<p>{{session('success')}}</p>
    </div>
@endif
@if(session('error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>{{session('error')}}</p>
	</div>
@endif
<a href="/adver/index" class="btn btn-info">广告列表</a>
<div class="body-content">
    <form method="post" class="form-x" action="/adver/store" enctype="multipart/form-data">  
    	{{csrf_field()}}
       <div class="form-group">
	    <label for="exampleInputEmail1">广告名字</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="广告名" name="advername" value="{{old('advername')}}">
	  </div>
	  <div class="form-group">
	    <label for="file">头像</label>
		<input type="file" name="profile" id="file" value="{{old('profile')}}"> 
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">网址</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="网址" name="path" value="{{old('path')}}">
	  </div>
    <div class="form-group">
      <label for="exampleInputEmail1">位置</label>
      <select name="weizhi">
        <option value="">--请选择--</option>
        <option value="1">左</option>
        <option value="2">中</option>
        <option value="3">右</option>
      </select>
    </div>
	  <button type="submit" class="btn btn-info form-control">添加</button>
    </form>
  </div>
@endsection