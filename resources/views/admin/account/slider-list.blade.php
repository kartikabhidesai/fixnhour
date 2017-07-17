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
            <span>Slider</span>
        </li>
    </ul>
    
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Slider
    <small>List</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Simple Table</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="{{ route('slider-add') }}">
                        <i class="icon-plus"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Slider Name </th>
                            </tr>
                        </thead>
                        <tbody>
                             @if(count($slider)!=0)
                                 @foreach($slider as $sliders)
                            <tr>
                                <td> {{$sliders->id}} </td>
                                <td> {{$sliders->var_name}} </td>
                                <td>
                                   <div class="actions">
                                        
                                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ route('slider-edit', array('id' => $sliders->id)) }}">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default deleteRecored" href="javascript:;" data-id="{{ $sliders->id }}">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8" class="text-center"><p style="color:red;">Sorry, Not Record Found</p></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
    
</div>
<div class="modal fade" id="deleteModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                        <span aria-hidden="true">Ã—</span>
                    </button>
                    <h4 class="modal-title">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <p> You want to delete record. Are you sure?</p>

                </div>
                <div class="modal-footer">
                    {{ csrf_field() }}
                    <button data-dismiss="modal" class="btn btn-danger" type="button">No</button>
                    <button class="btn btn-success yes-sure" type="button">Yes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


@endsection