@extends('layouts.auth')

@section('content')
<!--  transactions wrapper start -->
<div class="last_transaction_wrapper float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>EDIT PACKAGE</h3>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-uppercase">EDIT {{ $package->name }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update-package', $package->id) }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Package Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $package->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Rate in Percent (%)</label>
                                <input type="number" min="1" class="form-control" name="rate" value="{{ $package->rate }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Time of Cashout <small class="text-danger">(Please type correctly)</small></label>
                                <input type="text" class="form-control" name="time_of_cashout" value="{{ $package->time_of_cashout }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Capital Included</label>
                                <select id="pay-type" class="form-control pay-form select-form" name="capital">
                                    <option {{ $package->capital == 0 ? 'selected' : '' }} value="0">Yes</option>
                                    <option {{ $package->capital == 1 ? 'selected' : '' }} value="1">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Maximim Invest</label>
                                <input type="text" class="form-control" name="max_invest" value="{{ $package->max_invest }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Minimim Invest</label>
                                <input type="text" class="form-control" name="min_invest" value="{{ $package->min_invest }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update Package</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  transactions wrapper end -->

@endsection

@section('script')
<script>
    setTimeout(() => {
        $(".select-form").removeAttr("style")[1].remove()
    }, 1000);
</script>
@endsection
