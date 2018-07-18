@extends('host.common.default')
@section('content')
<head>
    <style type="text/css">
        .pagelist {padding:10px 0; text-align:center; margin-left:550px;}
        .pagelist span,.pagelist a{ border-radius:3px; border:1px solid #dfdfdf;display:inline-block; padding:5px 12px;}
        .pagelist a{ margin:0 3px;}
        .pagelist span.current{ background:#09F; color:#FFF; border-color:#09F; margin:0 2px;}
        .pagelist a:hover{background:#09F; color:#FFF; border-color:#09F; }
        .pagelist label{ padding-left:15px; color:#999;}
        .pagelist label b{color:red; font-weight:normal; margin:0 3px;}
        .pagelist li{display: block; float: left; }
    </style>
</head>
<body id="body">
<div class="Inside_pages"> 
    <!--位置-->
    <div id="Filter_style">
        <div class="Location_link"> <em></em><a href="#">进口食品、进口牛</a> &lt; <a href="#">进口饼干/糕点</a> </div>
        <!--条件筛选样式-->
        <div class="Filter" id="Filter">
            <div class="Filter_list clearfix">
                <div class="Filter_title"><span>品牌：</span></div>
                <div class="Filter_Entire"><a href="/list" class="Complete">全部</a></div>
                <div class="p_f_name infonav_hidden" style="height: 85px;">
                    @if($types != '')
                        <p>
                        @foreach($types as $k=>$v)
                            <a href="/list/show/{{ $v->id }}" title="{{ $v->name }}">{{ $v->name }} </a> 
                        @endforeach
                        </p>
                    @endif
                </div>
                <p class="infonav_more"> <a class="more" onclick="infonav_more_down(0);return false;" href="javascript:">更多<em class="pullup"></em></a></p>
            </div>
        </div>
    </div>
    <!--产品列表样式-->
    <div id="Sorted" class="">
        <div class="Sorted">
            
            <div class="Sorted_style" id="sorted"> 
                <a href="#" class="on">综合<i class="iconfont icon-fold"></i></a>
                <a href="#">价格<i class="iconfont icon-fold"></i></a> <a href="#">销量<i class="iconfont icon-fold"></i></a> </div>
            
            <!--产品搜索-->
            <div class="products_search">
                <input name="" type="text" class="search_text" value="请输入你要搜索的产品" onfocus="this.value=''" onblur="if(!value){value=defaultValue;}">
                <input name="" type="submit" value="" class="search_btn">
            </div>
        </div>
    </div>
    <div class="p_list  clearfix">
        <ul>
            @foreach($goods as $k=>$v)
            <li class="gl-item"> <em class="icon_special tejia"></em>
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">{{ $v->name }}</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>{{ $v->price }}</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>{{ $v->sells }}</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>@endforeach
        </ul>
        <div class="pagelist">
          {!! $goods->render() !!}
            </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $('#sorted a').eq(1).click(function(){
        
        status = 1;
        //alert('aaa');
        //alert("{{ url('list/edit') }}/"+"{{ $id }}");
        $.get("{{ url('list/edit') }}/"+"{{ $id }}",     
                function(data) {
                $('#body').html(data);
                });
    })
    $('#sorted a').eq(2).click(function(){
        //alert('aaa');
        //alert("{{ url('list/edit') }}/"+"{{ $id }}");
        $.get("{{ url('list/destroy') }}/"+"{{ $id }}",     
                function(data) {
                $('#body').html(data);
                });
    })
    $('#sorted a').eq(0).click(function(){
        //alert('aaa');
        //alert("{{ url('list/edit') }}/"+"{{ $id }}");
        $.get("{{ url('list/allinfo') }}/"+"{{ $id }}",     
                function(data) {
                $('#body').html(data);
                });
    })
</script>


@endsection