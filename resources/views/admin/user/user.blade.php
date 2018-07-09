@extends('admin.common.head')
@section('content')
  <!DOCTYPE html>
  <html lang="zh-cn">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="renderer" content="webkit">
  <title></title>
  <link rel="stylesheet" href="css/pintuer.css">
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/jquery.js"></script>
  <script src="js/pintuer.js"></script>
  </head>
  <body>
  <form method="post" action="" id="listform">
    <div class="panel admin-panel">
      <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
      <div class="padding border-bottom">
        <ul class="search" style="padding-left:10px;">
            <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block;" />
            <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
        </ul>
      </div>
      <table class="table table-hover text-center">
        <tr>
          <th width="100" style="text-align:left; padding-left:20px;">ID</th>
          <th>账号</th>
          <th>姓名</th>
          <th>图片</th>
          <th>电话</th>
          <th>邮箱</th>
          <th width="10%">注册时间</th>
          <th width="310">操作</th>
        </tr>
        <volist name="list" id="vo">
          @foreach($info as $k=>$v) 
          <tr>
            <td style="text-align:left; padding-left:20px;">{{ $v->id }}</td>
            <td >{{ $v->uname }}</td>
            <td >{{ $v->name }}</td>
            <td width="10%"><img src="{{ $v->pic }}" alt="" width="70" height="50" /></td>
            <td >{{ $v->phone }}</td>
            <td >{{ $v->email }}</td>
            <td>{{ $v->created_at }}</td>
            <td><div class="button-group"> <a class="button border-main" href="/admin/user/edit/{{ $v->id }}"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="/admin/user/destroy/{{ $v->id }}" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
          </tr>
          @endforeach
        <tr>
          
          <!--<td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>-->
          @if($news->currentPage() == 1)

@else
    <li><a href="{{url('news?page=1')}}">首页</a></li>
    <li><a href="{{$news->previousPageUrl()}}">上一页</a></li>
    <li><a href="{{$news->previousPageUrl()}}">{{$news->currentPage()-1}}</a></li>
@endif

<li><a class="active">{{$news->currentPage()}}</a></li>

@if($news->currentPage() == $news->lastPage())

@else
    <li><a href="{{$news->nextPageUrl()}}">{{$news->currentPage()+1}}</a></li>
    <li><a href="{{$news->nextPageUrl()}}">下一页</a></li>
    <li><a href="{{url('news?page=').$news->lastPage()}}">尾页</a></li>
@endif
        </tr>
      </table>

    </div>

  </form>

  <script type="text/javascript">

  //搜索
  function changesearch(){

  }

  //单个删除
  function del(id,mid,iscid){
  	if(confirm("您确定要删除吗?")){

  	}
  }

  //全选
  $("#checkall").click(function(){
    $("input[name='id[]']").each(function(){
  	  if (this.checked) {
  		  this.checked = false;
  	  }
  	  else {
  		  this.checked = true;
  	  }
    });
  })

  //批量删除
  function DelSelect(){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){
  		var t=confirm("您确认要删除选中的内容吗？");
  		if (t==false) return false;
  		$("#listform").submit();
  	}
  	else{
  		alert("请选择您要删除的内容!");
  		return false;
  	}
  }

  //批量排序
  function sorts(){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){

  		$("#listform").submit();
  	}
  	else{
  		alert("请选择要操作的内容!");
  		return false;
  	}
  }


  //批量首页显示
  function changeishome(o){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){

  		$("#listform").submit();
  	}
  	else{
  		alert("请选择要操作的内容!");

  		return false;
  	}
  }

  //批量推荐
  function changeisvouch(o){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){


  		$("#listform").submit();
  	}
  	else{
  		alert("请选择要操作的内容!");

  		return false;
  	}
  }

  //批量置顶
  function changeistop(o){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){

  		$("#listform").submit();
  	}
  	else{
  		alert("请选择要操作的内容!");

  		return false;
  	}
  }


  //批量移动
  function changecate(o){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){

  		$("#listform").submit();
  	}
  	else{
  		alert("请选择要操作的内容!");

  		return false;
  	}
  }

  //批量复制
  function changecopy(o){
  	var Checkbox=false;
  	 $("input[name='id[]']").each(function(){
  	  if (this.checked==true) {
  		Checkbox=true;
  	  }
  	});
  	if (Checkbox){
  		var i = 0;
  	    $("input[name='id[]']").each(function(){
  	  		if (this.checked==true) {
  				i++;
  			}
  	    });
  		if(i>1){
  	    	alert("只能选择一条信息!");
  			$(o).find("option:first").prop("selected","selected");
  		}else{

  			$("#listform").submit();
  		}
  	}
  	else{
  		alert("请选择要复制的内容!");
  		$(o).find("option:first").prop("selected","selected");
  		return false;
  	}
  }

  </script>
  </body>
  </html>
@endsection