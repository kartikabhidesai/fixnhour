<!--[if lt IE 9]>

<![endif]-->
<!-- BEGIN CORE PLUGINS -->

<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/datatables.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<script src="{{ asset('assets/global/plugins/select2/js/select2.js') }}" type="text/javascript"></script>

@if(!empty($js_plugin)) 
    @foreach ($js_plugin as $value)
        <script src="{{ asset('assets/global/plugins/'.$value) }}" type="text/javascript"></script>
        @endforeach
@endif
<!-- BEGIN THEME GLOBAL SCRIPTS -->

<script src="{{ asset('assets/global/scripts/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/javascripts/common_function.js') }}" type="text/javascript"></script>

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/layouts/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/layout/scripts/demo.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

@if (!empty($js)) 
    @foreach ($js as $value) 
       <script src="{{ asset('assets/javascripts/'.$value) }}" type="text/javascript"></script>
       @endforeach
 @endif

<script src="{{ asset('assets/pages/scripts/components-date-time-pickers.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        App.init();
 @if (!empty($init)) 
    @foreach ($init as $value) 
        {{ $value }}
    @endforeach
@endif
    });
</script>
