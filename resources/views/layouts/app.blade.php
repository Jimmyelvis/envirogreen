<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome To Envirogreen Reality</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link href="css/styles.css" rel="stylesheet">
      <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">

    <style>

    </style>

</head>
<body id="app-layout">


      <div class="topnav">

    	<ul class="top-nav-list">
    		<li><i class="fas fa-location-arrow"></i> 1969 Sunnydale Street Springfield, MA</li>
    		<li><i class="fas fa-phone-square"></i>   1-800-669-8869</li>
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
    				<li><a href="/listings">Listing</a></li>
    				<li><a href="#">Contact</a></li>
            <!-- <li><a href="#" class="login">Login</a></li>
            <li><a href="#" class="register">Register</a></li> -->
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
            <a href="#">Background</a>
          </div>
        </li>
        <li><a href="/listings">Listings</a></li>
        <li><a href="#">Contact</a></li>
      </div>

    @yield('content')



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <footer>


        <div class="top">

            <div class="container">

                <div class="row">

                    <img class="btm-ftr" src="{{ asset('images/ftr_logo.png') }} " alt="">

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
                    <li><a href="/">HOME</a></li>
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
