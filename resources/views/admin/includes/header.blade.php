<head>
    <meta charset="utf-8"/>
    
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
   
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />    
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!--<link href="{{asset ('')}}global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="{{asset ('')}}global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="{{asset ('')}}global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="{{asset ('')}}global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />-->
    <!-- END PAGE LEVEL PLUGINS -->

    <link href="{{asset ('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset ('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset ('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset ('assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset ('assets/layouts/layout/css/custom.css')}}" rel="stylesheet" type="text/css" />
    
        <link href="{{asset ('assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
    
    <link href="{{asset ('assets/global/plugins/select2/css/select2.min.css"')}} rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- END THEME LAYOUT STYLES -->
    @if(!empty($css)) 
    @foreach ($css as $value)
        <link rel="stylesheet" href="{{asset ('assets/layouts/layout/css/'.$value)}}" />
        @endforeach
@endif
    
            @if(!empty($css_plugin)) 
    @foreach ($css_plugin as $value_plugin)
        <link rel="stylesheet" href="{{asset ('assets/global/plugins/'.$value_plugin)}}" />
        @endforeach
@endif
   

    <link rel="shortcut icon" href="favicon.ico" />
    
    <script src="{{asset ('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
     <script>
            var baseurl = "{{ asset('/') }}";
        </script>
</head>

