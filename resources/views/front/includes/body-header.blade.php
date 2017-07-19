<div class="site-new-header site-new-header-tow  site-header">
            <div class="container">
                <header class="cd-main-header">
                    <a class="cd-logo" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo" style="width:165px;padding-top: 12px"></a>
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
                                        <a href="{{ url('find-telent') }}"> Find Talent </a>
                                    </li>
                                    <li class="children">
                                        <a href="{{ url ('freelancer') }}"> Find Work </a>
                                    </li>
                                    <li class="children">
                                        <a href="{{ url ('how-it-works') }}"> How It Works  </a> 
                                    </li>
                                    <li class="header-search-bar mobile-hide">
                                        <div class="input-group top-select-searh">
                                            <span class="input-group-btn btn-search"> <button class="btn btn-default " type="button"><i class="pe-7s-search"></i></button>
                                            </span>
                                            <input class="custom-text-box form-co form-control" name="" placeholder="" type="text">
                                        </div>
                                    </li>
                                    <li class="children">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#login-modal"> Sign In</a> 
                                    </li>
                                    <li class="children">
                                        <a href="{{ url('signup') }}"> Sign Up </a> 
                                    </li>
                                    <li class="children">
                                        <a class="post-new-btn" href="post-your-job"> POST A JOB </a> 
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