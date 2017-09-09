<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $metatitle }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link href="{{ asset('css/bootstrap.custome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-dropdownhover.css') }}">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
     @if (!empty($plugincss))
        @foreach($plugincss as $value)
        <link rel="stylesheet" href="{{asset ('assets/global/plugins/'.$value)}}" />
        @endforeach
    @endif
    
    
     @if (!empty($css))
        @foreach($css as $value)
        <link href="{{ asset('css/'.$value) }}" rel="stylesheet">
        @endforeach
    @endif
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/menu-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontface-style.css') }}">
    
    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
</head>