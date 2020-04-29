@extends('layouts.auth')

@section('content')
<div class="account_wrapper float_left" style="height: 100vh;">

    <div class="row mb-5">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>my account</h3>

            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
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
                                    <td class="invest_td1"> : ${{ $data['new_deposit'] }} USD</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">Pending Deposits</td>
                                    <td class="invest_td1">: {{ $data['no_of_pending'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
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
                                    <td class="invest_td1"> : {{ $data['total_payouts'] }}</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">pending payouts</td>
                                    <td class="invest_td1"> : {{ $data['pending_payouts'] }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
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
                                    <td class="invest_td1"> : 0</td>
                                </tr>
                                <tr>
                                    <td class="invest_td1">interest this week</td>
                                    <td class="invest_td1">: 0</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
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
