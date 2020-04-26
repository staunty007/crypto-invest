@extends('layouts.auth')

@section('content')

<!--  profile wrapper start -->
<div class="view_profile_wrapper_top float_left">

    <div class="row">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>profile</h3>

            </div>

        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <nav class="bg-default">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...
                        </div>
                    </div>
                </div>
            </div>
            <div class="view_profile_wrapper float_left">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="profile_view_img">
                            <img src="{{ URL::asset('auth/images/user.png') }}" alt="post_img">

                        </div>
                        <div class="profile_width_cntnt">
                            <h4>JPEG or PNG 500x500px Thumbnail</h4>

                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-233" class="dropify"
                                    data-height="90" /><span class="post_photo">browse image</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                        <ul class="profile_list">
                            <li><span class="detail_left_part">Referral Name
                                </span> <span class="detail_right_part">--Nill--
                                </span>
                            </li>
                            <li><span class="detail_left_part">first name
                                </span> <span class="detail_right_part">akshay
                                </span>
                            </li>
                            <li><span class="detail_left_part">Last Name</span> <span class="detail_right_part">handge
                                </span>
                            </li>
                            <li><span class="detail_left_part">Your Email Address</span> <span
                                    class="detail_right_part">--Not Updated--</span>
                            </li>
                            <li><span class="detail_left_part">Address </span> <span class="detail_right_part">
                                    india,kolkata</span>
                            </li>
                            <li><span class="detail_left_part">Mobile No</span> <span class="detail_right_part">--Not
                                    Updated--</span>
                            </li>
                            <li><span class="detail_left_part">City</span> <span
                                    class="detail_right_part">koltaka</span>
                            </li>
                            <li><span class="detail_left_part">State</span> <span
                                    class="detail_right_part">mukundopur</span>
                            </li>
                            <li><span class="detail_left_part">Country</span> <span class="detail_right_part"> East
                                    Timor</span>
                            </li>
                            <li><span class="detail_left_part">Paypal</span> <span
                                    class="detail_right_part">azamsheikh645@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                        <ul class="profile_list">
                            <li><span class="detail_left_part">Pexpay</span> <span class="detail_right_part">--Not
                                    Updated--</span>
                            </li>
                            <li><span class="detail_left_part">PerfectMoney</span> <span
                                    class="detail_right_part">U19230295</span>
                            </li>
                            <li><span class="detail_left_part">Payza</span> <span
                                    class="detail_right_part">azamsheikh645@gmail.com</span>
                            </li>
                            <li><span class="detail_left_part">HDMoney</span> <span class="detail_right_part"> --Not
                                    Updated--</span>
                            </li>
                            <li><span class="detail_left_part">Paypal</span> <span
                                    class="detail_right_part">azamsheikh645@gmail.com</span>
                            </li>
                            <li><span class="detail_left_part">EGOpay</span> <span class="detail_right_part"> --Not
                                    Updated--</span>
                            </li>
                            <li><span class="detail_left_part">OKpay</span> <span class="detail_right_part"> --Not
                                    Updated--</span>
                            </li>
                            <li><span class="detail_left_part">Solidtrustpay</span> <span class="detail_right_part">
                                    --Not Updated--</span>
                            </li>
                            <li><span class="detail_left_part">Webmoney</span> <span class="detail_right_part"> --Not
                                    Updated--</span>
                            </li>
                            <li><span class="detail_left_part">Bankwire</span> <span class="detail_right_part"> BANK OF
                                    PAMHYIP</span>
                            </li>

                        </ul>
                    </div>

                    <div class="about_btn float_left">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal">change</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  profile wrapper end -->
@endsection
