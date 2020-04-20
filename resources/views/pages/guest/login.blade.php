@extends('layouts.guest')

@section('content')
<div class="section section-pad">
    <div class="container">
        <div class="tab-custom">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <h3 class="heading-lead center">Login Your Account</h3>
                    <form class="form-signup" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-results"></div>
                        <div class="form-group">
                            <div class="form-field form-m-bttm">
                                <input name="email" type="email" placeholder="Email *"
                                    class="form-control required email" value="{{ old('email') }}" required />
                            </div>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <input name="password" type="password" placeholder="Password *"
                                    class="form-control required" required />
                            </div>
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-alt btn-block">Log In</button>
                        <span class="gaps"></span>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="small">Not registered? <a href="/register">Register</a> </p>
                            </div>
                            <div class="col-md-4 col-md-offset-4">
                                <p class="small"> <a href="/password/reset">Forgot Password</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 70px;"></div>
@endsection
