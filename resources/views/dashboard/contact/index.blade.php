{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Home Page Content
                                            <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div></h3>
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
                                                    <th title="Field #1">Title</th>
                                                    <th title="Field #2">English</th>
                                                    <th title="Field #3">Nederlands</th>
                                                     <th title="Field #4">Description En</th>
                                                     <th title="Field #4">Description Nl</th>
                                                    <th title="Field #5">Category</th>
                                                    <th title="Field #6">Image</th>
                                                    <th title="Field #7">Action</th>
                                                    <th title="Field #8">Last Upadte </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                    @foreach ($items as $value)
                                                        <tr>
                                                            <td >{{$value->title}}</td>
                                                            <td style="overflow-x: hidden;max-width:100px">{{$value->title_en}}</td>
                                                            <td>{{$value->title_nl}}</td>
                                                            <td> {{$value->description_en}} </td>
                                                            <td> {{$value->description_nl}} </td>
                                                            <td>{{$value->category}}</td>
                                                            <td > @if($value->imagePath !="")<img style="width:70px; height:45px;" src="{{asset('/storage/home/'.$value->imagePath)}}" alt="" >@endif</td>
                                                            <td>
                                                                <a href="{{route('dashboard.home.edit',$value->id)}}" class="btn btn-info">Edit</a>
                                                            
                                                            </td>
                                                            <td>{{$value->updated_at}} </td>
                                                           
                                                        </tr>
                                        
                                                    @endforeach
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

