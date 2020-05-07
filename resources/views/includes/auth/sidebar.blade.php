<div class="l-sidebar" style="margin-top: -130px;">
    <div class="l-sidebar__content">
        <nav class="c-menu js-menu" id="mynavi">
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="#"><i
                                class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                        <ul class="crm_hover_menu">
                            <li><a href="{{ route('app') }}"><i class="fa fa-circle"></i> my account</a>
                            </li>
                            <li><a href="{{ route('profile') }}"><i class="fa fa-circle"></i> my profile</a>
                            </li>
                            <li><a href="email_notification.html"><i class="fa fa-circle"></i>email notification</a>
                            </li>
                            <li><a href="change_password.html"><i class="fa fa-circle"></i>change password</a>
                            </li>
                            <li><a href="change_pin.html"><i class="fa fa-circle"></i>change pin</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                    <a href="#">
                        <div class="c-menu-item__title"><span>my account</span>
                        </div>
                    </a>
                    <ul>
                        @if (auth()->user()->role == 'admin')
                        <li><a href="{{ route('admin-dashboard') }}"><i class="fa fa-circle"></i>Dashboard</a>
                        </li>
                        <li><a href="{{ route('profile') }}"><i class="fa fa-circle"></i> my profile</a>
                        </li>
                        @else
                        <li><a href="{{ route('app') }}"><i class="fa fa-circle"></i> Dashboard</a>
                        </li>
                        <li><a href="{{ route('profile') }}"><i class="fa fa-circle"></i> profile</a>
                        </li>
                        <li><a href="{{ route('payment-info') }}"><i class="fa fa-circle"></i> Payout Details</a>
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>

            @if (auth()->user()->role != 'admin')
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="{{ route('plans') }}"><i
                                class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="{{ route('plans') }}">
                        <div class="c-menu-item__title">Packages</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="{{ route('withdrawal') }}"><i
                                class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="{{ route('withdrawal') }}">
                        <div class="c-menu-item__title">Withdrawal</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="{{ route('my-transactions') }}"><i
                                class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="{{ route('my-transactions') }}">
                        <div class="c-menu-item__title">Transactions</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="#"><i
                                class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="#">
                        <div class="c-menu-item__title">Referral</div>
                    </a>
                </li>
            </ul>
            @endif
            
            @if (auth()->user()->role == 'admin')
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="all_transactions.html"><i class="flaticon-help"></i></a>
                        <ul class="crm_hover_menu d-none">
                        </ul>
                    </div>
                </li>
                <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                    <a href="#">
                        <div class="c-menu-item__title"><span>Admin</span>
                        </div>
                    </a>
                    <ul>
                        <li><a href="{{ route('all-transactions') }}"><i class="fa fa-circle"></i> all transactions</a>
                        </li>
                        <li><a href="{{ route('admin-payment-request') }}"><i class="fa fa-circle"></i>Payment Requests</a>
                        </li>
                        <li><a href="{{ route('all-packages') }}"><i class="fa fa-circle"></i>Packages</a>
                        </li>
                        <li><a href="#"><i class="fa fa-circle"></i>Payment Platforms</a>
                        </li>
                        <li><a href="{{ route('all-customers') }}"><i class="fa fa-circle"></i>All Customers</a>
                        </li>
                        <li><a href="{{ route('active-subscribers') }}"><i class="fa fa-circle"></i>Subscribed
                                Customers</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif

            <ul class="u-list crm_drop_second_ul d-none">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="tickets.html"><i class="flaticon-file"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="tickets.html">
                        <div class="c-menu-item__title">view tickets</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul d-none">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="referrals.html"><i class="flaticon-settings"></i></a>
                        <ul class="crm_hover_menu">
                            <li><a href="referrals.html"><i class="fa fa-circle"></i> my referrals </a>
                            </li>
                            <li>
                                <a href="banners.html"> <i class="fa fa-circle"></i>promotionals banners</a>
                            </li>
                            <li>
                                <a href="referral_earnings.html"> <i class="fa fa-circle"></i>referral earnings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                    <a href="#">
                        <div class="c-menu-item__title"><span>referrals</span><i class="no_badge purple">2</i>
                        </div>
                    </a>
                    <ul>
                        <li><a href="referrals.html"><i class="fa fa-circle"></i> my referrals </a>
                        </li>
                        <li>
                            <a href="banners.html"> <i class="fa fa-circle"></i>promotionals banners</a>
                        </li>
                        <li>
                            <a href="referral_earnings.html"> <i class="fa fa-circle"></i>referral earnings</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul d-none">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="make_deposit.html"><i class="flaticon-profile"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="make_deposit.html">
                        <div class="c-menu-item__title">deposit</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="{{ route('logout') }}"><i class="flaticon-turn-off"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <div class="c-menu-item__title">logout</div>
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </div>
</div>
