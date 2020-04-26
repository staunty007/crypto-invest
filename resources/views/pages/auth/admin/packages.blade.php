@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>All PACKAGES</h3>

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
                            <th class="">% Rate</th>
                            <th class="">Payout Time</th>
                            <th class="">Minimum Invest</th>
                            <th class="">Maximum Invest</th>
                            <th class="">Capitial</th>
                            <th class="">status</th>
                            <th class=""> Date</th>
                            <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)    
                      <tr>
                        <th>{{ $loop->index + 1 }}</th>
                        <td>{{ $package->name }}</td>
                        <td>{{ $package->rate }}%</td>
                        <td>{{ $package->time_of_cashout }}</td>
                        <td>{{ is_numeric($package->min_invest) ? '$'.number_format($package->min_invest) : $package->min_invest }}</td>
                        <td>{{ is_numeric($package->max_invest) ? '$'.number_format($package->max_invest) : $package->max_invest }}</td>
                        <td>{{ $package->capital == 1 ? 'INCLUDED' : ' EXCLUDED' }}</td>
                        <td>{{ $package->status == 1 ? 'ACTIVE' : 'INACTIVE' }}</td>
                        <td>{{ $package->created_at->format('d-m-Y') }}</td>
                        <td>
                            <div class="btn-group">
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
