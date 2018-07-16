@extends('host.common.default')
@section('content')
<div class="Inside_pages"> 
    <!--位置-->
    <div id="Filter_style">
        <div class="Location_link"> <em></em><a href="#">进口食品、进口牛</a> &lt; <a href="#">进口饼干/糕点</a> </div>
        <!--条件筛选样式-->
        <div class="Filter" id="Filter">
            <div class="Filter_list clearfix">
                <div class="Filter_title"><span>品牌：</span></div>
                <div class="Filter_Entire"><a href="#" class="Complete">全部</a></div>
                <div class="p_f_name infonav_hidden" style="height: 85px;">
                    @if($types != '')
                        <p>
                        @foreach($types as $k=>$v)
                            <a href="/list/{{ $v->id }}" title="{{ $v->name }}">{{ $v->name }} </a> 
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
            <div class="Sorted_style"> <a href="#" class="on">综合<i class="iconfont icon-fold"></i></a> <a href="#">信用<i class="iconfont icon-fold"></i></a> <a href="#">价格<i class="iconfont icon-fold"></i></a> <a href="#">销量<i class="iconfont icon-fold"></i></a> </div>
            <!--产品搜索-->
            <div class="products_search">
                <input name="" type="text" class="search_text" value="请输入你要搜索的产品" onfocus="this.value=''" onblur="if(!value){value=defaultValue;}">
                <input name="" type="submit" value="" class="search_btn">
            </div>
            <!--页数-->
            <div class="s_Paging"> <span> 1/12</span> <a href="#" class="on">&lt;</a> <a href="#">&gt;</a> </div>
        </div>
    </div>
    <div class="p_list  clearfix">
        <ul>
            <li class="gl-item"> <em class="icon_special tejia"></em>
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item"> <em class="icon_special tejia"></em>
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item"> <em class="icon_special tejia"></em>
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item"> <em class="icon_special xinping"></em>
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <li class="gl-item">
                <div class="Borders">
                    <div class="img"><a href="Product_Detailed.html"><img src="/common/host/products/P_1.jpg" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="Product_Detailed.html"><strong style="color:#ff7200;">【预售】</strong>乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>
                    <div class="Shop_name"><a href="#">三只松鼠旗舰店</a></div>
                    <div class="">
                        <div class="yushou-p fl">¥<strong>89</strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥898.00</del></div>
                            <div class="sold-num"><em>73</em>件已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
        </ul>
        <div class="Paging">
            <div class="Pagination"> <a href="#">首页</a> <a href="#" class="pn-prev disabled">&lt;上一页</a> <a href="#" class="on">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">下一页&gt;</a> <a href="#">尾页</a> </div>
        </div>
    </div>
</div>

@endsection