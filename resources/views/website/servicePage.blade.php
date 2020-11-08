
@extends('layout.website')
@section('content')   

<?php
            $config = app('headerConfig');
            $lang = app('lang');
            $doctors=app('doctors');
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
            $shortStory="short_story_".$lang;
            $initialProblem="initial_problem_".$lang;
            $whatWeHaveDone="what_we_have_done_".$lang;
            
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
                                
                                @foreach (explode(" ",$items->$keywords) as $keyword)
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
                            <h4>@lang('main.presentation')</h4> 
                            <div class="navigation"></div>
                        </div>
                        <div class="presentation_carusel">
                            <div class="presentation_title"> {{$items->title}}  @lang('main.new_generation')  </div>
                            <div class="row presentation_carusel_vn"> 
                                <div class="owl_presentation owl-carousel owl-theme">
                                    <div class="item">
                                    @if(isset($servicesGallery))
                                        @foreach ($servicesGallery as $value)
                                            <img class="owl-lazy" src="{{asset('/storage/services/gallery/'.$value->imagePath)}}" data-src="{{asset('/storage/services/gallery/'.$value->imagePath)}}" alt="DiDent" />    
                                        @endforeach
                                    @endif
                                    </div> 
                                 </div>
                                 <div class="carousel_counter"></div>
                             </div>
                         </div>
                    </div>
                 </div>
            </div> 
			<!-- Presentation End -->
             
            <!-- Live Stories Start -->
            @if(isset($serviceCases))
                @foreach ($serviceCases as $value)
                    
                
            <div class="row stories">
    			<div class="container">
    			     <div class="row stories_title">
                        <h4>@lang('main.live_stories')</h4>
                        <div class="stories_desk">
                        {{$value->$shortStory}}                     
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
                                    <div class="stories_list_title"><h5>@lang('main.initial_problem')</h5></div> 
                                    <div class="row stories_deck_row_item_desk">
                                        <p> {{$value->$initialProblem}}  </p>
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
                                    <div class="stories_list_title"><h5>@lang('main.what_have_done')</h5></div> 
                                    <div class="row stories_deck_row_item_desk">
                                        <p> {{$value->$whatWeHaveDone}} </p>
                                    </div> 
                                </div> 
                            </div>  
                        </div>
                        <!-- Stories Item Descriptions End --> 
                        <!-- Stories Item After Before Start --> 
                        <div class="after_before_row overflow_hidden">
                            <h4>@lang('main.results')</h4>
                            <div class="radius_mini">
                                <div class="twentytwenty-container">
                                     <!-- The before image is first -->
                                
                                    <img src="{{asset('/storage/cases/'.$value->imagePath_before)}}" alt="DiDent" />
                                     <!-- The after image is last -->
                                    <img src="{{asset('/storage/cases/'.$value->imagePath_after)}}"  alt="DiDent" />
                                </div>
                            </div>
                        </div>
                        <!-- Stories Item After Before End --> 
                    </div>
                    <!-- Stories Item End --> 
    			</div>
            </div>
                @endforeach
            @endif
			<!-- Live Stories End -->           

			<!-- Start Specialists -->
			<div class="specialists" id="specialists">
				<!-- Start Best Specialists Container -->
				<div class="container">
                    <h4>Our Specialists in Cosmetic Dentistry</h4>
                    <div class="row">
                            <!-- Start doctor item -->
                            @if(isset($doctors))
                                @foreach ($doctors->where('services_id',$items->id) as $value)
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="{{asset('/storage/doctors/'.$value->imagePath)}}" data-src="{{asset('/storage/doctors/'.$value->imagePath)}}" data-srcset="{{asset('/storage/doctors/'.$value->imagePath)}}, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. {{$value->name}}</a>
											<div class="special_desk_profession">{{$items->$title}}</div>
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
													@foreach (explode("@", $value->$education) as $row)
													<li>{{$row}}</li>
												@endforeach
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
											<div class="special_desk_service_title">@lang('main.membership')</div>
											<div class="row special_desk_service_list">
												<ul>
													@foreach (explode("@", $value->$membership) as $row)
													<li>{{$row}}</li>
												@endforeach
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
											<div class="special_desk_service_title">@lang('main.languages')</div>
											<div class="row special_desk_service_list">
												<ul>
													@foreach (explode(" ", $value->languages) as $row)
													<li>{{$row}}</li>
												@endforeach
												</ul>
											</div>
										</div>
									</div>
									<!-- End doctor list -->
									<!-- Start doctor text -->
									<div class="special_desk_desk row">

                                    {{$value->$bio}}								
                                        </div>
                                    <!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">@lang('main.make_appointment_with_dentist')</a></div>
								</div>
                            </div>
                            @endforeach
                            @endif
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
                        <h4>@lang('main.what_we_offer')</h4>
                         @if(asset($whatWeOffer))
                            @foreach ($whatWeOffer as $value)
                                <p> {{$value->$paragraphWithLanguage}} </p>
                             @endforeach  
                        @endif
                        
                    </div>
                </div>
            </div>
            <!-- What We Can Offer end -->
        </main>
        @endif
        @endsection