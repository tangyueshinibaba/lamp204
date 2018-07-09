@extends('admin.common.head')
@section('content')
<!-- 显示错误信息 -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class = "panel admin-panel">
  	<div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  	<div class="padding border-bottom">  
	    <a class="button border-yellow" href="/fri/create"><span class="icon-plus-square-o"></span> 添加链接</a>
	 </div>
	<table class="table table-hover text-center">
	    <tbody>
	    <tr>
	      <th width="5%">ID</th>     
	      <th>链接名称</th>  
	      <th>链接logo</th> 
	      <th>链接地址</th>    
	      <th width="250">操作</th>
	    </tr>
	   	@foreach($fris as $k => $v)
	    <tr>
	      <td>{{ $v -> id }}</td>      
	      <td>{{ $v -> title}}</td>  
	      <td><img src="/common/admin/images/fri/{{ $v -> pic}}" alt="" width = "100" height = "100"></td>
	      <td>{{ $v -> url}}</td>      
	      <td>
	      <div class="button-group">
	      <a type="submit" class="button border-main" href="/fri/edit/{{ $v->id }}">修改</a>
	      <form action="/fri/destroy/{{ $v -> id }}" method ="post" style= "display:inline;">
	      	{{ csrf_field() }}
	      	<input type="submit" value = "删除" class = "button border-red">
	      </form>
	      </div>
	      </td>
	    </tr> 
	    @endforeach
	    <tr>
        <td colspan="8"><div class="pagelist">{!! $fris -> render() !!}</div></td>
       </tr>
	  	</tbody>

	</table>	
  </div>
 
@endsection