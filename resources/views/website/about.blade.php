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
     <main>
            <!-- About start -->
            @if(app('aboutheader'))
                @foreach (app('aboutheader') as $value)
            <div class="container about">
                <div class="row">
                    <!-- About left col start -->
                    <div class="col-2 about_left">
                        <div class="row">
                            <h4> {{$value->titleWithLanguage}} </h4>
                            <div class="about_left_h2">
                                {{$value->descriptionWithLanguage}}
                            </div>
                            <div class="about_left_text">
                                {{$value->paragraphWithLanguage}}
                            </div>
                            <a class="more">Learn more</a>
                            <!-- Advantages start -->
                         <div class="row advantages">
                                        <div class="advantages_item"> 
                                            <strong>{{cutString($value->$firstSentence,0,1)}}</strong>
                                            <span>{{cutString($value->$firstSentence,1,5)}}</span> 
                                        </div>
                                        <div class="advantages_item"> 
                                            <strong>{{cutString($value->$secondSentence,0,1)}}</strong>
                                            <span>{{cutString($value->$secondSentence,1,5)}}</span> 
                                        </div>
                                        <div class="advantages_item"> 
                                            <strong>{{cutString($value->$thirdSentence,0,1)}}</strong>
                                            <span>{{cutString($value->$thirdSentence,1,5)}}</span>  
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
                                        @if(isset($aboutGalleryLeft))
                                        {{-- {{dd($aboutGallery->take(1)->first())}} --}}
                                            @foreach ($aboutGalleryLeft as $value)
                                                <img class="lozad" src="{{asset('/storage/gallery/'.$value->imagePath)}}" data-src="{{asset('/storage/gallery/'.$value->imagePath)}}" data-srcset="{{asset('/storage/gallery/'.$value->imagePath)}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                            @endforeach

                                        @endif
                                    </div>
                                    <!-- About image left col end -->
                                    <!-- About image right col start -->
                                    <div class="col-2 about_image_right">
                                             @if(isset($aboutGalleryRight))
                                        {{-- {{dd($aboutGallery->take(1)->first())}} --}}
                                            @foreach ($aboutGalleryRight as $value)
                                                <img class="lozad" src="{{asset('/storage/gallery/'.$value->imagePath)}}" data-src="{{asset('/storage/gallery/'.$value->imagePath)}}" data-srcset="{{asset('/storage/gallery/'.$value->imagePath)}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                            @endforeach

                                        @endif
                                    </div>
                                    <!-- About image right col end -->
                                </div>
                                <!-- About image end -->
                            </div>
                            <!-- About right col end -->
                </div>
            </div>
                @endforeach
            @endif
            <!-- About end -->

           
 
            <!-- Why We Are start -->
            <div class="row why_we_are">
                <div class="container">
                     <h4>Why We Are the Best</h4>
                     <div class="row why_we_are_content">
                        <div class="row">
                            @if(isset($whyUs))
                                @foreach ($whyUs as $value)
                                    <div class="col-3 why_we_are_item">
                                        <div class="why_we_are_item_icon">
                                            <i class="dental_icon {{$icons[$i++]}} "></i>
                                        </div>
                                        <div class="why_we_are_item_title"> {{$value->$titleWithLanguage}} </div>
                                        <div class="why_we_are_item_text"> {{$value->$descriptionWithLanguage}} </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                     </div>
                     
                </div>
            </div>
            <!-- Why We Are end -->  

            
     
            <!-- Gets start -->
            @if(isset($aboutgalleryScreen))
                @foreach ($aboutgalleryScreen as $value)
               
                    <div class="row gets">
                        <div class="container">
                            <h4>
                                <i class="dental_icon dentalic_quote"></i>
                               {{$value->$titleWithLanguage}}
                            </h4>
                            <!-- Gets text start -->
                            <div class="col-1-60 gets_text">
                                {{$value->$firstParagraph}}
                            </div>
                            <!-- Gets text end -->
                            <!-- Gets advantages start -->
                            <div class="col-1-40 advantages">
                                <div class="row advantages_item"> 
                                    <strong> {{cutString($value->$firstSentence,0,1)}} </strong>
                                    <span>{{cutString($value->$firstSentence,1,5)}}</span> 
                                </div>
                                 <div class="row advantages_item"> 
                                    <strong> {{cutString($value->$secondSentence,0,1)}} </strong>
                                    <span>{{cutString($value->$secondSentence,1,5)}}</span> 
                                </div> 
                            </div>
                            <!-- Gets advantages end --> 
                        </div>
                    </div>
                    <!-- Gets end -->
                    
                    
                    <!-- Gallery start -->
                    <div class="row gallery gallery_img">
                        <div class="container row">
                            <h4>@lang('main.gallery')</h4>
                            <div class="carousel_counter"></div>
                            <div class="navigation"></div>
                        </div>
                        <div class="owl_gallery owl-carousel owl-theme">
                            @if(isset($gallery))
                                @foreach ($gallery as $image)
                                    <div class="item">
                                        <div class="overflow_hidden row">
                                            <div class="radius_mini">
                                                <img class="owl-lazy" src="{{asset('/storage/gallery/'.$image->imagePath)}}" data-src="{{asset('/storage/gallery/'.$image->imagePath)}}" alt="DiDent" />
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        
                        </div>
                        <!-- Gallery end -->
                        
                        <!-- Costum text start -->
                        <div class="row costum_text">
                            <div class="container">
                                <!-- Costum text img end -->
                                <div class="col-2 costum_text_img">
                                    <img class="lozad" src="{{asset('/storage/gallery/'.$value->first_image_path)}}" data-src="{{asset('/storage/gallery/'.$value->first_image_path)}}" data-srcset="{{asset('/storage/gallery/'.$value->first_image_path)}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                    <img class="lozad" src="{{asset('/storage/gallery/'.$value->second_image_path)}}" data-src="{{asset('/storage/gallery/'.$value->second_image_path)}}" data-srcset="{{asset('/storage/gallery/'.$value->second_image_path)}}, http://via.placeholder.com/480x480 2x" alt="DiDent" />
                                </div>
                                <!-- Costum text img end -->
                                <!-- Costum text start -->
                                <div class="col-2 costum_text_content">
                                    
                                    {{$value->$secondParagraph}}
                                </div>
                                <!-- Costum text end --> 
                            </div>
                        </div>
                        <!-- Costum text end -->
                    @endforeach
                @endif
                <!-- Start Get Service -->
                {{-- <div class="row get_service">
                    <div class="container">
                        <h4>@lang('main.best_service')</h4>
                        <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">@lang('main.make_an_appointment')</a></div>
                    </div>
                </div> --}}
                 <!-- End Get Service -->

            </div>
               
        </main>
@endsection