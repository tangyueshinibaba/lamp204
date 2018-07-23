@extends('host.common.default')
@section('content')
@include('host.vip.index')
 <!--右侧样式-->
  <div class="right_style">
  <div class="title_style"><em></em>订单管理</div> 
   <div class="Order_form_style">
      <div class="Order_form_filter">
       <a href="#" class="on">全部订单（{{$r}}）</a>
       <a href="/pingjia/show" class="">已评价（2）</a>
       <a href="#" class="">代发货（3）</a>
       <a href="#" class="">待收货（5）</a>
       <a href="#" class="">退货/退款（0）</a>
       <a href="#" class="">交易成功（0）</a>
       <a href="#" class="">交易关闭（0）</a>
      </div>
      <div class="Order_Operation">
     <div class="left"> <label><input name="che[]" type="checkbox" value=""  class="checkbox"/>全选</label> <input name="" type="submit" value="批量删除"  class="confirm_Order"/></div>
     <div class="right_search"><input name="" type="text"  class="add_Ordertext" placeholder="请输入产品标题或订单号进行搜索"/><input name="" type="submit" value="搜索订单"  class="search_order"/></div>
      </div>
      <div class="Order_form_list">
         <table>
         <thead>
          <tr><td class="list_name_title0">商品</td>
          <td class="list_name_title1">单价(元)</td>
          <td class="list_name_title2">数量</td>
          <td class="list_name_title4">实付款(元)</td>
          <td class="list_name_title5">订单状态</td>
          <td class="list_name_title6">操作</td>
         </tr>
         </thead> 
           
         @foreach($data as $k => $v)
         
            <tbody>       
           <tr class="Order_info"><td colspan="6" class="Order_form_time"><input name="che[]" type="checkbox" value="{{$v->id}}"  class="checkbox che1"/>下单时间:{{$v->created_at}}| 订单号：{{$v->ddh}}</td></tr>
           <tr class="Order_Details" >
           <td colspan="3">
           <table class="Order_product_style">
             <tbody><tr>
             <td>
              <div class="product_name clearfix">
              <a href="#" class="product_img"><img src="/uploads/{{$v->profile}}" width="80px" height="80px"></a>
              <a href="3" class="p_name">{{$v->oname}}</a>
              <p class="specification">礼盒装20个/盒</p>
              </div>
              </td>
             <td class="split_line"></td>
             <td>{{$v->shuliang}}</td>
              </tr>
              </tbody>
            </table>
           </td>   
           <td class="split_line">{{$v->zongjia}}</td>
           <td class="split_line"><p style="color:#F33">买家已付款</p></td>
           <td class="operating">
                <a href="/hostorder/show/{{$v->id}}">查看订单</a>
                <a href="#">在线客服</a>
              
               
                @if($v->sfpj==1)
                  <a href="#" style="display:inline;">已评价</a>
                  <a href="#"  style="display:inline;" class="lookpj" rel="{{$v->yiduiyi->id}}">查看评价</a>
               @else
               <a href="/pingjia/index/{{$v->id}}" style="display:inline;">去评价</a>
               @endif

                <a href="#" class="Delivery_btn">确认收货</a>     
           </td>
           </tr>
           </tbody>  
           @endforeach
           
         </table>
    </div>
     </div>
   </div>
   <script>
    $(document).ready(function(){
      $('.Order_form_style input').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });
    });
    //查看评价
    $('.lookpj').click(function(){
    layer.open({
      type: 2,
      area: ['700px', '450px'],
      fixed: false, //不固定
      maxmin: true,
      content: '/pingjia/show/'+$(this).attr('rel'),
    });
    })
    
    </script>
    
    <script type="text/javascript">
      //全选
      $('.qx').click(function(){
        $('.checkbox').attr('checked',true);
      })
    </script>

    <script type="text/javascript">
      var a = $('.che1');
        $('.confirm_Order').click(function(){
          var b = [];
            for (var i=0; i<a.length; i++) {
                if (a[i].checked) {
                    b.push(a[i].value);  // 将id都放进数组
                }
            }
          if(b ==null || b.length==0){
            return false;
          }

          $.get('/hostorder/deleteall',{'che':b},function(msg){
              if(msg == 'success'){
                  layer.msg('删除成功',{icon: 6});
                  // 移除页面 节点
                  $('input:checked').parent().parent().parent().parent().remove();
                }else{
                  layer.msg('删除失败', {icon: 5});
                }
            },'html')
        })
    </script>
  </div>
 </div>
</div>

@endsection