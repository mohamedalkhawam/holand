@extends('layout.website')


@section('content')
<?php
     		$doctors = app('doctors');
            $lang = app('lang');
            function cutString($string,$from,$two){
                $exploded = explode(" ", $string);
                $firstFive = implode(" ", array_splice($exploded, $from, $two));
                return $firstFive;
			}
			function splitString($string){
				$exploded = explode("@", $string);
			}
            $specialization='Specialization_'.$lang;
            $title = "title_".$lang;
			$description = "description_".$lang;
			$bio="bio_".$lang;
			$education="education_".$lang;
			$membership ="membership_".$lang;
			
         ?>
      <!--  Main start -->
        <main>
			<div class="row head_physician">
                <div class="container">
					<h1>
						@lang('main.meet_our_dentists')      
					</h1>
				</div>
			</div>
			<!-- Head physician start -->

			@if(isset($doctors))
				@foreach ($doctors as $value)
					
				
					<div class="row head_physician">
						<div class="container">
							<div class="row head_physician_row">
								<div class="col-2 head_physician_left">
									<img class="lozad" style="max-width:550px;max-height:700px" src="{{asset('/storage/doctors/'.$value->imagePath)}}" data-src="{{asset('/storage/doctors/'.$value->imagePath)}}" alt="{{$value->name}}" />
								</div>
								<div class="col-2 head_physician_right">
									<div class="head_physician_name">Dr. {{$value->name}}</div>
									<div class="head_physician_deck">{{$value->$specialization}} </div>
									<div class="head_physician_text">
										<i class="dental_icon dentalic_quote"></i>
										<div class="row">
											{{$value->$description}}			
										</div>
										<div class="head_physician_sign">
											<i class="dental_icon dentalic_signature"></i>
											<i class="dental_icon dentalic_stamp"></i> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Head physician end -->
				
					<!-- Short Bio physician start -->
					<div class="row short_bio">
						<div class="container">
							<h4>@lang('main.bio')</h4>
							<div class="row short_bio_row">
								<div class="col-1-60 short_bio_left">
									{{$value->$bio}}
								</div>
								<div class="col-1-40 short_bio_right">
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<div class="row short_bio_deck_row">
									<!-- Short Bio Lidt Start -->
									<div class="col-3 short_bio_deck_row_item">
										<i class="dental_icon dentalic_education"></i> 
										<div class="row list_row">
											<div class="list_title">
												<h5>@lang('main.education')</h5>
											</div> 
											<ul>
												@foreach (explode("@", $value->$education) as $row)
													<li>{{$row}}</li>
												@endforeach
											</ul>
										</div> 
									</div>
									<!-- Short Bio Lidt End -->
									<!-- Short Bio Lidt Start -->
									<div class="col-3 short_bio_deck_row_item">
										<i class="dental_icon dentalic_membership"></i>
										<div class="row list_row">
											<div class="list_title"><h5>@lang('main.membership')</h5></div> 
											<ul>
												@foreach (explode("@", $value->$membership) as $row)
													<li>{{$row}}</li>
												@endforeach
											</ul>
										</div> 
									</div>
									<!-- Short Bio Lidt End -->		 

									<!-- Short Bio Lidt Start -->
									<div class="col-3 short_bio_deck_row_item">
										<i class="dental_icon dentalic_languages"></i>
										<div class="row list_row">
											<div class="list_title"><h5>@lang('main.languages')</h5></div>
											<ul>
												@foreach (explode(" ", $value->languages) as $row)
													<li>{{$row}}</li>
												@endforeach
											</ul>
										</div> 
									</div> 
									<!-- Short Bio Lidt End -->
							</div>
						</div>
					</div>
					<!-- Short Bio physician end -->

			
			@endforeach
		@endif		
        </main>
        <!--  Main end -->
@endsection



<?php 
/*<!-- Start Best Specialists Tabs -->
			<div class="row specialists" id="specialists">
				<!-- Start Best Specialists Tabs Container -->
				<div class="container">
					<div class="row tabs">
						<!-- Start Best Specialists Tabs Title Start -->
						<div class="row">
							<h4>We Have the Best Specialists</h4>
							<div class="tab_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehenderit.</div>
                            <div class="center">
                            	<ul>
                            		<li><a href="#periodontists">Periodontists</a></li>
                            		<li><a href="#orthodontists">Orthodontists</a></li>
                            		<li><a href="#endodontists">Endodontists</a></li>
                            		<li><a href="#hygienists">Hygienists</a></li>
                            		<li><a href="#oral">Oral Surgeons</a></li>
                            	</ul> 
                            </div>
						</div>
						<!-- End Best Specialists Tabs Title -->

 						<!-- Start periodontists content -->
						<div class="tab_content" id="periodontists">
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Katherin Black</a>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Helen Bristen</a>
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Brett Armstrong</a>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
                            
                            
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
						<!-- End periodontists content -->

						<!-- Start Orthodontists content -->
						<div class="tab_content" id="orthodontists">
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Katherin Black</a>
											<div class="special_desk_profession">Orthodontists</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->

							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Michael Johnson</a>
											<div class="special_desk_profession">Orthodontists</div>
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

							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Brett Armstrong</a>
											<div class="special_desk_profession">Orthodontists</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->

							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Helen Bristen</a>
											<div class="special_desk_profession">Orthodontists</div>
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
						<!-- End Orthodontists content -->

 						<!-- Start Endodontists content -->
						<div class="tab_content" id="endodontists">
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Helen Bristen</a>
											<div class="special_desk_profession">Endodontists</div>
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Michael Johnson</a>
											<div class="special_desk_profession">Endodontists</div>
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Katherin Black</a>
											<div class="special_desk_profession">Endodontists</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Brett Armstrong</a>
											<div class="special_desk_profession">Endodontists</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
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
						<!-- End Endodontists content -->

 						<!-- Start Hygienists content -->
						<div class="tab_content" id="hygienists">
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Brett Armstrong</a>
											<div class="special_desk_profession">Hygienists</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Michael Johnson</a>
											<div class="special_desk_profession">Hygienists</div>
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Katherin Black</a>
											<div class="special_desk_profession">Hygienists</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Helen Bristen</a>
											<div class="special_desk_profession">Hygienists</div>
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
						<!-- End Hygienists content -->

 						<!-- Start Oral Surgeons content -->
						<div class="tab_content" id="oral">
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Katherin Black</a>
											<div class="special_desk_profession">Oral Surgeons</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Michael Johnson</a>
											<div class="special_desk_profession">Oral Surgeons</div>
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Helen Bristen</a>
											<div class="special_desk_profession">Oral Surgeons</div>
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
							<!-- Start doctor item -->
							<div class="row specialists_row">
								<div class="special_img col-2">
									<a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/360x400" data-srcset="http://via.placeholder.com/360x400, http://via.placeholder.com/720x800 2x" alt="DiDent" /></a>
								</div> 
								<div class="special_desk col-2">
									<div class="special_desk_title_row row">
										<div class="special_desk_title">
											<a href="#" class="special_desk_name">Dr. Brett Armstrong</a>
											<div class="special_desk_profession">Oral Surgeons</div>
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
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
									</div>
									<!-- End doctor text -->
									<div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
								</div>
							</div>
							<!-- End doctor item -->
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
						<!-- End Oral content -->

					</div>
				</div>
				<!-- End Best Specialists Tabs Container -->
			</div>




*/



?>