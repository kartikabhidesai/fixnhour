<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <h4  style="display: inline-block;color: #fff;"><a href="javascript:;">
                Fixnhour
            </a></h4>
            <div class="menu-toggler sidebar-toggler"> </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                        <img alt="" class="img-circle" style="width: 29px;" src="{{ asset('assets/layouts/layout/img/avatar3_small.jpg') }}"/>
                        <span class="username username-hide-on-mobile"> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-user"></i> My Profile 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-question"></i> Help 
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin_logout') }}">
                                <i class="icon-key"></i> Log Out 
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>