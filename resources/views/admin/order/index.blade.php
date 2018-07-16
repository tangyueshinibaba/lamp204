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
			<td>ID</td>
			<td>用户</td>
			<td>商品id</td>
			<td>商品名称</td>
			<td>商品缩略图</td>
			<td>商品货号</td>
			<td>买的数量</td>
			<td>总价</td>
			<td>订单号</td>
			<td>规格</td>
			<!-- <td>状态</td> -->
			<td>操作</td>
		</tr>

		@foreach ($order as $k=>$v)
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->uid}}</td>
			<td>{{$v->pid}}</td>
			<td>{{$v->oname}}</td>
			<td><img src="/uploads/{{$v->profile}}" style="width:60px;height:60px;"></td>
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
			
			<!-- <td>{{$v->status}}</td> -->
		
      		<td>
      			<div class="button-group">
      			<a class="button border-main" href="/adminorder/show/{{ $v->id }}"><span class="icon-edit"></span> 详情</a>
      			<a class="button border-red" href="/adminorder/destroy/{{ $v->id }}" onclick="return confirm('您确定要删除吗?')"><span class="icon-trash-o"></span> 删除</a>
      			</div>
      		</td>
	    </tr>
		@endforeach
	    <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
      </tbody>
	  </table>
</div>

@endsection