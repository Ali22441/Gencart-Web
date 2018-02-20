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

    <link href="{{ asset('css/admin/animate.css')}}" rel="stylesheet">
    
    <!-- jasny -->
    <link href="{{asset('css/admin/plugins/jasny/jasny-bootstrap.min.css')}} " rel="stylesheet">

    @yield('styles')

    <link href="{{ asset('css/admin/style.css')}}" rel="stylesheet">

    
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.partials.navigation')

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

    <!-- Toastr -->
    <script src="{{ asset('js/admin/plugins/toastr/toastr.min.js')}}"></script>

    @yield('scripts')
    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/admin/inspinia.js') }}"></script>

    

    

</body>
</html>
