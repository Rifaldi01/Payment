@extends('layouts.master')
@section('content')
    <div class="col-12">
        <div class="card profile-greeting">
            <div class="card-header m-lg-4 m-5">
                <div class="header-top">

                    <div class="float-end">
                        <i class=" text-warning" style="font-size: 20px;"> Saldo. </i>
                        <p class="text-white" style="font-size: 18px;">Rp. 10.000.000,-</p>
                    </div>
                </div>
                <div class="card-body float-start me-4 p-t-0">
                    <h3 class="font-light">Wellcome John!!</h3>
                </div>
            </div>
            <div class="confetti">
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="confetti-piece"></div>
                <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#profile-greeting"
                            title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre>
                        <code class="language-html" id="profile-greeting">
                            &lt;div class="card profile-greeting"&gt;
                              &lt;div class="card-header"&gt;
                                &lt;div class="header-top"&gt;
                                  &lt;div class="setting-list bg-primary"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                      &lt;li&gt;&lt;div class="setting-white"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                      &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                      &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                      &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                      &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                      &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="card-body text-center"&gt;
                                &lt;h3 class="font-light"&gt;Wellcome Back, John!!&lt;/h3&gt;
                                &lt;p&gt;Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been&lt;/p&gt;
                                &lt;button class="btn btn-light"&gt;Update &lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 box-col-12 des-xl-100">
        <div class="row">
            <div class="col-xl-3 col-50 box-col-6 des-xl-50">
                <a href="">
                    <div class="card" >
                        <div class="card-header">
                            <div class="header-top d-sm-flex align-items-center">
                                <h5>Lazada Murah</h5>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="mt-2">
                                <h6  style="font-size: 15px;"><i class="top right arrow-primary me-2">Social Media :</i>Instagram </h6>
                                <p>End Date : <i>02/02/2022/14:00</i></p>
                                <button type="submit" class="btn-sm btn-warning float-end mb-2 text-center"  style="font-size:18px;"><p>Work On</p></button>
                            </div>
                            <div class="">
                            </div>
                            <div class="text-center">
                                <img src="{{URL::to('images/event/media promo.jpeg')}}" width="90%" height="auto" alt="">
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-xl-3 col-50 box-col-6 des-xl-50">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                            <h5>Lazada Murah</h5>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="mt-2">
                            <h6  style="font-size: 15px;"><i class="top right arrow-primary me-2">Social Media :</i>Instagram </h6>
                            <p>End Date : <i>02/02/2022/14:00</i></p>
                            <button type="submit" class="btn-sm btn-primary float-end mb-2 text-center"  style="font-size:18px;"><p>Selesai</p></button>
                        </div>
                        <div class="">
                        </div>
                        <div class="text-center">
                            <img src="{{URL::to('images/event/media promo.jpeg')}}" width="90%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-50 box-col-6 des-xl-50">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                            <h5>Lazada Murah</h5>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="mt-2">
                            <h6  style="font-size: 15px;"><i class="top right arrow-primary me-2">Social Media :</i>Instagram </h6>
                            <p>End Date : <i>02/02/2022/14:00</i></p>
                            <button type="button" class="btn-sm btn-danger float-end mb-2 text-center" disabled style="font-size:18px;"><p>Expire</p></button>
                        </div>
                        <div class="">
                        </div>
                        <div class="text-center">
                            <img src="{{URL::to('images/event/media promo.jpeg')}}" width="90%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-50 box-col-6 des-xl-50">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                            <h5>Lazada Murah</h5>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="mt-2">
                            <h6  style="font-size: 15px;"><i class="top right arrow-primary me-2">Social Media :</i>Instagram </h6>
                            <p>End Date : <i>02/02/2022/14:00</i></p>
                            <button type="submit" class="btn-sm btn-warning float-end mb-2 text-center"  style="font-size:18px;"><p>Work On</p></button>
                        </div>
                        <div class="">
                        </div>
                        <div class="text-center">
                            <img src="{{URL::to('images/event/media promo.jpeg')}}" width="90%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('head')

@endsection
@section('js')

@endsection
