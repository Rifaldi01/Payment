@extends('layouts.master')
@section('content')
    <div class="col-xxl-8 box-col-12">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Payment </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <form class="theme-form mega-form">
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Card number">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="date">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Name on card">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" size="1">
                                    <option>Select Type</option>
                                    <option>Master</option>
                                    <option>Visa</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary float-end">Submite</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 text-center"><img class="img-fluid" src="{{URL::to('/assets/images/ecommerce/card.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

@endsection
