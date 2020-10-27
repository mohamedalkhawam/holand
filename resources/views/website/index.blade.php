@extends('layout.website')
@section('content')

        <!-- Header slideshow start -->
        <div class="overflow_hidden">
            <div class="radius_niz_mini"> 
                <div class="slideshow owl-carousel owl-theme">
                    <!-- Start slideshow item -->
                <?php 
                function cutString($string){
                    $exploded = explode(" ", $string);
                    $firstFive = implode(" ", array_splice($exploded, 0, 3));
                    return $firstFive;
                }
                ?>
                <?php 
                $titleWithLanguage = "title_".app('lang');
                $descriptionWithLanguage = "description_".app('lang');
                $keywordsWithLanguage = "keywords_".app('lang');
                ?>
                 @if(isset($items))
                     @foreach ($items->where('category','slider') as $value)
                        <div class="item">
                        <div class="row slideshow_heding">
                        <div class="slideshow-image lozad" data-background-image ="{{asset('/storage/home/'.$value->imagePath)}}" id="{{$value->title}}"></div>
                            <h4 style="max-width:600px;word-wrap:break-word;text-transform:capitalize">{{$value->$titleWithLanguage}}</h4>
                            <div class="slideshow_info_block">{{$value->$descriptionWithLanguage}}</div>
                            <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                        </div>
                    </div>
                  @endforeach
                 @endif
                    <!-- End slideshow item -->
                    <!-- Start slideshow item -->
                    {{-- <div class="item">
                        <div class="row slideshow_heding">
                            <div class="slideshow-image lozad" data-background-image="{{asset('website/img/slide2.jpg')}}" id="slide2"></div>
                            <h4>Best Whitening<br />in Mountain View</h4>
                            <div class="slideshow_info_block">Get your perfect smile with best specialists in service</div>
                            <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                        </div>
                    </div>
                    <!-- End slideshow item -->
                    <!-- Start slideshow item -->
                    <div class="item">
                        <div class="row slideshow_heding">
                            <div class="slideshow-image lozad" data-background-image="{{asset('website/img/slide3.jpg')}}"id="slide3"></div>
                            <h4>Happy Kids with<br />Healthy Theeth</h4>
                            <div class="slideshow_info_block">We bring dental care for patients of all ages</div>
                            <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                        </div>
                    </div> --}}
                    <!-- End slideshow item -->
                </div> 
            </div>
        </div> 
        <!--  Header slideshow end -->

        <!--  Main start -->
        <main>
            <!-- Service start -->
            <div class="row services">
                <div class="overflow_hidden">
                    <div class="radius_row_niz services_row">
                        <div class="container">
                            <div class="row row-15">

                                <!-- Service item start -->
                            @if($services)
                                @foreach ($services as $value)                                  
                                    <a href="/service_page.html" class="services_item">
                                        <span class="services_item_title"> {{$value->$titleWithLanguage}} </span>
                                        <span class="services_item_desc">{{cutString($value->$keywordsWithLanguage)}} ...etc</span>
                                        <i class="dental_icon dentalic_cosmetic"></i>
                                    </a>                                   
                                @endforeach
                                <!-- Service item end -->
                            @endif
                            </div>
                            <div class="view_servises">
                                <a href="/service_page.html" class="more">View all servises</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service end -->

            <!-- Video start -->
            <div class="row video">
                <div class="container">
                    <iframe height="535" style="border:0;" class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://www.youtube.com/embed/OHLU3cVuQ9A?rel=0&amp;showinfo=0"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Video end -->

            <!-- Info Block start -->
            <div class="row info_blok">
                <div class="container">
                    <div class="row">
                        <!-- Open Hours start -->
                        <div class="col-2 open_hours">
                            <div class="info_blok_title">
                                <h4>Open Hours</h4>
                            </div>
                            <div class="row open_hours_content">
                                <!-- Open Hours Block start -->
                                <div class="row hours_block">
                                    <div class="open_hours_title">MondayвЂ“Friday</div>
                                    <div class="row open_hours_block">
                                        <div class="hours">
                                            10:00
                                            <span>am</span>
                                        </div>
                                        <div class="minute">
                                               - 6:00
                                            <span>pm</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                                <!-- Open Hours Block start -->
                                <div class="row hours_block">
                                    <div class="open_hours_title">Saturday</div>
                                    <div class="row open_hours_block">
                                        <div class="hours">
                                            11:00
                                            <span>am</span>
                                        </div>
                                        <div class="minute">
                                               - 4:00
                                            <span>pm</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                                <!-- Open Hours Block start -->
                                <div class="row hours_block appointment_block">
                                    <div class="open_hours_title">Sunday</div>
                                    <div class="row open_hours_block">
                                        <div class="appointment">
                                            By appointment
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                            </div>
                        </div>
                        <!-- Open Hours end -->

                        <!-- Contact Us start -->
                        <div class="col-2 contact_us">
                            <div class="info_blok_title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="row div_contact_us_content">
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block">
                                    <div class="div_contact_us_title">Phone</div>
                                    <div class="row div_contact_us_block">
                                        <div class="contact_us_phone">+1 650 123-4000</div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block contact_us_block_mail">
                                    <div class="div_contact_us_title">Email</div>
                                    <div class="row div_contact_us_block">
                                        <div class="contact_us_mail"> <a href="mailto:dentalclinic@example.com">dentalclinic@example.com</a> </div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block">
                                    <div class="div_contact_us_title">Address</div>
                                    <div class="row div_contact_us_address">
                                        <div class="div_contact_us_address_title">27 Castro St, Mountain View, Ca 94043</div>
                                        <div class="div_contact_us_address_title_map">
                                            <iframe class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.967410377096!2d-111.89998968453055!3d33.31966746342457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDE5JzEwLjgiTiAxMTHCsDUzJzUyLjEiVw!5e0!3m2!1sen!2sus!4v1516690469899" height="95" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                            </div>
                        </div>
                        <!-- Contact Us end -->
                    </div>
                </div>
            </div>
            <!-- Info Block end -->

            <!-- About start -->
            <div class="container about">
                <div class="row">
                    <!-- About left col start -->
                    <div class="col-2 about_left">
                        <div class="row">
                            <h4>About Practice</h4>
                            <div class="about_left_h2">
                                At Dental Clinic we have petient-centered attitude that results in healthy, beautiful, long lasting smiles!
                            </div>
                            <div class="about_left_text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <a class="more">Learn more</a>
                            <!-- Advantages start -->
                            <div class="row advantages">
                                <div class="advantages_item"> 
                                    <strong>12</strong>
                                    <span>years of experience</span> 
                                </div>
                                <div class="advantages_item"> 
                                    <strong>Hundreds</strong>
                                    <span>happy clients</span> 
                                </div>
                                <div class="advantages_item"> 
                                    <strong>15</strong>
                                    <span>awards in industry</span> 
                                </div>
                            </div>
                            <!-- Advantages end -->
                        </div>
                    </div>
                    <!-- About left col end -->


                    <!-- About right col start -->
                    <div class="col-2 about_right">
                        <!-- About image start -->
                        <div class="row about_image">
                            <!-- About image left col start -->
                            <div class="col-2 about_image_left">
                                <img class="lozad" src="{{asset('website/img/gallery_1.png')}}"" data-src="{{asset('website/img/gallery_1.png')}}" data-srcset="{{asset('website/img/gallery_1.png')}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                <img class="lozad" src="{{asset('website/img/gallery_2.png')}}"" data-src="{{asset('website/img/gallery_2.png')}}" data-srcset="{{asset('website/img/gallery_2.png')}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                            </div>
                            <!-- About image left col end -->
                            <!-- About image right col start -->
                            <div class="col-2 about_image_right">
                                <img class="lozad" src="{{asset('website/img/gallery_3.png')}}"" data-src="{{asset('website/img/gallery_3.png')}}" data-srcset="{{asset('website/img/gallery_3.png')}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                <img class="lozad" src="{{asset('website/img/gallery_4@2x.png')}}"" data-src="{{asset('website/img/gallery_4@2x.png')}}" data-srcset="{{asset('website/img/gallery_4@2x.png')}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                <img class="lozad" src="{{asset('website/img/gallery_5.png')}}"" data-src="{{asset('website/img/gallery_5.png')}}" data-srcset="{{asset('website/img/gallery_5.png')}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                            </div>
                            <!-- About image right col end -->
                        </div>
                        <!-- About image end -->
                    </div>
                    <!-- About right col end -->
                </div>
            </div>
            <!-- About end -->

            <!-- Certificates start -->
            <div class="row certificates">
                <div class="container row">
                    <h4>Certificates & Associations</h4>
                    <div class="navigation"></div>
                </div>
                <div class="owl_certificates owl-carousel owl-theme gallery">
                    <div class="item"><a href="http://via.placeholder.com/800x1100"><img class="owl-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/200x285" alt="DiDent" /></a></div>
                    <div class="item"><a href="http://via.placeholder.com/800x1100"><img class="owl-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/200x275" alt="DiDent" /></a></div>
                    <div class="item"><a href="http://via.placeholder.com/800x1100"><img class="owl-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/200x275" alt="DiDent" /></a></div>
                    <div class="item"><a href="http://via.placeholder.com/800x1100"><img class="owl-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/200x275" alt="DiDent" /></a></div>
                 </div>
            </div>
            <!-- Certificates end -->

            <!-- Start Dentists Tabs -->
            <div id="dentists">
                <!-- Start Dentists Tabs Container -->
                <div class="container">
                    <div class="row tabs">
                        <!-- Start Dentists Tabs Title Left Col -->
                        <div class="tabs_l row">
                            <h4>Dentists</h4>
                            <ul>
                                <li><a href="#tab1">Dr. George Whilson</a></li>
                                <li><a href="#tab2">Dr. Michael Johnson</a></li>
                                <li><a href="#tab3">Dr. Katherin Black</a></li>
                                <li><a href="#tab4">Dr. Helen Bristen</a></li>
                            </ul>
                            <a class="more">View all</a>
                        </div>
                        <!-- End Dentists Tabs Title -->

                        <!-- Start Dentists Tabs Title Left Col -->
                        <div class="tabs_r">
                            <!-- Start tab1 content -->
                            <div class="tab_content" id="tab1">
                                <div class="row">
                                    <div class="tab_content_l col-2">
                                        <a href="#" class="tab_content_name">Dr. George Whilson</a>
                                        <div class="tab_content_profession">Orthodontist</div>
                                        <div class="tab_content_desk">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                    <div class="tab_content_r col-2">
                                        <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End tab1 content -->

                            <!-- Start tab2 content -->
                            <div class="tab_content" id="tab2">
                                <div class="row">
                                    <div class="tab_content_l col-2">
                                        <a href="#" class="tab_content_name">Dr. Michael Johnson</a>
                                        <div class="tab_content_profession">Orthodontist</div>
                                        <div class="tab_content_desk">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                    <div class="tab_content_r col-2">
                                        <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End tab2 content -->

                            <!-- Start tab3 content -->
                            <div class="tab_content" id="tab3">
                                <div class="row">
                                    <div class="tab_content_l col-2">
                                        <a href="#" class="tab_content_name">Dr. Katherin Black</a>
                                        <div class="tab_content_profession">Orthodontist</div>
                                        <div class="tab_content_desk">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                    <div class="tab_content_r col-2">
                                        <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End tab3 content -->

                            <!-- Start tab4 content -->
                            <div class="tab_content" id="tab4">
                                <div class="row">
                                    <div class="tab_content_l col-2">
                                        <a href="#" class="tab_content_name">Dr. Helen Bristen</a>
                                        <div class="tab_content_profession">Orthodontist</div>
                                        <div class="tab_content_desk">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div>
                                    </div>
                                    <div class="tab_content_r col-2">
                                        <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End tab4 content -->
                        </div>
                        <!-- End Dentists Tabs Title Left Col -->
                    </div>
                </div>
                <!-- End Dentists Tabs Container -->
            </div>
            <!-- End Dentists Tabs -->
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->

            <!-- Start Get Service -->
            <div class="row get_service">
                <div class="container">
                    <h4>Get the best service in your city</h4>
                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                </div>
            </div>
            <!-- End Get Service -->
        </main>
        <!--  Main end -->
	</div> 
    <!-- Wrapper End -->
    @endsection