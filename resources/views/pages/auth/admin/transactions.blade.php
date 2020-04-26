@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>All TRANSACTIONS</h3>

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
                            <th class="">Customer</th>
                            <th class="">Customer Status</th>
                            <th class="">Payment Type</th>
                            <th class="">Payment Address</th>
                            <th class="">transaction ID</th>
                            <th class="">amount ($)</th>
                            <th class="">Package</th>
                            <th class="">payment method</th>
                            <th class="">status</th>
                            <th class="">Transaction Date</th>
                            <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $tr)    
                      <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        <td>{{ $tr->user->name }}</td>
                        <td>{{ $tr->user->status == 1 ? 'Active' : 'Inactive' }}</td>
                        <td>{{ $tr->user_info->payment_type }}</td>
                        <td>{{ $tr->user_info->payment_address }}</td>
                        <td>{{ $tr->transaction_ref }}</td>
                        <td>{{ $tr->amount }}</td>
                        <td>{{ $tr->package->name }}</td>
                        <td>{{ $tr->platform->name }}</td>
                        <td>{{ $tr->status }}</td>
                        <td>{{ $tr->created_at->format('m-d-Y') }}</td>
                        <td>
                          <div class="btn-group">
                            @if ($tr->status != 'SUCCESSFUL')
                              <button class="btn btn-success btn-sm">Approve</button>
                            @else
                              <span class="text-success font-weight-bold">APPROVED</span>
                            @endif
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
