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
                <form role="form" method="post" id="addSlider" enctype="multipart/form-data" action="{{ route('addSlider') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Slider Title :</label>
                            <div class="col-md-10">
                                <div class="input-icon right">
                                    <input type="text" name="slider_title" id="slider_title" placeholder="Enter slider Title" class="form-control"> 
                                </div>
                       </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Slider Image :</label>
                            <div class="col-md-10">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                    <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> Select image </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file" name="slider"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-6">
                                <button type="submit" class="btn green btn-circle">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
</div>

@endsection