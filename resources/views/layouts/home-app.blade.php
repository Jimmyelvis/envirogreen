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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



  <style>
    .navbar {
      position: relative;
      min-height: 50px;
      margin-bottom: 20px;
      border: 1px solid transparent;
    }

    /*//////////////////////////////////////JUMBOTRON///////////////////////*/

    .jumbotron {
      background-image: url(images/full-house-pic-3.jpg);
      margin-top: -135px;
      padding-top: 153px;
      padding-bottom: 13%;
      background-size: cover;
    }

    .jumbotron h1,
    .jumbotron h3 {
      text-shadow: 1px 1px 1px #000000;
    }

    .jumbotron h1{
      color: #272727;
      font-size: 53px;
    }

    .jumbotron h3 {
      color: rgba(255, 255, 255, 1.00);
      font-size: 28px;
    }

    .ui-helper-hidden-accessible {
        display: none;
    }

    @media (max-width: 1100px) {

      .jumbotron h1 {
        font-size: 280%;
      }

      .jumbotron h3 {
        font-size: 180%;
      }

    }

    @media (max-width: 780px) {

      .jumbotron h1 {
        font-size: 240%;
      }

      .jumbotron h3 {
        font-size: 140%;
      }

    }

    @media (max-width: 500px) {

      .jumbotron h1 {
        font-size: 200%;
        text-align: center;
      }

      .jumbotron h3 {
        font-size: 140%;
        width: 90%;
        margin: 20px auto 0 auto;
        text-align: center;
      }

    }


  </style>


</head>


<body id="app-layout">

  <div class="topnav">

    <ul class="top-nav-list">
      <li><i class="fas fa-location-arrow"></i> 1969 Sunnydale Street Springfield, MA</li>
      <li><i class="fas fa-phone-square"></i> 1-800-669-8869</li>
      <li><i class="fas fa-envelope-square"></i> mail@envirogreen.com</li>
    </ul>

  </div>

  <nav class="navbar navbar-default">



    <div class="container">

      <a class="navbar-brand" href="/"><img src="{{ asset('images/hder-logo.png') }}" alt=""></a>

      <span class="open-slide pull-right">

			<a href="#" onclick="openSlideMenu()">

				<svg width="40" height="40">
					<path d="M0,5 30,5" stroke="#1cc198" stroke-width="5"/>
					<path d="M0,14 30,14" stroke="#1cc198" stroke-width="5"/>
					<path d="M0,23 30,23" stroke="#1cc198" stroke-width="5"/>
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


  </nav>

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




  <footer>


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

  </footer>

   <script src="js/slide-menu.js"></script>


</body>

</html>
