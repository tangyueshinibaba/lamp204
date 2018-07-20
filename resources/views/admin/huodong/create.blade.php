@extends('admin.common.head')
@section('content')
	<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加图片</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/adminhd/store" enctype="multipart/form-data"> 
    {{ csrf_field() }} 
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="pname" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="profile[]" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" multiple />
        </div>
      </div>     
 
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="jieshao" style="width:25%; height:90px;"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="price" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>状态：</label>
        </div>
        <div class="field">
          <select name="status" id="">
            <option value="">--请选择--</option>
            <option value="1">新品上市</option>
            <option value="2">超值特惠</option>
            <option value="3">本期团购</option>
            <option value="4">产品精选</option>
            <option value="5">抢先一步</option>
          </select>
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
