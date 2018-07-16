@extends('admin.common.head')
@section('content')
@if(session('success'))
		<div class="alert alert-success alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      	<span aria-hidden="true">×</span></button>
	        {{ session('success') }}
	    </div>
@endif
 <form class="form-inline " action="/adminpingjia/index" method="get">
	  <div class="form-group" style="display:inline;">
	    <label for="advername">关键字</label>
	    <input type="text" name="spddh" class="form-control" id="advername" placeholder="spddh">
	  </div>
	  <button type="submit" class="btn btn-success" style="margin-left:10px;margin-top:20px;">搜索</button>
</form>
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>用户名</td>
		<td>商品id</td>
		<td>订单id</td>
		<td>缩略图</td>
		<td>商品订单号</td>
		<td>评分</td>
		<td>操作</td>
	</tr>
	@foreach($data as $k=>$v)
	<tr>
	<td>{{$v->id}}</td>
	<td>{{$v->shuyu->uname}}</td>
	<td>{{$v->pid}}</td>
	<td>{{$v->did}}</td>
	<td><img src="{{$v->profile}}" style="width:60px;height:60px;"></td>
	<td>{{$v->spddh}}</td>
	<td>{{$v->pingfen}}</td>
	<td>
	<!-- 	<a href="/adminpingjia/destroy/{{$v->id}}">删除</a> -->
		<a href="#" class="look">查看评价内容</a>
	</td>
	</tr>
	@endforeach
</table>
<div class="paginate" style="margin-left:500px;">
	{!! $data->appends(['spddh'=>$spddh])->render()!!}
</div>
<script>
	$('.look').click(function(){
		layer.open({
		  type: 2,
		  area: ['700px', '450px'],
		  fixed: false, //不固定
		  maxmin: true,
		  content: '/adminpingjia/show/{{$v->id}}'
		});
	})
</script>
@endsection
