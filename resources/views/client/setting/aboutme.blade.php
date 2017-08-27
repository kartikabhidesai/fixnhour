@extends('layouts.clientlayout')

@section('content')
<main class="cd-main-content">

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-left">
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
                                <h3><i class="fa fa-briefcase"></i> About Me</h3>
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
                            {{ Form::open( array('method' => 'post', 'id' => 'aboutmeForm',  'class' => '' )) }}
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <label for="FirstName" class="control-label">Title: <span class="required">*</span></label>
                                    {{ Form::text('overview_title', (empty($arrUserInfo->overview_title) ? null : $arrUserInfo->overview_title), array('class' => 'form-control', 'id' => 'overview_title', 'placeholder' => 'Enter Title')) }}
                                </div>
                                <div class="col-md-12">
                                    <label for="Adress" class="control-label">Overview : <span class="required">*</span></label>
                                    {{ Form::textarea('overview_text', (empty($arrUserInfo->overview_text) ? null : $arrUserInfo->overview_text), array('class' => 'form-control', 'id' => 'overview_text', 'placeholder' => 'Enter Overview','rows'=>"5")) }}
                                </div>
                            </div>
                            <!--</div>-->   
                            <div class="form-actions text-center">
                                <button type="submit" class="btn default btn-green">Save</button>
                                <a href="{{ route('aboutme') }}" class="btn default btn-green">Cancel</a>
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