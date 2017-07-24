@extends('layouts.adminlayout')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li><a href="{{ route('dashboard') }}"> Home </a><i class="fa fa-circle"></i></li>
        <li><a href="{{ route('user-list') }}"> User </a><i class="fa fa-circle"></i></li>
        <li><span>{{ Route::current()->getName() == 'user-edit' ? 'Edit' : 'Add' }}</span></li>
    </ul>
</div>
<h1 class="page-title"> User <small>{{ Route::current()->getName() == 'user-edit' ? 'Edit' : 'Add' }}</small></h1>

@if ( $errors->count() > 0 )
    <section class="content server-side-validation">
        <div class="row">
            <div class="col-md-12">
                <p class="alert-danger">The following errors have occurred:</p>
                <ul class="error-list">
                    @foreach( $errors->all() as $message )
                    <li class="alert-danger">
                        {{ $message }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    @endif

<div class="main-content">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="icon-user font-green"></i>
                            <span class="caption-subject font-green bold uppercase"> {{ Route::current()->getName() == 'user-edit' ? 'Edit User Detail' : 'Add New User' }}</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        {{ Form::open( array('method' => 'post', 'id' => 'userInfoForm',  'class' => '' )) }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-2 form-group">
                                    <label for="UserType" class="control-label">User Type : <span class="required">*</span></label>
                                    {{ Form::select('type', $arrUserType, (empty($arrUserInfo->user_type) ? null : $arrUserInfo->user_type), array('class' => 'form-control', 'id' => 'user_type')) }}
                                    <!--<div class="radio-list">
                                        <span>
                                            {{ Form::radio('type', 'Client', (isset($arrUserInfo->role_type) && ($arrUserInfo->role_type == 'Client') ? TRUE : FALSE), array('class' => 'form-control type')) }} Client
                                            &nbsp;&nbsp;&nbsp;
                                            {{ Form::radio('type', 'Freelancer', (isset($arrUserInfo->role_type) && ($arrUserInfo->role_type == 'Freelancer') ? TRUE : FALSE), array('class' => 'form-control type')) }} Freelancer
                                        </span>
                                    </div>-->
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="Title" class="control-label">Title : </label>
                                    {{ Form::select('title', $arrNameTitle, (empty($arrUserInfo->title) ? null : $arrUserInfo->title), array('class' => 'form-control', 'id' => 'title')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="FirstName" class="control-label">First Name : <span class="required">*</span></label>
                                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="LastName" class="control-label">Last Name : <span class="required">*</span></label>
                                    {{ Form::text('last_name' ,(empty($arrUserInfo->last_name) ? null : $arrUserInfo->last_name), array('class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Enter Last Name')) }}
                                </div>
                                @if(Route::current()->getName() == 'user-add')
                                <div class="col-sm-4 form-group">
                                    <label for="UserName" class="control-label">User Name : <span class="required">*</span></label>
                                    {{ Form::text('username', (empty($arrUserInfo->username) ? null : $arrUserInfo->username), array('class' => 'form-control', 'id' => 'username', 'placeholder' => 'Enter User Name')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="Password" class="control-label">Password : <span class="required">*</span></label>
                                    {{ Form::password('password',  array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'Enter Password')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label class="control-label">Confirm Password <span id="" class="required">*<div></div></span></label>
                                    {{ Form::password('confirm_password', array('class' => 'form-control', 'placeholder' => 'Re-enter Password')) }}
                                </div>
                                @endif
                                <div class="col-sm-8 form-group">
                                    <label for="Adress" class="control-label">Adress : <span class="required">*</span></label>
                                    {{ Form::textarea('address', (empty($arrUserInfo->address) ? null : $arrUserInfo->address), array('class' => 'form-control', 'id' => 'Address', 'placeholder' => 'Enter Address','rows'=>"3.5")) }}
                                </div>
                                
                                <div class="col-sm-4 form-group">
                                    <label for="City Town" class="control-label">City/Town : <span class="required">*</span></label>
                                    {{ Form::text('city_town', (empty($arrUserInfo->city_town) ? null : $arrUserInfo->city_town), array('class' => 'form-control', 'id' => 'city_town', 'placeholder' => 'Enter City')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="control-label">State : <span class="required">*</span></label>
                                    {{ Form::text('state', (empty($arrUserInfo->state) ? null : $arrUserInfo->state), array('class' => 'form-control', 'id' => 'state', 'placeholder' => 'Enter State')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="Email" class="control-label">Email : <span class="required">*</span></label>
                                    {{ Form::text('email', (empty($arrUserInfo->email) ? null : $arrUserInfo->email), array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="Phone" class="control-label">Phone : <span class="required">*</span></label>
                                    {{ Form::text('phone', (empty($arrUserInfo->phone) ? null : $arrUserInfo->phone), array('class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Enter Phone No.')) }}
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="PostCode" class="control-label">PostCode : <span class="required">*</span></label>
                                    {{ Form::text('postcode', (empty($arrUserInfo->postcode) ? null : $arrUserInfo->postcode), array('class' => 'form-control', 'id' => 'postcode', 'placeholder' => 'Enter Postcode')) }}
                                </div>
                            </div>
                        </div>   
                        <div class="form-actions text-center">
                            <button type="submit" class="btn blue">{{ Route::current()->getName() == 'user-edit' ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('user-list') }}" class="btn default">Cancel</a>
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
