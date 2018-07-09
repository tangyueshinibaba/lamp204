@extends('host.common.head')
{{--广告位--}}
@section('adver')
<div class="Ads_style">
	@foreach($data as $k=>$v)
	@if($v->status==1 && $v->weizhi==1)
	<div class="adver" style="width:315px;height:348px;float:left;">
		<a href="#"><img src="/uploads/{{$v->profile}}"style="width:315px;height:348px; " ></a>
	</div>
	@elseif($v->status==1 && $v->weizhi==2)
	<div class="adver" style="width:315px;height:348px;  margin-left:320px;">
		<a href="#"><img src="/uploads/{{$v->profile}}"style="width:318px;height:348px;" ></a>
	</div>
	@elseif($v->status==1 && $v->weizhi==3)
	<div class="adver" style="width:315px;height:348px;  float:right;">
		<a href="#"><img src="/uploads/{{$v->profile}}"style="width:315px;height:348px;" value="3"></a>
	</div>
	@endif
	@endforeach
</div>
@endsection
{{--栏目表--}}
@section('cates')
	<div class="Menu_style" id="allSortOuterbox">
   <div class="title_name"><em></em>所有商品分类</div>
  	 <div class="content hd_allsort_out_box_new">
  	 @foreach ($cates as $k=>$v)
  	 	
    <ul class="Menu_list">
      <li class="name">
      @if($v->pid=='0')
		<div class="Menu_name" style="margin-top:2px;">
			<a href="product_list.html">{{$v->cname}}</a> 
			<span>&lt;</span>
		</div>
		@endif
		<!-- 一级分类 -->
		@foreach($b as $kk=>$vv)
		@if($vv->pid==$v->id)

          <a href="" style="margin-left:10px;">{{$vv->cname}}</a> |
          	<!-- 二级分类 -->
			@foreach($c as $kkk=>$vvv)
			@if($vvv->pid==$vv->id)
				<div class="menv_Detail" style="display: none;">
				 <div class="cat_pannel clearfix">
				   <div class="hd_sort_list">
				    <dl class="clearfix" data-tpc="1">
					 <dt><a href="#">{{$vvv->cname}}<i>&gt;</i></a></dt>
					 <dd><a href="#">撕拉面膜</a></dd> 
					</dl>
				   </div>
				  <div class="Brands">
				  </div>
				  </div>
				  <!--品牌-->		  
				</div>
	         
			@endif
			@endforeach
			
		@endif
		@endforeach
		
 
		</li>
		
    </ul>
   
    @endforeach
   </div>

  </div>

@endsection

