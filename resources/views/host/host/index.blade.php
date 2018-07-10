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
{{--产品详情--}}
@section('product')
<div class="clearfix Plate_style">
  <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/common/host/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
    @foreach($products as $k=>$v)
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_44.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">{{$v->pname}}</a>
     <h3><b>￥</b>{{$v->price}}</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="/goumai/index/{{$v->id}}" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     @endforeach
    </ul>
    </div>
  </div>
@endsection






















{{--轮播图--}}
@section('carousel')
<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul class="smallUl"></ul>
			</div>
			<div class="bd">
				
				<ul>
					@foreach($carousel as $k => $v)
					<li><a href="{{$v->url}}" target="_blank"><div style="background:url(/common/admin/images/lunbo/{{$v->img}}) no-repeat; background-position:center; width:100%; height:450px;"></div></a></li>
					@endforeach
				</ul>
				
			</div>
			<!-- 下面是前/后按钮-->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
		</script>
@endsection

{{--收藏夹--}}
<script type="text/javascript">
	$('.Collect').click(function(){
		$('.Collect').text('已收藏')
	})
</script>