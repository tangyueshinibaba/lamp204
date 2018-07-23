@extends('admin.common.head')
@section('content')

 <form class="form-inline pull-left" action="/admincur/index" method="get">
	  <div class="form-group">
	    <label for="advername">关键字</label>
	    <input type="text" name="pname" class="form-control" id="pname" placeholder="用户名">
	  </div>
	  <button type="submit" class="btn btn-success" style="margin-left:10px;margin-top:20px;">搜索</button>
</form>
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>用户名id</td>
		<td>用户名</td>
		<td>商品id</td>
		<td>商品名称</td>
		<td>数量</td>
		<td>状态</td>
	</tr>
	@foreach ($data as $k=>$v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->uid}}</td>
		<td>{{$v->yiduiyi->uname}}</td>
		<td>{{$v->pid}}</td>
		<td>{{$v->pname}}</td>
		<td>{{$v->shuliang}}</td>
		
		@if($v->status==0)
		<td>未购买</td>
		@elseif($v->status==1)
		<td>已购买</td>
		@endif
	
	</tr>
	@endforeach
</table>
<div>
	{!!$data->appends(['pname'=>$pname])->render()!!}
</div>
@endsection