<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link rel="icon" href="/images/logoSanital.png" type="image/gif" sizes="32x32">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- StAyles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

    <!-- Navbar -->
    <header class="header-facility" id="navbarID-facility">
        <img onclick="location.href='/'" class="logo" id="logoID" src="/images/logoSanitalWhite.png" alt="logo">
        <nav>
            <ul class="nav-links-facility">
                <li class="navbar-li-facility"><a id="home-facility" href="/belagsarbeiten-und-bodenbelage">Belagsarbeiten und Bodenbelage</a></li>
                <li class="navbar-li-facility"><a id="uberuns-facility" href="/belagsarbeiten-uberuns">Über uns</a></li>
                <li class="navbar-li-facility"><a id="referenzen-facility" href="/belagsarbeiten-references">Referenzen</a></li>
                <li class="navbar-li-facility"><a id="jobs-facility" href="/belagsarbeiten-job">Jobs</a></li>
                <li class="navbar-li-facility"><a id="jobs-facility" href="/kontakt">Kontakt</a></li>
        </nav>
    </header>
<!--
    <div class="mobile-nav">
        <div id="mySidepanel" class="sidepanel">
            <a href="#">Home</a>
            <a href="/products">Über uns</a>
            <a href="/about">Referenzen</a>
            <a href="/contact">Jobs</a>
            <a href="/contact">Kontakt</a>
        </div>
        <a href="pavascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <div class="mobile-nav-wrap-outter">
        <div class="mobile-nav-wrap-inner">
            <img class="logo" id="logoID" src="/images/logoSanitalWhite.png" alt="logo">

            <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>
    </div>
    !-->

    @yield('content')

    <div class="footer">
        <div class="inner-footer">
            <!--  for company name and description -->
            <div class="footer-items">
                <a class="footer-text-logo-link" href="#">
                    <h1 class="footer-text-logo-h1">Sanical GmbH</h1>
                </a>
            </div>

            <!--  for quick links  -->
            <div class="footer-items">
                <ul class="footer-ul">
                    <a class="footer-link" href="index.html">
                        <li class="footer-li">Home</li>
                    </a>
                    <a class="footer-link" href="about.html">
                        <li class="footer-li">Über uns</li>
                    </a>
                    <a class="footer-link" href="jobs.html">
                        <li class="footer-li">Referenzen</li>
                    </a>
                    <a class="footer-link" href="kontakt.html">
                        <li class="footer-li">Jobs</li>
                    </a>
                    <a class="footer-link" href="kontakt.html">
                        <li class="footer-li">Kontakt</li>
                    </a>
                </ul>
            </div>

            <!--  for some other links -->
            <div class="footer-items">

            </div>

            <!--  for contact us info -->
            <div class="footer-items">
                <ul class="footer-ul">
                    <li class="footer-li">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>Almerstrasse 12
                    </li>
                    <li class="footer-li">
                        <i class="fa fa-phone" aria-hidden="true"></i>0677 640 641 13
                    </li>
                    <li class="footer-li">
                        <i class="fa fa-envelope" aria-hidden="true"></i>info@atec-ab.at
                    </li>
                </ul>

                <!--   for social links -->
                <div class="social-media">
                    <a href="https://www.facebook.com/ATEC-Arbeitsb%C3%BChnen-GmbH-105835384570594"><i
                            class="fa fa-facebook"></i></a>
                    <a
                        href="https://ch.linkedin.com/public-profile/in/nedim-nedzibi-05522b174?challengeId=AQHVsMNgTzP4bwAAAXQH9F3IDQGiQKcgfIAdv2CsBfXTMuBxdBfwYVOTveozdirt-4S-36j5T7_syIE-xfm4S7ublEE4pScdDQ&submissionId=6cc4d56e-60be-2c16-749d-6702cef2be31"><i
                            class="fa fa-linkedin"></i></a>
                    <a href="kontakt.html"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!--   Footer Bottom start  -->
        <div class="footer-bottom">Copyright &copy; Screnshoot 2020</div>
        <script>
        AOS.init({
            duration: 1200,
        })
        </script>
</body>

</html>
