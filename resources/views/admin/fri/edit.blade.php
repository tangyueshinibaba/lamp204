@extends('admin.common.head')
@section('content')

   <form method="post" class="form-x" action="/fri/update/{{ $data -> id }}" enctype="multipart/form-data">
   {{ csrf_field() }}
      <div class="form-group">
        <div class="label">
          <label>链接标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="{{ $data -> title}}">
          <div class="tips" title=""></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>LOGO上传：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="pic" class="input tips" style="width:25%; float:left;" value="/common/admin/images/fri/{{ $data -> pic}}">
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>链接地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="url" value="{{ $data -> url }}">
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
@endsection