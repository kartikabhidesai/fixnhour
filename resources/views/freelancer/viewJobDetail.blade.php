@extends('layouts.freelancerlayout')

@section('content')


<main class="cd-main-content">
    @include('freelancer.includes.body-header-sub')

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-right" style="width: 25%;">
                <!--  <div class="search-top">
                     <div class="heading text-center">Job Search</div>
                  </div>-->
                <div class="job-left">
                    <a class="pull-right" href="#"><p class="heading">Flags as inappropriate</p></a><br><br><br>
                    <br>
                    <button type="submit" style="height:40px;width:300px" class="btn default btn-green ">Submit A Proposol</button><p>&nbsp;</p>
                    <button type="submit" style="height:40px;width:300px; background-color: white; color: darkgray" class="btn success btn-green "><i class="fa fa-heart"></i> Save Job</button>
                    <p><br></p><p style="text-align: center" class="heading">
                        Required Connects to submit a <br> proposal: 2 <a title="Help" href="#"> <i class="fa fa-question-circle-o"></i> </a><br> Available Connects; 25
                    </p><hr>
                    <h4>About the Client <i class="fa fa-check-circle-o fa-lg pull-right"></i> </h4>
                    <div class="clear-full job-bottom">
                                                <ul class="stars">
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                </ul> (4.96) 4 Reviews
                                            </div>
<!--                    <h2 class="heading">Category</h2>
                    <div class="relative search-select">
                        <select>
                            <option>All Categories</option>
                            <option>select 1</option>
                            <option>select 2</option>
                            <option>select 3</option>
                            <option>select 4</option>
                        </select>
                    </div>-->
                </div>
                <div class="clearfix"></div>
<!--                <div class="job-left">
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
                </div>-->
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
            <div class="home-left">
                  @foreach($jobList as $jobListVal)
                <div class="search-left" style="width:800px">
                    <div class="row " style="margin-left: 40px;">
                      
                        <h2 class="heading" style="font-size:37px;">{{$jobListVal['title']}}</h2>
                        <br>
                       
<!--                        <div class="col-md-6">
                            <div class="relative">
                                <input type="text" placeholder="Search For Job" />
                                <button class="search-submit" type="submit"><i class="fa-search fa"></i></button>
                            </div>
                        </div>
                        <div class=" col-md-6"> 
                            <div class="relative">
                                <input type="text" placeholder="Search For Job" />
                                <button class="search-submit" type="submit"><i class="fa-search fa"></i></button>
                            </div>
                        </div>
                        <div class="select-search col-sm-12 col-xs-12">
                            <div class="relative search-select">
                                <select>
                                    <option>Sort by:</option>
                                    <option>seloect 1</option>
                                    <option>seloect 2</option>
                                    <option>seloect 3</option>
                                    <option>seloect 4</option>
                                </select>
                            </div>
                        </div>-->
                    </div>
                </div> 
                   @endforeach
                <div class="row home-text" style="margin-left: 40px; width:810px;">    
                   	 <h4 style="font-size: 13px" class="label label-default">Website Developer</h4> &nbsp; &nbsp; Posten 7 hours ago
                </div>
                   <br>
                <div class="row home-text" style="margin-left: 40px; width:810px;">    
                    <div class="col-md-4">    
                        <i class="fa fa-diamond"></i>&nbsp; &nbsp;Featured Job  
                   </div>
                    <div class="col-md-4">    
                        <i class="fa fa-usd"></i>&nbsp;<i class="fa fa-usd"></i>&nbsp;<i class="fa fa-usd"></i>&nbsp; &nbsp;Expert Level 
                   </div>
                    <div class="col-md-4">    
                            <i class="fa fa-calendar-o"></i>&nbsp; &nbsp;Start Date 
                   </div>
                    <p>&nbsp;</p>
                     <div class="col-md-4">    
                            <i class="fa fa-clock-o"></i>&nbsp; &nbsp;Hourly
                            <p style="margin-left: 23px; font-size: 14px">Less then 30 hr/week<br>Less then 1 week</p>
                   </div>
                </div>
                   <br>
                <div class="clear-full home-block" style="width:810px;">
                    
                    <div class="home-job-row full">
                        <h2>Details</h2>
<!--                        <ul class="action-icon">
                            <li><a href="#" data-toggle="tooltip" title="tooltip"><i class="fa fa-heart"></i></a></li>
                        </ul>-->
<br><br>
                        <h2 class="sub-heading"> </h2>
                        <p class="text">{{$jobListVal['job_describe']}}</p>
                        <br><br>
                        <h4>Attachment</h4>
                        <div style="margin: 10px; font-size: 15px">
                            <i class="fa fa-paperclip" aria-hidden="true"></i><a href="">Screenshot 1.jpg</a><p>&nbsp;</p>
                        <i class="fa fa-paperclip" aria-hidden="true"></i><a href="">Screenshot 2.jpg</a>
                        </div>
                        <br><br>
                        
                        Other Skills : <h4 style="font-size: 13px" class="label label-default">HTML</h4> <h4 style="font-size: 13px" class="label label-default">MySQL Administration</h4>
                    </div>
                  

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
<!--                    <div class="paging-row">  <ul class="cmn-paging">
                            <li>1 - 20 of 141</li>
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>-->
                </div>
                   
                   
                   <div class="clear-full home-block" style="width:810px;">
                    
                    <div class="home-job-row full">
                        <br>
                       
                        <div class="col-md-6">
                            <h4><b>Preferred Qualifications </b></h4>
                            
                   </div>
                    <div class="col-md-6">  
                        <h4><b>Activity on this Job</b></h4>
                       
                   </div>
                        <div class="col-md-12"> <h4>Upgrate your membership to see the bid range?</h4></div> 
                    </div>
                  

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
                   
                </div>
                   
                   <br><br>
                   <div class="clear-full home-block" style="width:810px;">
                    
                    <div class="home-job-row full">
                     <div class="col-md-12"> <h4>Client's Work History and Feedback(9)</h4></div>
                        <br>
                       
                        <div class="col-md-6">
                            <h4><b>Preferred Qualifications </b></h4>
                            
                   </div>
                    <div class="col-md-6">  
                        <h4><b>Activity on this Job</b></h4>
                       
                   </div> 
                    </div>
                  

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
                   
                </div>
            </div>
            
            
        </div>
    </section>

</main>

@endsection