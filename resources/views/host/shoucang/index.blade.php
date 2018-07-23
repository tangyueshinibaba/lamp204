@extends('host.common.default')
@section('content')
@include('host.vip.index')
 <!--收藏样式-->
  <div class="right_style">
  <div class="title_style"><em></em>我的收藏</div> 
  <div class="Favorites_slideTxtBox">
     <div class="hd"><ul><li>收藏的商品</li></ul></div>
     <div class="bd">
        <ul class="commodity_list clearfix">
         <div class="Number_Favorites">共收藏：{{$n}}条</div>
         <div class="clearfix">
          @foreach($shoucang as $k => $v)
          <li class="collect_p">
         <a href="/shoucang/destroy/{{$v->id}}"><em class="iconfont  delete"></em></a>
         <a href="/goumai/index/{{$v->pid}}" class="buy_btn">立即购买</a>
       <div class="collect_info">
        <div class="img_link"> <a href="#" class="center "><img src="{{$v->img}}"></a></div>
        <dl class="xinxi">
         <dt><a href="#" class="name">{{$v->pname}}</a></dt>
         <dd><span class="Price"><b>￥</b>{{$v->price}}</span></dd>         
        </dl>
        </div>
       </li>
        @endforeach
       </div>
       <div class="Paging">
    <div class="Pagination">
    <a href="#">首页</a>
     <a href="#" class="pn-prev disabled">&lt;上一页</a>
   <a href="#" class="on">1</a>
   <a href="#">2</a>
   <a href="#">3</a>
   <a href="#">4</a>
   <a href="#">下一页&gt;</a>
   <a href="#">尾页</a> 
     </div>
    </div>
        </ul>
        
     </div>
   </div>
   <script>jQuery(".Favorites_slideTxtBox").slide({trigger:"click"});</script>
  </div>
 </div>
</div>
@endsection
