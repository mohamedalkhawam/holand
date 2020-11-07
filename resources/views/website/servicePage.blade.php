
@extends('layout.website')
@section('content')   

<?php
            $config = app('headerConfig');
            $lang = app('lang');
            function cutString($string,$from,$two){
                $exploded = explode(" ", $string);
                $firstFive = implode(" ", array_splice($exploded, $from, $two));
                return $firstFive;
            }
            $specialization='Specialization_'.$lang;
            $title = "title_".$lang;
			$description = "description_".$lang;
			$bio="bio_".$lang;
			$education="education_".$lang;
            $membership ="membership_".$lang;
            $specialization='Specialization_'.$lang;
            $paragraph= "paragraph_".$lang;
            $keywords = "keywords_".$lang;
         ?>
         @if(isset($items))
            <!-- Service block top start -->
            <main>
            <div class="row header_row">
    			<div class="container">
    				<div class="row header_title">
                        <div class="header_title_content">
    					<h1>{{$items->$title}}</h1>
    					<p> {{$items->$description}} </p>
                            <div class="header_tag">
                                @foreach (explode(" ", $items->keywords) as $keyword)
                                <a href="#prices" class="skrolurl">{{$keyword}}</a>
                                 @endforeach
                            </div>
                        </div>
                        <div class="header_i"><i class="dental_icon dentalic_cosmetic2"></i></div> 
    				</div>
    			</div>
            </div>
			<!-- Service block top end -->
           

			<!-- Presentation Start -->  
            <div class="row gallery presentation_row">
                <div class="presentation_fon">
                    <div class="block_color_blue radius_niz_mini"></div> 
                </div>
                <div class="row presentation_gallery">
                    <div class="container">
                        <div class="row presentation_gallery_row">
                            <h4>Presentation</h4> 
                            <div class="navigation"></div>
                        </div>
                        <div class="presentation_carusel">
                            <div class="presentation_title"> {{$items->title}} of New Generation</div>
                            <div class="row presentation_carusel_vn"> 
                                <div class="owl_presentation owl-carousel owl-theme">
                                    <div class="item">
                                    {{-- {{dd($items->gallery()->id)}} --}}
                 </div>
            </div> 
			<!-- Presentation End -->
             
			<!-- Live Stories Start -->
            <div class="row stories">
    			<div class="container">
    			     <div class="row stories_title">
                        <h4>Live Stories</h4>
                        <div class="stories_desk">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in repre velit esse cillum dolore.
                        </div> 
                     </div>
                    <!-- Stories Item Start -->
                    <div class="row stories_item">
                       
                        <!-- Stories Item Autor Start -->
                        <div class="stories_item_number"><span>1</span></div>
                       
                        <!-- Stories Item Autor End --> 
                        <!-- Stories Item Descriptions Start -->
                        <div class="row stories_item_desk"> 
                            <div class="col-2 stories_deck_row_item">
                                <i class="dental_icon dentalic_problem"></i> 
                                <div class="row stories_list_row">
                                    <div class="stories_list_title"><h5>Initial problem</h5></div> 
                                    <div class="row stories_deck_row_item_desk">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea enim ad minim commodo consequat. </p>
                                    </div>
                                    <div class="line_arrow_bottom">
                                        <div class="lihe_heading"></div>
                                        <i class="dental_icon dentalic_arrow_down"></i>
                                    </div>
                                </div>  
                            </div> 
                            <div class="col-2 stories_deck_row_item">
                                <i class="dental_icon dentalic_solution"></i>
                                <div class="row stories_list_row">
                                    <div class="stories_list_title"><h5>What we've done</h5></div> 
                                    <div class="row stories_deck_row_item_desk">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum nostrud exercitation ullamco laboris nisi ut aliquip ex consequat.</p>
                                    </div> 
                                </div> 
                            </div>  
                        </div>
                        <!-- Stories Item Descriptions End --> 
                        <!-- Stories Item After Before Start --> 
                        <div class="after_before_row overflow_hidden">
                            <h4>Results</h4>
                            <div class="radius_mini">
                                <div class="twentytwenty-container">
                                     <!-- The before image is first -->
                                     <img src="http://via.placeholder.com/1140x625" alt="DiDent" />
                                     <!-- The after image is last -->
                                     <img src="http://via.placeholder.com/1140x625" alt="DiDent" />
                                </div>
                            </div>
                        </div>
                        <!-- Stories Item After Before End --> 
                    </div>
                    <!-- Stories Item End --> 
    			</div>
            </div>
			<!-- Live Stories End -->           

			<!-- Start Specialists -->
			<div class="specialists" id="specialists">
				<!-- Start Best Specialists Container -->
				<div class="container">
                    <h4>Our Specialists in Cosmetic Dentistry</h4>
                    <div class="row">
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Michael Johnson</a>
											<div class="special_desk_profession">Periodontists</div>
										</div>
										<div class="special_desk_soc">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
										</div>
									</div>
									<!-- Start doctor list -->
									<div class="special_desk_service row">
										<div class="special_desk_service_icon">
											<i class="dental_icon dentalic_education"></i>
										</div>
										<div class="special_desk_service_r">
											<div class="special_desk_service_title">Education</div>
											<div class="row special_desk_service_list">
												<ul>
													<li>University of Iowa</li>
													<li>CAD/CAM Certified</li>
													<li>Invisalign Certified</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End doctor list -->
									<!-- Start doctor list -->
									<div class="special_desk_service row">
										<div class="special_desk_service_icon">
											<i class="dental_icon dentalic_membership"></i>
										</div>
										<div class="special_desk_service_r">
											<div class="special_desk_service_title">Membership</div>
											<div class="row special_desk_service_list">
												<ul>
													<li>American Dental Association</li>
													<li>California Dental Association</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End doctor list -->
									<!-- Start doctor list -->
									<div class="special_desk_service row">
										<div class="special_desk_service_icon">
											<i class="dental_icon dentalic_languages"></i>
										</div>
										<div class="special_desk_service_r">
											<div class="special_desk_service_title">Languages</div>
											<div class="row special_desk_service_list">
												<ul>
													<li>English</li>
													<li>German</li>
													<li>Italian</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End doctor list -->
									<!-- Start doctor text -->
									<div class="special_desk_desk row">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab oris nisi ut aliquip ex ea comdo consequat. Duis aute irure dolor in reprehenderit in volupt ate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
						</div>
				</div>
				<!-- End Specialists Container -->
			</div>
            <!-- End Specialists  --> 
            
            <!-- What We Can Offer start -->
            <div class="row can_offer_row">
                <div class="container">
                    <div class="can_offer_title">
                        <i class="dental_icon dentalic_offers"></i> 
                        <div class="can_offer_title_lite"></div>
                    </div>
                    <div class="row can_offer_text">
                        <h4>What We Can Offer</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- What We Can Offer end -->
        </main>
        @endif
        @endsection