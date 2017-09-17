@extends('layouts.freelancerlayout')

@section('content')


<main class="cd-main-content">
    @include('freelancer.includes.body-header-sub')

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="row proposal">
                <div class="col-md-12">
                    <div class='first-section'>
                        <div class='row'>
                            <div class="col-md-12">
                                <h1 class="heading">Submit proposal</h1>
                            </div>
                        </div>
                        
                    </div>
                    <div class='second-section'>
                        <h1 class="heading">{{ $jobDetail[0]['title'] }}</h1>
                        <h3 class="heading">Detail about Job</h3>
                        <section>
                            <p> Hi,</p>
                             <p>   I'm looking for some urgent help (today) to fix the following problem:</p>

                             <p>   Wordpress Site, using a custom theme (genesis child theme) and WooCommerce.</p>

                               <p> We use a few custom templates in the theme folder for WooCommerce pages, as well as Genesis Connect for WooCommerce to integrate the two.</p>

                              <p>  That woocommerce installation has now been updated and everything is fine *except* for the rolling gallery - which only displays the first image in the gallery selection, and no others when they're clicked on.</p>

                              <p>  The thumbnails appear correctly, but when clicking on a thumbnail the slider moves above, but does not show the corresponding image. </p>
                            </p>
                        </section>
                        <div class='attachment-div'>
                         <h4 class="heading">Attachment</h4>
                         <p><i class="fa fa-paperclip" aria-hidden="true"></i><a href="">Screenshot 1.jpg</a></p>
                         <p><i class="fa fa-paperclip" aria-hidden="true"></i><a href="">Screenshot 2.jpg</a></p>
                        </div>
                        <div class='other-skill'>
                            <span class='pull-left'>Other Skills: </span>
                            <ul>
                                <li class='label label-default'>Skill 1</li>
                                <li class='label label-default'>Skill 2</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class='third-section'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h3>What is the full amount you'd like to bid for this job?</h3>
                            </div>
                            <div class='col-md-9'>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <h3>Bid</h3>
                                         <p>What is the full amount you'd like to bid for this job?</p>
                                    </div>
                                    <div class='col-md-3'>
                                        <h3>&nbsp;</h3>
                                        <p><input type='text' class='custom-text-box form-co form-control'></p>
                                    </div>
                               </div>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <h3>Softral Service Fee </h3>
                                    </div>
                                    <div class='col-md-3'>
                                        <h3>$100</h3>
                                    </div>
                               </div>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <h3>You'll be paid</h3>
                                         <p>The estimated amount you'll receive after service fees. </p>
                                    </div>
                                    <div class='col-md-3'>
                                        <h3>&nbsp;</h3>
                                        <p><input type='text' class='custom-text-box form-co form-control'></p>
                                    </div>
                               </div>
                            </div>
                            <div class='col-md-3'>
                                <h3>&nbsp;</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class='forth-section'>
                        <div class='row'>
                            <div class='col-md-4'>
                                <h3>How long will this project take?</h3>
                                <select class="form-control" id="category" name="category">
                                    <option value="" selected="selected">-- Select duration --</option>
                                    <option value="1">Less than 1 week</option>
                                    <option value="2">Less than 1 month</option>
                                    <option value="3">1 to 3 months</option>
                                    <option value="4">3 to 6 months</option>
                                    <option value="5">More than 6 months</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='forth-section'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h3> Additional Information </h3>
                                <textarea class="coutom-textarea" id="description" rows="3" placeholder="Describe" name="description" cols="50"></textarea>
                                <br/><br/>
                                <input class="coustom-btn" name="continue" id="continue" value="Continue" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>
    </section>

</main>

@endsection