@extends('layouts.app')

@section('contents')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        @include('flash::message')
        </div>
    </div>
    <h1>
        Home
        <small>Menu</small>
    </h1>
    {{--<ol class="breadcrumb">
        <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Main</li>
    </ol>--}}
</section>

<!-- Main content -->
<section class="content main-menu-wrapper">
    <!-- Info boxes -->
    <div class="row">
        <!-- {{--@role('superadministrator|administrator|user')--}} -->
        <!-- {{--@endrole--}} -->
        {{--<div class="col-md-1 col-sm-6 col-xs-12">
            <div class="main-menu icon-menu" style="margin:0">
                <a class="info-box" href="{{ url('dashboard') }}" style="display: block">
                    <span class="info-box-icon bg-orange"><i class="fa fa-dashboard"></i></span>

                    <div class="text-center">Dashboard</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>--}}
        <div class="col-md-3 col-sm-6 col-xs-12">
            <p>
                <strong>New Requests</strong>
            </p>
            <div class="info-box">
                <span class="info-box-icon bg-light-gray"><i class="fa fa-certificate"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Ambassador Level</span>
                    <span class="info-box-number">21</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            <div class="info-box">
                <span class="info-box-icon bg-light-gray"><i class="fa fa-truck"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Redeem Shipment</span>
                    <span class="info-box-number">137</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <p class="text-center">
                <strong>Goal Completion</strong>
            </p>

            <div class="progress-group">
                <span class="progress-text">New Members</span>
                <span class="progress-number"><b>160</b>/200</span>

                <div class="progress sm">
                    <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                </div>
            </div>
            <!-- /.progress-group -->
            <div class="progress-group">
                <span class="progress-text">Stories</span>
                <span class="progress-number"><b>310</b>/400</span>

                <div class="progress sm">
                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                </div>
            </div>
            <!-- /.progress-group -->
            <div class="progress-group">
                <span class="progress-text">Pinned (badge)</span>
                <span class="progress-number"><b>480</b>/800</span>

                <div class="progress sm">
                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                </div>
            </div>
            <!-- /.progress-group -->
            <div class="progress-group">
                <span class="progress-text">Leveled Up</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
            </div>
            <!-- /.progress-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-5 col-sm-6 col-xs-12">
            <p class="text-center">
                <strong>Stories: 1 Jan, 2020 - 30 Jul, 2020</strong>
            </p>

            <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="salesChart" style="height: 180px;"></canvas>
            </div>
            <!-- /.chart-responsive -->
        </div>

        <div class="clearfix"></div>
        <div class="text-center">
            <a href="{{ url('dashboard') }}" class="btn btn-danger"><i class="fa fa-dashboard"></i> Dashboard</a>
        </div>

        <div class="clearfix"></div>
        <hr>

        <div class="icon-menu-wrapper">
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('boards') }}" style="display: block">
                    <span class="info-box-icon bg-red"><i class="fa fa-bullseye"></i></span>
                    
                    <div class="text-center">Monitoring</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="icon-menu-wrapper">
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('quests') }}" style="display: block">
                    <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

                    <div class="text-center">Action (Quests, Redeems & Quizzes)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('challenges') }}" style="display: block">
                    <span class="info-box-icon bg-green"><i class="fa fa-trophy"></i></span>

                    <div class="text-center">Achivement (Challenges)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="clearfix"></div>
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('metrics') }}" style="display: block">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-star-half-o"></i></span>

                    <div class="text-center">Unit (Metrics & Items)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('conditions') }}" style="display: block">
                    <span class="info-box-icon bg-black"><i class="fa fa-globe"></i></span>

                    <div class="text-center">Boundary (Conditions)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="icon-menu-wrapper">
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('rules') }}" style="display: block">
                    <span class="info-box-icon bg-maroon"><i class="fa fa-flask"></i></span>

                    <div class="text-center">Process (Rules & Workflows)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('preferences') }}" style="display: block">
                    <span class="info-box-icon bg-navy"><i class="fa fa-history"></i></span>

                    <div class="text-center">Record (Histories & Preferences)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="clearfix"></div>
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('categories') }}" style="display: block">
                    <span class="info-box-icon bg-light-blue"><i class="fa fa-sitemap"></i></span>

                    <div class="text-center">Line (Categories, Tags & Statuses)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="icon-menu-wrapper">
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('pages') }}" style="display: block">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-edit"></i></span>

                    <div class="text-center">Content Management</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('communities') }}" style="display: block">
                    <span class="info-box-icon bg-navy"><i class="fa fa-street-view"></i></span>

                    <div class="text-center">Social (Communities)</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="clearfix"></div>
        <hr>

        <div class="icon-menu-wrapper">     
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('assets') }}" style="display: block">
                    <span class="info-box-icon bg-blue"><i class="fa fa-folder-open"></i></span>

                    <div class="text-center">Asset Management</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        
        <div class="icon-menu-wrapper">
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('settings') }}" style="display: block">
                    <span class="info-box-icon bg-orange"><i class="fa fa-cog"></i></span>
                    
                    <div class="text-center">System Configuration</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="main-menu icon-menu">
                <a class="info-box" href="{{ url('users') }}" style="display: block">
                    <span class="info-box-icon bg-orange"><i class="fa fa-user"></i></span>
                    
                    <div class="text-center">Account Management</div>
                    <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('scripts')
    <!-- FastClick -->
    <script src="{{ asset('vendor/adminlte/plugins/fastclick/fastclick.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('vendor/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ asset('vendor/adminlte/plugins/chartjs/Chart.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard2.js') }}"></script> -->

    <script>
        //-----------------------
        //- MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var salesChart = new Chart(salesChartCanvas);

        var salesChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
            {
                label: "Electronics",
                fillColor: "rgb(210, 214, 222)",
                strokeColor: "rgb(210, 214, 222)",
                pointColor: "rgb(210, 214, 222)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgb(220,220,220)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "Digital Goods",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
            ]
        };

        var salesChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };

        //Create the line chart
        salesChart.Line(salesChartData, salesChartOptions);
    </script>
@endsection
