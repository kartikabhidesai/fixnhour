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
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-dropdownhover.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/fontface-style.css') }}">
    @if (!empty($css))
        @foreach($css as $value)
        <link href="{{ asset('css/'.$value) }}" rel="stylesheet">
        @endforeach
    @endif
</head>
<body>
    
    <div id="app">
        <div class="site-new-header site-new-header-tow site-header">

            <div class="container">

                <header class="cd-main-header">
                    <a class="cd-logo" href="{{'/'}}"><img src="images/site-new-logo.png" alt="Logo"></a>

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

                                    <li class="children desktop-hide mobile-show user-profile-mobile">
                                        <a href="#" class="dropdown-toggle user-drop-btn">
                                            <img src="images/user.jpg" alt="#">

                                            <h4> Priyanka </h4>

                                        </a>

                                    </li>

                                    <li class="children ">
                                        <a href="{{ url ('freelancer')}}"> Work </a>				
                                    </li>

                                    <li class="children">
                                        <a href="{{ url ('myJobs')}}"> Jobs </a>
                                    </li>

                                    <li class="children">
                                        <a href="{{ url ('payment') }}"> Payment   </a>

                                    </li>

                                    <li class="children desktop-hide mobile-show">
                                        <a href="#"> Help  </a>

                                    </li>

                                    <li class="children desktop-hide mobile-show">
                                        <a href="#"> Message <span>5</span>  </a>

                                    </li>

                                    <li class="children desktop-hide mobile-show">
                                        <a href="#"> Notification   </a>

                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li class="header-search-bar mobile-hide">
                            <div class="input-group top-select-searh">

                                <span class="input-group-btn btn-search"> <button class="btn btn-default " type="button"><i class="pe-7s-search"></i></button>
                                </span>

                                <input class="custom-text-box form-co form-control" name="" placeholder="" type="text">

                            </div>
                        </li>

                        <li class="user-staff">

                            <ul>

                                <li class="user-help children">     

                                    <div class="btn-group show-on-hover custom-dropdown">

                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><img src="images/help-icon.png">
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

                                        <a href="{{ url ('message')}}" class="btn btn-default dropdown-toggle"> <img src="images/message-icon.png"><span>5</span>
                                        </a>


                                    </div>

                                </li>

                                <li class="user-noti children">     

                                    <div class="btn-group show-on-hover custom-dropdown">

                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">  <img src="images/notification-icon-header.png"> <span>5</span>
                                        </button>

                                        <ul class="dropdown-menu" role="menu">

                                            <li class="text-center"><a href="#"> <h4>Notification </h4> </a></li>

                                            <li>
                                                <a href="#" class="user-drop-btn"> 
                                                    <img src="images/user.jpg" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-drop-btn"> 
                                                    <img src="images/user.jpg" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-drop-btn"> 
                                                    <img src="images/user.jpg" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-drop-btn"> 
                                                    <img src="images/user.jpg" > <p>Lorem Ipsum is simply dummy text of the...</p>  
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </li>

                                <li class="user-drop children">          

                                    <div class="btn-group show-on-hover custom-dropdown">

                                        <button type="button" class="btn btn-default dropdown-toggle user-drop-btn" data-toggle="dropdown"> 
                                            <img src="images/user.jpg" alt="#"> <div class="pull-left">
                                                <p>Hello.</p>
                                                <h4> Priyanka <span> <i class="fa fa-angle-down" aria-hidden="true"></i></span> </h4></div>
                                        </button>

                                        <ul class="dropdown-menu" role="menu">

                                            <li><a href="profile.html" class="user-drop-btn"><img src="images/user.jpg" >  <h4>Profile </h4> </a></li>

                                            <li>
                                                <a href="#" class="user-drop-link"> 
                                                    <i class="pe-7s-note2"></i>  Report 
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="user-drop-link"> 
                                                    <i class="pe-7s-settings"></i>Setting 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-drop-link"> 
                                                    <i class="pe-7s-help1"></i>Help 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-drop-link"> 
                                                    <i class="log-out-icon"></i>  Log out 
                                                </a>
                                            </li>


                                        </ul>

                                    </div>

                                </li>

                            </ul>

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
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> 
    <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 13, 10000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
</script>

<script>
$(window).scroll(function(){
  var sticky = $('body'),
      scroll = $(window).scrollTop();
  if (scroll >= 100) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
});
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
$(document).ready(function() {
   $( '.user-noti' ).hover(
	 function(){
       $('.notifiaction-drop').slideDown(50);
     },
     function(){
       $('.notifiaction-drop').slideUp(50);
     }
   );


   $( '.user-drop' ).hover(
	 function(){
       $('.user-dropdown').slideDown(50);
     },
     function(){
       $('.user-dropdown').slideUp(50);
     }
   );

});
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
$(document).ready(function() {
   $( '.user-noti' ).hover(
	 function(){
       $('.notifiaction-drop').slideDown(50);
     },
     function(){
       $('.notifiaction-drop').slideUp(50);
     }
   );


   $( '.user-drop' ).hover(
	 function(){
       $('.user-dropdown').slideDown(50);
     },
     function(){
       $('.user-dropdown').slideUp(50);
     }
   );

});
</script>
    @if (!empty($js))
        @foreach($js as $value)
        <link href="{{ asset('js/'.$value) }}" rel="stylesheet">
        @endforeach
    @endif
</body>
</html>
