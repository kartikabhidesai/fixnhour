@extends('layouts.clientlayout')

@section('content')


<main class="cd-main-content">
    

    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="row jobdetail">
                <div class="col-md-12">
                    <div class='first-section'>
                        <div class='row'>
                            <div class="col-md-12">
                                <h1 class="heading">{{ $jobDetail[0]['title'] }}</h1>
                                <ul class='pull-left'>
                                    <li class='label label-default'>Category 1</li>
                                    <li class='label label-default'>Sub Category 1</li>
                                </ul>
                                <span class='posttime'>Posted 3 minutes ago </span>
                            </div>
                        </div>
                        <div class='row margin-top20'>
                            <div class='col-md-4'><i class="fa fa-diamond"></i>&nbsp; &nbsp;Featured Job  </div>
                            <div class='col-md-4'><i class="fa fa-usd"></i> &nbsp; &nbsp;Expert Level </div>
                            <div class='col-md-4'><i class="fa fa-clock-o"></i>&nbsp; &nbsp;Hourly</div>
                        </div>
                    </div>
                    <div class='second-section'>
                        <h3 class="heading">Detail</h3>
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
                </div>
                
            </div>
           
        </div>
    </section>

</main>

@endsection