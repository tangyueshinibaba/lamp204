@extends('admin.common.head')
@section('content')
	<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加图片</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/carousel/store" enctype="multipart/form-data"> 
    {{ csrf_field() }} 
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
        </div>
      </div>     
 
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="describe" style=" height:90px;"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="url" class="input w50" value="" name="url" data-validate="required:请输入地址" />
          <div class="tips"></div>
        </div>
      </div>
     
      
  
      <div class="form-group">
        <div class="label"></div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
