<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link rel="icon" href="/images/logoSanital.png" type="image/gif" sizes="32x32">

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
                <li class="navbar-li-facility"><a id="home-facility"
                        href="/brandschutz-wasserloschanlagen">Brandschutz/Wasserlöschanlagen</a></li>
                <li class="navbar-li-facility"><a id="uberuns-facility" href="/brandschutz-uberuns">Über uns</a></li>
                <li class="navbar-li-facility"><a id="referenzen-facility" href="/brandschutz-references">Referenzen</a>
                </li>
                <li class="navbar-li-facility"><a id="jobs-facility" href="/brandschutz-job">Jobs</a></li>
                <li class="navbar-li-facility"><a id="jobs-facility" href="/kontakt">Kontakt</a></li>
        </nav>
    </header>

    <div class="mobile-nav">
        <div id="mySidepanel" class="sidepanel">
            <a href="/facility-managment">Facility Management</a>
            <a href="/brandschutz-wasserloschanlagen">Brandschutz/Wasserlöschanlagen</a>
            <a href="/belagsarbeiten-und-bodenbelage">Belagsarbeiten und
                Bodenbeläge</a>
            <a href="/contact">Kontakt</a>
            <a href="pavascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <div class="mobile-nav-wrap-outter">
            <div class="mobile-nav-wrap-inner">
                <img class="logo" id="logoID" src="/images/logoSanitalWhite.png" alt="logo">

                <button class="openbtn" onclick="openNav()">&#9776;</button>
            </div>
        </div>
        <script>
            function openNav() {
                document.getElementById("mySidepanel").style.width = "50%";
            }

            /* Set the width of the sidebar to 0 (hide it) */
            function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
            }

        </script>
    </div>

    @yield('content')

    <div class="footer">
        <div class="inner-footer">
            <!--  for company name and description -->
            <div class="footer-items">
                <a class="footer-text-logo-link" href="#">
                    <h1 class="footer-text-logo-h1">Sanical AG</h1>
                </a>
            </div>

            <!--  for quick links  -->
            <div class="footer-items">
                <ul class="footer-ul">
                    <a class="footer-link" href="/facility-managment">
                        <li class="footer-li">Facility Management</li>
                    </a>
                    <a class="footer-link" href="/brandschutz-wasserloschanlagen">
                        <li class="footer-li">Brandschutz/Wasserlöschanlagen</li>
                    </a>
                    <a class="footer-link" href="/belagsarbeiten-und-bodenbelage">
                        <li class="footer-li">Belagsarbeiten und Bodenbeläge</li>
                    </a>
                    <a class="footer-link" href="/kontakt">
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
                        <i class="fa fa-map-marker" aria-hidden="true"></i>Europa-Strasse 17
                    </li>
                    <li class="footer-li">
                        <i class="fa fa-phone" aria-hidden="true"></i>044/ 202 20 10
                    </li>
                    <li class="footer-li">
                        <i class="fa fa-envelope" aria-hidden="true"></i>info@sanical-ag.ch
                    </li>
                </ul>

                <!--   for social links -->
                <div class="social-media">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href="kontakt.html"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!--   Footer Bottom start  -->
        <div class="footer-bottom" style="text-align: center !important">Copyright &copy; Screnshoot 2020</div>
        <script>
            AOS.init({
                duration: 1200,
            })

        </script>
</body>

</html>
