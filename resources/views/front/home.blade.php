@extends('layouts.frontlayout')

@section('content')
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
<main class="cd-main-content">

    <div class="max-height-footer landing-page">
        <div class="relative">
            <div id="hero-slider" class="owl-carousel owl-theme hero-slider">
                @if(count($slider)!=0)
                  @foreach($slider as $sliders)
                <div class="item">
                    <img src="{{ asset('uploads/slider/'.$sliders->var_image)}}" alt="{{ $sliders->var_name }}">
                </div>
               <!-- <div class="item"><img src="images/slider-2.jpg" alt="second slide"></div>  -->
                <!--<div class="item"><img src="images/slider-3.jpg" alt="third slide"></div>-->
                <!-- <div class="item"><img src="images/slider-4.jpg" alt="Fouth slide"></div> -->
                <!--<div class="item"><img src="images/slider-5.jpg" alt="Five slide"></div>-->
                 @endforeach
                 @endif
            </div>
            <div class="banner-main fixe">
                <div class="container">
                    <div class="banner-inner text-center">
                        <div class="clearfix"></div>
                        <a class="orange-btn" href="javascript:void(0)">GET STARTED </a> </div>
                </div>
            </div>
        </div>
        <section class="work-home text-center">
            <div class="container">
                <h1 class="heading-1">explore the expert freelancers</h1>
                <div class="clearfix"></div>

                <div class="work-home-table">

                    <div class="work-home-row">
                        <a class="work-home-data yellow-bg"> <img src="images/icon-develop.png" alt="#"> <span>Web developers</span> </a> 
                        <a class="work-home-data green-bg"> <img src="images/iacon-mobile-dev.png" alt=""> <span>Mobile developers</span> </a> 
                        <a class="work-home-data pink-bg"> <img src="images/icon-cretive.png" alt="#"> <span>Designers & Creatives</span> </a>
                        <a class="work-home-data skyblue-bg"> <img src="images/icon-writer.png" alt="#"> <span>Writers </span> </a>
                    </div>

                    <div class="work-home-row"> 
                        <a class="work-home-data pink-bg"> <img src="images/assistent.png" alt="#"> <span>Virtual assistants</span> </a> 
                        <a class="work-home-data skyblue-bg"> <img src="images/icon-customer.png" alt="#"> <span>Customer service agents</span> </a>
                        <a class="work-home-data purple-bg"> <img src="images/icon-sels.png" alt="#"> <span>Sales & marketing experts</span> </a> 
                        <a class="work-home-data gray-color-bg"> <img src="images/icon-account.png" alt="#"> <span>Accountants & consultants</span> </a>
                    </div>

                </div>

                <div class="clearfix"></div>
                <a class="btn-green" href="javascript:void(0)">SEE ALL CATEGORIES</a> </div>
        </section>
        <div class="clearfix"></div>
        <section id="how-it-work" class="work-process">
            <div class="container">
                <h2 class="heading-2 text-center">How It Works</h2>
                <p class="text-center text-mid">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever sinceLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="clearfix"></div>
                <div class="process-inner">
                    <div class="wrok-step step-1">
                        <figure><img src="images/post-a-project-icn.png" alt="#" /></figure>
                        <span>Post A Project</span> </div>
                    <div class="wrok-step-gap gap1"></div>
                    <div class="wrok-step step-2">
                        <figure><img src="images/hire-freelancer-icn.png" alt="#" /></figure>
                        <span>Hire Freelancer</span> </div>
                    <div class="wrok-step-gap gap2"></div>
                    <div class="wrok-step step-3">
                        <figure><img src="images/pay-freelancers-safely-icn.png" alt="#" /></figure>
                        <span>Pay Freelancers Safely</span> </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="choose-us">
            <div class="container">
                <h3 class="heading-2 text-center">Why Choose Us</h3>
                <p class="text-center text-mid">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="clearfix"></div>
                <div class="choose-inner row">
                    <div class="col-md-4 col-sm-6 col-xs-12 chose-left">
                        <div class="chose-row">
                            <div class="icon"><i class="fa-user fa"></i></div>
                            <div class="chose-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="chose-row">
                            <div class="icon"><i class="fa-cloud-upload fa"></i></div>
                            <div class="chose-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="chose-row">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="chose-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 chose-mid text-center"> <img src="images/chose-img.png" alt="#" /> </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 chose-right">
                        <div class="chose-row">
                            <div class="icon"><i class="fa fa-pencil"></i></div>
                            <div class="chose-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="chose-row">
                            <div class="icon"><i class="fa-pie-chart fa"></i></div>
                            <div class="chose-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="chose-row">
                            <div class="icon"><i class="fa-life-ring fa"></i></div>
                            <div class="chose-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="testimonial-home text-center">
            <div class="container">
                <h4 class="heading-2">Some kind form our Clients</h4>
                <p class="text-mid">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="clearfix"></div>
                <div class="row">
                    <div id="testi-slider" class="testi-slider">
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi-row">
                                <div class="testi-img"><img src="images/testi-img1.png" alt="#" /></div>
                                <div class="testi-text">
                                    <p class="testi-name">ANDREA STEPHENS<br>
                                        Co Founder</p>
                                    <p class="testi-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="hire-home text-center">
            <div class="container">
                <h5 class="heading-2">Hire Freelancers & Grow your Business</h5>
                <p>Employers love because they can quickly hire skilled Freelancers, who can deliver quality work on time and help grow their Business.</p>
                <div class="clearfix"></div>
                <a class="hire-btn">Hire Freelancers</a>
                <div class="clearfix"></div>
                <p class="hire-text">Hiring Freelancers is absolutely Free!</p>
            </div>
        </section>
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <section class="footer-clints text-center">
            <div class="container">
                <h6 class="heading-2">Trusted by 4+ million clients</h6>
                <p class="text-mid">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinceLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="clearfix"></div>
                <div class="clints-slider text-center" id="clints-slider">
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                    <div class="item"><a href="javascript:void(0)"><img src="images/site-logo.png" alt="#" /></a></div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</main>



@endsection
