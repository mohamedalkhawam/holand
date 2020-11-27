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
         ?>
        <!-- Header slideshow start -->
        <div class="overflow_hidden">
            <div class="radius_niz_mini"> 
                <div class="slideshow owl-carousel owl-theme">
                    <!-- Start slideshow item -->
               
               
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
                                    <a href="{{route('servicePage',$value->id)}}"  class="services_item">
                                        <span class="services_item_title"> {{$value->$titleWithLanguage}} </span>
                                        <span class="services_item_desc">{{cutString($value->$keywordsWithLanguage,0,3)}} ...etc</span>
                                        <i class="dental_icon dentalic_cosmetic"></i>
                                    </a>                                   
                                @endforeach
                                <!-- Service item end -->
                            @endif
                            </div>
                            <div class="view_servises">
                                <a href="{{route('services')}}" class="more">@lang('main.view_all_services')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service end -->
            <!-- Video start -->
             
            <!-- Video end -->

            <!-- Info Block start -->
           @if (isset($config))
                @foreach ($config as $value)
           @php 

//
//             <div class="row video">
//                 <div class="container">
//                     <iframe height="535" style="border:0;" class="lozad" src="{{$value->youtube_video}}" data-src="{{$value->youtube_video}}"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
//                 </div>
//             </div>


