@extends('admin.common.head')
@section('content')
<h1>管理中心</h1>
<hr>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-primary">
                <div class="card-block pb-0">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                        </div>
                    </div>
                    <h4 class="mb-0">{{$ss}}元</h4>
                    <p>总销售总额</p>
                </div>
                <div class="chart-wrapper px-1" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block pb-0">
                    <button type="button" class="btn btn-transparent active p-0 float-right">
                        <i class="icon-location-pin"></i>
                    </button>
                  
                    <h4 class="mb-0">{{$dingdan}}个</h4>
                  
                    <p>今日订单总数</p>
                </div>
                <div class="chart-wrapper px-1" style="height:70px;">
                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-warning">
                <div class="card-block pb-0">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="mb-0">9.823</h4>
                    <p>今日评论数</p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-danger">
                <div class="card-block pb-0">
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="mb-0">44</h4>
                    <p>退货数量</p>
                </div>
                <div class="chart-wrapper px-1" style="height:70px;">
                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
 </div>
@endsection