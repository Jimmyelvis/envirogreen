<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Welcome To Envirogreen Reality</title>

    <!-- Fonts -->
    <link href="{{ URL::to('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::to('fonts/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css') }}" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="https://use.typekit.net/usb8qya.css">
    <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->


</head>


<body id="app-layout">


    <nav class="nav">

        <ul class="topnav">
            <div class="container">
                <li><i class="fas fa-location-arrow"></i> 1969 Sunnydale Street Springfield, MA</li>
                <li><i class="fas fa-phone-square"></i> 1-800-669-8869</li>
                <li><i class="fas fa-envelope-square"></i> mail@envirogreen.com</li>
            </div>
        </ul>

        <div class="bottomnav">

            <div class="container">

                <a class="navbar-brand" href="/"><img src="{{ asset('images/hder-logo-2021-white-txt.png') }}" alt=""></a>

                <ul class="navbar-navig">
                    <li><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                    <li class="d-down">
                        <a href="#" class="ddown-btn 
                            {{ (request()->is('staff*')) || (request()->is('about')) ? 'active' : '' }}
                        ">
                            About Us
                        </a>
                        <div class="dwn-menu">
                            <a href="/staff">Our Staff</a>
                            <a href="/about">Background</a>
                        </div>
                    </li>
                    <li>
                        <a href="/listings" class="{{ (request()->is('listings*')) ? 'active' : '' }}">
                            Listings
                        </a>
                    </li>
                    <li><a href="/contact" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</a></li>
                </ul>

                <span class="open-slide">

                    <a href="#" onclick="openSlideMenu()">
                        <img src="{{ asset('images/Icon ionic-md-menu.png') }}" alt="" class="open-icon">
                    </a>

                </span>

            </div>

        </div>

    </nav>





    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>

        <div class="links">
            <li><a href="/">Home</a></li>
            <li class="d-side-down">
                <a href="#" class="ddown-side-btn">About Us</a>
                <div class="dwn-side-menu">
                    <a href="/staff">Our Staff</a>
                    <a href="/about">Background</a>
                </div>
            </li>
            <li><a href="/listings">Listings</a></li>
            <li><a href="/contact">Contact</a></li>
        </div>

        <div class="info">
            <li><i class="fas fa-location-arrow"></i> 1969 Sunnydale Street Springfield, MA</li>
            <li><i class="fas fa-phone-square"></i> 1-800-669-8869</li>
            <li><i class="fas fa-envelope-square"></i> mail@envirogreen.com</li>
        </div>
    </div>


    @yield('content')




    <footer>

        <div class="container">

            <div class="entry">
                <h3>Envirogreen</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi rem deleniti, est, nulla ab
                    molestias omnis modi qui odit unde impedit fugiat dolor quas alias!
                </p>
            </div>

            <div class="entry">
                <h3>Contact Us</h3>

                <ul class="info">
                    <li>
                        <img src="{{ asset('images/Icon material-email-ftr.png') }}" class="ftr-icon" alt="">
                        info@envirogreen.com
                    </li>
                    <li>
                        <img src="{{ asset('images/Icon awesome-phone-ftr.png') }}" class="ftr-icon" alt="">
                        777-777-7777
                    </li>
                    <li>
                        <img src="{{ asset('images/Icon material-send-ftr.png') }}" class="ftr-icon" alt="">
                        1969 SunnyVale Road
                    </li>
                </ul>
            </div>

            <div class="entry">
                <h3>Useful Links</h3>

                <ul class="links">
                    <li>
                        <a href="/staff">Staff</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li><a href="/listings">Listings</a></li>
                </ul>
            </div>


        </div>

        <div class="container copycontain">
            <p class="copyright">Copyright 2022 <span class="greentxt">Envirogreen Reality</span></p>
        </div>


    </footer>


    <script src="{{ URL::to('js/slide-menu.js') }}"></script>
    <script src="{{ URL::to('js/scripts.js') }}"></script>



</body>

</html>