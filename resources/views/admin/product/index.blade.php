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
 <form class="form-inline " action="/adminproduct/index" method="get">
	  <div class="form-group" style="display:inline;">
	    <label for="advername">关键字</label>
	    <input type="text" name="pname" class="form-control" id="pname" placeholder="商品名称">
	  </div>
	  <button type="submit" class="btn btn-success" style="margin-left:10px;margin-top:20px;">搜索</button>
</form>
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>商品名称</td>
		<td>商品缩略图</td>
		<td>商品货号</td>
		<td>商品价格</td>
		<td>商品库存</td>
		<td>操作</td>
	</tr>
	@foreach ($data as $k=>$v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->pname}}</td>
		<td><img src="/uploads/{{$v->profile}}" style="width:80px;height:60px;"></td>
		<td>{{$v->huohao}}</td>
		<td>{{$v->price}}</td>
		<td>{{$v->kucun}}</td>
		<td>
			<a href="/adminproduct/edit/{{$v->id}}" class="btn btn-warning">修改</a>
			<a href="/adminproduct/destroy/{{$v->id}}" onclick="return confirm('你确定要删除么?')" class="btn btn-danger">删除</a>
		</td>
	</tr>
	@endforeach
</table>
<div class="paginate">
	{!!$data->appends(['pname'=>$pname])->render()!!}
</div>
@endsection