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
                                            <h3 class="card-label">Why us 
                                            <div class="text-muted pt-2 font-size-sm">Cusomize about page why us screen</div></h3>
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
                                                    <th title="Field #2">Title En</th>
                                                    <th title="Field #2">Title Nl</th>
                                                    <th title="Field #2">Description En</th>
                                                    <th title="Field #2">Description Nl</th>
                                                    <th title="Field #4">Action</th>
                                                    <th title="Field #3">Last Upadte</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                   @if(isset($items))
                                                    @foreach ($items as $value)
                                                        <tr>
                                                            <td >{{cutString($value->title_en)}}</td>
                                                            <td >{{cutString($value->title_nl)}}</td>
                                                            <td >{{cutString($value->description_en)}}...etc</td>
                                                            <td>{{cutString($value->description_nl)}}...etc</td>
                                                            <td>
                                                                <a href=" {{route('dashboard.about.whyus.edit',$value->id)}} " >
                                                                    <i class="fas fa-edit" onMouseOut="this.style.color=''"  onMouseOver="this.style.color='#8950FC'"></i>
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

