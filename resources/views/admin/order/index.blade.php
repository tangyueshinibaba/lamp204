@extends('admin.common.head')
@section('content')
<<<<<<< HEAD
	<div class="panel admin-panel">
		@if(session('success'))
		<div class="alert alert-success alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      	<span aria-hidden="true">×</span></button>
	        {{ session('success') }}
	    </div>
	    @endif
	        <hr>
	  <div class="panel-head"><strong class="icon-reorder"> 订单列表</strong></div>
	  
	  <table class="table table-hover text-center">
	  	<tbody>
	    <tr>
	      <th>订单编号</th>
	      <th>订单用户</th>
	      <th>地址</th>
	      <th>联系方式</th>
	      <th>订单价格</th>
	      <th>支付价格</th>
	      <th>支付时间</th>
	      <th>创建时间</th>
	      <th>操作</th>
	    </tr>
	   	@foreach($data as $k => $v)
	    <tr>
	      <td>{{ $v->id }}</td>     
	      <td>{{ $v->username }}</td>     
	      <td>{{ $v->address }}</td>
	      <td>{{ $v->tel }}</td>
	      <td>{{ $v->order_money }}</td>
	      <td>{{ $v->pay_money }}</td>
	      <td>{{ $v->pay_time }}</td>
	      <td>{{ $v->create_time }}</td>
	      <td><div class="button-group">
	      	<a class="button border-main" href="/order/edit/{{ $v->id }}"><span class="icon-edit"></span> 详情</a>
	      	<a class="button border-red" href="/carousel/destroy/{{ $v->id }}" onclick="return confirm('您确定要删除吗?')"><span class="icon-trash-o"></span> 删除</a>
	      </div></td>
	    </tr>
		@endforeach
	    <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
      </tbody>
	  </table>
</div>
=======
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
>>>>>>> 5d7314f321f99af6f886b96167b2261727fdc252
@endsection