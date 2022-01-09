@extends('layouts.master')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>List Event</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name Event</th>
                            <th>Company</th>
                            <th>Star Date</th>
                            <th>End Date</th>
                            <th>Budgate</th>
                            <th>Max Post</th>
                            <th>Description</th>
                            <th>Hastag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                            <td>$106,450</td>
                            <td>$106,450</td>
                            <td>$106,450</td>
                            <td>
                                <div>
                                    <a href="{{URL::to('/create-event')}}" class="btn btn-primary" style="height: 35px; width: 100px;">Edit</a>
                                </div>

                               <div>
                                   <a href="{{URL::to('/detail')}}" class="btn btn-warning" style="height: 35px; width: 100px;">Detail</a>
                               </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                            <td>$106,450</td>
                            <td>$106,450</td>
                            <td>$106,450</td>
                            <td>
                                <div>
                                    <a href="" class="btn btn-primary" style="height: 35px; width: 100px;">Edit</a>
                                </div>

                                <div>
                                    <a href="" class="btn btn-warning" style="height: 35px; width: 100px;">Detail</a>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('head')
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/datatables.css')}}">
@endpush

@push('js')
    <script src="{{URL::to('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{URL::to('assets/js/tooltip-init.js')}}"></script>
@endpush
