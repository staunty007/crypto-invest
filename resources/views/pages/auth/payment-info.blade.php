@extends('layouts.auth')

@section('content')
<div class="account_wrapper float_left" style="height: 100vh;">

    <div class="row mb-5">

        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="sv_heading_wraper">

                <h3>my payment Info</h3>

            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4 d-none d-sm-block">
                    <img src="https://picsum.photos/200/300" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8 col-xs-12">
                    <div class="card-body">
                      <h5 class="card-title">{{ auth()->user()->info->payment_type }}</h5>
                      <h5 class="card-text mt-4">Wallet Address : <br><span class="mt-3"><code>{{ auth()->user()->info->payment_address }}</code></span></h5>
                      <p class="card-text mt-5"><small class="text-muted">Last updated {{ auth()->user()->info->created_at->diffForHumans() }}</small></p>
                      <a href="{{ route('profile') }}" class="btn btn-info btn-sm mt-4">Edit Details</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<!--  account wrapper end -->

@endsection

@section('script')
<script>

</script>
@endsection
