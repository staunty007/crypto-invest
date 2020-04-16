@extends('layouts.auth')

@section('content')
<div class="sv_pricing_paln fixed_portion  float_left" style="margin-top:-50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="sv_heading_wraper">
    
                    <h3>Packages</h3>
    
                </div>
    
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                <div class="investment_box_wrapper sv_pricing_border float_left">
                    <div class="investment_icon_circle">
                        <i class="flaticon-bar-chart"></i>
                    </div>
                    <div class="investment_border_wrapper"></div>
                    <div class="investment_content_wrapper">
                        <h1><a href="#">basic plan</a></h1>
                        <p>Up to 5% for 20 Hourly
                            <br> Compound Available
                            <br> Down to 5% for 20 Hourly
                            <br> Principal Return
                            <br> Up to 5% for 20 Hourly</p>
                    </div>
                    <div class="about_btn plans_btn">
                        <ul>
                            <li>
                                <a href="#">Choose</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                <div class="investment_box_wrapper sv_pricing_border float_left">
                    <div class="investment_icon_circle red_info_circle">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="investment_border_wrapper red_border_wrapper"></div>
                    <div class="investment_content_wrapper red_content_wrapper">
                        <h1><a href="#">Trading Plan</a></h1>
                        <p>Up to 5% Daily for 5 Days
                            <br> Min deposit: $2020
                            <br> Max deposit: $101010
                            <br> Principal Return
                            <br> Compound Available</p>
                    </div>
                    <div class="about_btn plans_btn red_btn_plans">
                        <ul>
                            <li>
                                <a href="#">Choose</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                <div class="investment_box_wrapper sv_pricing_border float_left">
                    <div class="investment_icon_circle blue_icon_circle">
                        <i class="flaticon-gold"></i>
                    </div>
                    <div class="investment_border_wrapper blue_border_wrapper"></div>
                    <div class="investment_content_wrapper blue_content_wrapper">
                        <h1><a href="#">premium plan</a></h1>
                        <p>Up to 3% Hourly for 10 Hourly
                            <br> Min deposit: $300
                            <br> Max deposit: $3000
                            <br> Principal Not Return
                            <br> Compound Not Available</p>
                    </div>
                    <div class="about_btn plans_btn blue_btn_plans">
                        <ul>
                            <li>
                                <a href="#">Choose</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                <div class="investment_box_wrapper sv_pricing_border float_left">
                    <div class="investment_icon_circle green_info_circle">
                        <i class="flaticon-medal"></i>
                    </div>
                    <div class="investment_border_wrapper green_border_wrapper"></div>
                    <div class="investment_content_wrapper green_content_wrapper">
                        <h1><a href="#">vip plan</a></h1>
                        <p>Up to 7% for 30 days
                            <br> Min deposit: $500
                            <br> Max deposit: $3000
                            <br> Principal Not Return
                            <br> Compound Available</p>
                    </div>
                    <div class="about_btn plans_btn green_plan_btn">
                        <ul>
                            <li>
                                <a href="#">Choose</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
