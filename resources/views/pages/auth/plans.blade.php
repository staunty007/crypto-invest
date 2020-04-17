@extends('layouts.auth')

@section('css')
<style>
    .tab-link {
        background: white;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
    }

    .nav-pills .tab-link .active {
        color: #212529 !important;
    }

</style>
@endsection

@section('content')
<div class="sv_pricing_paln fixed_portion  float_left" style="margin-top:-50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="sv_heading_wraper">

                    <h3>Packages</h3>

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
                            <br> {{ $package->min_invest }}
                            <br> Maximum Invest
                            <br> {{ $package->max_invest }}
                            <br> Capital {{ $package->capital == true ? 'Included' : 'Excluded' }}</p>
                    </div>
                    <div class="about_btn plans_btn">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#staticBackdrop">Choose</a>
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
                            <a class="nav-link tab-link" id="v-pills-profile-tab" data-toggle="pill"
                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">Perfect Pay</a>
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
                                            <img src="https://i.ibb.co/56qX9HB/btc-qr.jpgs" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">BTC Wallet Address</h5>
                                                <p class="card-text mb-4">
                                                    <code>16AU6QyvnoNdbCACQAoGmRSDW59gRAMASB</code>
                                                </p>
                                                <button class="btn btn-success btn-sm">Confirm Payment</button>
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
                                            <img src="https://i.ibb.co/4jBFwyJ/perfect-pay.jpg" class="card-img"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Perfect Pay</h5>
                                                <p class="card-text mb-4"><code>U21776834 (USD)</code>
                                                </p>
                                                <button class="btn btn-success btn-sm">Confirm Payment</button>
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
                                                <small class="text-secondary mb-5">Provide a Screenshot of Payment for
                                                    Confirmation</small>
                                                <div class="row mt-1">
                                                    <div class="col-md-5">
                                                        <input type="file" name="" class="form-control" id="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-success btn-sm mt-1">Confirm
                                                            Payment</button>
                                                    </div>
                                                </div>
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
                <h5 class="text-dark text-uppercase font-weight-bold">Choose Payment Platform</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

  
@endsection


@section('script')
@endsection