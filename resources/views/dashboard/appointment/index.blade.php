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
                                            <h3 class="card-label">Appointment Page Content
                                            <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div></h3>
                                        </div>
                                        {{-- <div class="d-flex align-items-center" >
                                            <a href=" {{route('dashboard.appointment.create')}} "class="btn btn-primary" style="font-weight:600">Create Service</a>
                                        </div> --}}
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
                                                    <th title="Field #1">Doctor</th>
                                                    <th title="Field #2">Reason</th>
                                                    <th title="Field #3">Date</th>
                                                    <th title="Field #4">Hour</th>
                                                     <th title="Field #5">Client Name</th>
                                                     <th title="Field #5">Client Email </th>
                                                     <th title="Field #5">Client Phone </th>
                                                    <th title="Field #9">Created at </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @if(isset($items))
                                                        @foreach ($items as $value)
                                                            <tr>
                                                                <td >{{cutString($value->doctor->name)}}</td>
                                                                <td >{{cutString($value->reason->title_en)}}</td>
                                                                <td >{{cutString($value->date)}}</td>
                                                                <td>{{cutString($value->hour)}}</td>
                                                                <td> {{cutString($value->client_name)}} </td>
                                                                <td> {{cutString($value->client_email)}} </td>
                                                                <td> {{cutString($value->client_phone)}} </td>
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
<script src="{{asset('homePage.js')}}"></script>
@endsection

