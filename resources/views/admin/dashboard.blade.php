@extends("layouts.admin")

@section('content')

	<div class="wrapper wrapper-content">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">All</span>
                                <h5>Stores</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><i class="fa fa-shopping-cart"></i>&nbsp;{{ $statistics->totalStores() }}</h1>
                                <!-- <div class="stat-percent font-bold text-success">20%
                                    <i class="fa fa-level-up"></i>
                                </div> -->
                                <small>Total stores</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Annual</span>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"> <i class="fa fa-shopping-bag"></i>  {{ $statistics->totalOrders() }}</h1>
                            <div class="stat-percent font-bold text-info">20%
                                    <i class="fa fa-level-up"></i>
                                </div>
                                <small>orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <!-- <span class="label label-primary pull-right">annual</span> -->
                                <h5>Users</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><i class="fa fa-users"></i>&nbsp;{{ $statistics->totalUsers() }}</h1>
                                <!-- <div class="stat-percent font-bold text-navy">44%
                                    <i class="fa fa-level-up"></i>
                                </div> -->
                                <small>all users</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">All</span>
                                <h5>Products</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><i class="fa fa-shopping-basket"></i>&nbsp;{{ $statistics->totalProducts() }}</h1>
                                <div class="stat-percent font-bold text-danger">
                                    
                                </div>
                                <small>total products</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-12">
                       <div class="ibox">
                            <div class="ibox-content">
                                <h2><i class="fa fa-shopping-bag"></i>&nbsp;Recent Orders</h2>
                                <div class="row">
                                        <div class="col-lg-3">
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>records per page</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <div class="input-group">
                                    
                                            <input type="text" placeholder="Search... " class="input form-control">
                                            <span class="input-group-btn">
                                            <button type="button" class="btn btn btn-primary">
                                                <i class="fa fa-search"></i> Search</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                              
                              

                                <div class="table-responsive m-t-lg">
                                   
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>order id</th>
                                            <th>customer name</th>
                                            <th>email</th>
                                            <th>contact</th>
                                            <th>total products</th>
                                            <th>amount</th>
                                            <th>status</th>
                                            <th>order date</th>
                                            <th>action</th>
                                        </tr>
                                    </table>
                                </div>
                          </div>
                       </div>
                    </div> 
                   
                </div>

            </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Welcome to Gencart' , 'Admin: John Doe');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
@endsection