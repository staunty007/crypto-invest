<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="CrystalCapital is a powerful Crypto Currency Hedge-Fund Investment Platform" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="assets/images/ccfavi.png" />
    <!-- Site Title  -->
    <title>
        CrystalCapital - Crypto Currency Hedge-Fund
    </title>
    @include('includes.guest.head')
</head>

<body>
    <!-- Header -->
    <header class="site-header header-s1 is-sticky">
        <!-- Navbar -->
        @include('includes.guest.navbar')
        <!-- End Navbar -->

        @if (Request::path() == '/')
        <!-- Banner/Slider -->
        <div id="header" class="banner header-slider">
            <div class="single-slide light row-vm" style="background-image:url(images/8.jpg)">
                <div class="container">
                    <div class="banner-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="animate-bottom delayms5">
                                    Invest like a <br /><span class="ucap">cryptocurrency hedge fund</span>

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide light row-vm" style="background-image:url(images/6.jpg)">
                <div class="container">
                    <div class="banner-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <h1 class="animate-bottom delayms5">
                                    Invest like a <br /><span class="ucap">cryptocurrency hedge fund</span>
                                </h1>
                                <p class="lead animate-bottom delayms7">
                                    Coming soon on IOS/Android
                                </p>
                                <ul class="btns animate-bottom delayms9">
                                    <li><a href="#"><img src="./images/apple.png" alt="Apple Image"></a></li>
                                    <li><a href="#"><img src="./images/android.png" alt="Android Image"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner/Slider -->
        @endif

        @if (Request::path() == 'contact' || Request::path() == 'about-us')
        <div class="page-head section row-vm light">
            <div class="imagebg">
                <img src="https://source.unsplash.com/random" alt="page-head">
            </div>
            <div class="container">
                <div class="row text-center">
                    @if (Request::path() == 'contact')
                    <div class="col-md-12">
                        <h2>Contact Us</h2>
                        <div class="page-breadcrumb">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><span>Contact Us</span></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @if (Request::path() == 'about-us')
                    <div class="col-md-12">
                        <h2>About Us</h2>
                        <div class="page-breadcrumb">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><span>About Us</span></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
    </header>
    <!-- End Header -->

    @yield('content')


    @include('includes.guest.footer')

    <!-- Preloader !remove please if you do not want -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Preloader End -->

    <!-- JavaScript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    @include('includes.guest.footer-script')
</body>

</html>
