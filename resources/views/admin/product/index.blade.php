@extends('admin.common.head')
@section('content')
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>商品名称</td>
		<td>商品货号</td>
		<td>商品介绍</td>
		<td>商品价格</td>
		<td>商品库存</td>
		<td>操作</td>
	</tr>
	@foreach ($data as $k=>$v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->pname}}</td>
		<td>{{$v->huohao}}</td>
		<td>{{$v->jieshao}}</td>
		<td>{{$v->price}}</td>
		<td>{{$v->kucun}}</td>
		<td>
			<a href="">修改</a>
			<a href="">删除</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection