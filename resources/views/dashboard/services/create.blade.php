@extends('layout.default')
@section('content')
     <div class="card card-custom card-sticky" id="kt_page_sticky_card" style="align-item:center"> 
        <div class="card-header" style="">
	        <div class="card-title">
				<h3 class="card-label">Create 
			    <i class="mr-2"></i>
		        <small class="">new service to your website.</small></h3>
			</div>									
            <div class="card-toolbar">
                <a href="{{route('dashboard.services.service.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.services.service.store')}}" method="post"  enctype="multipart/form-data" id="createForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             
             {{-- {{ method_field('PUT') }} --}}
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                {{-- Start Title --}}

                                    <h3 class="text-dark font-weight-bold mb-10">Customize a Title : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('title_en') is-invalid @enderror" type="text" value="" name="title_en" required validate>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                            <input class="form-control @error('title_nl') is-invalid @enderror" type="text" value="" name="title_nl" required validate>
                                        <span class="form-text text-muted">Please remember that the "Title" should not be more than 2 or three words.</span>
                                        </div>
                                    </div>
                                {{-- End Title --}}


                                <div class="separator separator-dashed my-10"></div>


                                {{-- Start keywords --}}
                                    
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize some Keywords : </h3>
                            
                               
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('keywords_en') is-invalid @enderror" type="text" value="" name="keywords_en" required validate>
                                        {{-- <textarea class="form-control @error('keywords_en') is-invalid @enderror" type="text" value="" name="keywords_en" required validate cols="10" rows="10"></textarea> --}}

                                        {{-- <span class="form-text text-muted" style="position: absolute;">You can replace the old value with the new value.</span>                                  --}}
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                            <input class="form-control @error('keywords_nl') is-invalid @enderror" type="text"  name="keywords_nl" required validate>
                                            <span class="form-text text-muted"style="position: absolute;" >Please remember to seperate keywords by a space; minimum keywords 4. </span>
                                            {{-- <textarea class="form-control @error('keywords_nl') is-invalid @enderror" type="text"  name="keywords_nl" required validate cols="10" rows="10"></textarea> --}}
                                        </div>
                                    </div>

                                {{-- end keywords --}}
                                  <div class="separator separator-dashed my-10"></div>
                                {{-- Start Description --}}
                                    
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize a Description : </h3>
                            
                               
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        {{-- <input class="form-control" type="text" value="" name="description_en"> --}}
                                        <textarea class="form-control @error('description_en') is-invalid @enderror"name="description_en" id="" cols="20" rows="10" required validate></textarea>

                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                            {{-- <input class="form-control" type="text" value="" name="description_nl"> --}}
                                            <textarea class="form-control @error('description_nl') is-invalid @enderror"name="description_nl" id="" cols="20" rows="10" required validate></textarea>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                {{-- end Description --}}

                                  <div class="separator separator-dashed my-10"></div>
                                    
                                 {{-- Start image --}}
                                    
                                   
                                
                                    
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


function submitForm(){
    document.getElementById('createForm').submit()
}
</script>
@endsection

