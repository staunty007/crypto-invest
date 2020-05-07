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
            <div class="card" style="margin-bottom: 300px;">
                <div class="card-body">
                    <nav class="bg-default">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row mt-1">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="https://picsum.photos/200/100" height="100"
                                            width="200" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ auth()->user()->name }}</h5>
                                            <p class="card-text">username : <span
                                                    class="text-muted text-lowercase">{{ auth()->user()->username }}</span>
                                            </p>
                                            <p class="card-text">email : <span
                                                    class="text-muted text-lowercase">{{ auth()->user()->email }}</span>
                                            </p>
                                            <p class="card-text">phone : <span
                                                    class="text-muted text-lowercase">{{ auth()->user()->phone }}</span>
                                            </p>
                                            <p class="card-text">gender : <span
                                                    class="text-muted text-lowercase">{{ auth()->user()->gender }}</span>
                                            </p>
                                            <p class="card-text">registered at: <span
                                                    class="text-muted">{{ auth()->user()->created_at->diffForHumans() }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body bg-light">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Wallet Balance: <span
                                                        class="text-muted ml-2">${{ number_format(auth()->user()->wallet->active_balance , 2) }}</span>
                                                </li>
                                                <li class="list-group-item">Profit: <span
                                                        class="text-muted ml-2">${{ number_format(auth()->user()->wallet->profit_balance , 2) }}</span>
                                                </li>
                                                <li class="list-group-item">Country: <span
                                                        class="text-muted ml-2 text-uppercase">{{ auth()->user()->info->country }}</span>
                                                </li>
                                                <li class="list-group-item">Package: <span
                                                        class="text-muted ml-2 text-uppercase">{{ App\Package::find( auth()->user()->info->package_id)['name'] }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-md-6 mt-2 mb-5">
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h3 class="f-fam">MY PROFILE</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('update-profile', auth()->id()) }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="text-dark" for="">Name</label>
                                                    <input type="text" class="form-control" name="name" disabled value="{{ auth()->user()->name }}">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="text-dark" for="">Email</label>
                                                        <input type="email" class="form-control" name="email" 
                                                        value="{{ auth()->user()->email }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="text-dark" for="">Username</label>
                                                        <input type="text" class="form-control" name="username" disabled value="{{ auth()->user()->username }}"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-dark" for="">Phone</label>
                                                    <input type="text" class="form-control col-md-6" name="phone" value="{{ auth()->user()->phone }}">
                                                </div>
                                                <button type="submit" class="btn btn-success">Update Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2 mb-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="f-fam">WALLET PROFILE</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('update-wallet', auth()->id()) }}">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="text-dark" for="">Payment Type</label>
                                                        <select name="payment_type" class="form-control select-form">
                                                            <option value="BTC" {{ auth()->user()->info->payment_type == "BTC" ? 'selcted' : '' }}>BTC</option>
                                                            <option value="ETH" {{ auth()->user()->info->payment_type == "ETH" ? 'selcted' : '' }}>ETH</option>
                                                            <option value="PM" {{ auth()->user()->info->payment_type == "PM" ? 'selcted' : '' }}>PM</option>
                                                            <option value="CASHAP" {{ auth()->user()->info->payment_type == "CASHAPP" ? 'selcted' : '' }}>CASHAPP</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label class="text-dark" for="">Payment Address</label>
                                                        <input type="text" class="form-control" name="payment_address" value="{{ auth()->user()->info->payment_address }}"> 
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Update Wallet Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view_profile_wrapper float_left d-none">
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
@section('script')
<script>
    setTimeout(() => {
    $(".select-form").removeAttr("style")[1].remove()
}, 1000);
</script>
@endsection