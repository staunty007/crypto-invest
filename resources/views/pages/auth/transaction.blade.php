@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>LAST 5 TRANSACTIONS</h3>

            </div>
        </div>
        <div class="crm_customer_table_main_wrapper float_left">
            <div class="crm_ct_search_wrapper">
                <div class="crm_ct_search_bottom_cont_Wrapper">
                </div>
            </div>
            <div class="table-responsive">
                <table class="myTable table datatables cs-table crm_customer_table_inner_Wrapper">
                    <thead>
                        <tr>
                            <th class="width_table1"> S/N</th>
                            <th class="width_table1">transaction ID</th>
                            <th class="width_table1">amount ($)</th>
                            <th class="width_table1">Package</th>
                            <th class="width_table1">payment mode</th>
                            <th class="width_table1">status</th>
                            <th class="width_table1">date</th>
                            <th class="width_table1">options</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $tr)    
                        <tr class="background_white">
                            
                                <td>
                                    <div class="pretty p-svg p-curve">{{ $loop->index + 1 }}</div>
                                </td>
                                <td>
                                    <div class="media cs-media">

                                        <div class="media-body">
                                            <h5>{{ $tr->transaction_ref }}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="pretty p-svg p-curve">{{ $tr->amount }}</div>
                                </td>
                                <td>
                                    <div class="pretty p-svg p-curve">{{ $tr->package->name }}</div>
                                </td>
                                <td>
                                    <div class="pretty p-svg p-curve">{{ $tr->platform->name }}</div>
                                </td>
                                <td>
                                    <div class="pretty p-svg p-curve">{{ $tr->status }}</div>
                                </td>

                                <td class="flag">
                                    <div class="pretty p-svg p-curve">{{ $tr->created_at->format('m-d-Y') }}</div>
                                </td>
                                <td>
                                    <nav class="navbar navbar-expand">
                                        <ul class="navbar-nav">
                                            <!-- Dropdown -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i
                                                        class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
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
