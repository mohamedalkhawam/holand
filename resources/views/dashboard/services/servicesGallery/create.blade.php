@extends('layout.default')
@section('content')
     <div class="card card-custom card-sticky" id="kt_page_sticky_card" style="align-item:center"> 
        <div class="card-header" style="">
	        <div class="card-title">
				<h3 class="card-label">Add images to gallery
			    <i class="mr-2"></i>
		        <small class=""> Choose images that express the quality of your work</small></h3>
			</div>									
            <div class="card-toolbar">
                <a href="{{route('dashboard.services.gallery.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.services.gallery.store')}}" method="post"  enctype="multipart/form-data" id="editForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             {{-- <input type="hidden" name="_method" value="put">
             {{ method_field('PUT') }} --}}
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                {{-- Start Title --}}

                                    <h3 class="text-dark font-weight-bold mb-10">Services Category </span> : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">Choose a service</label>
                                        <div class="col-9">
                                        <select name="services_id" id="" class="form-control @error('services_id') is-invalid @enderror" required validate>
                                            <option value="">Choose category</option>
                                            @foreach ($items as $value)
                                                <option value="{{$value->id}}"> {{$value->title_en}} </option>
                                            @endforeach
                                        </select>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                   
                                {{-- End Title --}}
                                  <div class="separator separator-dashed my-10"></div>
                                    
                                 {{-- Start image --}}
                                    
                                    <h3 class="text-dark font-weight-bold mb-10">Add Service's Image : </h3>   
                                    <div class="form-group row">
                                        <label class="col-3">Uploud an image  </label>
                                        <div class="col-9">
                                                <a href="javascript:void(0)" class="btn btn-light-dark" onclick="check()">                      
                                                    <i class="flaticon2-chat-1"></i> Uploade Image                                                    
                                                </a>
                                            <div style="overflow:hidden; display:inline-block">
                                                    <input  id="file" type="file" style="margin-left: -91px;" name="imagePath" class="@error('imagePath') is-invalid @enderror" required validate >
                                            </div>

                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
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

function check (){
    document.getElementById('file').click() 
}
function submitForm(){
    document.getElementById('editForm').submit()
}
</script>
@endsection

