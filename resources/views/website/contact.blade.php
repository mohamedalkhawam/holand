@extends('layout.website')
@section('content')
    <!--  Main start -->
    <?php 
        $config= app('headerConfig');
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
    ?>
        <main>
            <!-- Contact -->
            <div class="container">
                <div class="row contact_row">
                    <!-- Get in Touch -->
                    <div class="row contact_row_title">
                    <h1>@lang('main.get_in_touch')</h1>
                        <div class="contact_row_soc">
                            @if(isset($config))
                                @foreach ($config as $value)
                                    <a href="{{$value->facebook}}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$value->twitter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$value->google}}"><i class="fa fa-google-plus"></i></a>
                                    <a href="{{$value->youtube}}"><i class="fa fa-youtube"></i></a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- Get in Touch -->
                    
                    <!-- Leave a Reply -->
                
                 
                <form action="{{route('save')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">                    <h4>
                        {{__('main.leave_a_replay')}}
                    </h4>
                    <p>
                        {{__('main.reach_us')}}
                    </p>
                    <div class="row form_row">
                        <div class="row message_row">
                            <div class="leable">
                              {{__('main.message')}}  
                            </div>
                            <textarea class="posText @error('posText') error-danger @enderror" name="posText" required validate></textarea>
                        </div>
                        <div class="row row-15">
                            <div class="col-3">
                                <div class="leable">
                                    {{__('main.full_name')}} 
                                </div>
                                <input class="posName @error('posName') is-invalid @enderror" type="text" name="posName" required validate>
                            </div>
                            <div class="col-3">
                                <div class="leable">
                                    {{__('main.email')}} 
                                </div>
                                <input class="posEmail @error('posEmail') is-invalid @enderror" type="email" name="posEmail" required validate />
                            </div>
                            <div class="col-3">
                                <div class="leable">{{__('main.phone')}} (ex. 650 123-4000)</div>
                                <input class="posTel @error('posTel') is-invalid @enderror" type="text" name="posTel" required validate>
                            </div>
                        </div> 
                    </div>
                    <!-- Leave a Reply -->
                    
                    <!-- Send button -->
                    <div class="contact_process"></div>
                    <div class="center">
                       	<button type="submit" class="button contact_send">
                               {{__('main.send_a_message')}}
                        </button>  
                    </div> 
                </form>
                    <!-- Send button -->
                    
                    <!-- Open Hours -->
                    <div class="row open_hours_contact">
                        <h4>
                            {{__('main.open_hours')}}
                        </h4>
                        @if(isset($config))
                            @foreach ($config as $value)
                        <div class="row open_hours_row">
                            <div class="col-3 open_hours_l">
                                <div class="day"> {{$value->$normalDayFrom}} - {{$value->$normalDayTo}}</div>
                                <div class="row open_hours_block">
                                    <div class="hours">
                                        {{cutString($value->open_hour_from,0,1)}}
                                        <span>{{cutString($value->open_hour_from,1,2)}}</span>
                                    </div>
                                    <div class="minute">
                                           {{cutString($value->open_hour_to,0,1)}}
                                        <span>{{cutString($value->open_hour_to,1,2)}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 open_hours_c">
                                <div class="day"> {{$value->$firstSpecialDay}} </div>
                                <div class="row open_hours_block">
                                    {{$value->$firstSpecialNote}}
                                </div>
                            </div>
                            <div class="col-3 open_hours_r">
                                <div class="day"> {{$value->$secondSpecialDay}} </div>
                                <div class="row open_hours_block">
                                     {{$value->$secondSpecialNote}}
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Open Hours --> 
                </div>
            </div>
            <!-- Contact --> 
        </main>
        <script>
             var regVr22 = "<div class='process green'>Processing. Please wait.</div>";
        jQuery(".contact_send").on('click', function(){
        jQuery(".contact_process").html(regVr22).show(); 
            var posName = jQuery(".posName").val();
            var posText = jQuery(".posText").val();
            var posTel = jQuery(".posTel").val();
            var posEmail = jQuery(".posEmail").val(); 
        jQuery.ajax({
            type: "POST",
            url: "send.php",
            data: {"posText": posText, "posEmail": posEmail, "posName": posName, "posTel": posTel},
            cache: false,
            success: function(response){
                var messageResp = '<div class="infobox infobox_success"><div class="close_button"><i class="fa fa-times"></i></div><i class="fa fa-check"></i><b class="h1">Thank you!</b><p>Dear ';
                var resultStat = ', thank you for contacting DiDent Clinic. We will be in touch with you shortly!</p><a href="/" class="btn">Go to Home Page</a></div>';
                var oll = (messageResp + posName + resultStat);
                if(response === '1'){
                    jQuery(".contact_process").html(oll).fadeIn(3000); 
                    jQuery(".posName").val("");
                    jQuery(".posTel").val("");
                    jQuery(".posText").val(""); 
                    jQuery(".posEmail").val(""); 
                } else {
                    jQuery(".contact_process").html(response).fadeIn(3000); }
                    jQuery('.infobox .close_button').on('click', function(){
                    jQuery(this).closest('.infobox').fadeOut(500);
                });
              }
        });
        return false;
    });
    
        </script>
        
@endsection