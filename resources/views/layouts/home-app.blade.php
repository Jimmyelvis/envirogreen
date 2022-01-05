<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Welcome To Envirogreen Reality</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="fonts/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css">

  <!-- Styles -->
  <link rel=" stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.typekit.net/usb8qya.css">
  <link href="css/styles.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>



  <style>
    .navbar {
      position: relative;
      margin-top: 0;
      border: 1px solid transparent;
      background-color: rgba(255, 255, 255, 0.90);
      height: 110px;
    }



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
        <a href="/about">Background</a>
      </div>
    </li>
    <li><a href="/listings">Listings</a></li>
    <li><a href="/contact">Contact</a></li>
  </div>


  @yield('content')




  <!-- <footer>


    <div class="top">

      <div class="container">

        <div class="row">

          <img class="btm-ftr" src="{{ asset('images/ftr_logo.png') }}" alt="">

        </div>

        <div class="row">

          <div class="col-md-4 col-md-offset-4">
            <h4>2017 ENVIROGREEN </h4>
          </div>

        </div>



      </div>

    </div>

    <div class="bottom">


      <div class="container">

        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="">ABOUT US</a></li>
          <li><a href="">PROPERTIES</a></li>
          <li><a href="">BLOG</a></li>
          <li><a href="">CONTACT</a></li>
        </ul>

      </div>


    </div>

  </footer> -->

  <script src="js/slide-menu.js"></script>


</body>

</html>