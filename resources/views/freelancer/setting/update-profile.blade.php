@extends('layouts.freelancerlayout')

@section('content')
<main class="cd-main-content">
    @include('freelancer.includes.body-header-sub')
    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-left">
                <!--  <div class="search-top">
                     <div class="heading text-center">Job Search</div>
                  </div>-->
                <div class="job-left">
                    @include('freelancer.includes.setting-menu-left-panel')
                </div>
                <div class="clearfix"></div>
                
            </div>
            <div class="home-right">   
                <div class="search-right">
                    <div class="row ">
                        <div class="search-left col-sm-6 col-md-10 col-xs-12">
                        <div class="col-md-12 setting-title">
                            <h3>Update Profile</h3>
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
                        {{ Form::open( array('method' => 'post', 'id' => 'userInfoForm',  'class' => '' )) }}
                        <div class="col-md-12">
                            <div class="form-group">
<!--                                <div class="col-sm-2 form-group">
                                    <label for="UserType" class="control-label">User Type : <span class="required">*</span></label>
                                    <div class="radio-list">
                                        <span>
                                            {{ Form::radio('type', 'Client', (isset($arrUserInfo->role_type) && ($arrUserInfo->role_type == 'Client') ? TRUE : FALSE), array('class' => 'form-control type')) }} Client
                                            &nbsp;&nbsp;&nbsp;
                                            {{ Form::radio('type', 'Freelancer', (isset($arrUserInfo->role_type) && ($arrUserInfo->role_type == 'Freelancer') ? TRUE : FALSE), array('class' => 'form-control type')) }} Freelancer
                                        </span>
                                    </div>
                                </div>-->
                                <div class="col-sm-2 col-md-6 ">
                                    <label for="Title" class="control-label">Title : </label>
                                    {{ Form::select('title', $arrNameTitle, (empty($arrUserInfo->title) ? null : $arrUserInfo->title), array('class' => 'form-control', 'id' => 'title')) }}
                                </div>
                                <div class="col-sm-4 col-md-6 ">
                                    <label for="FirstName" class="control-label">First Name : <span class="required">*</span></label>
                                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                                </div>
                                <div class="col-sm-4 col-md-6">
                                    <label for="LastName" class="control-label">Last Name : <span class="required">*</span></label>
                                    {{ Form::text('last_name' ,(empty($arrUserInfo->last_name) ? null : $arrUserInfo->last_name), array('class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Enter Last Name')) }}
                                </div>
                                
                                <div class="col-sm-4 col-md-6">
                                    <label for="UserName" class="control-label">User Name : <span class="required">*</span></label>
                                    {{ Form::text('username', (empty($arrUserInfo->username) ? null : $arrUserInfo->username), array('class' => 'form-control', 'id' => 'username','disabled'=>'disabled', 'placeholder' => 'Enter User Name')) }}
                                </div>
                                <div class="col-sm-4 col-md-6">
                                    <label for="Email" class="control-label">Email : <span class="required">*</span></label>
                                    {{ Form::text('email', (empty($arrUserInfo->email) ? null : $arrUserInfo->email), array('class' => 'form-control', 'id' => 'email','disabled'=>'disabled', 'placeholder' => 'Enter Email')) }}
                                </div>
                                <div class="col-sm-4 col-md-6">
                                    <label for="Phone" class="control-label">Phone : <span class="required">*</span></label>
                                    {{ Form::text('phone', (empty($arrUserInfo->phone) ? null : $arrUserInfo->phone), array('class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Enter Phone No.')) }}
                                </div>
                                <div class="col-sm-8 col-md-12">
                                    <label for="Adress" class="control-label">Adress : <span class="required">*</span></label>
                                    {{ Form::textarea('address', (empty($arrUserInfo->address) ? null : $arrUserInfo->address), array('class' => 'form-control', 'id' => 'Address', 'placeholder' => 'Enter Address','rows'=>"3.5")) }}
                                </div>
                                
                                <div class="col-sm-4 col-md-4">
                                    <label for="City Town" class="control-label">City/Town : <span class="required">*</span></label>
                                    {{ Form::text('city_town', (empty($arrUserInfo->city_town) ? null : $arrUserInfo->city_town), array('class' => 'form-control', 'id' => 'city_town', 'placeholder' => 'Enter City')) }}
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <label for="State" class="control-label">State : <span class="required">*</span></label>
                                    {{ Form::text('state', (empty($arrUserInfo->state) ? null : $arrUserInfo->state), array('class' => 'form-control', 'id' => 'state', 'placeholder' => 'Enter State')) }}
                                </div>
                                
                                <div class="col-sm-4 col-md-4">
                                    <label for="PostCode" class="control-label">PostCode : <span class="required">*</span></label>
                                    {{ Form::text('postcode', (empty($arrUserInfo->postcode) ? null : $arrUserInfo->postcode), array('class' => 'form-control', 'id' => 'postcode', 'placeholder' => 'Enter Postcode')) }}
                                </div>
                            </div>
                        </div>   
                        <div class="form-actions text-center">
                            <button type="submit" class="btn blue btn-green">{{ Route::current()->getName() == 'user-edit' ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('user-list') }}" class="btn default btn-green">Cancel</a>
                        </div>
                        {{ Form::close() }}
                        </div>
                       
                    </div>
                </div>    

            </div>
        </div>
    </section>
</main>
<style>
    .setting-title{
        background: #4CC3C8;
        color: white;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>
@endsection