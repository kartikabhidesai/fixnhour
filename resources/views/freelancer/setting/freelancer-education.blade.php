@extends('layouts.freelancerlayout')

@section('content')
<main class="cd-main-content">

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-left">
                <div class="job-left custom-ul-li">
                    @include('freelancer.includes.setting-menu-left-panel')
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="home-right">
                <div class="search-right">
                    <div class="row">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                            <div class="col-md-12 setting-title" style="padding-left: 0px;">
                                <div class="col-md-10">
                                    <h3><i class="fa fa-book"></i> Education Detail</h3>
                                </div>
                                <div class="col-md-2">
                                    <div class="freelancer-right" style="padding-top: 6px; ">
                                        <div class="inviat-and-av-details" style="padding: 0px;">
                                            <a class="btn-green invite-btn" id="myBtn" data-toggle="modal" data-target="#addEmployment" href="javascript:void(0)">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div id='errorSection'>
                                @if (session('session_success'))
                                <div class="alert alert-success">
                                    {{ session('session_success') }}
                                    <div class="pull-right closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                                </div>
                                @endif

                                @if (session('session_error'))
                                <div class="alert alert-danger">
                                    {{ session('session_error') }}
                                    <div class="pull-right closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                                </div>
                                @endif
                            </div>
                            <div class="container-old">
                                <div class="row">
                                    <div class="search-left col-sm-6 col-md-12 col-xs-12  find-talent-list">
                                        @if(count($educations)!=0)
                                        @foreach($educations as $educationVal)
                                        <div class="f-t-block">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="profile-top full freelancer-bx">
                                                        <div class="profile-right">
                                                            <div class="block relative">
                                                                <h2 class="profile-name"> {{$educationVal['degree']}}  <img src="{{ asset('images/right-icon.png') }}" alt="#"></h2>
                                                                <p class="padding-top-ten"><strong> {{$educationVal['school']}} </strong></p>
                                                                <p class="location"> {{$educationVal['school_from']}} - {{$educationVal['school_to']}}</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="freelancer-right">
                                                            <div class="inviat-and-av-details">
                                                                <a class="btn-green invite-btn getEdit" data-id="{{$educationVal['id']}}" href="javascript:;">Edit</a>
                                                                <a class="btn-green invite-btn deleteEdu" data-id="{{$educationVal['id']}}" href="javascript:;">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Add Employement Modal -->
<div id="addEmployment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Education Detail</h4>
            </div>
            <div class="modal-body">
                {{ Form::open( array('method' => 'post', 'id' => 'addEducationForm',  'class' => '' )) }}
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="school">School : </label>
                        <div class="input-group col-md-12">
                            {{ Form::text('school', null, array('class' => 'form-control', 'id' => 'school', 'placeholder' => 'Enter School')) }}
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="degree">Degree : <span class="required">*</span></label>
                        <div class="input-group col-md-12">
                            {{ Form::text('degree', null, array('class' => 'form-control', 'id' => 'degree', 'placeholder' => 'Enter Degree')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="area_of_study">Area of Study (optional) : <span class="required">*</span></label>
                        <div class="input-group col-md-12">
                            {{ Form::text('area_of_study', null, array('class' => 'form-control', 'id' => 'area_of_study','placeholder' => 'Enter Area Of Study')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="school_from">From : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('school_from', null, array('class' => 'form-control', 'id' => 'school_from', 'placeholder' => 'Enter From')) }}
                                </div>
                            </div>       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="school_to">To : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('school_to', null, array('class' => 'form-control', 'id' => 'school_to', 'placeholder' => 'Enter To')) }}
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descr">Description (optional) : <span class="required">*</span></label>
                        <div class="input-group col-md-12">
                            {{ Form::textarea('descr', null, array('class' => 'form-control', 'id' => 'descr', 'placeholder' => 'Enter Description','rows'=>"3.5")) }}
                        </div>
                    </div>
                </div>   
                <div class="form-actions text-center">
                    <button type="submit" class="btn blue btn-green">Save</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<div id="editEducation" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Education Detail</h4>
            </div>
            <div class="modal-body">
                {{ Form::open( array('method' => 'post', 'id' => 'editEducationForm',  'class' => '' )) }}
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="edit_school">School : </label>
                        {{ Form::hidden('edit_id', null, array('id' => 'edit_id')) }}
                        <div class="input-group col-md-12">
                            {{ Form::text('school', null, array('class' => 'form-control', 'id' => 'edit_school', 'placeholder' => 'Enter School')) }}
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="edit_degree">Degree : <span class="required">*</span></label>
                        <div class="input-group col-md-12">
                            {{ Form::text('degree', null, array('class' => 'form-control', 'id' => 'edit_degree', 'placeholder' => 'Enter Degree')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_area_of_study">Area of Study (optional) : <span class="required">*</span></label>
                        <div class="input-group col-md-12">
                            {{ Form::text('area_of_study', null, array('class' => 'form-control', 'id' => 'edit_area_of_study','placeholder' => 'Enter Area Of Study')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_school_from">From : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('school_from', null, array('class' => 'form-control', 'id' => 'edit_school_from', 'placeholder' => 'Enter From')) }}
                                </div>
                            </div>       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_school_to">To : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('school_to', null, array('class' => 'form-control', 'id' => 'edit_school_to', 'placeholder' => 'Enter To')) }}
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_descr">Description (optional) : <span class="required">*</span></label>
                        <div class="input-group col-md-12">
                            {{ Form::textarea('descr', null, array('class' => 'form-control', 'id' => 'edit_descr', 'placeholder' => 'Enter Description','rows'=>"3.5")) }}
                        </div>
                    </div>
                </div>   
                <div class="form-actions text-center">
                    <button type="submit" class="btn blue btn-green">Update</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- Delete Employment Modal-->
<div id="deleteEducation" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Education Detail</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure?</p>
            </div>
            <div class="modal-footer">
                <div class="form-actions text-center">
                    <button type="button" class="btn blue btn-green deleteConf">Yes</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
