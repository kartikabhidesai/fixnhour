@extends('layouts.adminlayout')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li><a href="{{ route('dashboard') }}"> Home </a><i class="fa fa-circle"></i></li>
        <li><a href="{{ route('user-list') }}"> User </a><i class="fa fa-circle"></i></li>
        <li><span>Add</span></li>
    </ul>
</div>
<h1 class="page-title"> User <small>Add</small></h1>

<div class="main-content">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="icon-user font-green"></i>
                            <span class="caption-subject font-green bold uppercase"> Add New User </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        {{ Form::model(array('method' => 'post'),['class' => '','id'=>'userAddForm']) }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-4 form-group">
                                    <label for="Title" class="control-label">Title: 
                                    </label>
                                    {{ Form::select('title', array('1'=>'Mr.', '2'=>'Mrs.', '3'=>'Miss.'), null, array('class' => 'form-control', 'id' => 'title')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="First Name" class="control-label">First Name:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('first_name', null, array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="First Name" class="control-label">Last Name:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('last_name' ,null, array('class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Enter Last Name')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">Phone:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('phone', null, array('class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Enter Phone')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">Mobile:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('mobile', null, array('class' => 'form-control', 'id' => 'mobile', 'placeholder' => 'Enter Mobile')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">Email:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email')) }}
                                </div>
                                <div class="col-sm-8 form-group">
                                    <label for="Adress" class="control-label">Adress:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::textarea('Address', null, array('class' => 'form-control', 'id' => 'Address', 'placeholder' => 'Enter Address','rows'=>"3")) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="City Town" class="control-label">City/Town:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('city_town', null, array('class' => 'form-control', 'id' => 'city_town', 'placeholder' => 'Enter City')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">State:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('state', null, array('class' => 'form-control', 'id' => 'state', 'placeholder' => 'Enter State')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">PostCode:
                                        <span class="required">*</span>
                                    </label>
                                    {{ Form::text('postcode', null, array('class' => 'form-control', 'id' => 'postcode', 'placeholder' => 'Enter Postcode')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">User Type:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="radio-list">
                                        <span>
                                            {{ Form::radio('type', 1, true, array('class' => 'type')) }} Client
                                            &nbsp;&nbsp;&nbsp;
                                            {{ Form::radio('type', 1, true, array('class' => 'type')) }} Freelancer
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-actions text-center">
                            <button type="submit" class="btn blue">Submit</button>
                            <button type="button" class="btn default">Cancel</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .error {
        border: 1px solid red !important;
    }
</style>
@endsection
