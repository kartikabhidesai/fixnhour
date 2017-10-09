@extends('layouts.clientlayout')

@section('content')


<main class="cd-main-content">
    @include('client.includes.body-header-sub')

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
                        <ul class="action-icon">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit</button>           
                        </ul>
                    </div>
                    
                    @endforeach
                    @endif

                  
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Job</h4>
        </div>
        <div class="modal-body">
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
                                            {{ Form::file('attach1', NULL, array('class' => 'form-control', 'id' => 'attach1')) }}
                                            {{ Form::file('attach2', NULL, array('class' => 'form-control', 'id' => 'attach2')) }}
                                        </li>
                                        <li><a href="#"><img src="{{ asset('images/round-pluse-icon-.png') }}"><span>browse</span></a></li>
                                        <li><a href="#"><img src="{{ asset('images/round-pluse-icon-.png') }}"><span>browse</span></a></li>
                                    </ul>
                                    <p class="notic"> The file can up to 25 MB in size </p>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group padding-top-20">
                                    <label class="custom-lable "> Enter skills needed </label>	
                                    {{ Form::select('skill', $arrPostJobSkill, null, array('class' => 'form-control', 'id' => 'skill')) }}
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
                                                {{ Form::select('country', $arrCountry, null, array('class' => 'form-control', 'id' => 'country')) }}
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
                        <div class="col-md-12">
                            <div class="form-group padding-top-20">
                                <label class="custom-lable"> Proposed Start Date </label>
                                <div class="col-md-12">
                                    <ul class="hire-ul" >
                                        <li><label><span class="radio-custome"> {{ Form::radio('proposed_option', '1', true,  array('class' => 'proposed_option')) }} <span></span></span> Start Innediately after proposal is  selected </label></li>
                                        <li><label><span class="radio-custome"> {{ Form::radio('proposed_option', '2', false, array('class' => 'proposed_option')) }} <span></span></span> Job will start on </label></li>
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
                <div class="col-sm-12 text-center" >
                <div class="action-buttons">
                    <ul>
                        <li><input type="submit" class="coustom-btn" name="continue" id="continue" value="Continue"></li>
                        <li><input type="submit" class="coustom-btn" name="save_post" id="save_post" value="Save & Post Later"></li>
                    </ul>
                </div>
                </div>
        </div>
        <div class="modal-footer">
          
        </div>
        </div>
      </div>
     </div>
@endsection

<script>
$(document).ready(function(){
    $("button").click(function(){
        $.get("demo_test.asp", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>