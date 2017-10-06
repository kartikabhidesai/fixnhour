@extends('layouts.frontlayout')

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
                    <h2 class="heading">Category</h2>
                    <div class="relative search-select">
                        <select>
                            <option>All Categories</option>
                            <option>select 1</option>
                            <option>select 2</option>
                            <option>select 3</option>
                            <option>select 4</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="job-left">
                    <h2 class="heading">Job Type</h2>
                    <ul class="job-type">
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Hourly (5,399)</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Fixed Price (4,399)</li>
                    </ul>
                </div>
                <div class="job-left">
                    <h2 class="heading">Experience Level</h2>
                    <ul class="job-type">
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Entery Level - $ (1,400)</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Intermediate - $$ (3,400)</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Expert - $$$ (15,400)</li>
                    </ul>
                </div>
                <div class="job-left">
                    <h2 class="heading">Client History</h2>
                    <ul class="job-type">
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>No Hires (2,581)</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>1 to 9 Hires (2,481)</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>10+ Hires (2,781)</li>
                    </ul>
                </div>
                <div class="job-left">
                    <h2 class="heading">Client Info</h2>
                    <ul class="job-type">
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>My Previous Client</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Payment Verified</li>
                    </ul>
                </div>
                <div class="job-left">
                    <h2 class="heading">Budget (Fixed Price)</h2>
                    <div class="range-type">
                        <div id="slider-range"></div>
                        <p class="range-text"><input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></p>
                    </div>

                </div>
                <div class="job-left">
                    <h2 class="heading">Location</h2>
                    <div class="clearfix"></div>
                    <div class="relative search-left">
                        <input placeholder="Search For Job" type="text">
                        <button class="search-submit" type="submit"><i class="fa-search fa"></i></button>
                    </div>
                </div>
                <div class="job-left">
                    <h2 class="heading">Project Length</h2>
                    <ul class="job-type">
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Hours or Days</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Days</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Months</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>&gt; 6 Months</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Not Specified</li>
                    </ul>
                </div>
                <div class="job-left">
                    <h2 class="heading">Hours Per Week</h2>
                    <ul class="job-type">
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Part Time</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Full Time</li>
                        <li><span class="cutome-check cutome-2">
                                <input type="checkbox" />
                                <span></span></span>Not Specified </li>
                    </ul>
                </div>
            </div>
            <div class="home-right">   
                <div class="search-right">
                    <div class="row ">
                        <div class="search-left col-sm-6 col-xs-12">
                            <div class="relative">
                                <input type="text" placeholder="Search For Job" />
                                <button class="search-submit" type="submit"><i class="fa-search fa"></i></button>
                            </div>
                        </div>
                        <div class="select-search col-sm-6 col-xs-12">
                            <div class="relative search-select">
                                <select>
                                    <option>Sort by:</option>
                                    <option>seloect 1</option>
                                    <option>seloect 2</option>
                                    <option>seloect 3</option>
                                    <option>seloect 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="row home-text">    
                    <div class="f-left col-xs-12">{{count($jobList)}} Jobs Found</div>		
                </div>
                <div class="clear-full home-block">
                    @if(count($jobList)!=0)
                    @foreach($jobList as $jobListVal)
                    <div class="home-job-row full">
                        <h2 class="job-heading"><a href="jobdetail/{{$jobListVal['id']}}">{{$jobListVal['title']}}</a></h2>
                        <ul class="action-icon">
                            <li><a href="#" data-toggle="tooltip" title="tooltip"><i class="fa fa-heart"></i></a></li>
                        </ul>
                        <h2 class="sub-heading">{{$jobListVal['job_type']}} - {{$jobListVal['level']}} ({{($jobListVal['level']!=''&&$jobListVal['level']!=null)?(($jobListVal['level']=='Beginner')?'$':(($jobListVal['level']=='Medium')?'$$':'$$$')):''  }}) - Est. Budget: {{$arrApproximateBudget[$jobListVal['approximate_budget']]}} - Posted {{$jobListVal['ago']}} </h2>
                        <p class="text">{{$jobListVal['job_describe']}}</p>
                        <div class="clear-full job-bottom">
                            <span>Client:</span><img src="images/icon-small-right.png" alt="#"><span>Payment verified</span>
                            <ul class="stars">
                                <li><a href="#" class="fa-star fa"></a></li>
                                <li><a href="#" class="fa-star fa"></a></li>
                                <li><a href="#" class="fa-star fa"></a></li>
                                <li><a href="#" class="fa-star fa"></a></li>
                                <li><a href="#" class="fa-star fa"></a></li>
                            </ul>
                            <span>$750+ spent</span><span><i class="fa-map-marker fa"></i>{{$arrCountry[$jobListVal['country']]}}</span>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <!--                    <div class="home-job-row full">
                                            <h2 class="job-heading"><a href="#">Advanced WordPress plugin customisation job</a></h2>
                                            <ul class="action-icon">
                    
                                                <li><a href="#" data-toggle="tooltip" title="Tooltip"><i class="fa fa-heart"></i></a></li>
                                            </ul>
                                            <h2 class="sub-heading">Fixed-Price - Expert ($$$) - Est. Budget: $280 - Posted 23 minutes ago </h2>
                                            <p class="text">Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                            <div class="clear-full job-bottom">
                                                <span>Client:</span><img src="images/icon-small-right.png" alt="#"><span>Payment verified</span>
                                                <ul class="stars">
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                </ul>
                                                <span>$750+ spent</span><span><i class="fa-map-marker fa"></i>United Kingdom</span>
                                            </div>
                                        </div>-->
                    <div class="paging-row">  <ul class="cmn-paging">
                            <li>1 - 20 of 141</li>
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection