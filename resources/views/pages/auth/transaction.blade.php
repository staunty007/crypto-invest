@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>TRANSACTIONS</h3>

            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h5 style="font-family:inherit;">DEPOSIT</h5>
                </div>
                <div class="card-body">
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
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="font-family:inherit;">WITHDRAWALS</h5>
                </div>
                <div class="card-body">
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
                                        <th>{{ $loop->index + 1 }}</th>
                                        <td>{{ $pay->request_ref }}</td>
                                        <td>${{ $pay->amount }}</td>
                                        <td>{{ $pay->payment_type }}</td>
                                        <td>{{ $pay->payment_address }}</td>
                                        <td>{{ $pay->status }}</td>
                                        <td>{{ $pay->created_at->format('m-d-Y') }}</td>
                                        <td>
                                            @if ($pay->status != 'APPROVED')
                                            <a class="btn btn-sm btn-danger btn-block cancel-btn" data-id="{{ $pay->id }}" href="{{ route('cancel-request', $pay->id) }}"
                                             onclick="event.preventDefault();">Cancel</a>

                                            <form class="cancel-submit-{{ $pay->id }}" action="{{ route('cancel-request', $pay->id) }}" method="POST" style="display: none;">
                                              @csrf
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  transactions wrapper end -->

@endsection

@section('script')
<script>
  $(document).on('click','.cancel-btn',function() {
    const id = $(this).data('id');
    const point = `cancel-submit-${id}`;
    $('.'+point).submit()

  });
</script>
@endsection
