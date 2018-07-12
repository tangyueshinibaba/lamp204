@extends('admin.common.head')
@section('content')
<div class="panel admin-panel margin-top">
    <div class="padding border-bottom">  
	    <a class="button border-yellow" href="/yhq/index"> 优惠券列表</a>
	</div>
	<div class="body-content">
	    <form method="post" class="form-x" action="/yhq/store">
	     {{ csrf_field() }} 
	      <div class="form-group">
	        <div class="label">
	          <label>优惠券编号：</label>
	        </div>
	        <div class="field">
	          <input type="text" class="input w50" name="num" value="" data-validate="required:请输入标题">         
	          <div class="tips" title=""></div>
	        </div>
	      </div> 
	       <div class="form-group">
	        <div class="label">
	          <label>优惠券名称：</label>
	        </div>
	        <div class="field">
	          <input type="text" class="input w50" name="title" value="">         
	          <div class="tips" title=""></div>
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="label">
	          <label>优惠券金额：</label>
	        </div>
	        <div class="field">
	          <input type="text" class="input w50" name="price" value="">         
	          <div class="tips" title=""></div>
	        </div>
	      </div> 
	      <div class="form-group">
	        <div class="label">
	          <label>优惠券规则：</label>
	        </div>
	        <div class="field">
	          <input type="text" class="input w50" name="yhprice" value="">         
	          <div class="tips" title=""></div>
	        </div>
	      </div>        
	      <div class="form-group">
	        <div class="label">
	          <label>优惠券说明：</label>
	        </div>
	        <div class="field">
	          <input type="text" class="input w50" name="shuoming" value="">         
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="label">
	          <label>开始时间：</label>
	        </div>
	        <div class="field">
	          <input type="date" class="input w50" name="starttime" value="">         
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="label">
	          <label>结束时间：</label>
	        </div>
	        <div class="field">
	          <input type="date" class="input w50" name="endtime" value="">         
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
@endsection