@extends('layouts.home-app')

@section('content')

<div class="jumbotron">

        <div class="container">

            <h1>LET'S BRING YOU HOME</h1>

            <h3>WE CAN HELP, LET'S FIND OUT HOW</h3>

            <div id="home-search">

                <form action="/search" method="GET" role="search">
             			{{ csrf_field() }}

                    <div class="form-wrapper">
                     		<input type="text" class="search-query" name="q"	placeholder="Search citys" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-success">SEARCH</button>

               </form>

            </div>

        </div>

    </div>


    <section id="featured">
        <div class="container">
            <h2>FEATURED LISTINGS</h2>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feat-listing"> <img src="images/houses\pexels-photo-221024.jpeg" alt="">
                        <h3>69 Walsh st.</h3>
                        <h4>Seattle Washington</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione blanditiis voluptates asperiores culpa unde voluptas temporibus totam neque, in placeat!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="feat-listing"> <img src="images/houses\pexels-photo-221024.jpeg" alt="">
                        <h3>69 Walsh st.</h3>
                        <h4>Seattle Washington</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione blanditiis voluptates asperiores culpa unde voluptas temporibus totam neque, in placeat!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="feat-listing"> <img src="images/houses\pexels-photo-221024.jpeg" alt="">
                        <h3>69 Walsh st.</h3>
                        <h4>Seattle Washington</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione blanditiis voluptates asperiores culpa unde voluptas temporibus totam neque, in placeat!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //////////////////////////////////////////LEFT OFF HERE///////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->

    <section id="whoweare">
        <div class="row">

            <div class="col-md-6" id="whotxt">
                <h3>WHO ARE WE</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
            </div>

            <div class="col-md-6">
                <img class="who-img img-responsive" src="images/houses\pexels-photo-221024.jpeg" alt="">
            </div>

        </div>
    </section>


    <section id="testimonials">
        <div class="container">
            <h2>WHAT OUR CUSTOMERS SAY ABOUT US</h2>
            <div class="row">

                <div class="quote col-md-6">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                        First Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quisquam velit nisi excepturi omnis reiciendis perspiciatis, earum, perferendis harum repellendus magnam deserunt est sunt dolorum.
                    </p>

                    <h4>Tom Mitchell</h4>

                </div>

                <div class="quote col-md-6">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                        Second Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quisquam velit nisi excepturi omnis reiciendis perspiciatis, earum, perferendis harum repellendus magnam deserunt est sunt dolorum.
                    </p>

                    <h4>Jim Mitchell</h4>

                </div>

            </div>


            <div class="row">

                <div class="quote col-md-6">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quisquam velit nisi excepturi omnis reiciendis perspiciatis, earum, perferendis harum repellendus magnam deserunt est sunt dolorum.
                    </p>

                    <h4>Joe Mitchell</h4>

                </div>

                <div class="quote col-md-6">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quisquam velit nisi excepturi omnis reiciendis perspiciatis, earum, perferendis harum repellendus magnam deserunt est sunt dolorum.
                    </p>

                    <h4>Ray Mitchell</h4>

                </div>

            </div>

        </div>

    </section>


@endsection
