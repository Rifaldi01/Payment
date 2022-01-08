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
                            <th>No</th>
                            <th>Event Name</th>
                            <th>Company</th>
                            <th>Star Date</th>
                            <th>End Date</th>
                            <th>Max Post</th>
                            <th>Social Media</th>
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
                            <td>
                                <a href="{{route('admin.event.show', 1)}}" class="btn btn-warning">Detail</a>
                                <a href="{{route('admin.event.edit', 1)}}" class="btn btn-primary">Edit</a>
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
