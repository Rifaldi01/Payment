@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Create Event</h5></div>
        <div class="card-body">
            <form class="" action="" method="">
                <div class="mb-3">
                    <label class="form-label" for="">Name Event</label>
                    <input type="text" class="form-control" id="validationFormCheck1" placeholder="Name Event" required="">
                    <div class="invalid-feedback">Example invalid feedback text</div>
                </div>
                <label class="form-label ">Date</label>
                <div >
                    <div class="input-group date" id="dt-minimum" data-target-input="nearest">
                        <input class="form-control datetimepicker-input digits " type="text" data-target="#dt-minimum">
                        <div class="input-group-text" data-target="#dt-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"> </i></div>
                    </div>
                </div>
                <label for="select" class="form-label">Category</label>
                <div class="mb-3">
                    <select class="form-select" required="" aria-label="select example">
                        <option value="">Category Event</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <label for="select" class="form-label">Image Event</label>
                    <input class="form-control" type="file" aria-label="file example" required="">
                </div>

                <div>
                    <button type="submit" class="mt-2 float-end btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('head')
@endpush

@push('js')
    <script src="{{URL::to('assets/js/datepicker/date-time-picker/moment.min.js')}}"></script>
    <script src="{{URL::to('assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{URL::to('assets/js/datepicker/date-time-picker/datetimepicker.custom.js')}}"></script>
@endpush
