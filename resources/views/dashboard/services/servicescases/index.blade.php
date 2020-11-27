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
                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Services Cases
                                            <div class="text-muted pt-2 font-size-sm">Create, edit, and delete cases.</div></h3>
                                        </div>
                                        <div class="d-flex align-items-center" >
                                            <a href=" {{route('dashboard.services.servicecases.create')}} "class="btn btn-primary" style="font-weight:600">Create Case</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!--begin: Search Form-->
                                        <!--begin::Search Form-->
                                        <div class="mb-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-5 my-2 my-md-0">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                                <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <!--end::Search Form-->
                                        <!--end: Search Form-->
                                        <!--begin: Datatable-->
                                        <table class="datatable datatable-bordered  datatable-head-custom" id="kt_datatable">
                                            <thead>
                                                <tr>
                                                    <th title="Field #1">Service</th>
                                                    <th title="Field #2">Short Story En</th>
                                                    <th title="Field #3">Short Story Nl</th>
                                                    <th title="Field #5">Initial problem En</th>
                                                    <th title="Field #5">Initial problem Nl</th>
                                                    <th title="Field #5">What is done En</th>
                                                    <th title="Field #5">What is done Nl</th>
                                                    <th title="Field #5">Cost</th>
                                                    <th title="Field #5">Doctor</th>
                                                    <th title="Field #5">Image Before</th>
                                                    <th title="Field #5">Image After</th>
                                                    <th title="Field #8">Action</th>
                                                    <th title="Field #9">Upadted at </th>
                                                    <th title="Field #9">Created at </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @if(isset($items))
                                                        @foreach ($items as $value)
                                                            <tr>
                                                                
                                                                <td>
                                                                    @if($value->services)
                                                                        {{$value->services->title_en}}
                                                                    @endif
                                                                </td>
                                                                <td> {{cutString($value->short_story_en)}}</td>
                                                                <td> {{cutString($value->short_story_nl)}} ...etc</td>
                                                                <td> {{cutString($value->initial_problem_en)}} ...etc </td>
                                                                <td> {{cutString($value->initial_problem_nl)}} ...etc </td>
                                                                <td> {{cutString($value->what_we_have_done_en)}} ...etc </td>
                                                                <td> {{cutString($value->what_we_have_done_nl)}} ...etc </td>
                                                                <td> {{cutString($value->cost)}}</td>
                                                                <td>
                                                                    @if($value->doctor)
                                                                        {{$value->doctor->name}}
                                                                    @endif
                                                                </td>
                                                                <td> 
                                                                    @if($value->imagePath_before !="")
                                                                        <img style="width:55px; height:55px;" src="{{asset('/storage/cases/'.$value->imagePath_before)}}" alt="" >
                                                                    @endif

                                                                </td>
                                                                <td> 
                                                                    @if($value->imagePath_after !="")
                                                                        <img style="width:55px; height:55px;" src="{{asset('/storage/cases/'.$value->imagePath_after)}}" alt="" >
                                                                    @endif

                                                                </td>
                                                                <td>
                                                                    <a href=" {{route('dashboard.services.servicecases.edit',$value->id)}} " >
                                                                        <i class="fas fa-edit" onMouseOut="this.style.color=''"  onMouseOver="this.style.color='#8950FC'"></i>
                                                                    </a>
                                                                    <a href="javaScript:void(0)"  style="margin-left:5px;" onclick="$(this).parent().find('form').submit()">
                                                                        <form action="{{Route('dashboard.services.servicecases.destroy',$value->id)}}" method="post" style="display: none">
                                                                            @method('DELETE')
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                                                        </form>
                                                                        <i class="fas fa-trash-alt"onMouseOut="this.style.color=''"  onMouseOver="this.style.color='#F64E60'"></i> 
                                                                    </a>
                                                                </td>
                                                                <td>{{$value->updated_at}} </td>  
                                                                <td>{{$value->created_at}} </td>                         
                                                            </tr>   
                                                        @endforeach
                                                    @endif
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
                                    </div>
                                </div>
@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection

