<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{ $metatitle }}</title>
        <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.custome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{  asset('css/fontface-style.css') }}" >
        @if (!empty($plugincss))
        @foreach($plugincss as $value)
        <link href="{{ asset('assets/global/plugins/'.$value) }}" rel="stylesheet">
        @endforeach
        @endif

        @if (!empty($css))
        @foreach($css as $value)
        <link href="{{ asset('css/'.$value) }}" rel="stylesheet">
        @endforeach
        @endif
    </head>
    <body>
        <header class="site-header header-second header-login">
            <div class="container">
                <nav class="navbar navbar-static-top" style="margin-bottom: 0px;">
                    <div class="header-right">
                        <p>Already have an Softral Account?</p>
                        <a href="javascript:void(0)" data-toggle="modal" class="btn-green" data-target="#login-modal"> Sign In</a> 
                    </div>
                    <div class="navbar-header"> <a class="site-logo" href="{{ url('/')}}"><img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo" style="width:165px;"></a> </div>
                </nav>
            </div>
        </header>

        <div class="clearfix"></div>
        @yield('content')
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-bottom text-center">
                <div class="container">
                    <p class="copy-right">© by 2016 Fixnhour. All right &amp; reserved</p>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body login-popup">
                        <div class="main-message">
                            <h5>Login to Fixnhour</h5>
                        </div>
                        {{ Form::open(array('route' => 'signin','id'=>'signupform1','class'=>'signup-form')) }}
                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" name='username' id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="keep-login">
                                    <span class="cutome-check cutome-3">
                                        <input type="checkbox">
                                        <span></span>

                                    </span>Keep me signed in for 2 week<a class="login-que">[?]</a></label>
                                <a class="forgot-pass" href="#">Forgot Password?</a>
                            </div>
                            <div class="clear-full text-center btn-bottom"> <button type='submit' class="btn-green login-popup-btn">Continue</button> </div>
                            <div class="or-divi"><span>OR</span></div>
                        </form>
                        <div class="social-login-buttons">
                            <li> <a href="#" class="facebook-login"> <i class="fa fa-facebook" aria-hidden="true"></i> <span> Continue with Facebook </span></a> </li>
                            <li> <a href="#" class="google-login"> <img src="images/google-icon.png">  <span> Continue with google </span></a> </li>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/tether.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/front/frontcommon.js') }}"></script>
        
        @if (!empty($pluginjs))
        @foreach($pluginjs as $value)
            <script type="text/javascript" src="{{ asset('assets/global/plugins/'.$value) }}"></script>
        @endforeach
        @endif

        @if (!empty($js))
            @foreach($js as $value)
                <script src="{{ asset('js/'.$value) }}"  type="text/javascript"></script>
            @endforeach
        @endif
        <script>
            @if (!empty($funinit))
                @foreach($funinit as $value)
                    {{ $value.';' }}
                @endforeach
            @endif
        </script>

        <script>
                    $(window).scroll(function(){
                        var sticky = $('body'),
                        scroll = $(window).scrollTop();
                        if (scroll >= 100) sticky.addClass('header-fixed');
                        else sticky.removeClass('header-fixed');
                    });
        </script>
    </body>


</html>
