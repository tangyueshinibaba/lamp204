@extends('admin.common.head')
@section('content')
 @if (session('success'))
  <script>
     layer.msg('{{session('success')}}', {
    })
  </script>   
@endif
<div class="body-content">
    <form method="post" class="form-x" action="/adminpingbi/store"> 
          {{csrf_field()}} 
       <div class="form-group">
      <label for="exampleInputEmail1">屏蔽词</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="分类名称" name="content" value="">
    </div>
    <button type="submit" class="btn btn-info form-control">添加</button>
    </form>
  </div>

@endsection