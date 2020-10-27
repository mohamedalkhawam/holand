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
                <a href="{{route('dashboard.doctors.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.doctors.store')}}" method="post"  enctype="multipart/form-data" id="createForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                  {{-- Start Service Category --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Doctor Full Name : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Doctor Name</label>
                                        <div class="col-9">
                                        <input class="form-control @error('name') is-invalid @enderror" name="name" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End Service Category --}}



                                <div class="separator separator-dashed my-10"></div>
                                {{-- Start short story  --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Customize a Description : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('description_en') is-invalid @enderror"  cols="20" rows="10" name="description_en" required validate></textarea>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('description_nl') is-invalid @enderror"  cols="20" rows="10" name="description_nl" required validate></textarea>
                                        <span class="form-text text-muted">Please remember that the "Title" should not be more than 2 or three words.</span>
                                        </div>
                                    </div>
                                {{-- End Short story --}}


                                <div class="separator separator-dashed my-10"></div>


                                {{-- Start Initial problem --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize a Short Bio : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('bio_en') is-invalid @enderror"  cols="20" rows="10" name="bio_en" required validate></textarea>
                                        {{-- <span class="form-text text-muted" style="position: absolute;">You can replace the old value with the new value.</span>                                  --}}
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('bio_nl') is-invalid @enderror"  cols="20" rows="10" name="bio_nl" required validate></textarea>
                                            <span class="form-text text-muted"style="position: absolute;" >Please remember to seperate keywords by a space. </span>
                                        </div>
                                    </div>
                                {{-- end Initial problem --}}


                                  <div class="separator separator-dashed my-10"></div>


                                {{-- Start Details --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Doctor Education : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('education_en') is-invalid @enderror" name="education_en" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('education_nl') is-invalid @enderror" name="education_nl" id="" required validate/>
                                        </div>
                                
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>

                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Doctor MemberShip : </h3>

                                     <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('membership_en') is-invalid @enderror" name="membership_en" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('membership_nl') is-invalid @enderror" name="membership_nl" id="" required validate/>
                                        </div>
                                
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Doctor Languages : </h3>

                                    <div class="form-group row">
                                        <label class="col-3">Languages</label>
                                        <div class="col-9">
                                        <input class="form-control @error('languages') is-invalid @enderror" name="languages" id="" required validate/>
                                        </div>
                                    </div>


                                <div class="separator separator-dashed my-10"></div>
                                 <h3 class="text-dark font-weight-bold mb-10">Costumize Doctor Specialization : </h3>

                                     <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('Specialization_en') is-invalid @enderror" name="Specialization_en" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('Specialization_nl') is-invalid @enderror" name="Specialization_nl" id="" required validate/>
                                        </div>
                                
                                    </div>
                                      <h3 class="text-dark font-weight-bold mb-10">Costumize Doctor Social Media : </h3>

                                     <div class="form-group row">
                                        <label class="col-3">Facebook</label>
                                        <div class="col-9">
                                        <input class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Twitter</label>
                                        <div class="col-9">
                                        <input class="form-control @error('twitter') is-invalid @enderror" name="twitter" id="" required validate/>
                                        </div>
                                
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">G+</label>
                                        <div class="col-9">
                                        <input class="form-control @error('google') is-invalid @enderror" name="google" id="" required validate/>
                                        </div>
                                
                                    </div>
                                     <h3 class="text-dark font-weight-bold mb-10">Costumize Images : </h3>
                           
                                 {{-- Start image Before--}}
                                       <div class="form-group row">
                                        <label class="col-3">Uploud an image </label>
                                        <div class="col-9">
                                                <a href="javascript:void(0)" class="btn btn-light-dark" onclick="check()">                      
                                                    <i class="flaticon2-chat-1"></i>
                                                    Uploade Image                                                    
                                                </a>
                                            <div style="overflow:hidden; display:inline-block">
                                                    <input  id="file" type="file" style="margin-left: -90px;" name="imagePath" validate required >
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
function check (){
    document.getElementById('file').click() 
}
function submitForm(){
    document.getElementById('createForm').submit()
}
</script>
@endsection

