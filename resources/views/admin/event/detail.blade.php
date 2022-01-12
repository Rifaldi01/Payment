@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div>
            <div class="row product-page-main p-0">
                <div class="col-xl-5 col-md-6 box-col-12 xl-50">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <img class="img-fluid p-50 me-auto "
                                      src="@if($event->image == null) {{asset('images/event/media promo.jpeg') }} @else {{asset('images/event/'. $event->image) }} @endif"
                                      width="100%" height="auto" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 box-col-6 proorder-xl-3 xl-100">
                    <div class="card">
                        <div class="card-body">
                            <div class="pro-group pt-0 border-0">
                                <div class="product-page-details mt-0">

                                    <h3>{{$event->name}}</h3>
                                </div>

                                <div class="pro-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td><b>Client &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;:
                                                            &nbsp;&nbsp;&nbsp;</b></td>
                                                    <td>{{$event->client->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Star Date &nbsp;: &nbsp;</b></td>
                                                    <td class="txt-success">{{$event->started_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Hastag &nbsp;&nbsp;&nbsp; &nbsp;: &nbsp;</b></td>
                                                    <td class="txt-success">{{$event->hastag}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td><b>Max Post &nbsp;:
                                                            &nbsp;&nbsp;&nbsp;</b></td>
                                                    <td>{{$event->max_post}} Post / Orang</td>
                                                </tr>
                                                <tr>
                                                    <td><b>End Date &nbsp;:
                                                            &nbsp;&nbsp;&nbsp;</b></td>
                                                    <td>{{$event->ended_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Budget &nbsp;&nbsp;&nbsp; :
                                                            &nbsp;&nbsp;&nbsp;</b></td>
                                                    <td>Rp {{number_format($event->budget,2,',','.')}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-group">
                                    <div class="row">
                                        <div class="col-md-4 xl-50">
                                            <h6 class="product-title">Media Social</h6>
                                        </div>
                                        <div class="col-md-7 xl-50">
                                            <div class="product-icon">
                                                <h6>{{$event->sosmed->name}}</h6>
                                                <form class="d-inline-block f-right"></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pro-group">
                                    <div class="pro-group">
                                        <h6>Description</h6>
                                        <p>{!! $event->description !!}</p>
                                    </div>
                                </div>


                                <div class="pro-group pb-0">
                                    <div class="pro-shop"><a class="btn btn-primary m-r-10" href="{{url('/event')}}"> <i
                                                class="fa fa-backward me-2"></i>Back To List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

            @push('head')
                <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/slick.css')}}">
                <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/slick-theme.css')}}">
                <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/rating.css')}}">
            @endpush
            @push('js')
                <script src="{{URL::to('assets/js/rating/jquery.barrating.js')}}"></script>
                <script src="{{URL::to('assets/js/rating/rating-script.js')}}"></script>
                <script src="{{URL::to('assets/js/slick-slider/slick.min.js')}}"></script>
                <script src="{{URL::to('assets/js/slick-slider/slick-theme.js')}}"></script>
                <script src="{{URL::to('assets/js/tooltip-init.js')}}"></script>
    @endpush
