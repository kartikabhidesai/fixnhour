@extends('layouts.freelancerlayout')

@section('content')

<main class="cd-main-content">
    <div class="max-height-footer profile-page gray-bg">
        <div class="container pad-botm-30">
            <div class="left-profile">
                <div class="profile-top full">
                    <div class="profile-left">  
                        @if(Auth::guard('freelancer')->user()->var_image != "")
                        <img src="{{ url ('uploads/freelancer/'.Auth::guard('freelancer')->user()->var_image) }}" >  
                        @else
                        <img src="{{ url ('uploads/freelancer/no-profile-photo.jpg') }}" >  
                        @endif
                        <div class="clearfix"></div>
                        <ul class="stars text-center">
                            <li><a href="javascript:void(0)" class="fa-star fa"></a></li>
                            <li><a href="javascript:void(0)" class="fa-star fa"></a></li>
                            <li><a href="javascript:void(0)" class="fa-star fa"></a></li>
                            <li><a href="javascript:void(0)" class="fa-star fa"></a></li>
                            <li><a href="javascript:void(0)" class="fa-star fa"></a></li>
                        </ul>
                    </div>
                    <div class="profile-right">
                        <div class="block relative">
                            <h2 class="profile-name">{{ Auth::guard('freelancer')->user()->first_name }} {{ Auth::guard('freelancer')->user()->last_name }} <img src="{{ asset('images/right-icon.png') }}" alt="#" /></h2>
                            <p><strong>{{ Auth::guard('freelancer')->user()->overview_title }}</strong></p>
                            <p class="location"><img src="{{ asset('images/map-pin.png') }}" alt="#" /> {{ Auth::guard('freelancer')->user()->city_town }}, {{ Auth::guard('freelancer')->user()->state }}</p>
                            <div class="profile-price"><strong>${{ Auth::guard('freelancer')->user()->price }}</strong> <span> PER HOUR  <span></div>
                                        <div class="clearfix"></div>
                                        <ul class="tag-list">
                                            @foreach($getUserSkills as $getUserSkill)
                                                <li><a href="javascript:void(0)">{{ $getUserSkill['name'] }}</a></li>
                                            @endforeach
                                        </ul>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="profile-tab">
                                            <div id="parentHorizontalTab">
                                                <ul class="resp-tabs-list hor_1">
                                                    <li> <i class="fa fa-eye" aria-hidden="true"></i> <span>Overview</span></li>
                                                    <li><i class="fa fa-history"></i><span>Work History</span></li>
                                                    <li><i class="fa fa-file-image-o"></i><span>Portfolio</span></li>
                                                    <li> <i class="fa fa-wrench" aria-hidden="true"></i> <span>Skill</span></li>
                                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Education</span></li>
                                                    <li> <i class="fa fa-certificate" aria-hidden="true"></i> <span>Certificates</span></li>
                                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i><span>Past Experience</span></li>

                                                </ul>
                                                <div class="resp-tabs-container hor_1">
                                                     @include('freelancer.profile.overview')
                                                     @include('freelancer.profile.workhistory')
                                                     @include('freelancer.profile.porfolio')
                                                     @include('freelancer.profile.skill')
                                                     @include('freelancer.profile.education')
                                                     @include('freelancer.profile.certificates')
                                                     @include('freelancer.profile.past-experience')
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="right-profile">
                                            <div class="gray-box white-box">
                                                <h2 class="heading text-center edit-profile-right">Your Profile Completeness <a href="#" class="cmn-round-icn"><i class="fa-pencil fa"></i> </a></h2>
                                                <div class="profile-status">
                                                    <div class="ps-left"> <p style="width:100%;">&nbsp;</p> </div><span>100%</span>
                                                </div>
                                            </div>
                                            <div class="gray-box white-box">
                                                <h2 class="heading text-center">My Repotation</h2>
                                                <hr>
                                                <div class="clear-full">
                                                    <div class="report-row full"> <i class="fa-bar-chart report-icon fa"></i> <span class="report-text">Profile Lavel</span> <span class="report-tag">22</span> </div>
                                                    <div class="report-row full"> <i class="fa-star report-icon fa"></i> <span class="report-text">
                                                            <i class="fa-star fa"></i>
                                                            <i class="fa-star fa"></i>
                                                            <i class="fa-star fa"></i>
                                                            <i class="fa-star fa"></i>
                                                            <i class="fa-star fa"></i>
                                                        </span>
                                                        <span class="report-tag">5</span> </div>
                                                    <div class="report-row full"> <i class="fa-hourglass-half report-icon fa"></i> <span class="report-text">Hourly Rate</span> <span class="report-tag">$50</span> </div>
                                                    <div class="report-row full"> <i class="fa-briefcase report-icon fa"></i> <span class="report-text">Total Job Worked</span> <span class="report-tag">20</span> </div>
                                                    <div class="report-row full"> <i class="fa-clock-o report-icon fa"></i> <span class="report-text">Total Hours Worked</span> <span class="report-tag">2200</span> </div>
                                                </div>
                                            </div>

                                            <div class="gray-box white-box">
                                                <h2 class="heading text-center">My Summry</h2>
                                                <hr>
                                                <div class="clear-full">
                                                    <div class="times-tab">
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#time-month" aria-controls="time-month" role="tab" data-toggle="tab">12 Month</a></li>
                                                            <li role="presentation"><a href="#time-year" aria-controls="time-year" role="tab" data-toggle="tab">Lifetime</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="time-month">
                                                                <label class="summry-select">
                                                                    <select>
                                                                        <option>All Category</option>
                                                                        <option>All Category</option>
                                                                        <option>All Category</option>
                                                                        <option>All Category</option>
                                                                        <option>All Category</option>
                                                                        <option>All Category</option>
                                                                    </select>
                                                                </label>
                                                                <div class="clearfix"></div>
                                                                <div class="summary-inner">
                                                                    <p class="summry-text">Jobs</p>
                                                                    <div class="summry-row">
                                                                        <ul>
                                                                            <li><strong>51</strong><span>Total</span></li>
                                                                            <li><strong>37</strong><span>Milestones</span></li>
                                                                            <li><strong>505</strong><span>Hours</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="summary-inner">
                                                                    <p class="summry-text">Client</p>
                                                                    <div class="summry-row">
                                                                        <ul>
                                                                            <li><strong>2</strong><span>Total</span></li>
                                                                            <li><strong>0%</strong><span>Repet</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="summary-inner">
                                                                    <p class="summry-text">Earning</p>
                                                                    <div class="summry-row">
                                                                        <ul>
                                                                            <li><strong>$10,000</strong><span>Total</span></li>
                                                                            <li><strong>$1,000</strong><span>Per Client</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="time-year"> sdf </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gray-box white-box">
                                                <h2 class="heading text-center">IDENTITY</h2>
                                                <hr>
                                                <div class="clear-full identity-outer">
                                                    <ul class="identity-list">
                                                        <li><span class="identity-left text-uppercase">USERNAME</span><span class="identity-right">riyodesigner</span></li>
                                                        <li><span class="identity-left">Type</span><span class="identity-right">Individual <i class="user-small"></i></span></li>
                                                        <li><span class="identity-left">Member Since</span><span class="identity-right">Agust 2016</span></li>
                                                        <li><span class="identity-left">Fixnhour URL</span><span class="identity-right">http://riyodesigner_fixnhour.com</span></li>
                                                        <li><span class="identity-left">Verification</span> <span class="identity-right"> <a href="#"><img src="{{ asset('images/user-large.jpg') }}images/icon-small-right.png" alt="#" /></a> <a href="#" class="icon-green">$</a> <a href="#" class="icon-green"><i class="fa-phone fa"></i></a> <a href="#" class="icon-green"><i class="fa-list fa"></i></a> </span> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        </main>

                                        @endsection

