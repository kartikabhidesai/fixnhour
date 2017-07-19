
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
                <nav class="navbar navbar-static-top">
                    <div class="header-right">
                        <p>Already have an Fixnhour Account?</p>
                        <a href="javascript:void(0)" class="btn-green">LOGIN</a> </div>
                    <div class="navbar-header"> <a class="site-logo" href="{{ url('/')}}"><img src="images/site-logo.png" alt="#"></a> </div>
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

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       
        
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
