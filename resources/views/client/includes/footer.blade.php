<script type="text/javascript"  src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/holder.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/owl.carousel.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/custom.js') }}"></script> 
    <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> 
    <script src="{{ asset('js/freelancer/common.js') }}"></script> 
    
     @if(!empty($pluginjs)) 
        @foreach ($pluginjs as $value)
            <script src="{{ asset('assets/global/plugins/'.$value) }}" type="text/javascript"></script>
        @endforeach
    @endif
    
    @if (!empty($js))
        @foreach($js as $value)
        <script src="{{ asset('js/'.$value) }}" rel="stylesheet"></script>
        @endforeach
    @endif
    
    <script>
        jQuery(document).ready(function () {
          
     @if (!empty($funinit)) 
        @foreach ($funinit as $value) 
            {{ $value }}
        @endforeach
    @endif
        });
    </script>