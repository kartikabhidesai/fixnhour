<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
    <!--<![endif]-->
    <!-- BEGIN HEADER -->
        @include('admin.includes.header')
    <!--Need To Include CSS -->
    <!-- END HEADER -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN BODY HEADER -->
         @include('admin.includes.body_header')
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
        <!-- END BODY HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('admin.includes.body_leftpanel')
            <!-- END SIDEBAR -->


            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                   
                    <!-- END PAGE HEADER-->

                   @yield('content')

                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN BODY FOOTER -->
        @include('admin.includes.body_footer')

        <!-- END BODY FOOTER -->
        <!-- BEGIN FOOTER -->
        @include('admin.includes.footer')
        <!-- END FOOTER -->
    </body>
</html>