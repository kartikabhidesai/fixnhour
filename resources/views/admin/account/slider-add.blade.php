@extends('layouts.adminlayout')

@section('content')
<!-- BEGIN THEME PANEL -->

<!-- END THEME PANEL -->
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ route('slider-list') }}">Slider List</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Slider Add</span>
        </li>
    </ul>

</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Slider 
    <small>Add new Slider</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase"> Slider add Form</span>
                </div>

            </div>
            <div class="portlet-body form">
                <form role="form">
                    <div class="form-body">
                        
                        <div class="form-group">
                            <label>Slider Title</label>
                            <div class="input-group">
                                <span class="input-group-addon input-circle-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input class="form-control input-circle-right" placeholder="Email Address" type="text"> 
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="exampleInputFile1">File input</label>
                            <input id="exampleInputFile1" type="file">
                            <p class="help-block"> some help text here. </p>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->

    </div>
</div>



@endsection