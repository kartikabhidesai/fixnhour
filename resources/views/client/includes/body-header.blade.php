<div class="site-new-header site-new-header-tow  site-header">
    <div class="container">
        <header class="cd-main-header">
            <a class="cd-logo" href="#0"><img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo" style="width:165px;padding-top: 12px"></a>
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
                <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
            </ul> <!-- cd-header-buttons -->
        </header>

        <nav class="cd-nav">
            <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
                <li>
                    <div class="nav-menu">
                        <ul>
                            <li class="children">
                                <a href="{{ route('client-find-telent') }}"> Find Talent </a>
                            </li>
                            <li class="children">
                                <a href="{{ route ('client-my-jobs') }}"> My Job </a>
                            </li>
                            <li class="children">
                                <a href="{{ route ('how-it-works') }}"> Payment  </a> 
                            </li>
                            <li class="header-search-bar mobile-hide">
                                <div class="input-group top-select-searh">
                                    <span class="input-group-btn btn-search"> <button class="btn btn-default " type="button"><i class="pe-7s-search"></i></button>
                                    </span>
                                    <input class="custom-text-box form-co form-control" name="" placeholder="" type="text">
                                </div>
                            </li>
                            <li class="user-staff" style="float: right;">

                                <ul>

                                    <li class="user-help children">     

                                        <div class="btn-group show-on-hover custom-dropdown">

                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                            </button>

                                            <ul class="dropdown-menu" role="menu">

                                                <li class="text-center"><a href="#"> <h4>help </h4> </a></li>

                                                <li>
                                                    <a href="#" class="user-drop-link"> Report </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-link"> Report </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-link"> Report </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="user-message children">           
                                        <div class="btn-group custom-dropdown message-link">

                                            <a href="{{ route ('message')}}" class="btn btn-default dropdown-toggle"> 
                                                <img src="{{ asset('images/message-icon.png') }}"><span>5</span>
                                            </a>


                                        </div>

                                    </li>

                                    <li class="user-noti children">     

                                        <div class="btn-group show-on-hover custom-dropdown">

                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">  
                                                <img src="{{ asset('images/notification-icon-header.png') }}"> <span>5</span>
                                            </button>

                                            <ul class="dropdown-menu" role="menu">

                                                <li class="text-center"><a href="#"> <h4>Notification </h4> </a></li>

                                                <li>
                                                    <a href="#" class="user-drop-btn"> 
                                                        <img src="{{ asset('images/user.jpg') }}" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-btn"> 
                                                        <img src="{{ asset('images/user.jpg') }}" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-btn"> 
                                                        <img src="{{ asset('images/user.jpg') }}" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-btn"> 
                                                        <img src="{{ asset('images/user.jpg') }}" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                    </a>
                                                </li>

                                            </ul>

                                        </div>


                                    </li>

                                    <li class="user-drop children">          

                                        <div class="btn-group show-on-hover custom-dropdown">

                                            <button type="button" class="btn btn-default dropdown-toggle user-drop-btn" data-toggle="dropdown"> 
                                                @if(Auth::guard('client')->user()->var_image != "")
                                                <img src="{{ url ('uploads/freelancer/'.Auth::guard('client')->user()->var_image) }}" >  
                                                @else
                                                <img src="{{ url ('uploads/freelancer/no-profile-photo.jpg') }}" >  
                                                @endif
                                                <div class="pull-left">
                                                    <p>Hello.</p>
                                                    <h4> 
                                                        {{ Auth::guard('client')->user()->username }} 
                                                        <span> <i class="fa fa-angle-down" aria-hidden="true"></i></span> 
                                                    </h4>
                                                </div>
                                            </button>

                                            <ul class="dropdown-menu" role="menu">

                                                <li>
                                                    <a href="{{ route ('client-profile') }}" class="user-drop-btn">
                                                        @if(Auth::guard('client')->user()->var_image != "")
                                                        <img src="{{ url ('uploads/freelancer/'.Auth::guard('client')->user()->var_image) }}" >  
                                                        @else
                                                        <img src="{{ url ('uploads/freelancer/no-profile-photo.jpg') }}" >  
                                                        @endif
                                                        <h4>Profile </h4> 

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-link"> 
                                                        <i class="pe-7s-note2"></i>  Report 
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route ('update-profile') }}" class="user-drop-link"> 
                                                        <i class="pe-7s-settings"></i>Setting 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="user-drop-link"> 
                                                        <i class="pe-7s-help1"></i>Help 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('client-logout') }}" class="user-drop-link"> 
                                                        <i class="pe-7s-switch"></i>  Log out 
                                                    </a>
                                                </li>


                                            </ul>

                                        </div>

                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- primary-nav -->
        </nav> 
        <div id="cd-search" class="cd-search">
            <form>
                <input type="search" placeholder="Search...">
            </form>
        </div>
    </div>
</div>