<div class="navbar navbar-primary">
    <div class="container relative">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img class="logo logo-dark" alt="logo" src="{{ URL::asset('/assets/images/ccl.png') }}" />
            <img class="logo logo-light" alt="logo" src="{{ URL::asset('/assets/images/cclogo.png') }}" />
        </a>
        <!-- #end Logo -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
                aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="quote-btn">
                <span class="btn" href="/signup.html"><span>My Account</span></a>
            </div>
        </div>
        <!-- MainNav -->
        <nav class="navbar-collapse collapse" id="mainnav">
            <ul class="nav navbar-nav">

                <li><a href="/about-us">Who are we</a></li>
                <li><a href="/features">Features</a></li>
                <li>
                    <a href="/contact" class="dropdown-toggle">Contact <b class="carets"></b></a>
                </li>
                @auth
                <li><a href="#">|  {{ Auth::user()->name }}  |</a></li>
                <li class="quote-btn hidden-xs hidden-sm">
                    <a class="btn" href="{{ route('app') }}">My Account</a>
                </li>
                @else
                    <li>
                        <a href="/register">Register</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
               
                @endauth
            </ul>
        </nav>
        <!-- #end MainNav -->
    </div>
</div>
