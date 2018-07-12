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
  	<div class="panel-head"><strong class="icon-reorder"> 前台会员列表</strong></div>
  	<div class="padding border-bottom">  
	    <a class="button border-yellow" href="/user/create"><span class="icon-plus-square-o"></span> 添加会员</a>
	 </div>
	<table class="table table-hover text-center">
	    <tbody>
	    <tr>
	       <th width="5%">ID</th>     
	       <th>用户名</th>  
	       <th>电话</th> 
	       <th>年龄</th>    
	       <th>邮箱</th>    
	       <th>QQ</th>    
	       <th>年龄</th>    
	       <th>头像</th>    
	       <th width="250">操作</th>
	    </tr>
	   	@foreach($users as $k => $v)
	    <tr>
	        <td>{{ $v -> id }}</td>      
	        <td>{{ $v -> uname}}</td>  
	        <td>{{ $v -> phone}}</td>  
	        <td>{{ $v -> age}}</td>  
	        <td>{{ $v -> email}}</td>  
	        <td>{{ $v -> qq}}</td>  
	        <td>{{ $v -> sex}}</td>     
	        <td><img src="/common/host/images/user/{{ $v -> pic}}" alt="" width = "50" height = "50"></td>      
	        <td>
		        <div class="button-group">
		      	    <a class="button border-main" href="/user/edit/{{ $v->id }}"><span class="icon-edit"></span> 修改</a> 
		      	    <a class="button border-red" href="/user/destroy/{{ $v->id }}" ><span class="icon-trash-o"></span> 删除</a> 
		        </div>
	    	</td>
	    </tr> 
	    @endforeach
	    <tr>
        	<td colspan="9"> <div class="pagelist">{!! $users -> render() !!}</div> </td>
        </tr>
	  	</tbody>
	</table>	
  </div>
 
@endsection