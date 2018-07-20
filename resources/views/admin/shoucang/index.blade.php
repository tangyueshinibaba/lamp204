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
	  
	  <table class="table table-hover text-center">
	  	<tbody>
	    <tr>
	      <th width="10%">ID</th>
	      <th width="20%">图片</th>
	      <th width="10%">名称</th>
	      <th width="20%">描述</th>
	      <th width="15%">价格</th>
	      <th width="10%">更改时间</th>
	      <th width="15%">操作</th>
	    </tr>
	   	@foreach($data as $k => $v)
	    <tr>
	      <td>{{ $v->id }}</td>     
	      <td><img src="{{ $v->img }}" alt="" width="120" height="50" /></td>     
	      <td>{{ $v->pname }}</td>
	      <td>{{ $v->jieshao }}</td>
	      <td>{{ $v->price }}</td>
	      <td>{{ $v->updated_at }}</td>
	      <td><div class="button-group">
	      	<a class="button border-main" href=""><span class="icon-edit"></span> 详情</a>
	      </div></td>
	    </tr>
		@endforeach
	    <tr>
        <td colspan="8"><div class="pagelist">{!! $data->render() !!}</div></td>
      </tr>
      </tbody>
	  </table>
</div>

@endsection