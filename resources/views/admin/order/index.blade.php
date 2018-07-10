@extends('admin.common.head')
@section('content')
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
@endsection