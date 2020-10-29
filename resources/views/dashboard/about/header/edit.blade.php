@extends('layout.default')
@section('content')
     <div class="card card-custom card-sticky" id="kt_page_sticky_card" style="align-item:center"> 
        <div class="card-header" style="">
	        <div class="card-title">
				<h3 class="card-label">Edit 
			    <i class="mr-2"></i>
		        <small class="">About Header Screen</small></h3>
			</div>									
            <div class="card-toolbar">
                <a href="{{route('dashboard.about.header.index')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                    <i class="ki ki-long-arrow-back icon-xs"></i>Back</a>
                <div class="btn-group">
                    <button type="button" type="submit" class="btn btn-primary font-weight-bolder" onclick="submitForm()">
                    <i class="ki ki-check icon-xs"></i>Save Form</button>		
                </div>
            </div>
		</div>
        <div class="card-body">
        <form class="form"action="{{route('dashboard.about.header.update',$items->id)}}" method="post"  enctype="multipart/form-data" id="createForm">
              <input type="hidden" name="_token" value="{{csrf_token()}}">               
             <input type="hidden" name="_method" value="put">             
             
                <div class="row">
                    <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="my-5">
                                  {{-- Start Titile --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Title : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('title_en') is-invalid @enderror" name="title_en" id="" value="{{$items->title_en}}" required validate/>
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('title_nl') is-invalid @enderror" name="title_nl" value="{{$items->title_nl}}" id="" required validate/>
                                        </div>
                                    </div>
                                {{-- End title --}}



                                <div class="separator separator-dashed my-10"></div>
                                {{-- Start short story  --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize description: </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('description_en') is-invalid @enderror"   cols="20" rows="10" name="description_en" required validate>{{$items->description_en}}</textarea>
                                        {{-- <span class="form-text text-muted">You can replace the old value with the new value.</span> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('description_nl') is-invalid @enderror"  cols="20" rows="10" name="description_nl" required validate>{{$items->description_nl}}</textarea>
                                        <span class="form-text text-muted">Please remember that the "Title" should not be more than 2 or three words.</span>
                                        </div>
                                    </div>
                                {{-- End Short story --}}


                                <div class="separator separator-dashed my-10"></div>


                                {{-- Start Initial problem --}}
                                    <h3 class="text-dark font-weight-bold mb-10">Costumize Paragraph : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('paragraph_en') is-invalid @enderror"  cols="20" rows="10" name="paragraph_en" required validate>{{$items->paragraph_en}}</textarea>
                                        {{-- <span class="form-text text-muted" style="position: absolute;">You can replace the old value with the new value.</span>                                  --}}
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <textarea class="form-control @error('paragraph_nl') is-invalid @enderror"  cols="20" rows="10" name="paragraph_nl" required validate>{{$items->paragraph_nl}}</textarea>
                                            <span class="form-text text-muted"style="position: absolute;" >Please remember to seperate keywords by a space. </span>
                                        </div>
                                    </div>
                                {{-- end Initial problem --}}


                                  <div class="separator separator-dashed my-10"></div>


                                {{-- Start Details --}}
                                    <h3 class="text-dark font-weight-bold mb-10">First Sentence : </h3>
                                    <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('first_sentence_en') is-invalid @enderror" value="{{$items->first_sentence_en}}" name="first_sentence_en" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('first_sentence_nl') is-invalid @enderror"value="{{$items->first_sentence_nl}}" name="first_sentence_nl" id="" required validate/>
                                        </div>
                                
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>

                                    <h3 class="text-dark font-weight-bold mb-10">Second Sentence : </h3>

                                     <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('second_sentence_en') is-invalid @enderror" value="{{$items->second_sentence_en}}" name="second_sentence_en" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('second_sentence_nl') is-invalid @enderror" value="{{$items->second_sentence_nl}}" name="second_sentence_nl" id="" required validate/>
                                        </div>
                                
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>
                                 
                           <h3 class="text-dark font-weight-bold mb-10">Third Sentence : </h3>

                                     <div class="form-group row">
                                        <label class="col-3">English</label>
                                        <div class="col-9">
                                        <input class="form-control @error('third_sentence_en') is-invalid @enderror" value="{{$items->third_sentence_en}}" name="third_sentence_en" id="" required validate/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Nederlands</label>
                                        <div class="col-9">
                                        <input class="form-control @error('third_sentence_nl') is-invalid @enderror" value="{{$items->third_sentence_nl}}" name="third_sentence_nl" id="" required validate/>
                                        </div>
                                
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>
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

