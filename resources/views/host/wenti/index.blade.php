@extends('host.common.default')
@section('content')
 @if (session('success'))
  <script>
     layer.alert('{{session('success')}}', {
      icon: 1,
      skin: 'layer-ext-moon'
    })
  </script>   
@endif
<div style="width:800px;margin-left:200px;margin-top:50px;">
  <form class="layui-form" action="/hostwenti/store" method="post">
    {{csrf_field()}}
  <div class="layui-form-item">
    <label class="layui-form-label">QQ</label>
    <div class="layui-input-block">
      <input type="text" name="qq" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
   <div class="layui-form-item">
    <label class="layui-form-label">Phone</label>
    <div class="layui-input-block">
      <input type="text" name="phone" required  lay-verify="required" placeholder="请输入手机" autocomplete="off" class="layui-input">
    </div>
  </div> <div class="layui-form-item">
    <label class="layui-form-label">Email</label>
    <div class="layui-input-block">
      <input type="text" name="email" required  lay-verify="required" placeholder="请输入邮件" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">反馈内容</label>
    <div class="layui-input-block">
      <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
</div>

 
<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
});
</script>
<hr>
<div style="width:800px;margin-left:200px;margin-top:50px;">
    <table class="layui-table">
  <colgroup>
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>昵称</th>
      <th>QQ</th>
      <th>Phone</th>
      <th>Email</th>
      <th>反馈内容</th>
      <th>回馈内容</th>
    </tr> 
  </thead>
  <tbody>
   @foreach($data as $k=>$v)
   <tr>
     <td>{{$v->uname}}</td>
     <td>{{$v->qq}}</td>
     <td>{{$v->phone}}</td>
     <td>{{$v->email}}</td>
     <td>{{$v->content}}</td>
     <td>{{$v->huikui}}</td>
   </tr>
   @endforeach
  </tbody>
</table>

</div>

@endsection