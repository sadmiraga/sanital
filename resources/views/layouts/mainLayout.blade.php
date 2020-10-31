<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- StAyles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="{{URL::to('js/mainLayoutJS.js') }}"></script>

</head>

<body>

    <!-- Navbar -->
    <header id="navbarID">
        <img class="logo" id="logoID" src="images/logoSanital.png" alt="logo">
        <nav>
            <ul class="nav-links">
                <li class="navbar-li"><a id="home" href="#">Home</a></li>
                <li class="navbar-li"><a id="uberuns" href="#">Über uns</a></li>
                <li class="navbar-li"><a id="about" href="#">Referenzen</a></li>
                <li class="navbar-li"><a id="about" href="#">Jobs</a></li>
                <a href="#"><button id="navbar-buttonID">
                        <p class="navbar-button-text">Kontakt</p>
                    </button></a>
        </nav>
    </header>

    <div class="mobile-nav">
        <div id="mySidepanel" class="sidepanel">
            <a href="/indexDesign">Home</a>
            <a href="/products">Über uns</a>
            <a href="/about">Referenzen</a>
            <a href="/contact">Jobs</a>
            <a href="/contact">Kontakt</a>
        </div>
        <a href="pavascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <div class="mobile-nav-wrap-outter">
        <div class="mobile-nav-wrap-inner">
            <img class="logo" id="logoID" src="/images/logoSanital.png" alt="kita">

            <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>
    </div>
    </div>


    @yield('content')
    <script>
    AOS.init({
        duration: 1200,
    })
    </script>
</body>

</html>
