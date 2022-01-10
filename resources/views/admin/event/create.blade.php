@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Create Event</h5></div>
        <div class="card-body">

            <form class="" action="{{$form_url}}" method="post">
                @if(isset($event))
                    @method('PUT')
                @endif
                @csrf

                <div class="mb-3">
                    <label class="form-label" for=""><i class="text-danger">*</i>Name Event</label>
                    {!! Form::text('name', isset($event) ? $event->name : null, ['class' => 'form-control ', 'placeholder' => '--Event Name--', 'required']) !!}
                    <div class="invalid-feedback">Example invalid feedback text</div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label"><i class="text-danger">*</i>Start Event</label>
                            {!! Form::datetimeLocal('started_date', isset($event) ? date('Y-m-d\TH:i', strtotime($event->ended_date)) : null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label"><i class="text-danger">*</i>End Event</label>
                            {!! Form::datetimeLocal('ended_date', isset($event) ? date('Y-m-d\TH:i', strtotime($event->ended_date)) : null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label mb-2 mt-2"><i class="text-danger">*</i>Budget</label>
                            {!! Form::number('budget', isset($event) ? $event->budget : null, ['class' => 'form-control', 'required', 'placeholder' => '--insert Budegt--']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label mb-2 mt-2"><i class="text-danger">*</i>Max Post</label>
                            {!! Form::number('max_post', isset($event) ? $event->max_post :  null, ['class' => 'form-control', 'required' , 'placeholder' => '--insert max post--']) !!}
                        </div>
                    </div>
                </div>


                <div class="row mb-2 mt-2">
                    <div class="col-lg-6">
                        <div class="mb-2">
                            <label class="form-label mb-2 mt-2"><i class="text-danger">*</i>Client</label>
                            {!! Form::select('client_id', $clients, isset($event) ? $event->client_id : null, ['class' => 'form-control js-example-basic-single col-sm-12', 'placeholder' => '--Select Client--']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <label class="form-label mb-2 mt-2"><i class="text-danger">*</i>Social Media</label>
                            {!! Form::select('social_media_id', $social_media, isset($event) ? $event->social_media : null, ['class' => 'form-control js-example-basic-single col-sm-12', 'placeholder' => '--Select Social Media--']) !!}
                        </div>
                    </div>
                </div>


                <div>
                    <label class="form-label mt-2"><i class="text-danger">*</i>Description</label>
                    {!! Form::textarea('description', isset($event) ? $event->description : null, ['class' => 'form-control']) !!}
                </div>
                <div class="mb-2 mt-2">
                    <label class="form-label  mt-2"><i class="text-danger">*</i>Hastag</label>
                    {!! Form::text('hastag', isset($event) ? $event->hastag : null, ['class' => 'form-control' , 'required', 'placeholder' => '--insert Hastag--']) !!}
                </div>
                <div class="mb-2 mt-2">
                    <label for="select" class="form-label mb-2 mt-2">Image Event</label>
                    <input class="form-control mb-2 mt-2" type="file" aria-label="file example">
                </div>

                <div>
                    <button type="submit" class="mt-2 float-end btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('head')
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/select2.css')}}">
@endpush

@push('js')
    <script src="{{URL::to('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{URL::to('assets/js/select2/select2-custom.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('#started_date').datepicker();
            $('#ended_date').datetimepicker();
        });
    </script>
@endpush
