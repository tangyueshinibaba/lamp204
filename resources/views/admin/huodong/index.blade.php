@extends('admin.common.head')
@section('content')


	<div class="panel admin-panel">
		@if(session('success'))
		<div class="alert alert-success alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      	<span aria-hidden="true"></span></button>
	        {{ session('success') }}
	    </div>
	    @endif
	        <hr>
	  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
	  <div class="padding border-bottom">  
	  <button type="button" class="button border-yellow" onclick="window.location.href='/adminhd/create'"><span class="icon-plus-square-o"></span> 添加内容</button>
	  </div>
	  <table class="table table-hover text-center">
	  	<tbody>
	    <tr>
	      <th >ID</th>
	      <th >图片</th>
	      <th >名称</th>
	      <th >描述</th>
	      <th >价格</th>
	      <th >地址</th>
	      <th >状态</th>
	      <th >更改时间</th>
	      <th >操作</th>
	    </tr>
	   	@foreach($data as $k => $v)
	    <tr>
	      <td>{{$v->id}}</td>     
	      <td><img src="/uploads/{{$v->profile}}" alt="" width="120" height="50" /></td>     
	      <td>{{$v->pname}}</td>
	      <td>{{$v->jieshao}}</td>
	      <td>{{$v->price}}</td>
	      <td>{{$v->url}}</td>
	      <td>{{$v->status}}</td>
	      <td>{{$v->updated_at}}</td>
	      <td><div class="button-group">
	      	<a class="button border-main" href="/adminhd/edit/{{$v->id}}"><span class="icon-edit"></span> 修改</a>
	      	<a class="button border-red" href="/adminhd/destroy/{{$v->id}}" onclick="return confirm('您确定要删除吗?')"><span class="icon-trash-o"></span> 删除</a>
	      </div></td>
	    </tr>
		@endforeach
	    <tr>
        <td colspan="18"><div class="pagelist">{!! $data->render() !!}</div></td>
      </tr>
      </tbody>
	  </table>
</div>

@endsection