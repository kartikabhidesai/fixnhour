@extends('layouts.clientlayout')

@section('content')
@if ( $errors->count() > 0 )
<section class="content server-side-validation">
    <div class="row">
        <div class="col-md-12">
            <p class="alert-danger"><span class="col-md-offset-1">The following errors have occurred : </span></p>
            <ul class="error-list">
                @foreach( $errors->all() as $message )
                <li class="alert-danger">
                    <span class="col-md-offset-1">{{ $message }} </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endif

<main class="cd-main-content">
    <div class="inner-page">	
        <div class="max-height-footer post-preview post-your-job gray-bg">
            {{ Form::open( array('method' => 'post', 'files' => 'true', 'id' => 'postJobInfoForm',  'class' => '' )) }}
            <div class="container">
                <div class="post-job-section padding-bottam-40 padding-top30 ">
                    <h2 class="section-heading"> Post a Job </h2>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="custom-lable">Choose a category & subcategory</label>
                            </div>
                            <div class="col-md-6">
                                {{ Form::select('category', $arrCategory, null, array('class' => 'form-control', 'id' => 'category')) }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::select('sub_category', $arrSubCategory, null, array('class' => 'form-control', 'id' => 'sub_category')) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="describe-job-section">
                    <h2 class="section-heading"> Describe the job </h2>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="custom-lable">Choose a category & subcategory</label>
                                    {{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title', 'placeholder' => 'Example: Need designer make creative design')) }}
                                    <!--<input type="email" class="form-control" id="exampleInputEmail1">-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group padding-top-20">
                                    <label class="custom-lable">Choose a category & subcategory</label>
                                    <!--<textarea class="coutom-textarea" placeholder=""></textarea>-->
                                    {{ Form::textarea('description', null, array('class' => 'coutom-textarea', 'id' => 'description', 'rows' => '3', 'placeholder' => 'Describe')) }}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="attached-files">
                                    <label class="custom-lable "> Attached Files </label>	
                                    <ul>
                                        <li>
                                            {{ Form::file('images[]',['multiple' => 'multiple'], NULL, array('class' => 'form-control', 'id' => 'images')) }}
                                        </li>
                                        <li><a href="#"><img src="images/round-pluse-icon-.png"><span>browse</span></a></li>
                                        <li><a href="#"><img src="images/round-pluse-icon-.png"><span>browse</span></a></li>
                                    </ul>
                                    <p class="notic"> The file can up to 25 MB in size </p>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group padding-top-20">
                                    <label class="custom-lable "> Enter skills needed </label>	
                                    {{ Form::select('skill', $arrPostJobSkill, null, array('class' => 'form-control', 'id' => 'skill')) }}
<!--                                    <select data-placeholder="type Here..."  multiple class="form-control chosen-select" tabindex="8">
                                        <option value=""></option>
                                        <option>American Black Bear</option>
                                        <option>Asiatic Black Bear</option>
                                        <option>Brown Bear</option>
                                        <option>Giant Panda</option>
                                        <option selected>Sloth Bear</option>
                                        <option disabled>Sun Bear</option>
                                        <option selected>Polar Bear</option>
                                        <option disabled>Spectacled Bear</option>
                                    </select>-->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group padding-top-20">
                                    <label class="custom-lable">Job Type</label>
                                    <div class="hire-ul col-md-12">
                                        <li><label><span class="radio-custome"> {{ Form::radio('job_type', '1', true,  array('class' => 'job_type')) }} <span></span></span>Hourly </label></li>
                                        &nbsp;&nbsp;&nbsp;
                                        <li><label><span class="radio-custome"> {{ Form::radio('job_type', '0', false, array('class' => 'job_type')) }} <span></span></span>fixed prise </label></li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-lable normal-lable-heading">Approximate Budget?</label>
                                {{ Form::select('approximate_budget', $arrApproximateBudget, null, array('class' => 'form-control', 'id' => 'approximate_budget')) }}
                            </div>
                            <div class="col-md-6">
                                <label class="custom-lable normal-lable-heading">Approximate Time?</label>
                                {{ Form::select('approximate_time', $arrApproximateTime, null, array('class' => 'form-control', 'id' => 'approximate_time')) }}
                            </div>
                            <div class="col-md-12">
                                <div class="form-group padding-top-20">
                                    <label class="custom-lable">Level</label>
                                    <div class="hire-ul col-md-12">
                                        <li><label><span class="radio-custome"> {{ Form::radio('level', 'Beginner', true,  array('class' => 'level')) }} <span></span></span> Beginner </label></li>
                                        &nbsp;&nbsp;&nbsp;
                                        <li><label><span class="radio-custome"> {{ Form::radio('level', 'Medium', false, array('class' => 'level')) }} <span></span></span> Medium </label></li>
                                        &nbsp;&nbsp;&nbsp;
                                        <li><label><span class="radio-custome"> {{ Form::radio('level', 'Expert', false, array('class' => 'level')) }} <span></span></span> Expert </label></li>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content-area post-job-level">
                                <label class="custom-lable"> Level </label>
                                <div class="select-level">
                                    <ul>
                                        <li class="active"> <a href="#"> <i class="fa fa-usd" aria-hidden="true"></i> <span> Beginner </span></a> </li>
                                        <li> <a href="#"> <i class="fa fa-usd" aria-hidden="true"></i> <span> Medium </span></a> </li>
                                        <li> <a href="#"> <i class="fa fa-usd" aria-hidden="true"></i> <span> Expert </span></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Optional-section">
                    <h2 class="section-heading"> Optional </h2>
                    <!--<div class="form-group">-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group padding-top-20">
                                    <label class="custom-lable"> Prefered Candidate Location </label>
                                    <div>
                                        {{ Form::checkbox('ck_location', 1, null, ['class' => 'ck_location', 'id' => 'ck_location']) }}
                                        &nbsp;&nbsp;
                                        <label class="custom-lable"> Prefered Candidate Location </label>
                                    </div>
                                </div>
                                
                                <div class="select-region ">
                                    <div class="col-md-12">
                                        <ul class="hire-ul  coustom-radio-button">
                                            <li><label><span class="radio-custome"> {{ Form::radio('location_type', 'region', true,  array('class' => 'level')) }} <span></span></span> Region(s) </label></li>
                                        </ul>
                                    </div>
                                    <div class="sub-select form-group">
                                        <div class="col-md-6">
                                            <div class="form-group">	
                                                {{ Form::select('region', $arrCategory, null, array('class' => 'form-control', 'id' => 'region')) }}
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div class="select-location">
                                    <div class="col-md-12">
                                        <ul class="hire-ul coustom-radio-button">
                                            <li><label><span class="radio-custome"> {{ Form::radio('location_type', 'other', false,  array('class' => 'level')) }} <span></span></span> Country, State,  City,  Zip Code </label></li>
                                        </ul>
                                    </div>
                                    <div class="sub-select">
                                        <div class="col-md-6">
                                            <div class="form-group">	
                                                <label class="custom-lable">Country</label>
                                                {{ Form::select('country', $arrCategory, null, array('class' => 'form-control', 'id' => 'country')) }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">	
                                                <label class="custom-lable">State (Optional)</label>
                                                {{ Form::select('state', $arrCategory, null, array('class' => 'form-control', 'id' => 'state')) }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">	
                                                <label class="custom-lable">City (Optional)</label>
                                                {{ Form::select('city', $arrCategory, null, array('class' => 'form-control', 'id' => 'city')) }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">	
                                                <label class="custom-lable">Zip (Optional)</label>
                                                {{ Form::text('zip', null, array('class' => 'form-control', 'id' => 'zip', 'placeholder' => 'Enter Zip Code')) }}
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    <!--</div>-->

                    <div class="proposed-start">
                        <div class="col-md-12">
                            <div class="form-group padding-top-20">
                                <label class="custom-lable"> Proposed Start Date </label>
                                <div class="col-md-12">
                                    <ul class="hire-ul" >
                                        <li><label><span class="radio-custome"> {{ Form::radio('proposed_date', '1', true,  array('class' => 'proposed_date')) }} <span></span></span> Start Innediately after proposal is  selected </label></li>
                                        <li><label><span class="radio-custome"> {{ Form::radio('proposed_date', '0', false, array('class' => 'proposed_date')) }} <span></span></span> Job will start on </label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="earn-row delivery proposed-start-date">
                                {{ Form::text('start_date', null, array('class' => 'form-control span2 earn-value', 'id' => 'dp1', 'placeholder' => 'Select Delivery Date')) }} <i class="fa fa-calendar"></i>
                                <!--<input type="text"  class="span2 earn-value form-control" value="" placeholder="Select Delivery Date" id="dp1"><i class="fa fa-calendar"></i>-->
                            </div>
                        </div>
                    </div>	
                </div>
                <div class="col-sm-12 text-center" >
                    <div class="action-buttons">
                    <ul>
                        <li><input type="submit" class="coustom-btn" name="continue" id="continue" value="Continue"></li>
                        <li><input type="submit" class="coustom-btn" name="save_post" id="save_post" value="Save & Post Later"></li>
                    </ul>
                </div>
                </div>
                
            </div>
            {{ Form::close() }}
        </div>
    </div>
</main>
@endsection