@extends('admin.common.head')
@section('content')
@if (session('success'))
   	<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
     	<p>{{session('success')}}</p>
    </div>
@endif

@if (session('error'))
   	<div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
     	<p>{{session('error')}}</p>
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>

<a href="/adminproduct/index" class="btn btn-info">产品列表</a>
<div class="body-content">
    <form method="post" class="form-x" action="/adminproduct/update/{{$data->id}}" enctype="multipart/form-data">  
    	{{csrf_field()}}
       <div class="form-group">
	    <label for="exampleInputEmail1">产品名字</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="广告名" name="pname" value="{{$data->pname}}">
	  </div>
	  <div class="form-group">
	    <label for="file">产品图</label>
		<input type="file" name="profile[]" id="file" value="" multiple> 
		<img src="/uploads/{{$n[0]}}" alt="" width="60px" height="60px">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">价格</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="价格" name="price" value="{{$data->price}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">介绍</label>
	    <script id="container" name="jieshao" type="text/plain" style="width:800px; height:500px;" value="">
       		{!!$data['jieshao']!!}
    	</script>
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">货号</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="货号" name="huohao" value="{{$data->huohao}}">
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">库存</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="库存" name="kucun" value="{{$data->kucun}}">
	  </div>
	  <button type="submit" class="btn btn-info form-control">更新</button>
    </form>
  </div>
   <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
@endsection