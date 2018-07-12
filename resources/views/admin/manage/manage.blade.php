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
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/admin/manage/store" enctype="multipart/form-data"> 
      <div class="form-group">
        <div class="label">
          <label>网页title：</label>
        </div>
        {{ csrf_field() }} 
        <div class="field">
          <input type="text" class="input w50" value="{{ $info->title }}" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="{{ $info->keywords }}" name="keywords" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>logo：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="profile" class="input tips" style="width:25%; float:left;"  value="{{ $info->profile }}"  data-toggle="hover" data-place="right" data-image="" />
          <!--<input type="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" name = "profile">-->
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
            <label>网站开关：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            开 <input id="ishome" name="switch" @if($info->switch == 1) checked @endif value="1" type="radio">
            关 <input id="isvouch" name="switch" @if($info->switch == 0) checked @endif value="0" type="radio">
         
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>版权：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="{{ $info->copyright }}" name="copyright" data-validate="required:请输入标题" />
          <div class="tips"></div>
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
  </div>
</div>

</body></html>
@endsection