@endphp
                            
            <div class="row info_blok">
                <div class="container">
                    <div class="row">
                        {{-- ******************************************************************************** --}}
                        <!-- Open Hours start -->
                        <div class="col-2 open_hours">
                            <div class="info_blok_title">
                                <h4>@lang('main.open_hours')</h4>
                            </div>
                            <div class="row open_hours_content">
                                <!-- Open Hours Block start -->
                            
                                <div class="row hours_block">
                                    <div class="open_hours_title">
                                        {{$value->$normalDayFrom}} - {{$value->$normalDayTo}}
                                    </div>
                                    <div class="row open_hours_block">
                                        <div class="hours">
                                            {{cutString($value->open_hour_from,0,1)}}
                                            <span>{{cutString($value->open_hour_from,1,2)}}</span>
                                        </div>
                                        <div class="minute">
                                               - {{cutString($value->open_hour_to,0,1)}}
                                            <span>{{cutString($value->open_hour_to,1,2)}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                                <!-- Open Hours Block start -->
                                <div class="row hours_block">
                                    <div class="open_hours_title">{{$value->$firstSpecialDay}}</div>
                                    <div class="row open_hours_block">
                                         <div class="hours">
                                            {{cutString($value->first_special_from,0,1)}}
                                            <span>{{cutString($value->first_special_from,1,2)}}</span>
                                        </div>
                                        <div class="minute">
                                               - {{cutString($value->first_special_to,0,1)}}
                                            <span>{{cutString($value->first_special_to,1,2)}}</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                                <!-- Open Hours Block start -->
                                <div class="row hours_block appointment_block">
                                    <div class="open_hours_title">{{$value->$secondSpecialDay}}</div>
                                    <div class="row open_hours_block">
                                        <div class="appointment">
                                            {{$value->$secondSpecialNote}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                            </div>
                        </div>
                       
                        <!-- Open Hours end -->
{{-- ********************************************************************************************************** --}}
                        <!-- Contact Us start -->
                        <div class="col-2 contact_us">
                            <div class="info_blok_title">
                                <h4>@lang('main.contact_us')</h4>
                            </div>
                            <div class="row div_contact_us_content">
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block">
                                    <div class="div_contact_us_title">@lang('main.phone')</div>
                                    <div class="row div_contact_us_block">
                                        <div class="contact_us_phone" style="font-family: system-ui;">{{$value->phone}}</div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block contact_us_block_mail">
                                    <div class="div_contact_us_title">@lang('main.email')</div>
                                    <div class="row div_contact_us_block">
                                        <div class="contact_us_mail"> <a href="mailto:{{$value->email}}">{{$value->email}}</a> </div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block">
                                    <div class="div_contact_us_title">@lang('main.address')</div>
                                    <div class="row div_contact_us_address">
                                        <div class="div_contact_us_address_title">{{$value->address}}</div>
                                        <div class="div_contact_us_address_title_map">
                                        <iframe src="{{$value->map_src}}" height="95" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="true" ></iframe>
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
                @endforeach
            @endif
            <!-- Info Block end -->
            <?php 

            
            ?>
            <!-- About start -->
            @if(app('aboutheader'))
                @foreach (app('aboutheader') as $value)
                    <div class="container about">
                        <div class="row">
                            <!-- About left col start -->
                            <div class="col-2 about_left">
                                <div class="row">
                                    <h4>@lang('main.about_practice')</h4>
                                    <div class="about_left_h2">
                                        {{$value->$descriptionWithLanguage}}
                                    </div>
                                    <div class="about_left_text">
                                        {{$value->$paragraphWithLanguage}}
                                    </div>
                                    <a class="more">@lang('main.learn_more')</a>
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

            <!-- Certificates start -->
            @php 
            
            
            
            //  <div class="row certificates">
            //     <div class="container row">
            //         <h4>@lang('main.certificates') & @lang('main.associations')</h4>
            //         <div class="navigation"></div>
            //     </div>
            //     <div class="owl_certificates owl-carousel owl-theme gallery">
                            
            //     @if(app('certificates') !== '')
            //         @foreach (app('certificates') as $value)
            //             <div class="item">
            //                 <a href="{{asset('/storage/certificates/'.$value->imagePath)}}">
            //                     <img class="owl-lazy" src="{{asset('/storage/certificates/'.$value->imagePath)}} "  alt="DiDent" />
            //                 </a>
            //             </div>
            //         @endforeach
            //     @endif
                  
            //             </div>
            // </div>
            
            
            
            @endphp
           
            <!-- Certificates end -->

            <!-- Start Dentists Tabs -->
            @if(app('doctors') !== '')
            <div id="dentists">
                <!-- Start Dentists Tabs Container -->
                <div class="container">
                    <div class="row tabs">
                        <!-- Start Dentists Tabs Title Left Col -->
                        <div class="tabs_l row">
                            <h4>@lang('main.dentist')</h4>
                            <ul>
                            
                                @foreach (app('doctors') as $value)
                                        <li>
                                            <a href="#tab{{$value->id}}" style="text-transform: capitalize;">Dr. {{$value->name}}</a>
                                        </li>                     
                                @endforeach
                                 </ul>
                        
                            <a href="" class="more">@lang('main.view_more')</a>
                        </div>
                        <!-- End Dentists Tabs Title -->

                        <!-- Start Dentists Tabs Title Left Col -->
                        <div class="tabs_r">
                            <!-- Start tab1 content -->
                            @foreach (app('doctors') as $value)
                                <div class="tab_content" id="tab{{$value->id}}">
                                    <div class="row">
                                        <div class="tab_content_l col-2">
                                            <a href="#" class="tab_content_name" style="text-transform: capitalize">Dr. {{$value->name}}</a>
                                            <div class="tab_content_profession">
                                                {{-- {{$value->service->$title}} --}}
                                                @foreach ($services->where('id',$value->services_id) as $service)
                                                    {{$service->$titleWithLanguage}}
                                                @endforeach
                                                
                                            </div>
                                            <div class="tab_content_desk">
                                                {{$value->description_en}}
                                            </div>
                                        </div>
                                        <div class="tab_content_r col-2">
                                            <a class="radius_left" href="#"><img class="lozad" src="{{asset('/storage/doctors/'.$value->imagePath)}}"  alt="DiDent" /></a>
                                        </div>
                                    </div>
                                </div>          
                            @endforeach
                            
                            <!-- End tab1 content -->
                        </div>
                        <!-- End Dentists Tabs Title Left Col -->
                    </div>
                </div>
                <!-- End Dentists Tabs Container -->
            </div>
            @endif
            <!-- End Dentists Tabs -->
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->

            <!-- Start Get Service -->
        @php
            //     <div class="row get_service">
            //     <div class="container">
            //         <h4>@lang('main.best_service')</h4>
            //         <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">@lang('main.make_an_appointment')</a></div>
            //     </div>
            // </div>
        @endphp

        
            <!-- End Get Service -->
        </main>
        <!--  Main end -->
	</div> 
    <!-- Wrapper End -->
    @endsection