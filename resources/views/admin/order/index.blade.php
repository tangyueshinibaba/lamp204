@extends('admin.common.head')
@section('content')

<table class="table table-hover table-borderd">
		<tr>
			<td>ID</td>
			<td>用户</td>
			<td>商品id</td>
			<td>商品名称</td>
			<td>商品货号</td>
			<td>买的数量</td>
			<td>总价</td>
			<td>订单号</td>
			<td>规格</td>
			<td>状态</td>
		</tr>
		@foreach ( $order as $k=>$v)
			<tr>
				<td>{{$v->id}}</td>
				<td></td>
				<td>{{$v->pid}}</td>
				<td>{{$v->oname}}</td>
				<td>{{$v->huohao}}</td>
				<td>{{$v->shuliang}}</td>
				<td>{{$v->zongjia}}元</td>
				<td>{{$v->ddh}}</td>
				@if($v->guige==1)
				<td>规格一</td>
				@elseif($v->guige==2)
				<td>规格二</td>
				@elseif($v->guige==3)
				<td>规格三</td>
				@endif
				
				<td>{{$v->status}}</td>
			</tr>
		@endforeach
</table>

@endsection