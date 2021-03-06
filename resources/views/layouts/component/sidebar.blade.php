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
                                data-feather="calendar"></i><span>Event</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.event.index')}}">List Event</a></li>
                            <li><a href="{{route('admin.event.create')}}">Create Event</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                data-feather="credit-card"></i><span>Payment</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.payment.index')}}">List Payment</a></li>
                            <li><a href="{{route('admin.payment.create')}}">Payment</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link" href="{{route('admin.client.index')}}"><i
                                data-feather="users"></i><span>Client</span></a>

                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
