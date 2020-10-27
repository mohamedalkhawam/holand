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
        <form class="form"action="{{route('dashboard.home.store')}}" method="post"  enctype="multipart/form-data" id="createForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                    
                                
{{-- Start Title --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Slider Title : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                            <input class="form-control @error('title_en') is-invalid @enderror" type="text"  name="title_en"  validate required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                            <input class="form-control @error('title_nl') is-invalid @enderror" type="text"  name="title_nl"  validate required >
                                        </div>
                                    </div>
                                    {{-- End Title --}}


                                  <div class="separator separator-dashed my-10"></div>


                                    {{-- Start Description --}}
                                    
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Slider Description : </h3>
                            
                               
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                            <input class="form-control @error('description_en') is-invalid @enderror" type="text"  name="description_en"  validate required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                            <input class="form-control @error('description_nl') is-invalid @enderror" type="text" name="description_nl"  validate required >
                                        </div>
                                    </div>
                                    {{-- end Description --}}

                                  <div class="separator separator-dashed my-10"></div>
                                    
                                    {{-- Start image --}}
                                    
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Slider Image : </h3>   
                                    
                                    <div class="form-group row">
                                        <label class="col-3">Uploud an image </label>
                                        <div class="col-9">
                                            <a href="javascript:void(0)" class="btn btn-light-dark" onclick="check()">                      
                                                <i class="flaticon2-chat-1"></i> Uploade Image                                                    
                                            </a>
                                            <div style="overflow:hidden; display:inline-block">
                                                <input  id="file" type="file" style="margin-left: -90px;" name="imagePath" validate required >
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end Image --}}
                                   
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


