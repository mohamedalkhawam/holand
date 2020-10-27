@extends('layout.website')
@section('content')
     <!--  Main start -->
        <main> 

            <!-- Service block top start -->
            <div class="overflow_hidden">
                <div class="radius_niz_mini"> 
                    <div class="row header_title title_service">
        			     <div class="container"> 
        					<div class="header_title_content">
                                <h1>Services</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                            </div>
                            <img src="http://via.placeholder.com/300x440" class="absolute_img" data-srcset="http://via.placeholder.com/300x440, http://via.placeholder.com/600x880 2x" alt="DiDent" />
        				</div>
        			</div>
                </div>
            </div>
			<!-- Service block top end -->

            <!-- Service start -->
            <div class="row services">
                <div class="overflow_hidden">
                    <div class="radius_row_niz services_row">
                        <div class="container">
                            <div class="row row-15">
                                <!-- Service item start -->
                            <a href="{{route('servicePage','Cosmetic Dentistry')}}" class="services_item">
                                    <span class="services_item_title">Cosmetic Dentistry</span>
                                    <span class="services_item_desc">Vineers, whitening, bonding, fillings etc.</span>
                                    <i class="dental_icon dentalic_cosmetic"></i>
                                </a>
                                <!-- Service item end -->
                                {{-- <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">General Dentistry</span>
                                    <span class="services_item_desc">Cleanings, checkups, sleep apnea etc.</span>
                                    <i class="dental_icon dentalic_general"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Restorations</span>
                                    <span class="services_item_desc">Implants, crowns, dentures, bridges etc.</span>
                                    <i class="dental_icon dentalic_restorations"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Orthodontics</span>
                                    <span class="services_item_desc">Invisalign, metal braces, expanders</span>
                                    <i class="dental_icon dentalic_iorthodontics"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Oral Surgery</span>
                                    <span class="services_item_desc">Dental extractions, root canals, tissue</span>
                                    <i class="dental_icon dentalic_combined"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Pediatric Dentistry</span>
                                    <span class="services_item_desc">Oral health of infants, children, adolescents</span>
                                    <i class="dental_icon dentalic_pediatric"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Emergency Dentistry</span>
                                    <span class="services_item_desc">Invisalign, metal braces, expanders</span>
                                    <i class="dental_icon dentalic_emergency"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Preventative Dentistry</span>
                                    <span class="services_item_desc">Dental extractions, root canals, tissue</span>
                                    <i class="dental_icon dentalic_preventative"></i>
                                </a>
                                <!-- Service item end -->
                                <!-- Service item start -->
                            <a href="{{route('servicePage')}}" class="services_item">
                                    <span class="services_item_title">Other Services</span>
                                    <span class="services_item_desc">Oral health of infants, children, adolescents</span>
                                    <i class="dental_icon dentalic_other_services"></i>
                                </a> --}}
                                <!-- Service item end -->
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service end -->

            <!-- See Testimonials Block start -->
            <div class="row see_testimonials_row">
                <div class="container overflow_hidden">
					<div class="see_testimonials background_blue radius_mini row"> 
                        <div class="center_blue  row">
    						<div class="see_testimonials_content">
    							<h3>We are good at what we do. <br> And no doubts</h3>
                                <div><i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
    							<a href="/testimonials.html" class="btn_transparent">See Our Dentists </a>
    						</div> 
                        </div>  
					</div>
                </div>
            </div>
            <!-- See Testimonials Block end --> 

            <!-- Exeptional Specialists Block start -->
            {{-- <div class="row exeptional_row">
                <div class="container">
                    <div class="row">
                        <div class="col-2 exeptional_l">
                            <div class="exeptional_text">
                                <h5 class="exeptional_sub_title">
                                    Exeptional Specialists
                                </h5>
                                <div class="exeptional_title">Great experience of our team</div>
                                <div class="exeptional_desk">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row exeptional_img">
                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/240x240" data-srcset="http://via.placeholder.com/240x240, http://via.placeholder.com/480x480 2x" alt="DiDent">
                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/240x240" data-srcset="http://via.placeholder.com/240x240, http://via.placeholder.com/480x480 2x" alt="DiDent">
                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/240x240" data-srcset="http://via.placeholder.com/240x240, http://via.placeholder.com/480x480 2x" alt="DiDent">
                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/240x240" data-srcset="http://via.placeholder.com/240x240, http://via.placeholder.com/480x480 2x" alt="DiDent">
                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/240x240" data-srcset="http://via.placeholder.com/240x240, http://via.placeholder.com/480x480 2x" alt="DiDent"> 
                    </div>
                </div>
            </div>  --}}
            <!-- Exeptional Specialists Block end -->
            
            <!-- What We Can Offer start -->
            <div class="row can_offer_row">
                <div class="container">
                    <div class="can_offer_title">
                        <i class="dental_icon dentalic_offers"></i> 
                        <div class="can_offer_title_lite"></div>
                    </div>
                    <div class="row can_offer_text">
                        <h4>What We Can Offer</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit</p>
                    </div>
                </div>
            </div>
            <!-- What We Can Offer end --> 
            
            <!-- Posts start -->
            <div class="row posts_row"> 
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Cosmetic Dentistry</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">General Dentistry</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Restorations</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Orthodontics</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Oral Surgery</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Pediatric Dentistry</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end --> 
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Emergency Dentistry</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end --> 
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Preventative Dentistry</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                
                <!-- Posts item start -->
                <div class="row posts_item">
                        <div class="container">
                        <div class="row">
                            <div class="col-1-60 posts_item_img">
                                <div class="radius">
                                    <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent">
                                </div>
                            </div>
                            <div class="col-1-40 posts_item_desk">
                                <div class="posts_item_title">Other Services</div>
                                <div class="posts_item_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <a href="/blog_post.html" class="more">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Posts item end -->
                 
            </div>
            <!-- Posts end -->
            
            
            
            <!-- Strong Team start -->
            {{-- <div class="row strong_team_row">
                <div class="container">
                    <div class="strong_team_title">
                        <i class="dental_icon dentalic_staff"></i>
                        <div class="strong_team_title_lite"></div>
                    </div>
                    <div class="row strong_team_text">
                        <h4>Strong Team of Our Practice</h4>
                       <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/300x110" data-srcset="http://via.placeholder.com/300x110, http://via.placeholder.com/600x220 2x" alt="DiDent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        <a href="/ourdentists.html" class="btn">See Our Dentists</a>
                    </div>
                </div>
            </div> --}}
            <!-- Strong Team end -->
        </main>
@endsection