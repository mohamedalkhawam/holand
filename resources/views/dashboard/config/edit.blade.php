@extends('layout.default')
@section('content')
     <div class="card card-custom card-sticky" id="kt_page_sticky_card" style="align-item:center"> 
        <div class="card-header" style="">
	        <div class="card-title">
				<h3 class="card-label">Customize Settings  
			    <i class="mr-2"></i>
		        <small class="">new Cases to your website.</small></h3>
			</div>									
            <div class="card-toolbar">
                <a href="{{route('dashboard.config.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.config.update',$items->id)}}" method="post"  enctype="multipart/form-data" id="createForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             <input type="hidden" name="_method" value="put">
             {{ method_field('PUT') }}             
             
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                  {{-- Start Phone--}}
                                    <h3 class="text-dark font-weight-bold mb-10">Clinic Details  : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Phone</label>
                                        <div class="col-9">
                                        <input class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$items->phone}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Phone --}}

                                {{-- Start Email--}}
                                    <div class="form-group row">
                                        <label class="col-3">Email</label>
                                        <div class="col-9">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{$items->email}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Email --}}

                                {{-- Start Address English--}}
                                    <div class="form-group row">
                                        <label class="col-3">Address En</label>
                                        <div class="col-9">
                                        <input class="form-control @error('address_en') is-invalid @enderror" name="address_en" value="{{$items->address_en}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Address English --}}

                                {{-- Start Address NederLands--}}
                                    <div class="form-group row">
                                        <label class="col-3">Address En</label>
                                        <div class="col-9">
                                        <input class="form-control @error('address_nl') is-invalid @enderror" name="address_nl" value="{{$items->address_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Address NederLands --}}


                                {{-- Start facebook--}}
                                    <div class="form-group row">
                                        <label class="col-3">Facebook</label>
                                        <div class="col-9">
                                        <input class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{$items->facebook}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End facebook --}}


                                {{-- Start twitter--}}
                                    <div class="form-group row">
                                        <label class="col-3">Twitter</label>
                                        <div class="col-9">
                                        <input class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{$items->twitter}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End twitter --}}


                                {{-- Start google--}}
                                    <div class="form-group row">
                                        <label class="col-3">G+</label>
                                        <div class="col-9">
                                        <input class="form-control @error('google') is-invalid @enderror" name="google" value="{{$items->google}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End google --}}

                                {{-- Start youtube--}}
                                    <div class="form-group row">
                                        <label class="col-3">Youtube</label>
                                        <div class="col-9">
                                        <input class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{$items->youtube}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End youtube --}}

                                {{-- Start youtube Video--}}
                                    <div class="form-group row">
                                        <label class="col-3">Youtube Video</label>
                                        <div class="col-9">
                                        <input class="form-control @error('youtube_video') is-invalid @enderror" name="youtube_video" value="{{$items->youtube_video}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End youtube Video --}}

                                {{-- Start Location--}}
                                    <h3 class="text-dark font-weight-bold mb-10">Location : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Lat</label>
                                        <div class="col-9">
                                        <input class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{$items->lat}}" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Lng</label>
                                        <div class="col-9">
                                        <input class="form-control @error('lng') is-invalid @enderror" name="lng" value="{{$items->lng}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Location --}}

                                 {{-- Start normal days from --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Normal Days From: </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('open_day_from_en') is-invalid @enderror" name="open_day_from_en" value="{{$items->open_day_from_en}}" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('open_day_from_nl') is-invalid @enderror" name="open_day_from_nl" value="{{$items->open_day_from_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Normal days from --}}

                                 {{-- Start normal Days To --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Normal Days To : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('open_day_to_en') is-invalid @enderror" name="open_day_to_en" value="{{$items->open_day_to_en}}" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('open_day_to_nl') is-invalid @enderror" name="open_day_to_nl" value="{{$items->open_day_to_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Normal Days to --}}

                                {{-- Start normal Hours  --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Normal hours : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">From</label>
                                        <div class="col-9">
                                        <input class="form-control @error('open_hour_from') is-invalid @enderror" name="open_hour_from" value="{{$items->open_hour_from}}" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">To</label>
                                        <div class="col-9">
                                        <input class="form-control @error('open_hour_to') is-invalid @enderror" name="open_hour_to" value="{{$items->open_hour_to}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Normal Hours  --}}

                                {{-- Start First Specail Day  --}}
                                    <h3 class="text-dark font-weight-bold mb-10">First Special Day : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Day English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('first_special_day_en') is-invalid @enderror" name="first_special_day_en" value="{{$items->first_special_day_en}}" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Day Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('first_special_day_nl') is-invalid @enderror" name="first_special_day_nl" value="{{$items->first_special_day_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-3">from</label>
                                        <div class="col-9">
                                        <input class="form-control @error('first_special_from') is-invalid @enderror" name="first_special_from" value="{{$items->first_special_from}}" id="" required validate/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">to</label>
                                        <div class="col-9">
                                        <input class="form-control @error('first_special_to') is-invalid @enderror" name="first_special_to" value="{{$items->first_special_to}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End First Specail Day  --}}


                                {{-- Start Second Specail Day  --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Second Special Day : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Day English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('second_special_day_en') is-invalid @enderror" name="second_special_day_en" value="{{$items->second_special_day_en}}" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Day Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('second_special_day_nl') is-invalid @enderror" name="second_special_day_nl" value="{{$items->second_special_day_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-3">Note English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('second_special_day_note_en') is-invalid @enderror" name="second_special_day_note_en" value="{{$items->second_special_day_note_en}}" id="" required validate/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">Note Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('second_special_day_note_nl') is-invalid @enderror" name="second_special_day_note_nl" value="{{$items->second_special_day_note_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Second Specail Day  --}}
                                <div class=" my-15"></div>    
                            </div>
                        </div>
                    <div class="col-xl-2"></div>
                </div>
            </form>						
        </div>
    </div>
<script> 
function check (){
    document.getElementById('file').click() 
}
function submitForm(){
    document.getElementById('createForm').submit()
}
</script>
@endsection

