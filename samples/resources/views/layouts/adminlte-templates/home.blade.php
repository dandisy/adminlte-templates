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
    <script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard2.js') }}"></script>
@endsection
