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
                <div class="job-left">
                    @include('client.includes.setting-menu-left-panel')
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="home-right">   
                <div class="search-right">
                    <div class="row ">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                            <div class="col-md-12 setting-title">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container-old">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="circle-tile ">
                                            <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                                            <div class="circle-tile-content dark-blue">
                                                <div class="circle-tile-description text-faded"> My Jobs</div>
                                                <div class="circle-tile-number text-faded ">10</div>
                                                <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="circle-tile ">
                                            <a href="#"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                                            <div class="circle-tile-content red">
                                                <div class="circle-tile-description text-faded"> My Proposals </div>
                                                <div class="circle-tile-number text-faded ">80</div>
                                                <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
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
    <style>

    </style>
</main>

@endsection