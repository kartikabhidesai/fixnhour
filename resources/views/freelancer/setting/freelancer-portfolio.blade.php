@extends('layouts.freelancerlayout')

@section('content')
<main class="cd-main-content">

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-left">
                <div class="job-left custom-ul-li">
                    @include('freelancer.includes.setting-menu-left-panel')
                </div>n
                <div class="clearfix"> &nbsp;</div>
            </div>
            <div class="home-right">
                <div class="search-right">
                    <div class="row">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                            <div class="col-md-12 setting-title" style="padding-left: 0px;">
                                <div class="col-md-10">
                                    <h3><i class="fa fa-suitcase"></i> Portfolio Detail</h3>
                                </div>
                                <div class="col-md-2">
                                    <div class="freelancer-right" style="padding-top: 6px; ">
                                        <div class="inviat-and-av-details" style="padding: 0px;">
                                            <a class="btn-green invite-btn" id="myBtn" data-toggle="modal" data-target="#addPortfolio" href="javascript:void(0)">Add</a>
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
                                    
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Add Project Modal -->
<div id="addPortfolio" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                {{ Form::open( array('method' => 'post', 'id' => 'addPortfolioForm',  'class' => '' )) }}
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="project_title">Project Title : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('project_title', null, array('class' => 'form-control', 'id' => 'project_title', 'placeholder' => '')) }}
                                </div>
                            </div>       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Select Contract : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::select('contract', 
                                    ['Contact 1',
                                    'Contract 2',
                                    'Contract 3'],null, array('class' => 'form-control', 'id' => 'contract', 'placeholder' => '')) }}
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="school_from">Project Overview : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::textarea('project_overview', null, array('class' => 'form-control', 'id' => 'school_from', 'placeholder' => '')) }}
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="school_from">Thumbanail Image : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    <div style="border: 3px dotted #06c;" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"><h4 style="margin: 15px"> Drag or <a> upload </a> project thumbanail </h4> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="school_from">Project files : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    <div style="border: 3px dotted #06c;" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"><h4 style="margin: 15px"> Drag or <a> upload </a> project files </h4> </div>
                                </div>
                            </div> 
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="school_to">Category : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                     {{ Form::select('category_id', 
                                    $category_list,null, array('class' => 'form-control', 'id' => 'category_id', 'placeholder' => '')) }}
                                </div>
                            </div>
                            <div class="form-group">
<!--                                <label for="school_to">Sub Category : <span class="required">*</span></label>-->
                                <div class="input-group col-md-12">
                                     {{ Form::select('sub_category_id', 
                                    ['Select Category',
                                    'Category 1',
                                    'Category 2'],null, array('class' => 'form-control', 'id' => 'sub_category_id', 'placeholder' => '')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="project_url">Project URL(Optional) : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('project_url', null, array('class' => 'form-control', 'id' => 'project_url', 'placeholder' => 'URL')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="completion_date">Completion Date (Optional) : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('completion_date', null, array('class' => 'form-control', 'id' => 'completion_date', 'placeholder' => 'yyyy-mm-dd')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="skills">Skills (Optional) : <span class="required">*</span></label>
                                <div class="input-group col-md-12">
                                    {{ Form::text('skills', null, array('class' => 'form-control', 'id' => 'skills', 'placeholder' => 'Enter Skills Here')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>   
                <div class="form-actions text-center">
                    <button type="submit" class="btn blue btn-green">Save</button>
                    <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection

