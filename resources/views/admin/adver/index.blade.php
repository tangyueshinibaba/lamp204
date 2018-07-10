@extends('admin.common.head')
@section('content')
<h1 class="text-info text-center">{{$title}}</h1>
<a href="/adver/create" class="btn btn-info">广告添加</a>
 <form class="form-inline pull-right" action="/adver/index" method="get">
	  <div class="form-group">
	    <label for="advername">关键字</label>
	    <input type="text" name="advername" class="form-control" id="advername" placeholder="用户名">
	  </div>
	  <button type="submit" class="btn btn-success">搜索</button>
</form>
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>广告名字</td>
		<td>头像</td>
		<td>路径</td>
		<td>状态</td>
		<td>位置</td>
		<td>操作</td>
	</tr>
	@foreach($data as $k=>$v)
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->advername}}</td>
			<td><img src="/uploads/{{$v->profile}}" style="width:60px;height:60px;"></td>
			<td>{{$v->path}}</td>
			<td>{{$v->status=='1'?'开启':'禁用'}}</td>
			@if($v->weizhi==1)
			<td>左</td>
			@elseif($v->weizhi==2)
			<td>中</td>
			@elseif($v->weizhi==3)
			<td>右</td>
			@endif
			<td>
				<a href="/adver/edit/{{$v->id}}" class="btn btn-warning">修改</a>
				<a href="/adver/destroy/{{$v->id}}" class="btn btn-danger" onclick="return confirm('确认删除吗？')">删除</a>
			</td>
		</tr>
	@endforeach
</table>
<div class="pages">
	{!! $data->appends(['advername'=>$advername])->render()!!}
</div>
@endsection