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
                    <div class="row">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                            <div class="col-md-12 setting-title" style="padding-left: 0px;">
                                <div class="col-md-10">
                                    <h3><i class="fa fa-puzzle-piece"></i> Employment Detail</h3>
                                </div>
                                <div class="col-md-2">
                                    <div class="freelancer-right" style="padding-top: 6px; ">
                                        <div class="inviat-and-av-details" style="padding: 0px;">
                                            <a class="btn-green invite-btn" id="myBtn" data-toggle="modal" data-target="#addEmployment" href="javascript:void(0)">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container-old">
                                <div class="row">
                                    <div class="search-left col-sm-6 col-md-12 col-xs-12  find-talent-list">
                                        <div class="f-t-block">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="profile-top full freelancer-bx">
                                                        <div class="profile-right">
                                                            <div class="block relative">
                                                                <h2 class="profile-name">Riyo Carter <img src="{{ asset('images/right-icon.png') }}" alt="#"></h2>
                                                                <p class="padding-top-ten"><strong>Graphic &amp; Web Designer</strong></p>
                                                                <p class="location"><img src="{{ asset('images/map-pin.png') }}" alt="#"> Los Angeles, United State</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="freelancer-right">
                                                            <div class="inviat-and-av-details">
                                                                <a class="btn-green invite-btn" data-toggle="modal" data-target="#addEmployment" href="javascript:void(0)">Edit</a>
                                                                <a class="btn-green invite-btn" data-toggle="modal" data-target="#deleteEmployment" href="javascript:void(0)">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                        </div>

                    </div>
                </div>    

            </div>
        </div>
    </section>
    <!-- Modal -->
  
</main>

<!-- Add Employement Modal -->
<div id="addEmployment" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-puzzle-piece"></i> Add Employment Detail</h4>
      </div>
      <div class="modal-body">
        {{ Form::open( array('method' => 'post', 'id' => 'userInfoForm',  'class' => '' )) }}
        <div class="col-md-12">
            <div class="form-group">

                <div class="col-sm-2 col-md-12 ">
                    <label for="Title" class="control-label">Company : </label>
                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                </div>
                <div class="col-sm-4 col-md-6 ">
                    <label for="FirstName" class="control-label">Location : <span class="required">*</span></label>
                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                </div>
                <div class="col-sm-4 col-md-6">
                    <label for="LastName" class="control-label">Country : <span class="required">*</span></label>
                    {{ Form::select('title', [''=>'-- Select Country --'], (empty($arrUserInfo->title) ? null : $arrUserInfo->title), array('class' => 'form-control', 'id' => 'title')) }}
                </div>

                <div class="col-sm-4 col-md-12">
                    <label for="UserName" class="control-label">Title : <span class="required">*</span></label>
                    {{ Form::text('username', (empty($arrUserInfo->username) ? null : $arrUserInfo->username), array('class' => 'form-control', 'id' => 'username','placeholder' => 'Enter User Name')) }}
                </div>
                <div class="col-sm-4 col-md-12">
                    <label for="Email" class="control-label">Role : <span class="required">*</span></label>
                    {{ Form::select('title', [''=>'-- Select Role --'], (empty($arrUserInfo->title) ? null : $arrUserInfo->title), array('class' => 'form-control', 'id' => 'title')) }}
                </div>
                
                <div class="col-sm-4 col-md-6">
                    <label for="LastName" class="control-label">From : <span class="required">*</span></label>
                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                </div>
                <div class="col-sm-4 col-md-6">
                    <label for="LastName" class="control-label">To : <span class="required">*</span></label>
                    {{ Form::text('first_name', (empty($arrUserInfo->first_name) ? null : $arrUserInfo->first_name), array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'Enter First Name')) }}
                </div>
                <div class="col-sm-8 col-md-12">
                    <label for="Adress" class="control-label">Description (optional) : <span class="required">*</span></label>
                    {{ Form::textarea('address', (empty($arrUserInfo->address) ? null : $arrUserInfo->address), array('class' => 'form-control', 'id' => 'Address', 'placeholder' => 'Enter Address','rows'=>"3.5")) }}
                </div>

            </div>
        </div>   
        <div class="form-actions text-center">
            <button type="submit" class="btn default btn-green">{{ Route::current()->getName() == 'user-edit' ? 'Update' : 'Save' }}</button>
            <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
        </div>
        {{ Form::close() }}
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

<!-- Delete Employment Modal-->
<div id="deleteEmployment" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Employment Detail</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure?</p>
        
        
        
      </div>
        <div class="modal-footer">
        <div class="form-actions text-center">
            <button type="submit" class="btn default btn-green">Yes</button>
            <a href="javascript:;" data-dismiss="modal" class="btn default btn-green">Cancel</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
