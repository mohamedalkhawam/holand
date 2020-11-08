{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<?php 
function cutString($string){
$exploded = explode(" ", $string);
$firstFive = implode(" ", array_splice($exploded, 0, 3));
return $firstFive;

}
?>
@if(isset($items))
 @foreach ($items as $value)
                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Services Page Content
                                            <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div></h3>
                                        </div>
                                        <div class="d-flex align-items-center" >
                                            <span class="text-muted pt-2 font-size-m " style="margin-right:15px"> <strong>Last Update:</strong> {{$value->updated_at}} </span>
                                            <a href=" {{route('dashboard.config.edit',$value->id)}} "class="btn btn-primary" style="font-weight:600">Edit</a> 
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{--Start Clinic Details  --}}
                                        <div class="row">
                                            <div class="col-xl-2"></div>
                                            <div class="col-xl-8">
                                                <div class="my-5">
                                                    <h3 class="text-dark font-weight-bold mb-10 h1">Clinic Details : </h3>
                                                    {{-- Start Phone Number --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Phone:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                 {{$value->phone}}
                                                            </div>
                                                        </div>
                                                    {{-- End Phone Number --}}

                                                    {{-- Start Email  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Email:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                {{$value->email}}
                                                            </div>
                                                        </div>
                                                    {{-- End Email  --}}

                                                     {{-- Start Facebook  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Facebook:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                {{$value->facebook}}
                                                            </div>
                                                        </div>
                                                    {{-- End Facebook  --}}

                                                    {{-- Start Facebook  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Twitter:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                               {{$value->twitter}}
                                                            </div>
                                                        </div>
                                                    {{-- End Facebook  --}}



                                                    {{-- Start Google+  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Google+:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                 {{$value->google}}
                                                            </div>
                                                        </div>
                                                    {{-- End Google+  --}}

                                                    {{-- Start Youtube  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Youtube:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                {{$value->youtube}}
                                                            </div>
                                                        </div>
                                                    {{-- End Youtube  --}}

                                                    {{-- Start Location  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Location:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                            [ {{$value->lat}},  {{$value->lng}}]
                                                            </div>
                                                        </div>
                                                    {{-- End Location  --}}

                                                    {{-- Start Location  --}}
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Video Link:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                              {{$value->youtube_video}}
                                                            </div>
                                                        </div>
                                                    {{-- End Location  --}}

                                                    {{-- Start Email  --}}
                                                   

                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Address En:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                  {{$value->address_en}}
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="form-group row">
                                                            <label class="col-3 h6 font-weight-bolder">Address Nl:</label>
                                                            <div class="col-9 h6 font-weight-lighter">
                                                                  {{$value->address_nl}}
                                                            </div>
                                                        </div>
                                                    {{-- End Email  --}}
                                                </div>
                                            </div>
                                           
                                        </div>
                                        {{--End Clinic Details  --}}  

                                        <div class="separator separator-dashed my-10"></div>
                                        {{-- Start Clinic Open Hours  --}}
                                            <div class="row">
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-8">
                                                    <div class="my-5">
                                                        <h3 class="text-dark font-weight-bold mb-10 h1">Open Days and Hours : </h3>

                                                        {{-- Start Normal Days   --}}
                                                            <div class="form-group row">
                                                                <label class="col-3 h6 font-weight-bolder">Normal Days En:</label>
                                                                <div class="col-9 h6 font-weight-lighter">
                                                             {{$value->open_day_from_en}}-{{$value->open_day_to_en}}   From {{$value->open_hour_from}} To {{$value->open_hour_to}}
                                                                </div>
                                                            </div>
                                                       
                                                            <div class="form-group row">
                                                                <label class="col-3 h6 font-weight-bolder">Normal Days Nl:</label>
                                                                <div class="col-9 h6 font-weight-lighter">
                                                            {{$value->open_day_from_nl}}-{{$value->open_day_to_nl}}   From {{$value->open_hour_from}} To {{$value->open_hour_to}}
                                                                </div>
                                                            </div>
                                                        {{-- End Normal Days  --}}

                                                        {{-- Start Special Day 1   --}}
                                                            <div class="form-group row">
                                                                <label class="col-3 h6 font-weight-bolder">Special Day 1 En:</label>
                                                                <div class="col-9 h6 font-weight-lighter">
                                                                {{$value->first_special_day_en}} From  {{$value->first_special_from}} To  {{$value->first_special_to}}
                                                                </div>
                                                            </div>
                                                       
                                                            <div class="form-group row">
                                                                <label class="col-3 h6 font-weight-bolder">Special Day 1 Nl:</label>
                                                                <div class="col-9 h6 font-weight-lighter">
                                                            {{$value->first_special_day_nl}} From  {{$value->first_special_from}} To  {{$value->first_special_to}}
                                                                </div>
                                                            </div>
                                                        {{-- End Special Day 1  --}}

                                                        {{-- Start Special Day 1   --}}
                                                            <div class="form-group row">
                                                                <label class="col-3 h6 font-weight-bolder">Special Day 2 En:</label>
                                                                <div class="col-9 h6 font-weight-lighter">
                                                                  {{$value->second_special_day_en}}  {{$value->second_special_day_note_en}}
                                                                </div>
                                                            </div>
                                                       
                                                            <div class="form-group row">
                                                                <label class="col-3 h6 font-weight-bolder">Special Day 2 Nl:</label>
                                                                <div class="col-9 h6 font-weight-lighter">
                                                                   {{$value->second_special_day_nl}}   {{$value->second_special_day_note_nl}}
                                                                </div>
                                                            </div>
                                                        {{-- End Special Day 1  --}}
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        {{--End Clinic Open Hours  --}}

                                        
                                    </div>
                                </div>
                               
                                    
                                @endforeach
                                
 @endif
@endsection


