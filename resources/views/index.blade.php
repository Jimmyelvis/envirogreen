@extends('layouts.home-app')

@section('content')

    <div class="jumbotron ">

        <div class="container">

            <h1>LET'S BRING YOU HOME</h1>
            <h3>Finding Dream For Every Owner. We can help, let's find out how</h3>


            <div id="home-search">

                <form action="/search" method="GET" role="search">

                    {{ csrf_field() }}

                    <div class="form-wrapper">

                        <input type="text" class="search-query" name="q"
                            placeholder="Enter a city to find available listings" autocomplete="off" id="searchname">

                        <div class="cityList"></div>
                    </div>

                    <button type="submit" class="btn btn-green">SEARCH</button>

                </form>

            </div>

        </div>

        <div class="overlay"></div>
    </div>


    <section id="featured">

        <div class="container">

            <div class="headline">
                <h2>FEATURED LISTINGS</h2>
                <h3>Some of our highlighted listings</h3>
            </div>

            <div class="items">

                <div class="card listing-card">

                    <img class="card-img-top" src="{{ asset('images/houses/1526524107pexels-photo-164516.jpg') }}"
                        alt="Card image cap">


                    <div class="card-body">

                        <a href="/listings/12" class="street-price">
                            <h4 class="street">1645 PEACHVILLE DRIVE</h4>
                            <h4 class="price">$240,500</h4>
                            <h5 class="city">Agawam, MA</h5>
                        </a>


                        <div class="listInfo">
                            <div class="left">
                                <ul class="entry">
                                    <li>BEDS:</li>
                                    <li class="number">4</li>
                                </ul>
                                <ul class="entry">
                                    <li>BATHS:</li>
                                    <li class="number">3</li>
                                </ul>
                            </div>

                            <div class="right">
                                <ul class="entry">
                                    <li>SQFT:</li>
                                    <li class="number">1500</li>
                                </ul>
                                <ul class="entry">
                                    <li>FLOORS:</li>
                                    <li class="number">3</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="card listing-card">

                    <img class="card-img-top" src="{{ asset('images/houses/1526524294pexels-photo-206172.jpeg') }}"
                        alt="Card image cap">


                    <div class="card-body">

                        <a href="/listings/13" class="street-price">
                            <h4 class="street">90 GRANITE AVE</h4>
                            <h4 class="price">$250,000</h4>
                            <h5 class="city">East Longmeadow, MA</h5>
                        </a>


                        <div class="listInfo">
                            <div class="left">
                                <ul class="entry">
                                    <li>BEDS:</li>
                                    <li class="number">5</li>
                                </ul>
                                <ul class="entry">
                                    <li>BATHS:</li>
                                    <li class="number">1</li>
                                </ul>
                            </div>

                            <div class="right">
                                <ul class="entry">
                                    <li>SQFT:</li>
                                    <li class="number">3000</li>
                                </ul>
                                <ul class="entry">
                                    <li>FLOORS:</li>
                                    <li class="number">2</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="card listing-card">

                    <img class="card-img-top" src="{{ asset('images/houses/1526524107pexels-photo-164516.jpg') }}"
                        alt="Card image cap">


                    <div class="card-body">

                        <a href="/listings/16" class="street-price">
                            <h4 class="street">68 WINTER DRIVE</h4>
                            <h4 class="price">$465,500</h4>
                            <h5 class="city">Manchester, CT</h5>
                        </a>


                        <div class="listInfo">
                            <div class="left">
                                <ul class="entry">
                                    <li>BEDS:</li>
                                    <li class="number">7</li>
                                </ul>
                                <ul class="entry">
                                    <li>BATHS:</li>
                                    <li class="number">3</li>
                                </ul>
                            </div>

                            <div class="right">
                                <ul class="entry">
                                    <li>SQFT:</li>
                                    <li class="number">4500</li>
                                </ul>
                                <ul class="entry">
                                    <li>FLOORS:</li>
                                    <li class="number">3</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="services">

        <div class="container">

            <div class="headline">
                <h2>Our Services</h2>
                <h3>Take advantage of some of our services</h3>
            </div>


            <div class="entries">

                <div class="service">

                    <div class="picholder">
                        <img src="{{ asset('images/houses/1526524294pexels-photo-206172.jpeg') }}">
                    </div>

                    <h2>BUY PROPERTY</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati alias eveniet aperiam provident
                        accusantium, reiciendis consectetur quos! Voluptate quasi,
                    </p>

                </div>

                <div class="service">

                    <div class="picholder">
                        <img
                            src="{{ asset('images/interiors/1522460183kitchen-stove-sink-kitchen-counter-349749.jpg') }}">
                    </div>

                    <h2>RENT PROPERTY</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati alias eveniet
                        aperiam provident accusantium, reiciendis consectetur quos! Voluptate quasi,
                    </p>

                </div>

                <div class="service">

                    <div class="picholder">
                        <img src="{{ asset('images/houses/1522788571pexels-photo-139115.jpeg') }}">
                    </div>

                    <h2>SELL PROPERTY</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati alias eveniet
                        aperiam provident accusantium, reiciendis consectetur quos! Voluptate quasi,
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section id="blog">

        <div class="container">

            <div class="headline">
                <h2>SOME OF OUR HELPFULL ARTICLES</h2>
                <h3>Featured Blog Articles</h3>
            </div>

            <div class="entries">

                <div class="card">

                    <div class="card-img-top">

                        <img class="card-img-top"
                            src="{{ asset('images/interiors/1522460535pexels-photo-275484.jpeg') }}" alt="Card image cap">

                        <ul class="author">
                            <li>Randy Smith</li>
                            <li>May 19, 2019</li>
                        </ul>

                    </div>


                    <div class="card-body">

                        <h3>Buying a Home</h3>

                        <div class="text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste laborum maxime iusto sapiente
                                omnis assumenda debitis perspiciatis, ...</p>

                        </div>


                    </div>

                    <a href="#" class="readmore">Read More</a>
                </div>

                <div class="card">

                    <div class="card-img-top">

                        <img class="card-img-top"
                            src="{{ asset('images/interiors/apartment-books-chairs-2079246.jpg') }}" alt="Card image cap">

                        <ul class="author">
                            <li>Kelly Harris</li>
                            <li>May 20, 2019</li>
                        </ul>
                    </div>


                    <div class="card-body">

                        <h3>Selling Your Home</h3>

                        <div class="text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste laborum maxime
                                iusto sapiente omnis assumenda debitis perspiciatis, ...</p>
                        </div>

                        <a href="#" class="readmore">Read More</a>

                    </div>

                </div>

                <div class="card">

                    <div class="card-img-top">

                        <img class="card-img-top" src="{{ asset('images/houses/1526523545pexels-photo-139115.jpeg') }}">

                        <ul class="author">
                            <li>Kyle Owens</li>
                            <li>May 21, 2019</li>
                        </ul>

                    </div>

                    <div class="card-body">

                        <h3>Mortage Tips</h3>

                        <div class="text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste laborum maxime
                                iusto sapiente omnis assumenda debitis perspiciatis, ...</p>
                        </div>

                        <a href="#" class="readmore">Read More</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="partners">
        <div class="container">
            <ul>
                <li><img src="{{ asset('images/arrowhead.png') }}"></li>
                <li><img src="{{ asset('images/greatnorth.png') }}"></li>
                <li><img src="{{ asset('images/amstercafe.png') }}"></li>
                <li><img src="{{ asset('images/olivetree.png') }}"></li>
            </ul>
        </div>
    </section>

    <section id="newsletter">

        <div class="container">
            <h3>Sign up for our newsletter</h3>
            <form action="">
                <input class="newsletterinput" type="text" placeholder="Enter your email">
                <img src="{{ asset('images/Icon material-send.png') }}" class="sendarrow" alt="">
            </form>
        </div>

    </section>



    <script type="text/javascript">
        $("#searchname").focus(function() {
            document.getElementById('home-search').style.top = '-13rem';
        });

        // $('#searchname').blur(function() {
        //   document.getElementById('home-search').style.top = '0rem';
        // });


        $('#searchname').autocomplete({

            source: '{!! URL::route('autocomplete') !!}',
            minlength: 1,
            autoFocus: true,
            appendTo: "#home-search"


        });
    </script>

@endsection
