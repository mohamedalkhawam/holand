<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tandartsenpraktijk BoLo</title>
        <meta name="description" content="DiDent - Dental Clinic HTML Template"/>
        <meta name="author" content="http://owl-themes.net/"/>
        <meta name="theme-color" content="#1783D3">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link rel="icon" href="{{asset('media/logos/fav.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('media/logos/fav.png')}}" sizes="192x192" />
        <link rel="{{asset('website/apple-touch-icon-precomposed')}}" href="{{asset('media/logos/fav.png')}}" />
        <meta name="msapplication-TileImage" content="{{asset('media/logos/fav.png')}}" /> 
        <style type="text/css">.preloader{position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 9999;background-color: #FFF;text-align: center;}.preloader_animation{width: 100px;position: absolute;top: 50%;left: 50%; transform: translate(-50%, -50%); text-align: center;}.preloader_animation svg {animation: heartbeat 1s infinite; fill: var(--theme_color);}@keyframes heartbeat{0%{transform: scale( .75 );}20%{transform: scale( 1 );}40%{transform: scale( .75 );}60%{transform: scale( 1 );}80%{transform: scale( .75 );}100%{transform: scale( .75 );}}</style>
        <!-- Google fonts --> 
        <link href="https://fonts.googleapis.com/css?family=Hind:400,600%7CSource+Sans+Pro:300,400,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet';this.display='swap'">
        <script>!function(n){"use strict";n.loadCSS||(n.loadCSS=function(){});var o=loadCSS.relpreload={};if(o.support=function(){var e;try{e=n.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),o.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.addEventListener?t.removeEventListener("load",a):t.attachEvent&&t.detachEvent("onload",a),t.setAttribute("onload",null),t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},o.poly=function(){if(!o.support())for(var t=n.document.getElementsByTagName("link"),e=0;e<t.length;e++){var a=t[e];"preload"!==a.rel||"style"!==a.getAttribute("as")||a.getAttribute("data-loadcss")||(a.setAttribute("data-loadcss",!0),o.bindMediaToggle(a))}},!o.support()){o.poly();var t=n.setInterval(o.poly,500);n.addEventListener?n.addEventListener("load",function(){o.poly(),n.clearInterval(t)}):n.attachEvent&&n.attachEvent("onload",function(){o.poly(),n.clearInterval(t)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:n.loadCSS=loadCSS}("undefined"!=typeof global?global:this);</script>
        <!-- Include style --> 
        <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
        <!-- Include owl carousel style --> 
        <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">
        <!-- Include jquery ui -->  
        <link rel="stylesheet" href="{{asset('website/css/jquery-ui.css')}}"> 
        <!-- Include font-awesome --> 
        <link rel="stylesheet" href="{{asset('website/css/font-awesome.css')}}">
        <!-- Responsive style --> 
        <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}">
        <?php
            
            $lang = app('lang');
            $reasons= app('reasons');
            $doctors = app('doctors');
            $services =app('services');
            $normalDayFrom = 'open_day_from_'.$lang;
            $normalDayTo='open_day_to_'.$lang;
            $firstSpecialDay ='first_special_day_'.$lang;
            $specialization='Specialization_'.$lang;
            $firstSpecialNote = 'first_special_day_note_'.$lang;
            $secondSpecialDay ='second_special_day_'.$lang;
            $secondSpecialNote = 'second_special_day_note_'.$lang;
            $address="address_".$lang;
            $normalFrom='';
            $normalTo='';
            $title = "title_".$lang;
            $config = app('headerConfig')->where('id',1)->first();
            if (isset($config)) {
                if( $lang == 'en'){
                $normalFrom = substr($config->$normalDayFrom,0,3);
                $normalTo = substr($config->$normalDayTo,0,3);
                }else{
                $normalFrom = substr($config->$normalDayFrom,0,2);
                $normalTo = substr($config->$normalDayTo,0,2);
                }
            }

           
           
         ?>
    </head> 
    @if(isset($config))
   {{-- {{ substr($config->$NormalDayFrom,0,3)}} --}}
   
<body> 
    <div class="preloader">
        <div class="preloader_animation">
            <svg id="Layer_1"  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><title>tooth</title><path d="M316.54,550.47q-.36-11.67-.49-23.35c-.32-29.6-3.9-54.78-20.56-80.11C267,403.74,257.7,355.76,259.33,304.82c2.28-71.37,41-119.16,106.45-129.85,27.08-4.43,53.58.75,77.24,13.22,39.56,20.84,77,20.66,116.95.4,36.4-18.44,75.57-21.17,113.88-4,49.7,22.24,68.94,64.74,72.32,115.8,3.4,51.34-5.7,100.28-34.33,144.21-15.55,23.86-22.15,49.18-21.54,78.24,1.56,74.77-2,149.53-26.7,221-7.93,22.95-21.69,44.37-35.56,64.59-8.61,12.55-22.56,22.56-40,16.29-18.35-6.58-21.13-23-24-40Q550.06,703.18,534.28,622c-2.4-12.27-7.56-24.4-13.58-35.43-4-7.3-11.45-14.23-18.13-18.78-26,23.21-34.19,59-40.75,91.83-8.53,42.71-13.64,86.1-20.28,129.19C439.2,804,435,818.11,418.83,824.61s-27.9-2.15-38.31-12.55c-28.2-28.15-41-64.47-47.69-102.06A1109.44,1109.44,0,0,1,316.54,550.47Zm280,246.39c24.2-16.59,33.23-39.12,40.48-62.18,21.11-67.18,26.58-136.72,25.11-206.41-.78-37,7.41-69.24,26-100.65C713.82,384.28,721.42,336.8,714.4,287c-6.48-46-36.84-78.7-82.21-81.59-20.48-1.3-43.19,4.24-62.15,12.78-45.39,20.44-89.11,22.89-133.8-.28-8.25-4.28-17.45-6.93-26.44-9.5-56.13-16.06-106.5,12.85-117.76,70.09-10.35,52.6-3.56,103.36,25.44,149.94,14.71,23.62,25.76,48.14,26.61,77.23,1.51,51.85,3.64,103.8,8.78,155.39,5,50.37,18.57,96.89,53.31,134.69,12.22-24.76,13-56.28,17.8-83.54,5.45-31.19,11.2-62.34,18.55-93.14,5.59-23.39,18.55-46.1,32.5-66.1,14.54-20.84,38.8-20.33,55.17-.66,10.4,12.5,20.06,27.18,24.82,42.51,11.42,36.79,21,74.28,28.92,112C589.9,735.18,592.16,764.35,596.57,796.87Z"/><path d="M373.39,245c24.16,1.24,8.7,24.67,1.95,35a66.12,66.12,0,0,0-10.54,31.47c-1.73,24,5.75,48.89,16.55,70,5.17,10.11,16.85,31.45-1.32,36.23-11.24,3-21.82-11-26.53-19.34-8.17-14.48-12.69-31-15.79-47.19a157.15,157.15,0,0,1,4.49-75.53c3.89-12.67,15.61-30.93,30.59-30.71Z"/></svg>
        </div>
    </div>    
    <!-- Wrapper start -->
    <div class="wrapper">
        <!-- HEADER start -->
        <header>
            <div id="site-header" class="sticky">
                <!-- Header top start -->
                <div class="row header_top"> 
                    <div class="container_1336">
                        <div class="row">
                            <!-- Start clock -->
                            <div class="header_clock"> 
                                 <i class="fa fa-clock-o"></i>
                                 <span style="text-transform: capitalize">
                                    {{$normalFrom}}-{{$normalTo}}  {{$config->open_hour_from}}-{{$config->open_hour_to}}
                                </span> 
                                 <span style="text-transform: capitalize; ">
                                    {{$config->$firstSpecialDay}} {{$config->first_special_from}} - {{$config->first_special_to}}
                                </span>
                            </div>
                            <!-- End clock -->
                            <!-- Start phone -->
                            <a href="tel:{{$config->phone}}" class="header_phone">
                                <i class="fa fa-phone"></i>{{$config->phone}}
                            </a>
                            <!-- End phone -->
                            <!-- Start mail -->
                            <a href="mailto:{{$config->email}}" class="header_mail">
                                <i class="fa fa-envelope"></i>{{$config->email}}
                            </a>
                            <!-- End mail --> 
                            <!-- Start address -->
                            <div class="header_address">
                                <a href="{{$config->address_link}}" style="text-decoration: none;"><i class="fa fa-map-marker"></i>{{$config->$address}}</a>
                            </div>
                            <!-- End address -->
                            <!-- Start social button -->
                            <div class="header_social_button">
        						<a href="{{$config->facebook}}"><i class="fa fa-facebook"></i></a>
        						<a href="{{$config->twitter}}"><i class="fa fa-twitter"></i></a>
        						<a href="{{$config->google}}"><i class="fa fa-google-plus"></i></a>
                                <a href="{{$config->youtube}}"><i class="fa fa-youtube"></i></a>
                                <a href="{{'https://wa.me/'.$config->phone}}"><i class="fa fa-whatsapp"></i></a>
                                @if (session()->get("lang") == 'en')
                                    <div style="width: 70px;"> <img style="width: 18px;height:18px;margin-right:2px; " src="{{asset('media/svg/flags/237-netherlands.svg')}}" alt="">
                                    <a href="{{route('language',"nl")}}" style="font-weight:600;font-size:18">  Nederlands</a></div>
                                @else 
                                    <div style="width: 70px; ">
                                        <img style="width: 18px;height:18px;margin-right:2px; " src="{{asset('media/svg/flags/260-united-kingdom.svg')}}" alt="">
                                        <a href="{{route('language','en')}}" style="font-weight:600;font-size:18">  English</a>
                                    </div>
                                @endif
        					</div>
                            <!-- End social button -->
                          </div>
                        </div>
                    </div>
                </div>
                <!-- Header top end --> 
                
                <!-- Header bottom start --> 
            	<div class="row header_bottom">  
                    <div class="container_1336">
            			<div class="row"> 
            				<!-- LOGO start -->
            				<div class="logo ">
                                <a href="/" style="color:#444; font-weight:500;text-decoration:none;">
                                    {{-- <div style="min-height:148px;background-image: url('/media/logos/logoc230.png');width: 240px;margin: -90px auto 0;">

                                    </div> --}}
                                    <img class="lozad " src="{{asset('media/logos/230@40.png')}}" alt="Tandartsenpraktijk BoLo" />
                                {{-- <span > Tandartsenpraktijk BoLo </span> --}}
                                </a>                                                                  
            				</div> 
            				<!-- LOGO end -->
                            
                            <!-- Headr Button start -->
                            <div class="header_btn">
                                <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn_white">{{__('main.make_an_appointment')}}</a></div>
                            </div>
                            <!-- Headr Button end -->
                            
            				<!-- NAVIGATION start -->
            				<div class="menu"> 
                                <nav>
                                    <ul>
                                        <li class="ul_sub">
                                            <a href="{{route('home')}}">{{__('main.home')}}</a>
                                        </li> 
                                         <li>
                                            <a href="{{route('dentists')}}">{{__('main.our_dentist')}}</a> 
                                        </li> 
                                        <li class="ul_sub">
                                            <a href="{{route('about')}}">{{__('main.about_us')}}</a> 
                                        </li> 
                                        <li class="ul_sub">
                                        <a href="{{route('services')}}">{{__('main.services')}}</a>                                     
                                        </li>                                                       
                                        <li><a href="{{route('contact')}}">{{__('main.contact_us')}}</a></li>
                                        <li><a href="#step2" class="step-next step2 ul_sub ">@lang('main.registration')</a></li>
                                    </ul>
                                </nav>
                            </div>
                           
            				<!-- NAVIGATION end -->
                            
                            <!-- Mobile Menu start -->
                            <nav class="nav" id="menu_right_sidebar">
                                <div class="menu-right-button open-button"><i class="fa fa-bars"></i></div>
                                <div class="container_right_menu">
                                    <span class="close-button"><i class="fa fa-times"></i></span>
                                    <div class="row header_menu"> 
                                        <div class="row logotype_light">
                                           <img class="lozad " src="{{asset('media/logos/230@40.png')}}" alt="Tandartsenpraktijk BoLo" />
                                            {{-- <img class="lozad" src="{{asset('media/logos/logo3.png')}}" data-src="{{asset('media/logos/logo3.png')}}" data-srcset="{{asset('media/logos/logo3.png')}}, http://via.placeholder.com/460x80 2x" alt="Tandartsenpraktijk BoLo" />Tandartsenpraktijk BoLo --}}
                                        </div>
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <ul class="dl-menu dl-menuopen"> 
                                                <li>
                                                <a href="{{route('home')}}">{{__('main.home')}}</a>                                              
                                                </li> 
                                                <li>
                                                <a href="{{route('dentists')}}">{{__('main.our_dentist')}}</a>                                              
                                                </li>
                                                <li>
                                                    <a href="{{route('about')}}">{{__('main.about_us')}}</a> 
                                                </li> 
                                                <li>
                                                <a href="{{route('services')}}">{{__('main.services')}}</a> 
                                                </li> 
                                                <li><a href="{{route('contact')}}">{{__('main.contact_us')}}</a></li> 
                                                <li><a href="#step2" class="step-next step2 ul_sub ">@lang('main.registration')</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row footer_item_social">
                						<a href="{{$config->facebook}}"><i class="fa fa-facebook"></i></a>
                                        <a href="{{$config->twitter}}"><i class="fa fa-twitter"></i></a>
                                        <a href="{{$config->google}}"><i class="fa fa-google-plus"></i></a>
                                        <a href="{{$config->youtube}}"><i class="fa fa-youtube"></i></a>
                                        <a href="{{'https://wa.me/'.$config->phone}}"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                    <div class="row menu_contact">
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> <address>{{$config->$address}}</address></li>
                                            <li><i class="fa fa-phone"></i> {{__('main.phone')}}: {{$config->phone}}</li>
                                            <li><i class="fa fa-envelope-o"></i>{{$config->email}}</li>
                                            <li style="text-transform: capitalize"><i class="fa fa-clock-o"></i> {{$normalFrom}} - {{$normalTo}}  {{$config->open_hour_from}} - {{$config->open_hour_to}}</li>
                                            <li style="text-transform: capitalize">
                                                <i class="fa fa-clock-o"></i>
                                                 {{$config->$firstSpecialDay}} {{$config->first_special_from}} - {{$config->first_special_to}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- Mobile Menu end --> 
            			</div> 
                    </div>
                </div> 
                <!-- Header bottom end -->
            </div>
        </header>
        <!-- HEADER end -->
@yield('content')

 <div class="contact_map">
        <div class="container">
            <div class="row">
                <h4>{{__('main.contact_us')}}</h4>
                <div class="contact_map_content">
                    <iframe src=" {{$config->map_src}} " height="490" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="true" tabindex="10"></iframe>
              
                    <div class="contact_map_info row" >
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">{{__('main.phone')}}</div>
                            <div class="contact_map_info__phone">{{$config->phone}}</div>
                        </div>
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">{{__('main.email')}}</div>
                            <div class="contact_map_info__email">
                                <a href="mailto:dentalclinic@example.com">{{$config->email}}</a>
                            </div>
                        </div>
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">{{__('main.address')}}</div>
                            <div class="contact_map_info__address">{{$config->$address}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->
    
    <!-- Footer start -->
	<footer>
        <div class="svg_blue"> 
            <svg width="100%" height="100%" viewBox="0 0 653 46.107558"><defs><path d="M0 30a1789 1789 0 0 1 653 0v304a1823 1823 0 0 1-653 0z" id="a"/><clipPath  ><path stroke-width="1.00255799" d="M-1-1h656v47H-1z"/></clipPath></defs><use xlink:href="#a" width="100%" height="100%" fill-rule="evenodd"/></svg>
        </div>
        <div class="footer_row background_blue row">
    	    <div class="container">
                <!-- Start top_footer -->
                <div class="top_footer" style="padding: 50px 0 50px;">
                    <!-- Start footer_logo -->
                    <a href="/" class="footer_logo">
                        <div style="min-height:148px;background-image: url('/media/logos/logo230.png');width: 240px;margin: -90px auto 0;">

                                    </div>
                        {{-- <img class="lozad" src="{{asset('media/logos/logo230.png')}}" data-src="{{asset('media/logos/logo230.png')}}" data-srcset="{{asset('media/logos/logo230.png')}}, http://via.placeholder.com/460x80 2x" alt="Tandartsenpraktijk BoLo" /> --}}
                    </a>
                    <!-- End footer_logo -->
                    <!-- Start footer_social_button -->
                    <div class="footer_social_button">
                        <a href="{{$config->facebook}}"><i class="fa fa-facebook"></i></a>
        				<a href="{{$config->twitter}}"><i class="fa fa-twitter"></i></a>
        				<a href="{{$config->google}}"><i class="fa fa-google-plus"></i></a>
                        <a href="{{$config->youtube}}"><i class="fa fa-youtube"></i></a>
                        <a href="{{'https://wa.me/'.$config->phone}}"><i class="fa fa-whatsapp"></i></a>
                    </div>
                    <!-- End footer_social_button -->
                </div>
                <!-- End top_footer -->
    
                <!-- Start middle_footer -->
                <div class="middle_footer">
                    <!-- Start contact_info -->
                    <div class="contact_info">
                        <div class="work_time">
                            <i class="fa fa-clock-o"></i>
                            <div class="work_time_inner">
                                  <span style="text-transform: capitalize">
                                    {{$normalFrom}} - {{$normalTo}}  {{$config->open_hour_from}} - {{$config->open_hour_to}}
                                </span> 
                                 <div style="text-transform: capitalize; ">
                                    {{$config->$firstSpecialDay}} {{$config->first_special_from}} - {{$config->first_special_to}}
                                 </div>
                            </div>
                        </div>
                        <a href="tel:{{$config->phone}}" style="font-family: system-ui;"><i class="fa fa-phone"></i>{{$config->phone}}</a>
                        <a href="mailto:{{$config->email}}">
                            <i class="fa fa-envelope"></i>{{$config->email}}
                        </a>
                        <div class="footer_address">
                            <i class="fa fa-map-marker"></i>{{$config->$address}}
                        </div>
                    </div>
                    <!-- End contact_info -->
                    <!-- Start footer_menu -->
                    <div class="footer_menu">
                        <a class="footer_see" href="#" onclick="return false"><i class="fa fa-bars"></i> <span>Navigation</span> </a>
                        
                        <div class="row footer_nav">
                            <a class="footer_menu_close" title="Close"><i class="fa fa-times" aria-hidden="true"></i></a>  
                            <div class="col-4">
                                <ul>
                                    <li><a href="{{route('home')}}">{{__('main.home')}}</a></li>
                                    
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>
                                    <a href="{{route('dentists')}}">{{__('main.our_dentist')}}</a> 
                                    </li>
                                    @if(isset($doctors))
                                        @foreach ($doctors as $value)
                                             <li>
                                                <a href="{{route('dentists')}}"> {{$value->name}}</a>
                                            </li>
                                        @endforeach
                                   @endif
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><a href="{{route('contact')}}">{{__('main.services')}}</a></li>
                                   @if(isset($services))
                                        @foreach ($services as $value)
                                             <li>
                                                <a href="{{route('servicePage',$value->id)}}"> {{$value->$title}}</a>
                                            </li>
                                        @endforeach
                                   @endif
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><a href="#step2" class="step-next step2 ul_sub ">@lang('main.registration')</a></li>
                            	
                                </ul>
                            </div>
                        
                        </div>
                    </div>
                    <!-- End footer_menu -->
                </div>
                <!-- End middle_footer -->
    
                <!-- Start bottom_footer -->
                <div class="bottom_footer">
                    <div class="bottom_footer_link popup">
                        <a href="#step1" data-effect="mfp-zoom-in" class="step1">{{__('main.make_an_appointment')}}</a>
                        <a href="#">{{__('main.leave_feedback')}}</a>
                        <a href="#">{{__('main.write_us')}}</a>
                    </div>
                    <!-- Start copyright -->
                    <div class="copyright">
                         2020 Tandartsenpraktijk BoLo. @lang('main.rights')
                    </div>
                    <!-- End copyright -->
                </div>
                <!-- End bottom_footer -->
            </div>
        </div>
	</footer>
	<!-- Footer end -->       
    
    <!-- Back to top -->
    <div id="back-to-top" title="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    <!-- Back to top end-->
    
     <div id="step1" class="white-popup mfp-with-anim mfp-hide order_popup" style="height: 350px;overflow:hidden; width:350px;" >
           <iframe src="https://internetagenda.vertimart.nl/?id=291" height="100%" width=""  frameborder="0" scrolling="no"></iframe>
     </div>
     <div id="step2" class="white-popup mfp-with-anim mfp-hide order_popup" style="height: 600px; width:90%; max-width:600px;" >
           <iframe src="https://internetagenda.vertimart.nl/inschrijven?id=291" height="100%" width=""  frameborder="0" ></iframe>
     </div>

    {{-- <form class="fofm">
            <!-- Popup Step 1 -->
        <div id="step1" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Choose a Dentist -->
                <div class="row step1_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>{{__('main.choose_a_dentist')}}</h3>
                            <div class="row">
                                <!-- Any Dentist -->
                                <input type="radio" id="radio9" class="radio_name" name="radio" value="Any Dentist">
                                <label for="radio9">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                        <span class="doctor_name"> {{__('main.any_dentist')}} </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Any Dentist -->

                                <!-- Droctors -->
                                @if(isset($doctors))
                                    @foreach ($doctors as $value)
                                        <input type="radio" id="radio1" class="radio_name" name="radio" value="{{$value->id}}">
                                        <label for="radio1">
                                            <span class="step_item_vn">
                                                <span class="row step_item align-items-center">
                                                    <span class="step_item_img radius_right">
                                                        <img style="max-width:85px;max-height:95px;" class="lozad is-loaded" src="{{asset('/storage/doctors/'.$value->imagePath)}}" data-src="{{asset('/storage/doctors/'.$value->imagePath)}}" data-srcset="{{asset('/storage/doctors/'.$value->imagePath)}}, {{asset('/storage/doctors/'.$value->imagePath)}}" alt="DiDent">
                                                    </span>
                                                    <span class="step_item_desk">
                                                        <span class="doctor_name">{{$value->name}}</span>
                                                        <span class="doctor_position">{{$value->$specialization}}</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    @endforeach
                                @endif
                               <!-- Droctors -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step-next step2">{{__('main.next')}}</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        {{__('main.if_you_need_assistance')}} {{$config->phone}}
                        <span> 2020 Tandartsenpraktijk BoLo. {{__('main.rights')}}</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Choose a Dentist -->   
            </div> 
        </div>
        <!-- Popup Step 1 -->
        
        <!-- Popup Step 2 -->
        <div id="step2" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Please Provide a Visit Reason -->
                <div class="row step2_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>{{__('main.visit_reason')}}</h3>
                            <div class="row">
                                <!-- reason-->
                                @if(isset($reasons))
                                    @foreach ($reasons as $value)
                                    <input type="radio" id="radio10" class="radio_service" name="radio_service" value="{{$value->id}}">
                                    <label for="radio10">
                                        <span class="step_item_vn">
                                            <span class="row step_item align-items-center">
                                                {{$value->$title}}
                                            </span>
                                        </span>
                                    </label>
                                    @endforeach
                                @endif
                                <!-- reason -->

                                <!-- Other -->
                                <input type="radio" id="radio18" class="radio_service" name="radio_service" value="Other">
                                <label for="radio18">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            @lang('main.other')
                                        </span>
                                    </span>
                                </label>
                                <!-- Other -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step1" class="btn step1">@lang('main.previous')</a>
                        <a href="#step3" class="btn step-next step3">@lang('main.next')</a>
                    </div>
                    <!-- Prev and next step button -->
                    <!-- footer popup -->
                    <div class="footer_popup">
                        @lang('main.if_you_need_assistance') {{$config->phone}}
                        <span>2020 Tandartsenpraktijk BoLo. @lang('main.right')</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Please Provide a Visit Reason -->
            </div> 
        </div>
        <!-- Popup Step 2 -->
        
        <!-- Popup Step 3 -->
        <div id="step3" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input date -->
                <div class="step3_row datepicker_row row">
                    <div class="datepicker_row_title">
                        <h3>@lang('main.choose_date')</h3>
                        <div class="btn_white">@lang('main.first_available'): @lang('main.tomorrow') @lang('main.at') 10:00 am</div>
                    </div>
                    <div class="row datepicker">
                        <div id="datepicker"></div>
                        <input class="reserv_input posDate" id="temp_date_start" type="hidden"  name="posDate">
                    </div>

                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step2">@lang('main.previous')</a>
                        <a href="#step4" class="btn step-next step4">@lang('main.next')</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        @lang('main.if_you_need_assistance'){{$config->phone}}
                        <span> 2020 Tandartsenpraktijk BoLo. @lang('main.rights')</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- End input date -->
            </div> 
        </div>
        <!-- Popup Step 3 -->
        
        <!-- Popup Step 4 -->
        <div id="step4" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input time -->
                <div class="row step4_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>@lang('main.choose_time')</h3>
                            <div class="row">
                                <!-- 10:00 am -->
                                <input type="radio" id="radio_time1" class="radio_time" name="radio_time" value="10:00 am">
                                <label for="radio_time1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            10:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 10:00 am -->

                                <!-- 11:00 am -->
                                <input type="radio" id="radio_time2" class="radio_time" name="radio_time" value="11:00 am" >
                                <label for="radio_time2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            11:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 11:00 am -->

                                <!-- 12:00 am -->
                                <input type="radio" id="radio_time3" class="radio_time" name="radio_time" value="12:00 am">
                                <label for="radio_time3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            12:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 12:00 am -->

                                <!-- 1:00 am -->
                                <input type="radio" id="radio_time4" class="radio_time" name="radio_time" value="1:00 am">
                                <label for="radio_time4">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            1:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 1:00 am -->

                                <!-- 2:00 am -->
                                <input type="radio" id="radio_time5" class="radio_time" name="radio_time" value="2:00 am">
                                <label for="radio_time5">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            2:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 2:00 am -->

                                <!-- 3:00 am -->
                                <input type="radio" id="radio_time6" class="radio_time" name="radio_time" value="3:00 am">
                                <label for="radio_time6">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            3:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 3:00 am -->

                                <!-- 4:00 am -->
                                <input type="radio" id="radio_time7" class="radio_time" name="radio_time" value="4:00 am">
                                <label for="radio_time7">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            4:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 4:00 am -->

                                <!-- 5:00 am -->
                                <input type="radio" id="radio_time8" class="radio_time" name="radio_time" value="5:00 am">
                                <label for="radio_time8">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            5:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 5:00 am -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step3" class="btn step3">@lang('main.previous')</a>
                        <a href="#step5" class="btn step-next step5">@lang('main.next')</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        @lang('main.if_you_need_assistance') {{$config->phone}}
                        <span> 2020 Tandartsenpraktijk BoLo. @lang('main.rights')</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- end input time -->
            </div> 
        </div>
        <!-- Popup Step 4 -->
    
        <!-- Popup Step 5 -->
        <div id="step5" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Almost There -->
                <div class="row step5_row almost_there">
                    <h3>@lang('main.almost_there')</h3>

                    <div class="row almost_select">
                        <div class="col-3">
                            <div class="almost_select_img radius_right">
                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="http://via.placeholder.com/85x95" data-srcset="http://via.placeholder.com/85x95, http://via.placeholder.com/170x190 2x" alt="DiDent">
                            </div>
                            <div class="almost_details">
                                <div class="almost_doc_position">@lang('main.dentist')</div>
                                <div class="almost_doc_name">Dr. Jennifer Wilson</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">@lang('main.reason')</div>
                                <div class="almost_reason">Check-up and Cleaning</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">@lang('main.date_time')</div>
                                <div class="almost_date">April 19 at 10:00 am</div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="row contact_information_row">
                        <h4>@lang('main.contact_info')</h4>
                        <p>@lang('main.reach_us')</p>

                        <div class="row form_row">
                            <div class="row row-15">
                                <div class="col-2">
                                    <div class="leable">@lang('main.full_name')</div>
                                    <input class="posName" type="text" name="posName">
                                </div>
                                <div class="col-2">
                                    <div class="leable">@lang('email')</div>
                                    <input class="posEmail" type="email" name="posEmail" />
                                </div>
                            </div>
                            <div class="leable">@lang('main.phone') (ex. 650 123-4000)</div>
                            <input class="posTel" type="text" name="posTel"> 
                        </div>

                        <div class="process"></div>
                        <div class="center btn_popup">
                           <a href="#step4" class="btn step4">@lang('main.previous')</a>
                           <button type="button" class="button send">@lang('main.submit')</button>
                        </div> 
                    </div>
                    <!-- Contact Information -->
 
                    <!-- footer popup -->
                    <div class="footer_popup">
                        @lang('main.if_you_need_assistance') {{$config->phone}}
                        <span> 2020 Tandartsenpraktijk BoLo. @lang('main.rights')</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Almost There -->
            </div> 
        </div>
        <!-- Popup Step 5 -->
    </form>  --}}
    <!-- JS -->
    <script src="{{asset('website/js/modernizr.custom.js')}}"></script>
	<!-- Jquery -->
	<script src="{{asset('website/js/jquery-3.2.1.js')}}"></script>  
    <script src="{{asset('website/js/jquery-ui.js')}}"></script>
    <script async src="{{asset('website/js/jquery.viewportchecker.js')}}"></script>  
    <!-- Sidebar menu --> 
    <script src="{{asset('website/js/jquery.dlmenu.js')}}"></script>
    <!-- Image lazy load -->
    <script src="{{asset('website/js/lozad.js')}}"></script> 
	<!-- Owl carousel -->
	<script async src="{{asset('website/js/owl.carousel.js')}}"></script>
	<!-- Magnific-popup js -->
	<script async src="{{asset('website/js/jquery.magnific-popup.js')}}"></script>
    <!-- After-Before Script -->
    <script async src="{{asset('website/js/jquery.event.move.js')}}"></script>
    <script src="{{('website/js/jquery.twentytwenty.js')}}"></script>
	<!-- Custom JS -->
	<script async src="{{asset('website/js/custom.js')}}"></script> 
 @else
 This page is empty because the table is empty, please contact the developer.
 @endif
    </body>

</html>  