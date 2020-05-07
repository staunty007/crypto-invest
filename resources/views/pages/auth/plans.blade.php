@extends('layouts.auth')

@section('css')
<style>
    .tab-link {
        background: white;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
    }

    .nav-pills a:hover {
        color: grey;
    }

    .nav-pills .active {
        color: #fff !important;
        background: grey !important;
    }
    .investment_icon_circle, 
    .investment_border_wrapper,
    .investment_icon_circle:after,
    .plans_btn a {
    background: #229956;
}

</style>
@endsection

@section('content')
<div class="sv_pricing_paln fixed_portion  float_left" style="margin-top:-50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="sv_heading_wraper">

                    <h3>Packages 
                        @if(auth()->user()->info->package_id == NULL)
                        <span class="text-info" >
                        <small>Choose a package to access other pages</small></span>
                    @endif
                </h3>

                </div>

            </div>
            @foreach ($packages as $package)
            <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                <div class="investment_box_wrapper sv_pricing_border float_left">
                    <div class="investment_icon_circle">
                        <i class="flaticon-bar-chart"></i>
                    </div>
                    <div class="investment_border_wrapper"></div>
                    <div class="investment_content_wrapper">
                        <h1><a href="#">{{ $package->name }}</a></h1>
                        <p> {{ $package->rate }}% for {{ $package->time_of_cashout }}
                            <br> Minimum Invest
                            <br> {{ is_numeric($package->min_invest) ? '$'.number_format($package->min_invest) : $package->min_invest }}
                            <br> Maximum Invest
                            <br>{{ is_numeric($package->max_invest) ? '$'.number_format($package->max_invest) : $package->max_invest }}
                            <br> Capital {{ $package->capital == true ? 'Included' : 'Excluded' }}</p>
                    </div>
                    <div class="about_btn plans_btn">
                        <ul>
                            <li>
                                <a href="" class="select-platform" data-id="{{ $package->id }}"
                                    data-name="{{ $package->name }}">Choose</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active tab-link" id="v-pills-home-tab" data-toggle="pill"
                                href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">BTC</a>
                            <a class="nav-link tab-link" id="v-pills-four-tab" data-toggle="pill"
                                href="#v-pills-four" role="tab" aria-controls="v-pills-four"
                                aria-selected="false">ETH</a>
                            <a class="nav-link tab-link" id="v-pills-profile-tab" data-toggle="pill"
                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">Perfect Money</a>
                            <a class="nav-link tab-link" id="v-pills-messages-tab" data-toggle="pill"
                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">Cashapp</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="https://i.ibb.co/3y0jtmW/btc-img.jpg" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">BTC Wallet Address</h5>
                                                <p class="card-text mb-2">
                                                    <code>37FbwqRAAGLdj6GZeXMtJgUt9hCK2jAv7U</code>
                                                </p>
                                                <button class="btn btn-success btn-sm confirm-pay" data-id="1">Confirm
                                                    Payment</button>
                                                <p class="status-1"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="https://pngimage.net/wp-content/uploads/2018/06/perfect-money-png-7.png" class="card-img"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Perfect Money</h5>
                                                <p class="card-text mb-2"><code>U21776834 (USD)</code>
                                                </p>
                                                <button class="btn btn-success btn-sm confirm-pay" data-id="2">Confirm
                                                    Payment</button>
                                                <p class="status-2"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="https://is3-ssl.mzstatic.com/image/thumb/Purple114/v4/88/54/42/88544217-121a-cc19-8db6-5c0da87095e1/AppIcon-0-1x_U007emarketing-0-0-GLES2_U002c0-512MB-sRGB-0-0-0-85-220-0-0-0-7.png/320x0w.jpg"
                                                class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">CashApp</h5>
                                                <p class="card-text"><code>$Holonunu666</code>
                                                </p>
                                                <small class="text-secondary mb-2">Provide a Screenshot of Payment for
                                                    Confirmation</small>
                                                <div class="row mt-1">
                                                    <div class="col-md-5">
                                                        <input type="file" name="" class="form-control" id="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-success btn-sm mt-1 confirm-pay" data-id="3">Confirm
                                                            Payment</button>
                                                        </div>
                                                    <div class="col-md-12">
                                                        <p class="status-3"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade show" id="v-pills-four" role="tabpanel"
                            aria-labelledby="v-pills-four-tab">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://i.ibb.co/YdfCBNv/eth-bar-code.jpg" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">ETH Wallet Address</h5>
                                            <p class="card-text mb-2">
                                                <code>0x03579e429f4C1aEf19bB6cCccBC09F3C179C5065</code>
                                            </p>
                                            <button class="btn btn-success btn-sm confirm-pay" data-id="4">Confirm
                                                Payment</button>
                                            <p class="status-4"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <h5 class="text-dark text-uppercase font-weight-bold" id="package-name"></h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

  @if (auth()->user()->info->payment_type == null) 
    <div class="modal fade" id="registerWallet" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-dark" id="staticBackdropLabel">Wallet Profile Registration </h5>
            <button type="button" class="close" >
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update-payment-profile') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Payment Platform</label>
                            <select id="pay-type" class="form-control pay-form select-form" name="payment_type">
                                <option value="">Choose</option>
                                <option value="BTC">BTC</option>
                                <option value="ETH">ETH</option>
                                <option value="BCH">BCH</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Wallet Address</label>
                            <input type="text" class="form-control pay-form" id="pay-address" name="payment_address">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" id="submit-profile" disabled class="btn btn-success">Submit to Proceed</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
  @endif


@endsection


@section('script')
<script>
    $('#registerWallet').modal('show');
    setTimeout(() => {
        $(".select-form").removeAttr("style")[1].remove()
    }, 1000);

    $(document).on('keyup change','.pay-form', function() {
        if($('#pay-type option:selected').val() != "" && $("#pay-address").val() != "") {
           $("#submit-profile").prop('disabled', false);
        } else {
           $("#submit-profile").prop('disabled', true);
        }
    });

    let packageId, packageName, platformId;
    $(document).on('click', '.select-platform', function (e) {
        e.preventDefault()
        packageId = $(this).data('id')
        packageName = $(this).data('name');
        $("#package-name").html(packageName);
        $("#staticBackdrop").modal('show');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.confirm-pay', function (e) {
        e.preventDefault();
        let confirmBtn = this
        platformId = $(confirmBtn).data('id');
        const response = ".status-" + platformId
        $(response).html("");
        $(confirmBtn).html("Confirming...")

        $.post('/confirm-payment', {package_id : packageId,platform_id: platformId })
        .done( function (data) {
            if(data.success) {
                $(confirmBtn).html("Confirmed").attr('disabled', true);
                $(response).html(data.success);
            } else {
                $(confirmBtn).html("Confirm Payment")
                $(response).html(data.error);
            }
        })
    });

</script>
@endsection
