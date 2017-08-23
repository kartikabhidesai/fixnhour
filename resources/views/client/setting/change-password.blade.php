@extends('layouts.clientlayout')

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
                    @include('client.includes.setting-menu-left-panel')
                </div>
                <div class="clearfix"></div>
                
            </div>
            <div class="home-right">   
                <div class="search-right">
                    <div class="row ">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                        <div class="col-md-12 setting-title">
                            <h3><i class="fa fa-key"></i> Change Password</h3>
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
                        {{ Form::open( array('method' => 'post', 'id' => 'passwordchange',  'class' => '' )) }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-2 col-md-12 ">
                                    <label for="Old Password" class="control-label">Old Password : </label>
                                    {{ Form::password('old_password', array('class' => 'form-control','type'=>'password', 'id' => 'old_password', 'placeholder' => 'Enter Old Password')) }}
                                </div>
                                <div class="col-sm-4 col-md-12 ">
                                    <label for="New Password" class="control-label">New Password : <span class="required">*</span></label>
                                    {{ Form::password('new_password', array('class' => 'form-control', 'type'=>'password','id' => 'new_password', 'placeholder' => 'Enter New Password')) }}
                                </div>
                                <div class="col-sm-4 col-md-12">
                                    <label for="Confirm Password" class="control-label">Confirm Password : <span class="required">*</span></label>
                                    {{ Form::password('confirm_password' , array('class' => 'form-control', 'type'=>'password','id' => 'confirm_password', 'placeholder' => 'Enter Confirm Password')) }}
                                </div>
                            </div>
                        </div>   
                        <div class="form-actions text-center">
                            <button type="submit" class="btn default btn-green">Update</button>
                            <a href="{{ route('change-password') }}" class="btn default btn-green">Cancel</a>
                        </div>
                        {{ Form::close() }}
                        </div>
                       
                    </div>
                </div>    

            </div>
        </div>
    </section>
</main>

@endsection