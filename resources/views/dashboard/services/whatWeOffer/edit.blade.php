@extends('layout.default')
@section('content')
     <div class="card card-custom card-sticky" id="kt_page_sticky_card" style="align-item:center"> 
        <div class="card-header" style="">
	        <div class="card-title">
				<h3 class="card-label">Edit what we offer
			    <i class="mr-2"></i>
		        <small class=""> you can replace the old value with the new value.</small></h3>
			</div>									
            <div class="card-toolbar">
                <a href="{{route('dashboard.services.whatweoffer.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.services.whatweoffer.update',$items->id)}}" method="post"  enctype="multipart/form-data" id="editForm">
            <input type="hidden" name="_token" value="{{csrf_token()}}">               
             <input type="hidden" name="_method" value="put">
             {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                {{-- Start Title --}}

                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Paragraph: </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('paragraph_en') is-invalid @enderror" type="text" value="{{$items->paragraph_en}}" name="paragraph_en" required validate>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                       <div class="col-9">
                                            <input class="form-control @error('paragraph_nl') is-invalid @enderror" type="text" value="{{$items->paragraph_nl}}" name="paragraph_nl" required validate>
                                        </div>
                                    </div>
                                {{-- End Title --}}


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

