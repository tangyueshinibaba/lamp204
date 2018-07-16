@extends('admin.common.head')
@section('content')

  <div class = "panel admin-panel">
  	<div class="panel-head"><strong class="icon-reorder"> 优惠券列表</strong></div>
  	<div class="padding border-bottom">  
	    <a class="button border-yellow" href="/yhq/create"><span class="icon-plus-square-o"></span> 添加优惠券</a>
	 </div>
	<table class="table table-hover text-center">
	    <tbody>
	    <tr>
	       <th width="5%">ID</th>     
	       <th>编号</th>  
	       <th>名称</th> 
	       <th>金额</th>    
	       <th>规则</th>    
	       <th>活动说明</th>    
	       <th>开始时间</th>    
	       <th>结束时间</th>        
	       <th width="250">操作</th>
	    </tr>
	   	@foreach($yhq as $k => $v)
	    <tr>
	        <td>{{ $v -> id }}</td>      
	        <td>{{ $v -> num}}</td>  
	        <td>{{ $v -> title}}</td>      
	        <td>{{ $v -> price}}</td>      
	        <td>{{ $v -> yhprice}}</td>      
	        <td>{{ $v -> shuoming}}</td>      
	        <td>{{ $v -> starttime}}</td>      
	        <td>{{ $v -> endtime}}</td>      
	        <td>
		        <div class="button-group">
		      	    <a class="button border-main" href="/yhq/edit/{{ $v->id }}"><span class="icon-edit"></span> 修改</a> 
		      	    <a class="button border-red" href="/yhq/destroy/{{ $v->id }}" ><span class="icon-trash-o"></span> 删除</a> 
		        </div>
	    	</td>
	    </tr> 
	    @endforeach
	    <tr>
        	<td colspan="9"><div class="pagelist">{!! $yhq -> render() !!}</div></td>
        </tr>
	  	</tbody>
	</table>	
  </div>
@endsection