@extends('admin.common.head')
@section('content')
 @if (session('success'))
  <script>
     layer.alert('{{session('success')}}', {
      icon: 1,
      skin: 'layer-ext-moon'
    })
  </script>   
@endif
  <div class = "panel admin-panel">
  	<div class="panel-head"><strong class="icon-reorder">留言列表</strong></div>
  	
	<table class="table table-hover text-center">
	    <tbody>
	    <tr>
	       <th width="5%">ID</th>     
	       <th>姓名</th>  
	       <th>电话</th>    
	       <th>留言内容</th>    
	       <th>留言时间</th>    
	       <th width="250">操作</th>
	    </tr>
	   	@foreach($data as $k => $v)
	    <tr>
	        <td>{{ $v -> id }}</td>      
	        <td>{{ $v -> name}}</td>  
	        <td>{{ $v -> phone}}</td>      
	        <td>{{ $v -> content}}</td>      
	        <td>{{ $v -> created_at}}</td>      
	        <td>
		        <div class="button-group">		      	   
		      	    <a class="button border-red" href="/gywm/destroy/{{ $v->id }}" ><span class="icon-trash-o"></span> 删除</a> 
		        </div>
	    	</td>
	    </tr> 
	    @endforeach
	    <tr>
        	<td colspan="8"><div class="pagelist">{!! $data -> render() !!}</div></td>
        </tr>
	  	</tbody>
	</table>	
  </div>
 
@endsection