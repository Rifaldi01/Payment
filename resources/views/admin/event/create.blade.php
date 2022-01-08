@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header pb-0">
            <h5>Create Event</h5></div>
        <div class="card-body">
            <form class="" action="" method="">
                <div class="mb-3">
                    <label class="form-label" for=""><i class="text-danger">*</i>Name Event</label>
                    <input type="text" class="form-control" id="validationFormCheck1" placeholder="Name Event" required="">
                    <div class="invalid-feedback">Example invalid feedback text</div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-6">
                        <label class="form-label" ><i class="text-danger">*</i>Start Event</label>
                        <input class="form-control"  type="date" value="Start" required="">

                    </div>
                    <div class="col-md-6">
                        <label class="form-label" ><i class="text-danger">*</i>End Event</label>
                        <input class="form-control"  type="date" value="End" required="">

                    </div>
                </div>

                <label for="select" class="form-label mt-2"><i class="text-danger">*</i>Public To :</label>
                <div class="mb-3">
                    <select class="form-select" required="" aria-label="select example">
                        <option value="">Public To...</option>
                        <option value="1">Facebook</option>
                        <option value="2">Instagram</option>
                        <option value="3">Twitter</option>
                    </select>
                </div>

                <label for="select" class="form-label "><i class="text-danger">*</i>From Company</label>
                <div class="mb-3">
                    <select class="form-select" required="" aria-label="select example">
                        <option value="">Select Company...</option>
                        <option value="1">PT. MAKMUR </option>
                        <option value="2">PT. PERKASA </option>
                        <option value="3">PT. SEJAHTERA INDONESIA</option>
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
