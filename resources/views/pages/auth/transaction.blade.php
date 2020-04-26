@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>LAST TRANSACTIONS</h3>

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
                            <th class="">transaction ID</th>
                            <th class="">amount ($)</th>
                            <th class="">Package</th>
                            <th class="">payment mode</th>
                            <th class="">status</th>
                            <th class="">date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $tr)    
                      <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        <td>{{ $tr->transaction_ref }}</td>
                        <td>{{ $tr->amount }}</td>
                        <td>{{ $tr->package->name }}</td>
                        <td>{{ $tr->platform->name }}</td>
                        <td>{{ $tr->status }}</td>
                        <td>{{ $tr->created_at->format('m-d-Y') }}</td>
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
