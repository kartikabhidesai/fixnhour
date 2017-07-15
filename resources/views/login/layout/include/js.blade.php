<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
@if(!empty($pluginjs))
@foreach ($pluginjs as $pjs)
<script src="{{ url('plugins') }}/{{ $pjs }}"></script>
@endforeach
@endif

@if(!empty($js))
@foreach ($js as $jss)
<script src="{{ url('js/login') }}/{{ $jss }}"></script>
@endforeach
@endif

<script>
jQuery(document).ready(function () {
	@if(!empty($funinit))
		@foreach ($funinit as $cjs)
	    	{{ $cjs }}
		@endforeach
	@endif

});


</script>
