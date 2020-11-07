@extends('layout.website')
@section('content')
 
<?php
            $config = app('headerConfig');
            $lang = app('lang');
            $normalDayFrom = 'open_day_from_'.$lang;
            $normalDayTo='open_day_to_'.$lang;
            $firstSpecialDay ='first_special_day_'.$lang;
            $firstSpecialNote = 'first_special_day_note_'.$lang;
            $secondSpecialDay ='second_special_day_'.$lang;
            $secondSpecialNote = 'second_special_day_note_'.$lang;
            function cutString($string,$from,$two){
                $exploded = explode(" ", $string);
                $firstFive = implode(" ", array_splice($exploded, $from, $two));
                return $firstFive;
            }
            $address='address_'.$lang;
            $specialization='Specialization_'.$lang;
            $paragraphWithLanguage= "paragraph_".$lang;
            $titleWithLanguage = "title_".$lang;
            $descriptionWithLanguage = "description_".$lang;
            $keywordsWithLanguage = "keywords_".$lang;
            $firstSentence="first_sentence_".$lang;
            $secondSentence="second_sentence_".$lang;
            $thirdSentence="third_sentence_".$lang;
            $firstParagraph="first_paragraph_".$lang;
            $secondParagraph="second_paragraph_".$lang;
            $i = 0;
            $icons = ['dentalic_doctors','dentalic_staff','dentalic_clinic','dentalic_technologies','dentalic_financials','dentalic_services'];
         ?>
     <!--  Main start -->
        <main> 

            <!-- Service block top start -->
            @if(isset($servicesHeader))
                @foreach ($servicesHeader as $value)
                    <div class="overflow_hidden">
                        <div class="radius_niz_mini"> 
                            <div class="row header_title title_service">
                                <div class="container"> 
                                    <div class="header_title_content">
                                        <h1>{{$value->$titleWithLanguage}}</h1>
                                        <p>{{$value->$descriptionWithLanguage}} </p>
                                        <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">@lang('main.make_an_appointment')</a></div>
                                    </div>
                                    <img src="{{asset('/storage/services/'.$value->imagePath)}}" class="absolute_img" data-srcset="{{asset('/storage/services/'.$value->imagePath)}}" alt="DiDent" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
			<!-- Service block top end -->

            <!-- Service start -->
            <div class="row services">
                <div class="overflow_hidden">
                    <div class="radius_row_niz services_row">
                        <div class="container">
                            <div class="row row-15">
                                <!-- Service item start -->
                                @if(isset($services))
                                    @foreach ($services as $value)
                                        <a href="{{route('servicePage',$value->id)}}" class="services_item">
                                            <span class="services_item_title"> {{$value->$titleWithLanguage}} </span>
                                            <span class="services_item_desc">{{cutString($value->$keywordsWithLanguage,0,4)}} etc.</span>
                                            <i class="dental_icon dentalic_cosmetic"></i>
                                         </a>
                                    @endforeach
                                @endif
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
    							<h3> @lang('main.we_are_good') <br> @lang('main.no_doubts')  </h3>
                                <div><i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
    							<a href="{{route('dentists')}}" class="btn_transparent"> @lang('main.see_our_dentists')</a>
    						</div> 
                        </div>  
					</div>
                </div>
            </div>

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
            
            <!-- Posts start -->
            <div class="row posts_row"> 
                <!-- Posts item start -->
                @if(isset($services))
                    @foreach ($services as $value)
                        <div class="row posts_item">
                                <div class="container">
                                <div class="row">
                                    <div class="col-1-60 posts_item_img">
                                        <div class="radius">
                                           {{-- {{dd($value->gallery())}} --}}
                                           {{-- @foreach ($value->gallery->id as $item)
                                               {{dd($item)}}
                                           @endforeach --}}
                                            {{-- @if(isset($value->gallery)) --}}
                                                <img class="lozad" src="{{asset('/storage/services/')}}" data-src="http://via.placeholder.com/655x355" data-srcset="http://via.placeholder.com/655x355, http://via.placeholder.com/1310x710 2x" alt="DiDent"> 
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                    <div class="col-1-40 posts_item_desk">
                                        <div class="posts_item_title">{{$value->$titleWithLanguage}}</div>
                                        <div class="posts_item_text">
                                            <p> {{$value->$descriptionWithLanguage}} </p>
                                            <a href="{{route('servicePage',$value->id)}}" class="more">@lang('main.learn_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- Posts item end -->       
            </div>
            <!-- Posts end -->
        </main>
@endsection
