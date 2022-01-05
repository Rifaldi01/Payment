<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                                                              aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General </h6>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link mb-2" href="{{URL::to('/')}}"><i
                                data-feather="home"></i><span>Dashboard</span></a>

                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Event</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{URL::to('/event')}}">List Event</a></li>
                            <li><a href="{{URL::to('/create-event')}}">Create Event</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="layout"></i><span>Payment</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{URL::to('/payment')}}">List Payment</a></li>
                            <li><a href="{{URL::to('/create-payment')}}">Payment</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
