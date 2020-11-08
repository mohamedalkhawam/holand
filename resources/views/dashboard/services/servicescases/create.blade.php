@extends('layout.default')
@section('content')
     <div class="card card-custom card-sticky" id="kt_page_sticky_card" style="align-item:center"> 
        <div class="card-header" style="">
	        <div class="card-title">
				<h3 class="card-label">Create 
			    <i class="mr-2"></i>
		        <small class="">new Cases to your website.</small></h3>
			</div>									
            <div class="card-toolbar">
                <a href="{{route('dashboard.services.servicecases.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.services.servicecases.store')}}" method="post"  enctype="multipart/form-data" id="createForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                  {{-- Start Service Category --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Services Category : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Choose a service</label>
                                        <div class="col-9">
                                        <select name="services_id" id="" class="form-control @error('services_id') is-invalid @enderror" required validate>
                                            <option value="">Choose category</option>
                                        @if(isset($services))
                                            @foreach ($services as $value)
                                                <option value="{{$value->id}}"> {{$value->title_en}} </option>
                                            @endforeach
                                        @endif
                                        </select>
                                        </div>
                                    </div>
                                {{-- End Service Category --}}




                                {{-- Start short story  --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Customize a Short Story : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('short_story_en') is-invalid @enderror"  cols="20" rows="10" name="short_story_en" required validate></textarea>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('short_story_nl') is-invalid @enderror"  cols="20" rows="10" name="short_story_nl" required validate></textarea>
                                        <span class="form-text text-muted">Please remember that the "Title" should not be more than 2 or three words.</span>
                                        </div>
                                    </div>
                                {{-- End Short story --}}


                                <div class="separator separator-dashed my-10"></div>


                                {{-- Start Initial problem --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize The Initial Problem : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('initial_problem_en') is-invalid @enderror"  cols="20" rows="10" name="initial_problem_en" required validate></textarea>
                                        {{-- <span class="form-text text-muted" style="position: absolute;">You can replace the old value with the new value.</span>                                  --}}
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('initial_problem_nl') is-invalid @enderror"  cols="20" rows="10" name="initial_problem_nl" required validate></textarea>
                                            <span class="form-text text-muted"style="position: absolute;" >Please remember to seperate keywords by a space. </span>
                                        </div>
                                    </div>
                                {{-- end Initial problem --}}


                                  <div class="separator separator-dashed my-10"></div>


                                    {{-- Start Initial problem --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize what have done : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('what_we_have_done_en') is-invalid @enderror"  cols="20" rows="10" name="what_we_have_done_en" required validate></textarea>
                                        {{-- <span class="form-text text-muted" style="position: absolute;">You can replace the old value with the new value.</span>                                  --}}
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('what_we_have_done_nl') is-invalid @enderror"  cols="20" rows="10" name="what_we_have_done_nl" required validate></textarea>
                                            <span class="form-text text-muted"style="position: absolute;" >Please remember to seperate keywords by a space. </span>
                                        </div>
                                    </div>
                                {{-- end Initial problem --}}


                                  <div class="separator separator-dashed my-10"></div>

                                {{-- Start Details --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Details : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Const</label>
                                        <div class="col-9">
                                        <input class="form-control @error('cost') is-invalid @enderror" name="cost" id="" required validate/>
                                        </div>
                                    </div>
                                    {{-- start  Doctors Category --}}
                                    <div class="form-group row">
                                        <label class="col-3">Doctor</label>
                                        <div class="col-9">
                                            {{-- <input class="form-control" type="text" value="" name="description_nl"> --}}
                                            <select name="doctor_id" id="" class="form-control @error('doctor_id') is-invalid @enderror" required validate>
                                            <option value="">Choose a Doctor</option>
                                        @if(isset($doctors))
                                            @foreach ($doctors as $value)
                                                <option value="{{$value->id}}"> {{$value->name}} </option>
                                            @endforeach
                                        @endif
                                        </select>                                       
                                    </div>
                                    </div>
                                {{-- end  Doctors Category--}}


                                <div class="separator separator-dashed my-10"></div>
                                               <h3 class="text-dark font-weight-bold mb-10">Costumize Images : </h3>
                                 {{-- Start image Before--}}
                    
                                    <div class="form-group row">
                                        <label class="col-3">Uploud an image (Before) </label>
                                        <div class="col-9">
                                                <a href="javascript:void(0)" class="btn btn-light-dark" onclick="checkBefore()">                      
                                                    <i class="flaticon2-chat-1"></i> Uploade Image                                                    
                                                </a>
                                            <div style="overflow:hidden; display:inline-block">
                                                    <input  id="imageBefore" type="file" style="margin-left: -91px;" name="imagePath_before" validate required >
                                            </div>

                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                {{-- end Image Before--}}
                                 {{-- Start image Before--}}
                                       <div class="form-group row">
                                        <label class="col-3">Uploud an image (After) </label>
                                        <div class="col-9">
                                                <a href="javascript:void(0)" class="btn btn-light-dark" onclick="checkAfter()">                      
                                                    <i class="flaticon2-chat-1"></i>
                                                    Uploade Image                                                    
                                                </a>
                                            <div style="overflow:hidden; display:inline-block">
                                                    <input  id="imageAfter" type="file" style="margin-left: -91px;" name="imagePath_after" validate required >
                                            </div>

                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>    
                                {{-- end Image Before--}}
                                <div class=" my-15"></div>    
                            </div>
                        </div>
                    <div class="col-xl-2"></div>
                </div>
            </form>						
        </div>
    </div>
<script> 
function checkBefore (){
    document.getElementById('imageBefore').click() 
}
function checkAfter (){
    document.getElementById('imageAfter').click() 
}
function submitForm(){
    document.getElementById('createForm').submit()
}
</script>
@endsection

