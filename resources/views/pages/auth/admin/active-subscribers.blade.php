@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>ACTIVE PACKAGE SUBSCRIBERS</h3>

            </div>
        </div>
        <div class="crm_customer_table_main_wrapper float_left">
            <div class="crm_ct_search_wrapper">
                <div class="crm_ct_search_bottom_cont_Wrapper">
                </div>
            </div>
            <div class="table-responsive">
                <table class="myTable table table-bordered">
                    <thead>
                      <tr class="bg-dark text-white">
                        <th class=""> S/N</th>
                            <th class="">Name</th>
                            <th class="">Assumed Profit</th>
                            <th class="">Wallet Bal.</th>
                            <th class="">Profit Bal.</th>
                            <th class="">Time</th>
                            <th class="">Time Remaining</th>
                            <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscribers as $subscriber)    
                      <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        <td>{{ $subscriber->user->name }}</td>
                        <td>${{ $subscriber->assumed_profit }}</td>
                        <td>${{ $subscriber->wallet->active_balance }}</td>
                        <td>${{ $subscriber->wallet->profit_balance }}</td>
                        <td>{{ \Carbon\CarbonInterval::minutes($subscriber->duration_in_minutes)->cascade() }}</td>
                        <td>{{  \Carbon\CarbonInterval::minutes($subscriber->duration_remaining)->cascade() }}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info">More</button>
                            </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
<!--  transactions wrapper end -->

@endsection

@section('script')
<script>

</script>
@endsection
