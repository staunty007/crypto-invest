@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>ALL PAYMENT REQUESTS</h3>

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
                            <th>Customer</th>
                            <th class="">Request ID</th>
                            <th class="">amount ($)</th>
                            <th class="">Payment Type</th>
                            <th class="">payment Address</th>
                            <th class="">status</th>
                            <th class="">date</th>
                            <th class="">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pay_requests as $pay)    
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $pay->user->name }}</td>
                        <td>{{ $pay->request_ref }}</td>
                        <td>${{ $pay->amount }}</td>
                        <td>{{ $pay->payment_type }}</td>
                        <td>{{ $pay->payment_address }}</td>
                        <td>{{ $pay->status }}</td>
                        <td>{{ $pay->created_at->format('d-m-Y') }}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-success">Approve</button>
                                <button class="btn btn-sm btn-danger">Decline</button>
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
