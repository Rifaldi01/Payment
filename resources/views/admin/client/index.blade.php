@extends('layouts.master')
@section('content')
    @if ($message = Session::get('msg_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"><strong>{{$message}}</strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="col-sm-12">

        <div class="card">
            <div class="card-header">
                <h4>List Client</h4>
                <a href="{{route('admin.client.create')}}" class="btn btn-primary float-end">Add Client</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>client Name</th>

                            <th width="10%" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($client as $key => $data)
                            <tr>
                                <td class="text-center">{{$key +1}}</td>
                                <td>{{$data->name }}</td>
                                <td class="text-center">
                                    <a href="{{route('admin.client.edit', $data->id)}}" class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i> Edit</a>
{{--                                    <a  class="btn btn-sm btn-danger"  onclick="event.preventDefault();--}}
{{--                                        document.getElementById('{{$data->id}}', ).submit();">--}}
{{--                                        <i class='fa fa-trash'></i> Delete</a>--}}
{{--                                    <form id="{{$data->id}}" action="{{ route('admin.client.destroy', $data->id) }}" method="POST" class="d-none">--}}
{{--                                        @method('DELETE')--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}

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
