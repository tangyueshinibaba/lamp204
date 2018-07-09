@extends('admin.common.head')
@section('content')
@if (session('success'))
   	<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
     	<p>{{session('success')}}</p>
    </div>
@endif
@if(session('error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
  		<p>{{session('error')}}</p>
	</div>
@endif
<a href="/cates/create" class="btn btn-info">添加</a>
<form class="form-inline pull-right" action="/cates/index" method="get">
	  <div class="form-group">
	    <label for="cname">关键字</label>
	    <input type="text" name="cname" class="form-control" id="cname" placeholder="分类名">
	  </div>
	  <button type="submit" class="btn btn-success">搜索</button>
</form>
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>分类名</td>
		<td>父级分类id</td>
		<td>分类路径</td>
		<td>状态</td>
		<td>操作</td>
	</tr>
	@foreach($data as $k=>$v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->cname}}</td>
		<td>{{$v->pid}}</td>
		<td>{{$v->path}}</td>
		<td>{{$v->status}}</td>
		<td>
			<a href=""class="btn btn-warning">修改</a>
			<a href="/cates/destroy/{{$v->id}}" class="btn btn-danger" onclick="return confirm('你确定要删除么?')">删除</a>
		</td>
	</tr>
	@endforeach
</table>
<div class="paginate">
	{!!$data->render()!!}
</div>
@endsection