@extends('layouts.freelancerlayout')

@section('content')
<main class="cd-main-content">

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-left">
                <!--  <div class="search-top">
                     <div class="heading text-center">Job Search</div>
                  </div>-->
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
                                    <h3><i class="fa fa-puzzle-piece"></i> Employment Detail</h3>
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
                                        @if(count($employmentDetail)!=0)
                                        @foreach($employmentDetail as $employmentVal)
                                        <div class="f-t-block">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="profile-top full freelancer-bx">
                                                        <div class="profile-right">
                                                            <div class="block relative">
                                                                <h2 class="profile-name">{{$employmentVal['company']}} <img src="{{ asset('images/right-icon.png') }}" alt="#"></h2>
                                                                <p class="padding-top-ten"><strong>{{($employmentVal['role']!='')?  $arrRole[$employmentVal['role']]:''}}</strong></p>
                                                                <p class="location"><img src="{{ asset('images/map-pin.png') }}" alt="#"> {{$employmentVal['location']}}, {{ ($employmentVal['country']!='')?  $arrCountry[$employmentVal['country']]:''}}</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="freelancer-right">
                                                            <div class="inviat-and-av-details">
                                                                <a class="btn-green invite-btn getEdit" data-id="{{$employmentVal['id']}}" href="javascript:;">Edit</a>
                                                                <a class="btn-green invite-btn deleteEmp" data-id="{{$employmentVal['id']}}" href="javascript:;">Delete</a>
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
    <!-- Modal -->
</main>

<!-- Add Employement Modal -->
<div id="addEmployment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-puzzle-piece"></i> Add Employment Detail</h4>
            </div>
            <div class="modal-body">
                {{ Form::open( array('method' => 'post', 'id' => 'addEmploymentForm',  'class' => '' )) }}
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group ">
                            <label for="company" >Company : </label>
                            <div class="input-group col-md-12">
                                {{ Form::text('company', null, array('class' => 'form-control', 'id' => 'company', 'placeholder' => 'Enter Company')) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location" >Location : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::text('location', null, array('class' => 'form-control', 'id' => 'location', 'placeholder' => 'Enter Location')) }}
                                    </div>
                                </div>       
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country" >Country : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::select('country', $arrCountry, null, array('class' => 'form-control', 'id' => 'country')) }}
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="title" >Title : <span class="required">*</span></label>
                            <div class="input-group col-md-12">
                                {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title','placeholder' => 'Enter Title')) }}
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="role" >Role : <span class="required">*</span></label>
                            <div class="input-group col-md-12">
                                {{ Form::select('role', $arrRole, null, array('class' => 'form-control', 'id' => 'role')) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emp_from" >From : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::text('emp_from', null, array('class' => 'form-control', 'id' => 'emp_from', 'placeholder' => 'Enter From')) }}
                                    </div>
                                </div>       
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emp_to" >To : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::text('emp_to', null, array('class' => 'form-control', 'id' => 'emp_to', 'placeholder' => 'Enter To')) }}
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="descr" >Description (optional) : </label>
                            <div class="input-group col-md-12">
                                {{ Form::textarea('descr', null, array('class' => 'form-control', 'id' => 'descr', 'placeholder' => 'Enter Description','rows'=>"3.5")) }}
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="form-actions text-center">
                    <button type="submit" class="btn default btn-green">Save</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
                {{ Form::close() }}
            </div>
        </div>

    </div>
</div>
<div id="editEmployment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-puzzle-piece"></i> Add Employment Detail</h4>
            </div>
            <div class="modal-body">
                {{ Form::open( array('method' => 'post', 'id' => 'editEmploymentForm',  'class' => '' )) }}
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group ">
                            <label for="company" >Company : </label>
                            <div class="input-group col-md-12">
                                {{ Form::hidden('edit_id', null, array('id' => 'edit_id')) }}
                                {{ Form::text('company', null, array('class' => 'form-control', 'id' => 'edit_company', 'placeholder' => 'Enter Company')) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location" >Location : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">

                                        {{ Form::text('location', null, array('class' => 'form-control', 'id' => 'edit_location', 'placeholder' => 'Enter Location')) }}
                                    </div>
                                </div>       
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country" >Country : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::select('country', $arrCountry, null, array('class' => 'form-control', 'id' => 'edit_country')) }}
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="title" >Title : <span class="required">*</span></label>
                            <div class="input-group col-md-12">
                                {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'edit_title','placeholder' => 'Enter Title')) }}
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="role" >Role : <span class="required">*</span></label>
                            <div class="input-group col-md-12">
                                {{ Form::select('role', $arrRole, null, array('class' => 'form-control', 'id' => 'edit_role')) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emp_from" >From : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::text('emp_from', null, array('class' => 'form-control', 'id' => 'edit_emp_from', 'placeholder' => 'Enter From')) }}
                                    </div>
                                </div>       
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emp_to" >To : <span class="required">*</span></label>
                                    <div class="input-group col-md-12">
                                        {{ Form::text('emp_to', null, array('class' => 'form-control', 'id' => 'edit_emp_to', 'placeholder' => 'Enter To')) }}
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="descr" >Description (optional) : </label>
                            <div class="input-group col-md-12">
                                {{ Form::textarea('descr', null, array('class' => 'form-control', 'id' => 'edit_descr', 'placeholder' => 'Enter Description','rows'=>"3.5")) }}
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="form-actions text-center">
                    <button type="submit" class="btn default btn-green">Save</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
                {{ Form::close() }}
            </div>
        </div>

    </div>
</div>

<!-- Delete Employment Modal-->
<div id="deleteEmployment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Employment Detail</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure?</p>



            </div>
            <div class="modal-footer">
                <div class="form-actions text-center">
                    <button type="submit" class="btn default btn-green">Yes</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

