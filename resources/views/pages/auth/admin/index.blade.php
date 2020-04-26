@extends('layouts.auth')

@section('content')
<div class="account_wrapper float_left" style="height: 100vh;">

    <div class="row mb-5">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>Admin Dashbaord</h3>

            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 my-3">
            <div class="card">
              <img src="https://picsum.photos/id/{{ rand(0, 50) }}/200/30" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-uppercase">Deposits</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 my-3">
            <div class="card">
              <img src="https://picsum.photos/id/{{ rand(0, 50) }}/200/30" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-uppercase">Payouts</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 my-3">
            <div class="card">
              <img src="https://picsum.photos/id/{{ rand(0, 50) }}/200/30" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-uppercase">Referrals</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 my-3">
            <div class="card">
              <img src="https://picsum.photos/id/{{ rand(0, 50) }}/200/30" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-uppercase">Wallets</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 d-none">
            <div class="investment_box_wrapper color_1 float_left">
                <a href="#">
                    <div class="investment_icon_wrapper float_left">
                        <i class="far fa-money-bill-alt"></i>
                        <h1>deposits</h1>
                    </div>

                    <div class="invest_details float_left">
                        <table class="invest_table">
                            <tbody>
                                <tr>
                                    <td class="invest_td1">New Deposit</td>
                                    <td class="invest_td1"> : $0.00 USD</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">Pending Deposit</td>
                                    <td class="invest_td1">: $0.00 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 d-none">
            <div class="investment_box_wrapper color_2 float_left">
                <a href="#">
                    <div class="investment_icon_wrapper float_left">
                        <i class="far fa-money-bill-alt"></i>
                        <h1>payouts</h1>
                    </div>

                    <div class="invest_details float_left">
                        <table class="invest_table">
                            <tbody>
                                <tr>
                                    <td class="invest_td1">total payouts</td>
                                    <td class="invest_td1"> : $0.00 USD</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">pending payouts</td>
                                    <td class="invest_td1">: $0.00 USD</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 d-none">
            <div class="investment_box_wrapper color_5 float_left">
                <a href="#">
                    <div class="investment_icon_wrapper float_left">
                        <i class="far fa-money-bill-alt"></i>
                        <h1>referral</h1>
                    </div>

                    <div class="invest_details float_left">
                        <table class="invest_table">
                            <tbody>
                                <tr>
                                    <td class="invest_td1">interest today</td>
                                    <td class="invest_td1"> : 11 nos</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">interest this week</td>
                                    <td class="invest_td1">: nos</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12 d-none">
            <div class="investment_box_wrapper color_6 float_left">
                <a href="#">
                    <div class="investment_icon_wrapper float_left">
                        <i class="far fa-money-bill-alt"></i>
                        <h1>Wallet</h1>
                    </div>

                    <div class="invest_details float_left">
                        <table class="invest_table">
                            <tbody>
                                <tr>
                                    <td class="invest_td1">Available</td>
                                    <td class="invest_td1"> : ${{ number_format(auth()->user()->wallet->active_balance, 2) }} USD</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">Profits</td>
                                    <td class="invest_td1">: ${{ number_format(auth()->user()->wallet->profit_balance, 2) }} USD</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--  account wrapper end -->

@endsection

@section('script')
<script>

</script>
@endsection
