<script type="text/javascript"  src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/holder.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/owl.carousel.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/custom.js') }}"></script> 
    <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/front/frontcommon.js') }}"></script>
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