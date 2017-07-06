<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $metatitle }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.custome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/menu-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontface-style.css') }}">
    @if (!empty($css))
        @foreach($css as $value)
        <link href="{{ asset('css/'.$value) }}" rel="stylesheet">
        @endforeach
    @endif
</head>
<body>
    
    <div id="app">
        <div class="site-new-header site-new-header-tow  site-header">
            <div class="container">
                <header class="cd-main-header">
                    <a class="cd-logo" href="#0"><img src="images/site-new-logo.png" alt="Logo"></a>
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
                                        <a href="{{ url('findTelent') }}"> Find Talent </a>
                                    </li>
                                    <li class="children">
                                        <a href="home.html"> Find Work </a>
                                    </li>
                                    <li class="children">
                                        <a href="{{ url ('howItWorks') }}"> How It Works  </a> 
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
                                        <a class="post-new-btn" href="post-your-job.html"> POST A JOB </a> 
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

        <div class="clearfix"></div>

        @yield('content')
        
        <footer class="site-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6 footer-row">
                            <ul class="footer-menu">
                                <li><a href="javascript:void(0)">Startups</a></li>
                                <li><a href="javascript:void(0)">Growth Partners</a></li>
                                <li><a href="javascript:void(0)">Upgrade Skill & Earn More</a></li>
                                <li><a href="javascript:void(0)">Internship</a></li>
                                <li><a href="javascript:void(0)">Affiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-6 footer-row">
                            <h2 class="footer-heading">Company</h2>
                            <ul class="footer-menu">
                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">Press</a></li>
                                <li><a href="javascript:void(0)">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 footer-row">
                            <h2 class="footer-heading">Information</h2>
                            <ul class="footer-menu">
                                <li><a href="javascript:void(0)">Fee and Charges</a></li>
                                <li><a href="javascript:void(0)">Cancellations & Refunds</a></li>
                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 footer-row">
                            <div class="footer-right">
                                <h2 class="footer-heading">Freelancers</h2>
                                <ul class="footer-menu">
                                    <li><a href="javascript:void(0)">Freelencers in India</a></li>
                                    <li><a href="javascript:void(0)">Freelencers in USA</a></li>
                                    <li><a href="javascript:void(0)">Freelencers in UK</a></li>
                                    <li><a href="javascript:void(0)">Freelencers in Philippines</a></li>
                                    <li><a href="javascript:void(0)">Freelencers in Pakistan</a></li>
                                    <li><a href="javascript:void(0)">Freelencers in Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-social">
                <div class="container">
                    <ul class="social-footer">
                        <li><a href="javascript:void(0)"><i class="fa-facebook fa"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa-twitter fa"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa-google-plus fa"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa-linkedin fa"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <p class="copy-right">&copy; by 2016 Fixnhour. All right & reserved</p>
                </div>
            </div>
        </footer>

    </div>

    <!-- Scripts -->

    
    <script type="text/javascript"  src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/holder.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/owl.carousel.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/custom.js') }}"></script> 
    <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> 
    <script type="text/javascript">
$(window).load(function()
{
	var a=$(window).height();
	$("#hero-slider .owl-item .item > img").css({height:a});
	$(window).resize(function()
		{
			var b=$(window).height();
			$("#hero-slider .owl-item .item > img").css({height:b})
		})
});
</script>
    @if (!empty($js))
        @foreach($js as $value)
        <link href="{{ asset('js/'.$value) }}" rel="stylesheet">
        @endforeach
    @endif
</body>
</html>
