@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>All CUSTOMERS</h3>

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
                            <th class="">Email</th>
                            <th class="">Phone</th>
                            <th class="">STATUS</th>
                            <th class="">Wallet</th>
                            <th class="">Profit</th>
                            <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)    
                      <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->status == 1 ? 'ACTIVE' : 'INACTIVE' }}</td>
                        <td>{{ $customer->wallet->active_balance }}</td>
                        <td>{{ $customer->wallet->profit_balance }}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info">More</button>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
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
