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
	  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
	  <div class="padding border-bottom">  
	  <button type="button" class="button border-yellow" onclick="window.location.href='/carousel/create'"><span class="icon-plus-square-o"></span> 添加内容</button>
	  </div>
	  <table class="table table-hover text-center">
	  	<tbody>
	    <tr>
	      <th width="10%">ID</th>
	      <th width="20%">图片</th>
	      <th width="10%">名称</th>
	      <th width="20%">描述</th>
	      <th width="15%">地址</th>
	      <th width="10%">更改时间</th>
	      <th width="15%">操作</th>
	    </tr>
	   	@foreach($data as $k => $v)
	    <tr>
	      <td>{{ $v->id }}</td>     
	      <td><img src="/common/admin/images/lunbo/{{ $v->img }}" alt="" width="120" height="50" /></td>     
	      <td>{{ $v->title }}</td>
	      <td>{{ $v->describe }}</td>
	      <td>{{ $v->url }}</td>
	      <td>{{ $v->updated_at }}</td>
	      <td><div class="button-group">
	      	<a class="button border-main" href="/carousel/edit/{{ $v->id }}"><span class="icon-edit"></span> 修改</a>
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