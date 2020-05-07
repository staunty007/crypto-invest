<nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <h2 class="submenu-title">
        <img src="{{ URL::asset('assets/images/ccl.png') }}" height="45" width="207" alt="logo">
    </h2>
    <a href="#0" class="cd-close">Close</a>
    <ul class="cd-dropdown-content">
        <li class="has-children mt-3">
            <a href="#">My Account</a>
            <ul class="cd-secondary-dropdown icon_menu is-hidden">
                <li class="go-back"><a href="#0">Menu</a></li>
                <li><a href="{{ route('app') }}">Dashboard</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
                @if (auth()->user()->role == 'user')
                    <li><a href="{{ route('payment-info') }}">Payout Details</a></li>
                @endif
            </ul>
        </li>

        @if (auth()->user()->role == 'admin')
        <li><a href="{{ route('all-transactions') }}"> All Transactions</a></li>
        <li><a href="{{ route('admin-payment-request') }}"> Payment Requests</a></li>
        <li><a href="{{ route('all-packages') }}"> Packages</a></li>
        <li><a href="{{ route('all-customers') }}"> All Customers</a></li>
        <li><a href="{{ route('active-subscribers') }}"> Subscribed Customers</a></li>

        @else     
            <li><a href="{{ route('plans') }}"> Packages</a></li>
            <li><a href="{{ route('withdrawal') }}"> Withdrawal</a></li>
            <li><a href="{{ route('my-transactions') }}"> Transactions</a></li>
            <li><a href="#"> Referral</a></li>
        @endif


        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"> Logout </a></li>
    </ul>
    <!-- .cd-dropdown-content -->
</nav>
<div class="cp_navi_main_wrapper inner_header_wrapper dashboard_header_middle float_left"
    style="height: 75px;margin-top: -10px;padding-top: 15px;">
    <div class="container-fluid">
        <div class="cp_logo_wrapper">
            <a href="/app">
                <img src="{{ URL::asset('assets/images/ccl.png') }}" height="60" width="207" alt="logo">
            </a>
        </div>
        <!-- mobile menu area start -->
        <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle inner_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177"
                                    style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px"
                                    height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar"
                                                d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z"
                                                fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar"
                                                d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z"
                                                fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar"
                                                d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                                fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar"
                                                d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                                fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar"
                                                d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                                fill="#004165" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <!-- .cd-dropdown -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-dropdown-wrapper -->
        </header>
        <div class="top_header_right_wrapper dashboard_right_Wrapper">
            <div class="crm_message_dropbox_wrapper d-none">
                <div class="nice-select budge_noti_wrapper" tabindex="0"> <span class="current"><i
                            class="flaticon-envelope"></i></span>
                    <div class="budge_noti">4</div>
                    <ul class="list">
                        <li><a href="#">2 New Messages</a>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.ajay <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.ajay <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.akshay <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.john <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_all_main_box_wrapper">
                                <p><a href="#">See All</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="crm_message_dropbox_wrapper crm_notify_dropbox_wrapper d-none">
                <div class="nice-select budge_noti_wrapper" tabindex="0"> <span class="current"><i
                            class="flaticon-notification"></i></span>
                    <div class="budge_noti">4</div>
                    <ul class="list">
                        <li><a href="#">2 New Messages</a>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.Farhan <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.ajay <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.akshay <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_main_box_wrapper">
                                <div class="crm_mess_img_wrapper">
                                    <img src="{{ URL::asset('auth/images/mess1.jpg') }}" alt="img">
                                </div>
                                <div class="crm_mess_img_cont_wrapper">
                                    <h4>Mr.john <span>01:30PM</span></h4>
                                    <p>I'm Leaving early</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crm_mess_all_main_box_wrapper">
                                <p><a href="#">See All</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="crm_profile_dropbox_wrapper">
                <div class="nice-select" tabindex="0"> <span class="current"><img
                            src="{{ URL::asset('auth/images/avatar.png') }}" alt="img"> {{ Auth::user()->name }} ! <span
                            class="hidden_xs_content"></span></span>
                    <ul class="list">

                        <li><a href="{{ route('profile') }}"><i class="flaticon-profile"></i> Profile</a>
                        </li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="flaticon-turn-off"></i>
                                Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cp_navigation_wrapper main_top_wrapper dashboard_header d-none">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
            </div>
            <!-- mainmenu end -->
        </div>
    </div>
</div>
