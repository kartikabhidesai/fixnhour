@extends('layouts.freelancerlayout')

@section('content')

<main class="cd-main-content">
    <div class="max-height-footer profile-page gray-bg">
        <div class="container pad-botm-30">
            <div class="left-profile">
                <div class="profile-top full">
                    <div class="profile-left">  <img src="{{ asset('images/user-large.jpg') }}" alt="#" />
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
                            <h2 class="profile-name">James Deal <img src="{{ asset('images/right-icon.png') }}" alt="#" /></h2>
                            <p><strong>Graphic & Web Designer</strong></p>
                            <p class="location"><img src="{{ asset('images/map-pin.png') }}" alt="#" /> Los Angeles, United State</p>
                            <div class="profile-price"><strong>$50.00</strong> <span> PER HOUR  <span></div>
                                <div class="clearfix"></div>
                                    <ul class="tag-list">
                                        <li><a href="javascript:void(0)">Design</a></li>
                                        <li><a href="javascript:void(0)">Photoshop</a></li>
                                        <li><a href="javascript:void(0)">Illustrator</a></li>
                                        <li><a href="javascript:void(0)">Corel</a></li>
                                        <li><a href="javascript:void(0)">MORE+</a></li>
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
                                                    <div id="oveview">
                                                        <h2 class="heading-2">Overview</h2>
                                                        <div class="over-text">
                                                            <p class="text-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,</p>
                                                            <a class="read-more">more</a>
                                                        </div>
                                                    </div>
                                                    <div id="job-history">
                                                        <div class="job-history">
                                                            <div class="job-his-head block">
                                                                <div class="f-left">
                                                                    <h2 class="heading-2">Job history</h2>
                                                                </div>
                                                                <div class="f-right">
                                                                    <p class="compl-status"><a href="javascript:void(0)" class="active" id="in-complate-btn">Completed</a>
                                                                        &nbsp;&nbsp;|&nbsp;&nbsp;
                                                                        <a href="javascript:void(0)" id="in-porgress-btn">In Process</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="job-his-outer">
                                                                <div class="job-hist" id="hist-complate">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="border-dot">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="border-dot">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="border-dot">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear-full text-center btn-bottom"> <a href="#" class="btn-more">more</a> </div>
                                                                </div>
                                                                <div class="job-hist" id="hist-in-progress">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job 2</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="border-dot">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job 2</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="border-dot">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job 2</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="border-dot">
                                                                    <div class="job-hist-list row">
                                                                        <div class="col-sm-8 job-list-left">
                                                                            <h2 class="heading"><a href="#">Advanced WordPress plugin customisation job 2</a></h2>
                                                                            <p>Hi there, I have a full brief from a client for an advanced WordPress plugin customisation job. The task is to modify the Ultimate Membership Pro plugin (https://codecanyon.net/item/ultimate-membership-pro-wordpress-plugin/12159253) to allow addition</p>
                                                                        </div>
                                                                        <div class="col-sm-4 job-list-right">
                                                                            <div class="block">
                                                                                <ul class="stars">
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><a href="#" class="fa-star fa"></a></li>
                                                                                    <li><strong class="star-text">5</strong></li>
                                                                                </ul>
                                                                            </div>
                                                                            <p><strong>$49</strong> Hourly Rate</p>
                                                                            <p><strong>$200</strong> Earned</p>
                                                                            <p class="gray">20 July 2016 - 30 July 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear-full text-center btn-bottom"> <a href="#" class="btn-more">more</a> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h2 class="heading-2">Porfolio</h2>
                                                        <div class="clearfix"></div>
                                                        <div class="portfolio-outer">
                                                            <div id="grid">

                                                                <div class="box" data-category="Drawings">
                                                                    <div data-thumbnail="gallery/Drawings/thumbnails/Plants vs Zombies.jpg" ></div>

                                                                    <div data-image="gallery/Drawings/Plants vs Zombies.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Plants vs Zombies</h3>
                                                                        <h5>In Drawings</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Plants vs Zombies <span>In Drawings</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/The Golden Apple.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/The Golden Apple.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>The Golden Apple</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        The Golden Apple <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Yellow Lenses.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Yellow Lenses.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Yellow Lenses</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Yellow Lenses <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Drawings">
                                                                    <div data-thumbnail="gallery/Drawings/thumbnails/Watercolor.jpg" ></div>

                                                                    <div data-image="gallery/Drawings/Watercolor.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Watercolor</h3>
                                                                        <h5>In Drawings</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Watercolor <span>In Drawings</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Muffin Bride.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/Muffin Bride.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Muffin Bride</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Muffin Bride <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Sunny Day.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Sunny Day.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Sunny Day</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Sunny Day <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Drawings">
                                                                    <div data-thumbnail="gallery/Drawings/thumbnails/Self Portrait.jpg" ></div>

                                                                    <div data-image="gallery/Drawings/Self Portrait.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Self Portrait</h3>
                                                                        <h5>In Drawings</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Self Portrait <span>In Drawings</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Love and Hate.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/Love and Hate.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Love and Hate</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Love and Hate <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Silueta.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Silueta.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Silueta</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Silueta <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Drawings">
                                                                    <div data-thumbnail="gallery/Drawings/thumbnails/Phany.jpg" ></div>

                                                                    <div data-image="gallery/Drawings/Phany.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Phany</h3>
                                                                        <h5>In Drawings</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Phany <span>In Drawings</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Little Bunny.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/Little Bunny.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Little Bunny</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Little Bunny <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/photography.jpg" ></div>

                                                                    <div data-image="gallery/Photography/photography.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>photography</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        photography <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Drawings">
                                                                    <div data-thumbnail="gallery/Drawings/thumbnails/Little Witch.jpg" ></div>

                                                                    <div data-image="gallery/Drawings/Little Witch.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Little Witch</h3>
                                                                        <h5>In Drawings</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Little Witch <span>In Drawings</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Frida Kahlo.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/Frida Kahlo.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Frida Kahlo</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Frida Kahlo <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Patrick.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Patrick.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Patrick</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Patrick <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Drawings">
                                                                    <div data-thumbnail="gallery/Drawings/thumbnails/Black Dress.jpg" ></div>

                                                                    <div data-image="gallery/Drawings/Black Dress.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Black Dress</h3>
                                                                        <h5>In Drawings</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Black Dress <span>In Drawings</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Face Your Monsters Contest.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/Face Your Monsters Contest.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Face Your Monsters Contest</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Face Your Monsters Contest <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Owner of the Day.jpg" ></div>
                                                                    <div data-image="gallery/Photography/Owner of the Day.jpg" ></div>
                                                                    <div class="thumbnail-caption">
                                                                        <h3>Owner of the Day</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>
                                                                    <div class="lightbox-text">
                                                                        Owner of the Day <span>In Photography</span>
                                                                    </div>
                                                                </div>
                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Alice in Wonderland.jpg" ></div>
                                                                    <div data-image="gallery/Illustrations/Alice in Wonderland.jpg" ></div>
                                                                    <div class="thumbnail-caption">
                                                                        <h3>Alice in Wonderland</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>
                                                                    <div class="lightbox-text">
                                                                        Alice in Wonderland <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Karen.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Karen.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Karen</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>
                                                                    <div class="lightbox-text">
                                                                        Karen <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Illustrations">
                                                                    <div data-thumbnail="gallery/Illustrations/thumbnails/Mermaid.jpg" ></div>

                                                                    <div data-image="gallery/Illustrations/Mermaid.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Mermaid</h3>
                                                                        <h5>In Illustrations</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Mermaid <span>In Illustrations</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Emelyne.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Emelyne.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Emelyne</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Emelyne <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Dreams.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Dreams.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Dreams</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Dreams <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Day in the Field.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Day in the Field.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Day in the Field</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Day in the Field <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Chair.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Chair.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Chair</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Chair <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Cat.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Cat.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Cat</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Cat <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Black and White.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Black and White.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Black and White.jpg</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Black and White.jpg <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box" data-category="Photography">
                                                                    <div data-thumbnail="gallery/Photography/thumbnails/Anger.jpg" ></div>

                                                                    <div data-image="gallery/Photography/Anger.jpg" ></div>

                                                                    <div class="thumbnail-caption">
                                                                        <h3>Anger</h3>
                                                                        <h5>In Photography</h5>
                                                                    </div>

                                                                    <div class="lightbox-text">
                                                                        Anger <span>In Photography</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div id="skill">
                                                        <h2 class="heading-2">Skills</h2>
                                                        <div class="clearfix"></div>
                                                        <div class="skil-outer">
                                                            <div class="skills-row text-center">
                                                                <div class="skills-img"><img src="{{ asset('images/skil-80.jpg') }}" alt="#"></div>
                                                                <p>PHOTOSHOP</p>
                                                            </div>
                                                            <div class="skills-row text-center">
                                                                <div class="skills-img"><img src="{{ asset('images/skil-91.jpg') }}" alt="#"></div>
                                                                <p>Illustrator</p>
                                                            </div>
                                                            <div class="skills-row text-center">
                                                                <div class="skills-img"><img src="{{ asset('images/skil-95.jpg') }}" alt="#"></div>
                                                                <p>CORAL</p>
                                                            </div>
                                                            <div class="skills-row text-center">
                                                                <div class="skills-img"><img src="{{ asset('images/skil-80.jpg') }}" alt="#"></div>
                                                                <p>PHOTOSHOP</p>
                                                            </div>
                                                            <div class="skills-row text-center">
                                                                <div class="skills-img"><img src="{{ asset('images/skil-91.jpg') }}" alt="#"></div>
                                                                <p>Illustrator</p>
                                                            </div>
                                                            <div class="skills-row text-center">
                                                                <div class="skills-img"><img src="{{ asset('images/skil-95.jpg') }}" alt="#"></div>
                                                                <p>CORAL</p>
                                                            </div>
                                                        </div>
                                                        <div class="clear-full text-center btn-bottom"> <a href="#" class="btn-more">more</a> </div>
                                                    </div>
                                                    <div id="education">

                                                        <p>Tab 5 Container</p>
                                                    </div>
                                                    <div id="certificates">

                                                        <p>Tab 6 Container</p>
                                                    </div>
                                                    <div id="past-experience">

                                                        <p>Tab 7 Container</p>
                                                    </div>
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

