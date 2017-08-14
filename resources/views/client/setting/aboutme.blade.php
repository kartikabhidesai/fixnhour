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
                <div class="job-left">
                    @include('client.includes.setting-menu-left-panel')
                </div>
                <div class="clearfix"></div>
                
            </div>
            <div class="home-right">   
                <div class="search-right">
                    <div class="row ">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                        <div class="col-md-12 setting-title">
                            <h3>About Me</h3>
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

                                <div class="col-sm-4 col-md-12 ">
                                    <label for="FirstName" class="control-label">Title: <span class="required">*</span></label>
                                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                                </div>
                                
                                <div class="col-sm-8 col-md-12">
                                    <label for="Adress" class="control-label">Overview : <span class="required">*</span></label>
                                    {{ Form::textarea('address', (empty($arrUserInfo->address) ? null : $arrUserInfo->address), array('class' => 'form-control', 'id' => 'Address', 'placeholder' => 'Enter Address','rows'=>"3.5")) }}
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

@endsection