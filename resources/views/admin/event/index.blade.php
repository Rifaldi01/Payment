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
                            <th>Client</th>
                            <th>Social Media</th>
                            <th>Hastag</th>
                            <th>Status</th>
                            <th width="25%" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($event as $key => $event)
                            <tr>
                                <td class="text-center">{{$key +1}}</td>
                                <td>{{$event->name }}</td>
                                <td>{{$event->client->name}}</td>
                                <td>{{$event->sosmed->name}}</td>
                                <td>{{$event->hastag}}</td>
                                <td>
                                    @if($event->status == 0)
                                        <span class="badge badge-info">Non Active</span>
                                    @elseif($event->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Danger</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($event->status == 0)
                                        <a href="{{route('admin.event.publish', $event->id)}}"
                                           class="btn btn-primary btn-sm"> Publish</a>
                                    @elseif($event->status == 1)
                                        <a href="{{route('admin.event.expired', $event->id)}}"
                                           class="btn btn-danger btn-sm"> Expired</a>
                                    @endif
                                    <a href="{{route('admin.event.show', $event->id)}}" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i> Detail</a>
                                    @if($event->status =!2)
                                        <a href="{{route('admin.event.edit', $event->id)}}"
                                           class="btn btn-primary btn-sm {{$disable}} "><i class="fa fa-edit"></i> Edit</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
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
