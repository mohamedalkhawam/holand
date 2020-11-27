{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Emails from clients
                                            <div class="text-muted pt-2 font-size-sm"></div></h3>
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
                                                    <th title="Field #1">Sender Name</th>
                                                    <th title="Field #2">Sender Email</th>
                                                    <th title="Field #3">Sender phone</th>
                                                     <th title="Field #4">Message</th>
                                                    <th title="Field #5">Action</th>
                                                    <th title="Field #6">Sent at </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                    @foreach ($items as $value)
                                                        <tr>
                                                            <td >{{$value->name}}</td> 
                                                            <td> {{$value->email}} </td>                                                         
                                                            <td> {{$value->phone_number}} </td>
                                                            <td>{{$value->message}}</td>
                                                            <td>
                                                                <a href="javaScript:void(0)"  style="margin-left:5px;" onclick="$(this).parent().find('form').submit()">
                                                                        <form action="{{Route('destroy',$value->id)}}" method="post" style="display: none">
                                                                            @method('DELETE')
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                                                        </form>
                                                                        <i class="fas fa-trash-alt"onMouseOut="this.style.color=''"  onMouseOver="this.style.color='#F64E60'"></i> 
                                                                    </a>
                                                            </td>
                                                            <td>{{$value->created_at}}</td>
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

