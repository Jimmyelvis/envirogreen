<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome To Envirogreen Reality</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fonts/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css">
    <script src="https://kit.fontawesome.com/de1bfd50ad.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://use.typekit.net/usb8qya.css">


    <!-- Styles -->
    <link rel=" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="css/styles.css" rel="stylesheet">
    <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">

    <style>

    </style>

</head>

<body id="app-layout">


    <ul class="topnav">
        <li><i class="fas fa-location-arrow"></i> 1969 Sunnydale Street Springfield, MA</li>
        <li><i class="fas fa-phone-square"></i> 1-800-669-8869</li>
        <li><i class="fas fa-envelope-square"></i> mail@envirogreen.com</li>
    </ul>



    <div class="navbar navbar-default">

        <div class="container">

            <a class="navbar-brand" href="/"><img src="{{ asset('images/hder-logo.png') }}" alt=""></a>

            <span class="open-slide pull-right">

                <a href="#" onclick="openSlideMenu()">

                    <svg width="40" height="40">
                        <path d="M0,5 30,5" stroke="#1cc198" stroke-width="5" />
                        <path d="M0,14 30,14" stroke="#1cc198" stroke-width="5" />
                        <path d="M0,23 30,23" stroke="#1cc198" stroke-width="5" />
                    </svg>

                </a>

            </span>

            <ul class="navbar-navig pull-right">
                <li><a href="/" class="active">Home</a></li>
                <li class="d-down">
                    <a href="#" class="ddown-btn">About Us</a>
                    <div class="dwn-menu">
                        <a href="/staff">Our Agents</a>
                        <a href="/about">Background</a>
                    </div>
                </li>
                <li><a href="/listings">Listings</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

    </div>

    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <li><a href="/">Home</a></li>
        <li class="d-side-down">
            <a href="#" class="ddown-side-btn">About Us</a>
            <div class="dwn-side-menu">
                <a href="/staff">Our Agents</a>
                <a href="#">Background</a>
            </div>
        </li>
        <li><a href="/listings">Listings</a></li>
        <li><a href="/contact">Contact</a></li>
    </div>

    @yield('content')



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <h3>ENVIRO<span class="greentxt">GREEN</span></h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam tempore nemo cumque atque, asperiores quaerat earum, nesciunt consequatur</p>

                </div>

                <div class="col-md-4">
                    <h4>CONTACT US</h4>

                    <ul>
                        <li><i class="fas fa-location-arrow"></i>555-555-5555</li>
                        <li><i class="fas fa-envelope-square"></i>info@envirogreen</li>
                        <li><i class="fas fa-location-arrow"></i>869 Sunnyvale Road</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h4>NEWSLETTER</h4>

                    <p>Subscribe your email to get the latest news. </p>


                    <form class="form-inline">

                        <div class="form-group">
                            <label for="inputPassword2" class="sr-only">Email Address</label>
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-green">GO</button>
                    </form>


                </div>
            </div>

            <div class="row">

                <div class="copyright col-md-12">
                    <p>Copyright @ 2019 ENVIROGREEN</p>
                </div>
            </div>

        </div>

    </footer>

    <!-- <script src="js/slide-menu.js"></script> -->
    <script src="{{ asset('js/slide-menu.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>



</body>

</html>