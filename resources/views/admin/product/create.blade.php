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
<a href="/adminproduct/index" class="btn btn-info">产品列表</a>
<div class="body-content">
    <form method="post" class="form-x" action="/adminproduct/store" enctype="multipart/form-data">  
    	{{csrf_field()}}
       <div class="form-group">
	    <label for="exampleInputEmail1">产品名字</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="广告名" name="pname" value="">
	  </div>
	  <div class="form-group">
	    <label for="file">产品图</label>
		<input type="file" name="profile[]" id="file" value="" multiple> 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">价格</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="价格" name="price" value="">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">介绍</label>
	    <textarea name="jieshao" cols="100" rows="10"></textarea>
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">货号</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="货号" name="huohao" value="">
	  </div>
	   <div class="form-group">
	    <label for="exampleInputEmail1">库存</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="库存" name="kucun" value="">
	  </div>
	  <button type="submit" class="btn btn-info form-control">添加</button>
    </form>
  </div>
@endsection