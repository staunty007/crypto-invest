<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Savehyip" />
    <meta name="keywords" content="Savehyip" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    @include('includes.auth.head')
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/images/ccfavi.png') }}" />
</head>
<!-- color picker start -->

<body>

    @include('includes.auth.navbar')
    <!-- navi wrapper End -->
    
    @include('includes.auth.sidebar')
    <!-- Main section Start -->
    <div class="l-main" style="margin-top: 30px;">
        <!--  account wrapper start -->

        @yield('content')

        <!--  footer  wrapper start -->
    @include('includes.auth.footer')
    </div>
    <!--  footer  wrapper end -->
     @include('includes.auth.footer-script')
</body>

</html>
