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
                            <h3>Change Profile Pictures</h3>
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
                        {{ Form::open(array('route' => 'client-setting','id'=>'setting','class'=>'setting','files' => true)) }}
                        <div class="form-group">
                            <!--<label class="control-label col-md-2"></label>-->
                            <div class="col-md-10">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                    <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> Select image </span>
                                            <span class="fileinput-exists"> Change </span>
                                            <input type="file" name="profile_image"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                    </div>
                                </div>
                                <div class="">
                                    <button type='submit' class="btn  btn-green">Change Pictures</button>
                                </div>
                            </div>
                            
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