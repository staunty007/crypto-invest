<div class="l-sidebar" style="margin-top: -130px;">
    <div class="l-sidebar__content">
        <nav class="c-menu js-menu" id="mynavi">
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="my_account.html"><i
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
                        <div class="c-menu-item__title"><span>my account</span><i class="no_badge">5</i>
                        </div>
                    </a>
                    <ul>
                        <li><a href="{{ route('app') }}"><i class="fa fa-circle"></i> Dashboard</a>
                        </li>
                        <li><a href="{{ route('profile') }}"><i class="fa fa-circle"></i> my profile</a>
                        </li>
                        <li><a href="{{ route('plans') }}"><i class="fa fa-circle"></i> Choose Package</a>
                        </li>
                    </ul>
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
                        <div class="c-menu-item__title">Tansactions</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul d-none">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="{{ route('payment-info') }}"><i
                                class="flaticon-progress-report"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="{{ route('payment-info') }}">
                        <div class="c-menu-item__title">Payment Info</div>
                    </a>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="#"><i
                                class="flaticon-movie-tickets"></i></a>
                        <ul class="crm_hover_menu">
                            <li>
                                <a href="#"> <i class="fa fa-circle"></i> payment request</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                    <a href="#">
                        <div class="c-menu-item__title"><span>finance</span><i class="no_badge">5</i>
                        </div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('payment-info') }}"> <i class="fa fa-circle"></i> payment info</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#"> <i class="fa fa-circle"></i> payment request</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="u-list crm_drop_second_ul d-none">
                <li class="crm_navi_icon">
                    <div class="c-menu__item__inner"><a href="all_transactions.html"><i
                                class="flaticon-help"></i></a>
                        <ul class="crm_hover_menu">
                            <li><a href="all_transactions.html"><i class="fa fa-circle"></i> all transactions</a>
                            </li>
                            <li><a href="deposit_history.html"><i class="fa fa-circle"></i>deposit history</a>
                            </li>
                            <li><a href="pending_history.html"><i class="fa fa-circle"></i>pending history</a>
                            </li>
                            <li><a href="exchange_history.html"><i class="fa fa-circle"></i>exchange history</a>
                            </li>
                            <li><a href="earnings_history.html"><i class="fa fa-circle"></i>earning history</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                    <a href="all_transactions.html">
                        <div class="c-menu-item__title"><span>reports</span><i class="no_badge purple">5</i>
                        </div>
                    </a>
                    <ul>
                        <li><a href="all_transactions.html"><i class="fa fa-circle"></i> all transactions</a>
                        </li>
                        <li><a href="deposit_history.html"><i class="fa fa-circle"></i>deposit history</a>
                        </li>
                        <li><a href="pending_history.html"><i class="fa fa-circle"></i>pending history</a>
                        </li>
                        <li><a href="exchange_history.html"><i class="fa fa-circle"></i>exchange history</a>
                        </li>
                        <li><a href="earnings_history.html"><i class="fa fa-circle"></i>earning history</a>
                        </li>
                    </ul>
                </li>
            </ul>
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
                    <div class="c-menu__item__inner"><a href="make_deposit.html"><i
                                class="flaticon-profile"></i></a>
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
                    <div class="c-menu__item__inner"><a href="{{ route('logout') }}"><i
                            class="flaticon-turn-off" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"></i></a>
                    </div>
                </li>
                <li class="c-menu__item crm_navi_icon_cont">
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
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