@php 
$currRoute = Route::current()->getName();
@endphp
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

            <li class="nav-item  @if($activateValue == 'Dashboard') {{ 'active' }} @endif ">
                <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
                    <i class="fa fa-dashboard"></i>
                    <!--<i class="icon-home"></i>-->
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item @if($activateValue == 'sliderList') {{ 'active' }} @endif ">
                <a href="{{ route('slider-list') }}" class="nav-link nav-toggle">
                    <i class="fa fa-sliders"></i>
                    <span class="title">Slider</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ ($currRoute == 'user-list' || $currRoute == 'user-add') ? 'active' : '' }}">
                <a href="{{ route('user-list') }}" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    <span class="selected"></span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>