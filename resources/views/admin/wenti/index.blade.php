@extends('admin.common.head')
@section('content')
@if (session('success'))
   	<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
     	<p>{{session('success')}}</p>
    </div>
@endif
@if (session('error'))
   	<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
     	<p>{{session('error')}}</p>
    </div>
@endif
<table class="table table-hover table-borderd">
	<tr>
		<td>ID</td>
		<td>用户名id</td>
		<td>用户名</td>
		<td>qq</td>
		<td>手机号</td>
		<td>邮箱</td>
		<td>反馈信息</td>
		<td>回馈信息</td>
		<td>操作</td>
	</tr>
	@foreach($data as $k=>$v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->uid}}</td>
		<td>{{$v->uname}}</td>
		<td>{{$v->qq}}</td>
		<td>{{$v->phone}}</td>
		<td>{{$v->email}}</td>
		<td>{{$v->content}}</td>
		<td>{{$v->huikui}}</td>
		<td>
			<a href="/adminwenti/destroy/{{$v->id}}">删除</a>
			@if($v->huikui!=null)
			<a href="/adminwenti/show/{{$v->id}}">已回复</a>
			@else
			<a href="/adminwenti/show/{{$v->id}}">回复用户</a>
			@endif
			
		</td>
	</tr>
	@endforeach
</table>
@endsection