
    <script type="text/javascript"  src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/holder.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/owl.carousel.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/custom.js') }}"></script> 
    <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
    <!--<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>-->
    <script src="{{ asset('js/main.js') }}"></script> 
    <script src="{{ asset('js/freelancer/common.js') }}"></script> 
    
    @if (!empty($js))
        @foreach($js as $value)
        <script src="{{ asset('js/'.$value) }}" type="application/javascript" ></script>
        @endforeach
    @endif
    