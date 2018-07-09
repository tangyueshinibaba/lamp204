@extends('admin.common.head')

@section('content')
<!-- <a href="/adver/index" class="btn btn-info">栏目列表</a> -->
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
<a href="/cates/index" class="btn btn-info">栏目列表</a>
<div class="body-content">
    <form method="post" class="form-x" action="/cates/store">  
    	{{csrf_field()}}
       <div class="form-group">
	    <label for="exampleInputEmail1">分类名称</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="分类名称" name="cname" value="{{old('cname')}}">
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">所属分类</label>
	    <select name="pid">
       <option value="0">--请选择--</option> 
       @foreach($data as $k=>$v)
       <option value="{{$v->id}}">{{$v->cname}}</option>
       @endforeach
      </select>
	  </div>
	  <button type="submit" class="btn btn-info form-control">添加</button>
    </form>
  </div>
@endsection