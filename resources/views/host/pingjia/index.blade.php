@extends('host.common.default')
@section('content')
<style>
      *{
        margin:0;
        padding:0;
      }
      /* .starts{      
        padding-left: 40%;
        padding-top:100px;      
      } */
      .starts ul{
        float:left;
      }
      .starts ul li{
        list-style: none;
        width:32px;
        height:21px;
        float:left;
        background:url(/common/host/images/stark2.png) no-repeat;
        
      }
      .starts ul li.on{
        background:url(/common/host/images/stars2.png) no-repeat;
      }
      .starts ul span{
        display:inline;
        float:left;
        padding-left:10px;
        height:21px;
        line-height:21px;
      }
    </style>
<div class="user_style clearfix">
 <div class="user_center clearfix">
 <!--产品预订样式-->
 <div class="left_style">
     <div class="menu_style">
     <div class="user_title"><a href="">用户中心</a></div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a><img src="">
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name username">{{session('username')}}</span><a href="#">[修改密码]</a></p>
       <p>访问时间</p>
       </div>           
     </div>
     <div class="sideMen">
     <!--菜单列表图层-->
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_1"></em>订单管理</dt>
      <dd>
        <ul>
          <li> <a href="/hostorder/index">我的订单</a></li>
          <li> <a href="用户中心-收货地址.html">收货地址</a></li>
          <li> <a href="用户中心-产品预订.html">产品预订</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
      <ul>
        <li> <a href="#"> 用户信息</a></li>
        <li> <a href="#"> 我的收藏</a></li>
        <li> <a href="#"> 我的留言</a></li>
        <li> <a href="#">我的标签</a></li>
        <li> <a href="#"> 我的推荐</a></li>
        <li><a href="#"> 我的评论</a></li>
      </ul>
    </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_3"></em>账户管理</dt>
      <dd>
       <ul>
       <li><a href="用户中心-账户管理.html">账户余额</a></li>
        <li><a href="用户中心-消费记录.html">消费记录</a></li>   
       <li><a href="#">跟踪包裹</a></li>
       <li><a href="#">资金管理</a></li>
      </ul>
     </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_4"></em>评价管理</dt>
      <dd>
        <ul>
          <li> <a href="/pingjia/index">我的评价</a></li>
        </ul>
      </dd>
    </dl>
    </div>
      <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
   </div>
 </div>

  <div class="right_style">
  <div class="title_style"><em></em>发表评论</div> 
   <div class="Booking_style">
    <div class="Note"></div>
      <div class="Order_form_list">      
       <table class="tijiao">
         <thead>
          <tr>
          <td class="list_name_title0">商品</td>
          <td class="list_name_title3">订单号</td>
          <td class="list_name_title1">评分</td>
          <td class="list_name_title2">评价内容</td>
         </tr></thead> 
        
          <tbody>       
           <tr class="Order_info">
           <td colspan="7" class="Order_form_time">
           </td>
           </tr>
           <tr class="Order_Details">
           <td class="Order_product_style">       
            <div class="product_name clearfix">
            <a href="#" class="product_img" style="margin-left:20px;"><img src="/uploads/{{$dat->profile}}" width="80px" height="80px"></a>
             <p style="float:left;" class="pingjiamingzi">{{$dat->oname}}</p>
             <div style="margin-top:30px; float:left; margin-left:-20px;">{{$dat->shuliang}}瓶</div>
            <a href="3" class="p_name" style="margin-left:50px;"></a>
            @if($dat->guige==1)
             <p class="specification" style="margin-left:23px;">规格一</p>
             @elseif($dat->guige==2)
             <p class="specification" style="margin-left:23px;">规格二</p>
             @elseif($dat->guige==3)
             <p class="specification" style="margin-left:23px;">规格三</p>
            @endif
           
            </div>
           </td>
            <td class="split_line pricee spddh">{{$dat->ddh}}</td>
           <td class="split_line pricee" value="55" width="200px;">
              <div class="starts">
              <ul id = "pingStar" style="height:50px;">
                <li rel = "1" title = "特别差，给1分" style="display:inline;" value="1"></li>
                <li rel = "2" title = "很差，给2分" style="display:inline;" value="2"></li>
                <li rel = "3" title = "一般，给3分" style="display:inline;" value="3"></li>
                <li rel = "4" title = "很好，给4分" style="display:inline;" value="4"></li>
                <li rel = "5" title = "非常好，给5分" style="display:inline;" value="5"></li>
                <span id="dir"></span>
              </ul>
              <input type="hidden" value="" id = "startP" />
            </div>
           </td>
           <td><textarea name="" id="" cols="30" rows="10" class="pjcontent">
           </textarea></td>
           </tr>
           <input type="hidden" class="pjid" value="{{$dat->pid}}">
           <input type="hidden" class="did" value="{{$dat->id}}">
           </tbody>
            
         </table>
      </div>

     <a href="#" class="btn pinglun" style="width:100px;height:30px;line-height:30px;float:right;">发表评论</a>
      <script>
        var ck=$('.sss');
        //批量删除
        $('.qsc').click(function(){
            var items = [];
            for (var i=0; i<ck.length; i++) {
                if (ck[i].checked) {
                    items.push(ck[i].value);  // 将id都放进数组
                }
            }
          if(items ==null || items.length==0){
            return false;
          }
            $.get('/cur/deleteall',{'che':items},function(msg){
              if(msg == 'success'){
                  layer.msg('删除成功',{icon: 6});
                  // 移除页面 节点
                  $('input:checked').parent().parent().parent().parent().remove();
                }else{
                  layer.msg('删除失败', {icon: 5});
                }
            },'html')
        })

        //获取一个物品的价格
       $('.sss').click(function(){
        var s=$('.pricee').text();
        console.log(s);
       });
       //获取评价的分数

         $('#pingStar li').click(function(){
               pf=$(this).attr('rel');

        })

       //获取评价的照片
       $('.pinglun').click(function(){
       		//获取照片的路径
       	   var profile=$('.product_img img').attr('src');
       	   //获取商品的名字
       	   var name=$('.pingjiamingzi').text();
       	   //获取用户
       	   var username=$('.username').text();
       	   //获取评价内容
       	   var text=$('.pjcontent').val();
           //去除评价内容的空格
           var text1=text.replace(/\s+/g, "");
           //获取商品的订单号
           var ddh=$('.spddh').text();
           //获取商品的订单id号
           var did=$('.did').val();
           //获取商品的id    
       	   var spid=$('.pjid').val();
          
           if(!$('#pingStar li').is('.on')){
               layer.alert('请填写评分哦', {icon: 6});
               return;
            }
 
      	$.get('/pingjia/store',{'a':profile,'b':name,'c':username,'d':text1,'e':spid,'f':ddh,'g':pf,'h':did},function(msg){
      			if(msg=='success' && text1!=null){
      				layer.alert('评价成功', {icon: 6});
      				$('.tijiao').remove();
      			}else{
      				layer.alert('请填写内容', {icon: 6});
      			}
      	},'html');
       })
      //评分功能
      window.onload = function(){
        var s = document.getElementById("pingStar");
            m = document.getElementById("dir"),
            n = s.getElementsByTagName("li"),
            input = document.getElementById("startP");//保存所选值
        clearAll = function(){
          for(var i = 0;i < n.length;i++){
            n[i].className = "";
          }
        }
        for(var i = 0;i < n.length;i++){
          n[i].onclick = function(){
            var q = this.getAttribute("rel");
            clearAll();
            input.value = q;
            for(var i = 0;i < q;i++){
              n[i].className = "on";
            }
            m.innerHTML = this.getAttribute("title");
          }
          n[i].onmouseover = function(){
            var q = this.getAttribute("rel");
            clearAll();
            for(var i = 0;i < q;i++){
              n[i].className = "on";
            }
            m.innerHTML = this.getAttribute("title");
          }
          n[i].onmouseout = function(){
            clearAll();
            for(var i = 0;i < input.value;i++){
              n[i].className = "on";
            }
              m.innerHTML ='';
          }
        }
      }
      </script>
   </div>
  </div>
</div>
</div>
@endsection