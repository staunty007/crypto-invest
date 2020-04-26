<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Savehyip" />
    <meta name="keywords" content="Savehyip" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--Template style -->
    @include('includes.auth.head')
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/images/ccfavi.png') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
        html, body {
            background: #eff1f5;
            font-family: 'Nunito', sans-serif;
        }
        .sv_heading_wraper h3 {
            font-family: 'Nunito', sans-serif;
        }
        .cd-dropdown-content {
            background: #00B4DB;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .cd-dropdown h2 {
            background: #00B4DB;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .cd-dropdown h2 a {
            color: black;
            font-family: 'Nunito', sans-serif;
        }
    </style>
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
