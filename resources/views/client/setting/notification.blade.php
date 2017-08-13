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
                        <div class="search-left col-sm-6 col-md-10 col-xs-12">
                        <div class="col-md-12 setting-title">
                            <h3>Notification</h3>
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
                        {{ Form::open( array('method' => 'post', 'id' => 'notification',  'class' => '' )) }}
                        <div class="col-md-12">
                            <div class="form-group">

                                <div class="col-sm-2 col-md-12 ">
                                    <label for="Send Mail Notification" class="control-label">Send Mail Notification : </label>
                                    <label class="switch">
                                        {{ Form::checkbox('sendmail', 1, true, ['class' => 'field']) }}
                                        <span class="slider round"></span>
                                    </label>
                                    
                                </div>
                                <div class="col-sm-4 col-md-12 ">
                                    <label for="Header Notification" class="control-label">Header Notification : <span class="required">*</span></label>
                                    <label class="switch">
                                        {{ Form::checkbox('header', 1, true, ['class' => 'field']) }}
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-sm-4 col-md-12">
                                    <label for="Confirm Password" class="control-label">Job Post Notification : <span class="required">*</span></label>
                                    <label class="switch">
                                        {{ Form::checkbox('jobpost', 1, true, ['class' => 'field']) }}
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>   
                        <div class="form-actions text-center">
                            <button type="submit" class="btn blue btn-green">Update</button>
                            <a href="{{ route('home') }}" class="btn default btn-green">Cancel</a>
                        </div>
                        {{ Form::close() }}
                        </div>
                       
                    </div>
                </div>    

            </div>
        </div>
    </section>
    <style>

</style>
</main>

@endsection