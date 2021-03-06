@extends('host.common.default')
@section('content')
<!--注册成功弹窗-->
@if(session('success'))
    <div class="alert alert-success">
        <script >layer.alert('{{ session('success') }}', {icon: 6})</script>;
    </div>  
@endif
<!--轮播图开始-->
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
<!-- 轮播图结束 -->
<!--内容样式-->
<div id="mian">
 <div class="clearfix marginbottom">
 <!--产品分类样式栏目表-->
  <div class="Menu_style" id="allSortOuterbox">
   <div class="title_name"><em></em>所有商品分类</div>
     <div class="content hd_allsort_out_box_new">
     @foreach ($cates as $k1=>$v1)
      
    <ul class="Menu_list">
      <li class="name">
      @if($v1->pid=='0')
    <div class="Menu_name" style="margin-top:2px;">
      <a href="product_list.html">{{$v1->cname}}</a> 
      <span>&lt;</span>
    </div>
    @endif
    <!-- 一级分类 -->
    @foreach($b as $kk=>$vv)
    @if($vv->pid==$v1->id)

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
<!--产品分类样式栏目表结束-->
  <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",  });</script>
  <!--产品栏切换-->
  <div class="product_list left">
      <div class="slideGroup">
      <div class="parHd">
        <ul><li>新品上市</li><li>超值特惠</li><li>本期团购</li><li>产品精选</li><li>抢先一步</li></ul>
      </div>
      <div class="parBd">

          <div class="slideBoxs">
            <a class="sPrev" href="javascript:void(0)"></a>
            <ul>
              
              @foreach($products as $k => $v)
              @if($v->status == 1)
              <li>
                <div class="pic"><a href="/goumai/index/{{$v->id}}" target="_blank"><img src="/uploads/{{$v->profile}}" /></a></div>
                <div class="title">
                  <a href="#" target="_blank" class="name">{{$v->pname}}|{{$v->jieshao}}</a>
                  <h3><b>￥</b>{{$v->price}}</h3>
                </div>
              </li>
              @endif
              @endforeach
             
            </ul>
            <a class="sNext" href="javascript:void(0)"></a>
          </div><!-- slideBox End -->

          <div class="slideBoxs">
            <a class="sPrev" href="javascript:void(0)"></a>
            <ul>
             @foreach($products as $k => $v)
              @if($v->status == 2)
              <li>
                <div class="pic"><a href="/goumai/index/{{$v->id}}" target="_blank"><img src="/uploads/{{$v->profile}}" /></a></div>
                <div class="title">
                  <a href="#" target="_blank" class="name">{{$v->pname}}|{{$v->jieshao}}</a>
                  <h3><b>￥</b>{{$v->price}}</h3>
                </div>
              </li>
              @endif
              @endforeach
              
            </ul>
            <a class="sNext" href="javascript:void(0)"></a>
          </div><!-- slideBox End -->

          <div class="slideBoxs">
            <a class="sPrev" href="javascript:void(0)"></a>
            <ul>
              @foreach($products as $k => $v)
              @if($v->status == 3)
              <li>
                <div class="pic"><a href="/goumai/index/{{$v->id}}" target="_blank"><img src="/uploads/{{$v->profile}}" /></a></div>
                <div class="title">
                  <a href="#" target="_blank" class="name">{{$v->pname}}|{{$v->jieshao}}</a>
                  <h3><b>￥</b>{{$v->price}}</h3>
                </div>
              </li>
              @endif
              @endforeach
            </ul>
            <a class="sNext" href="javascript:void(0)"></a>
          </div><!-- slideBox End -->
                      <div class="slideBoxs">
            <a class="sPrev" href="javascript:void(0)"></a>
            <ul>
             @foreach($products as $k => $v)
              @if($v->status == 4)
              <li>
                <div class="pic"><a href="/goumai/index/{{$v->id}}" target="_blank"><img src="/uploads/{{$v->profile}}" /></a></div>
                <div class="title">
                  <a href="#" target="_blank" class="name">{{$v->pname}}|{{$v->jieshao}}</a>
                  <h3><b>￥</b>{{$v->price}}</h3>
                </div>
              </li>
              @endif
              @endforeach
            </ul>
            <a class="sNext" href="javascript:void(0)"></a>
          </div><!-- slideBox End -->
                      <div class="slideBoxs">
            <a class="sPrev" href="javascript:void(0)"></a>
            <ul>
             @foreach($products as $k => $v)
              @if($v->status == 5)
              <li>
                <div class="pic"><a href="/goumai/index/{{$v->id}}" target="_blank"><img src="/uploads/{{$v->profile}}" /></a></div>
                <div class="title">
                  <a href="#" target="_blank" class="name">{{$v->pname}}|{{$v->jieshao}}</a>
                  <h3><b>￥</b>{{$v->price}}</h3>
                </div>
              </li>
              @endif
              @endforeach
            </ul>
            <a class="sNext" href="javascript:void(0)"></a>
          </div><!-- slideBox End -->

      </div><!-- parBd End -->
    </div>
        <script type="text/javascript">
      /* 内层图片无缝滚动 */
      jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
      /* 外层tab切换 */
      jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
    </script>
        <!--广告样式-->
        <div class="Ads_style">
            @foreach($data as $k2=>$v2)
            @if($v2->status==1 && $v2->weizhi==1)
            <div class="adver" style="width:315px;height:348px;float:left;">
              <a href="#"><img src="/uploads/{{$v2->profile}}"style="width:315px;height:348px; " ></a>
            </div>
            @elseif($v2->status==1 && $v2->weizhi==2)
            <div class="adver" style="width:315px;height:348px;  margin-left:320px;">
              <a href="#"><img src="/uploads/{{$v2->profile}}"style="width:315px;height:348px;" ></a>
            </div>
            @elseif($v2->status==1 && $v2->weizhi==3)
            <div class="adver" style="width:315px;height:348px;  float:right;">
              <a href="#"><img src="/uploads/{{$v2->profile}}"style="width:315px;height:348px;" value="3"></a>
            </div>
            @endif
            @endforeach
          </div>
        <!--广告样式结束-->
  </div>
 </div>
 <!--板块栏目样式-->

 

 <div class="clearfix Plate_style">
  

  <!--板块名称-->
  <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/common/host/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
    @foreach($products as $k3=>$v3)
     <li class="product_display">
     <a href="#" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/uploads/{{$v3->profile}}"  width="140" height="140"/></a>
     <a href="#" class="name">{{$v3->pname}}</a>
     <h3><b>￥</b>{{$v3->price}}</h3>
    <div class="Detailed">
     <div class="content">
      <p class="center"><a href="/goumai/index/{{$v3->id}}" class="Buy_btn">立即购买</a></p>
      </div>
     </div>
     </li>
     @endforeach
    </ul>
    </div>
  </div>

   <script type="text/javascript">
      $('.Buy_btn').click(function(){
          var s=$('.shoucang').val();
          console.log(s);
         
      })
   </script>
  <!--板块名称-->
    
 </div>
 <!--友情链接-->
 <div class="link_style clearfix">
 <div class="title">友情链接</div>
 <div class="link_name">
 @foreach($fris as $m => $n)
  <a href="{{ $n -> url }}"><img src="/common/admin/images/fri/{{$n -> pic}}"  width="120" height="50"/></a>
  @endforeach
 </div>
 </div>
</div>


@endsection