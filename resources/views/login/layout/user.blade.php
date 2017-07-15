<!DOCTYPE html>
<html>
    <head>
        <title>RTO Manager | @yield('title')</title>
        @include('layouts.user.include.css')
        @yield('headCSS')  
    </head>
    <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
        <div class="wrapper">
            @include('layouts.user.include.header')
            @include('layouts.user.include.left-sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
               
                <!-- Content Header (Page header) -->
                @include('layouts.user.include.breadcrumb')
                <!-- Main content -->
                <section class="content">
                    <!-- Info boxes -->
                    <div class="row">
                        @yield('content')
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Add the sidebar's background. This div must be placed
              immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->
        @include('layouts.user.include.js')
      
        @yield('footerJS')
    </body>
</html>