<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', "GenCart") }} - @yield('title') </title>


   
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}" />



    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('css/admin/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('js/admin/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{ asset('css/admin/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/admin/plugins/slick/slick-theme.css')}}" rel="stylesheet">

    <link href="{{ asset('css/admin/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css')}}" rel="stylesheet">

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.partials.storenavigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.partials.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.partials.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{{ asset('/js/admin/jquery-2.1.1.js')}}" ></script>
<script src="{{ asset('/js/admin/bootstrap.min.js')}}"></script>




    <script src="{{ asset('js/admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('js/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{ asset('js/admin/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('js/admin/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{ asset('js/admin/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('js/admin/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{ asset('js/admin/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('js/admin/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/admin/inspinia.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('js/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{ asset('js/admin/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('js/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('js/admin/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{ asset('js/admin/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{ asset('js/admin/plugins/toastr/toastr.min.js')}}"></script>

    <!-- inspinia custom -->
    <script src="{{('js/inspinia.js')}}"></script>
    <script src="{{('js/plugins/pace/pace.min.js')}}"></script>
    <!-- slick carousel-->
    <script src="{{asset('js/plugins/slick/slick.min.js')}}"></script>

@yield('script')
    
</body>
</html>
