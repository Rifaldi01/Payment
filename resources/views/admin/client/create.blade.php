@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Create Client</h5></div>
        <div class="card-body">

            <form class="" action="{{$url}}" method="post">
                @if(isset($client))
                    @method('PUT')
                @endif
                @csrf
                <div class="mb-3">
                    <label class="form-label" for=""><i class="text-danger">*</i>Name Client</label>
                    <input type="text" class="form-control" name="name" value="{{isset($client) ? $client->name : null}}" required>
                    <div class="invalid-feedback">Example invalid feedback text</div>
                </div>
                <div>
                    <button type="submit" class="mt-2 float-end btn btn-success m-l-20">Submit</button>
                    <a href="{{route('admin.client.index')}}" type="submit" class="mt-2 float-end btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('head')
@endpush

@push('js')
@endpush
