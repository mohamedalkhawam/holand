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
                                            <h3 class="card-label">Services Page Content
                                            <div class="text-muted pt-2 font-size-sm">Add, edit, and delete Services</div></h3>
                                        </div>
                                        <div class="d-flex align-items-center" >
                                            <a href=" {{route('dashboard.services.service.create')}} "class="btn btn-primary" style="font-weight:600">Create Service</a>
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
                                                    <th title="Field #1">Title En</th>
                                                    <th title="Field #2">Title Nl</th>
                                                    <th title="Field #3">keywords En</th>
                                                    <th title="Field #4">Keywords Nl</th>
                                                     <th title="Field #5">Description En</th>
                                                     <th title="Field #5">Description Nl</th>
                                                    <th title="Field #8">Action</th>
                                                    <th title="Field #9">Last Upadte </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @if(isset($items))
                                                        @foreach ($items as $value)
                                                            <tr>
                                                                <td >{{cutString($value->title_en)}}</td>
                                                                <td >{{cutString($value->title_nl)}}</td>
                                                                <td >{{cutString($value->keywords_en)}}...etc</td>
                                                                <td>{{cutString($value->keywords_nl)}}...etc</td>
                                                                <td> {{cutString($value->description_en)}}...etc </td>
                                                                <td> {{cutString($value->description_nl)}}...etc </td>
                                                                <td>
                                                                    <a href=" {{route('dashboard.services.service.edit',$value->id)}}  " >
                                                                        <i class="fas fa-edit" onMouseOut="this.style.color=''"  onMouseOver="this.style.color='#8950FC'"></i>
                                                                    </a>
                                                                    <a href="javaScript:void(0)"  style="margin-left:5px;" onclick="$(this).parent().find('form').submit()">
                                                                        <form action="{{route('dashboard.services.service.destroy',$value->id)}}" method="post" style="display: none;">
                                                                            @method('DELETE')
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                                                        </form>
                                                                        <i class="fas fa-trash-alt"onMouseOut="this.style.color=''"  onMouseOver="this.style.color='#F64E60'"></i> 
                                                                    </a>
                                                                </td>
                                                                <td>{{$value->updated_at}} </td>                           
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
<script src="{{asset('homePage.js')}}"></script>
@endsection

