@extends('layouts.auth')

@section('content')
<div class="account_wrapper float_left" style="height: 100vh;">

    <div class="row mb-5">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>Payment Request Form</h3>

            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('make-payment-request') }}">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Availabe Balance</label>
                                <input type="text" class="form-control" id="availBal" readonly
                                    value="{{ $activeBalance }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Amount</label>
                                <input type="number" min="1" class="form-control" id="amount" name="amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Payment Type</label>
                            <select id="" class="form-control select-form" name="payment_type">
                                <option value="BTC" {{ auth()->user()->info->payment_type == 'BTC' ? 'selected' : '' }}>
                                    BTC</option>
                                <option value="ETH" {{ auth()->user()->info->payment_type == 'ETH' ? 'selected' : '' }}>
                                    ETH</option>
                                <option value="BCH" {{ auth()->user()->info->payment_type == 'BCH' ? 'selected' : '' }}>
                                    BCH</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Wallet Address</label>
                            <input type="text" class="form-control" id="" name="payment_address"
                                value="{{ auth()->user()->info->payment_address }}">
                        </div>
                        <button type="submit" id="submit-form" class="btn btn-primary btn-block">Request
                            Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  account wrapper end -->

@endsection

@section('script')
<script>
    setTimeout(() => {
        $(".select-form").removeAttr("style")[1].remove()
    }, 300);

    const availBal = $('#availBal').val();
    $('#amount').keyup(function () {
        const amount = $(this).val() == "" ? 0 : $(this).val();
        const newBal = parseFloat(availBal) - parseFloat(amount)
        $('#availBal').val(newBal)
        if (newBal < 0) {
            $('#submit-form').prop('disabled', true);
        } else {
            $('#submit-form').prop('disabled', false);
        }
    })

</script>
@endsection
