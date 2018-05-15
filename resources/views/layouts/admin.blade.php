<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fonts/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css">

    <link rel="stylesheet" href="{{ URL::to('css/admin.css') }}">
    <!-- <link rel="stylesheet" href="{{asset('css/admin.css')}}"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

    <title>Evirogreen Admin</title>
</head>

<body>




    <div class="sidenav" id="sidemenu">

        <!-- <img class="nav-side-logo" src="images/ftr_logo.png" alt=""> -->
        <img class="nav-side-logo" src="{{asset('images/ftr_logo.png')}}" alt="">


            <ul>

                <li class="d-side-down">
                    <a href="/admin" class="active">Dashboard Home</a>
                </li>

                <li class="d-side-down">
                    <a href="#" class="ddown-side-btn" onclick="toggleNavPanel('dwn-side-menu')">Staff
                       <span class="navarrow ">&#9662;</span>
                    </a>
                    <div class="dwn-side-menu">
                        <a href="{{route('admin.users.index')}}">All Staff</a>
                        <a href="{{route('admin.users.create')}}">Create Staff</a>
                    </div>
                </li>

                <li class="d-side-down">
                    <a href="#" class="ddown-side-btn" onclick="toggleNavPanel2('dwn-side-menu')">Listings
                       <span class="navarrow">&#9662;</span>
                    </a>
                    <div class="dwn-side-menu">
                        <a href="{{route('admin.listings.index')}}">All Listings</a>
                        <a href="{{route('admin.listings.create')}}">Create Listing</a>
                    </div>
                </li>

                <li class="d-side-down">
                    <a href="#" class="ddown-side-btn" onclick="toggleNavPanel3('dwn-side-menu')">Categories
                       <span class="navarrow">&#9662;</span>
                    </a>
                    <div class="dwn-side-menu">
                        <a href="#">All Categories</a>
                        <a href="#">Create Category</a>
                    </div>
                </li>

                <li class="d-side-down">
                    <a href="#" class="ddown-side-btn" onclick="toggleNavPanel4('dwn-side-menu')">Media
                       <span class="navarrow">&#9662;</span>
                    </a>
                    <div class="dwn-side-menu">
                        <a href="#">All Media</a>
                        <a href="#">Upload Staff Photo</a>
                        <a href="#">Upload Listing Photo</a>
                    </div>
                </li>

            </ul>



    </div>

        <nav id="login" >

        <div class="row">

            <div class="col-md-5 login-pic-holder">

                <img class="login-pic img-circle" src="{{auth()->user()->photo->file}}" alt="">
            </div>

            <div class="col-md-7">
                <h3>{{ auth()->user()->name }}</h3>
                <h4>{{ auth()->user()->position->name }}</h4>
                <h5 class="pull-right"><a href="{{ url('/logout')  }}">Logout &nbsp</a><span class="logout"><i class="fas fa-sign-out-alt"></i></span></h5>
            </div>

        </div>

    </nav>

    @yield('content')


    <!-- <script src="js/slide-menu.js"></script> -->
    <script src="{{asset('js/slide-menu.js')}}"></script>

    @yield('footer')

  </body>

  </html>
