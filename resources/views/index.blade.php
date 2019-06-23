@extends('layouts.home-app')

@section('content')

 <div class="jumbotron ">

     

      <div class="container">


          <div class="col-md-10 offset-md-1">

            <h1>LET'S BRING YOU HOME</h1>

            <h3>Finding Dream For Every Owner. We can help, let's find out how</h3>

          </div>

          <div class="row">

              <div class="col-md-8 offset-md-2">

                  <div id="home-search">

                      <form action="/search" method="GET" role="search">
                          {{ csrf_field() }}

                          <div class="form-wrapper">
                              <input type="text" class="search-query" name="q" placeholder="Enter a city to find available listings"
                                  autocomplete="off" id="searchname">
                          </div>

                          <button type="submit" class="btn btn-green">SEARCH</button>

                      </form>

                  </div>


              </div>

          </div>

          

      </div>

      
    </div>


    <div class="wrapper container">

        <section id="featured">

            <div class="container">

                <div class="headline col-md-12">
                    <h3>FIND YOUR HOME</h3>
                    <h2>FEATURED LISTINGS</h2>
                </div>

                <div class="row">

                    <div class="card col-md-4">

                        <img class="card-img-top" src="{{ asset('images/houses/1522785654pexels-photo-259098.jpg') }}"
                            alt="Card image cap">

                        <span class="forsale">Featured</span>

                        <div class="card-body">

                            <h4>69 Waters Street</h4>
                            <h5>Springfield,MA.</h5>

                            <div class="col-md-12">
                                <span class="price">$170,000</span>
                            </div>

                            <div class="col-md-12">

                                <ul class="listInfo">
                                    <li>BEDS: <span class="listnumber">4</span></li>
                                    <li>BATHS: <span class="listnumber">2</span></li>
                                    <li>SQFT: <span class="listnumber">1500</span></li>
                                </ul>

                            </div>

                            <a href="#" class="btn btn-green">Read More</a>

                        </div>

                    </div>

                    <div class="card col-md-4">

                        <img class="card-img-top" src="{{ asset('images/houses/1526524294pexels-photo-206172.jpeg') }}"
                            alt="Card image cap">

                        <span class="forsale">Featured</span>

                        <div class="card-body">

                            <h4>73 River Drive</h4>
                            <h5>Monson,MA.</h5>

                            <div class="col-md-12">
                                <span class="price">$200,000</span>
                            </div>

                            <div class="col-md-12">

                                <ul class="listInfo">
                                    <li>BEDS: <span class="listnumber">4</span></li>
                                    <li>BATHS: <span class="listnumber">2</span></li>
                                    <li>SQFT: <span class="listnumber">1700</span></li>
                                </ul>

                            </div>

                            <a href="#" class="btn btn-green">Read More</a>

                        </div>

                    </div>

                    <div class="card col-md-4">

                        <img class="card-img-top" src="{{ asset('images/houses/1526519761pexels-photo-164539.jpeg') }}"
                            alt="Card image cap">

                        <span class="forsale">Featured</span>

                        <div class="card-body">

                            <h4>76 Splash Road</h4>
                            <h5>Enfield,CT.</h5>

                            <div class="col-md-12">
                                <span class="price">$220,000</span>
                            </div>

                            <div class="col-md-12">

                                <ul class="listInfo">
                                    <li>BEDS: <span class="listnumber">5</span></li>
                                    <li>BATHS: <span class="listnumber">2</span></li>
                                    <li>SQFT: <span class="listnumber">2500</span></li>
                                </ul>

                            </div>

                            <a href="#" class="btn btn-green">Read More</a>

                        </div>

                    </div>


                </div>



            </div>





            </section>

            <section id="services">

                <div class="container">

                    <div class="row">

                        <div class="headline col-md-4 offset-md-4">
                            <h3>FIND YOUR HOME</h3>
                            <h2>SERVICES WE OFFER</h2>
                        </div>

                    </div>

                    <div class="row">

                        <div class="servdescrip col-md-12">

                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum minus distinctio eius illo quis possimus impedit, voluptatum debitis doloremque ipsam enim eum eligendi modi nesciunt aspernatur officiis voluptates blanditiis. Laudantium nobis impedit a quisquam officiis. Illo quos tenetur officiis incidunt eum non, praesentium quam quo quasi 

                        </div>

                    </div>

                    <div class="row">

                        <div class="service col-md-4">

                            <div class="picholder">
                                <img src="{{ asset('images/houses/1526524294pexels-photo-206172.jpeg') }}">
                            </div>

                            <h3>BUY PROPERTY</h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati alias eveniet aperiam provident accusantium, reiciendis consectetur quos! Voluptate quasi, 
                            </p>

                        </div>

                        <div class="service col-md-4">

                            <div class="picholder">
                                <img src="{{ asset('images/interiors/1522460183kitchen-stove-sink-kitchen-counter-349749.jpg') }}">
                            </div>

                            <h3>RENT PROPERTY</h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati alias eveniet
                                aperiam provident accusantium, reiciendis consectetur quos! Voluptate quasi, 
                            </p>

                        </div>

                        <div class="service col-md-4">

                            <div class="picholder">
                                <img src="{{ asset('images/houses/1522788571pexels-photo-139115.jpeg') }}">
                            </div>

                            <h3>SELL PROPERTY</h3>

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

                    <div class="row">
                        <div class="headline col-md-4 offset-md-4">
                            <h3>SOME OF OUR HELPFULL ARTICLES</h3>
                            <h2>Latest Blog Articles</h2>
                        </div>
                    </div>

                    <div class="row">

                         <div class="card col-md-4">

                             <div class="picholder">

                                 <img class="card-img-top"
                                 src="{{ asset('images/interiors/1522460535pexels-photo-275484.jpeg') }}"
                                 alt="Card image cap">

                             </div>

                             
                             <div class="card-body">
                                 
                                 <ul class="author">
                                     <li>Randy Smith</li>
                                     <li>May 19, 2019</li>
                                 </ul>

                                 <h4>Buying a Home</h4>

                                
                                 <div class="text col-md-12">

                                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste laborum maxime iusto sapiente omnis assumenda debitis perspiciatis, ...</p>

                                 </div>

                                 <a href="#" class="btn btn-green">Read More</a>

                             </div>

                         </div>

                         <div class="card col-md-4">

                             <div class="picholder">

                                  <img class="card-img-top"
                                 src="{{ asset('images/interiors/apartment-books-chairs-2079246.jpg') }}"
                                 alt="Card image cap">

                             </div>


                             <div class="card-body">

                                 <ul class="author">
                                     <li>Kelly Harris</li>
                                     <li>May 20, 2019</li>
                                 </ul>

                                 <h4>Selling Your Home</h4>


                                 <div class="text col-md-12">

                                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste laborum maxime
                                         iusto sapiente omnis assumenda debitis perspiciatis, ...</p>

                                 </div>

                                 <a href="#" class="btn btn-green">Read More</a>

                             </div>

                         </div>

                         <div class="card col-md-4">

                             <div class="picholder">

                                 <img class="card-img-top"
                                 src="{{ asset('images/houses/1526523545pexels-photo-139115.jpeg') }}">


                             </div>

                             
                             <div class="card-body">

                                 <ul class="author">
                                     <li>Kyle Owens</li>
                                     <li>May 21, 2019</li>
                                 </ul>

                                 <h4>Mortage Tips</h4>


                                 <div class="text col-md-12">

                                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste laborum maxime
                                         iusto sapiente omnis assumenda debitis perspiciatis, ...</p>

                                 </div>

                                 <a href="#" class="btn btn-green">Read More</a>

                             </div>

                         </div>

                    </div>

                </div>

            </section>

            <section id="partners">
                <div class="container">
                    <div class="row">

                    <div class="col-md-12">
                        <h3>Partners We Have Worked With</h3>
                    </div>
                        <div class="col-md-12">
                            <ul>
                                <li><img src="{{ asset('images/arrowhead.png') }}"></li>
                                 <li><img src="{{ asset('images/greatnorth.png') }}"></li>
                                 <li><img src="{{ asset('images/amstercafe.png') }}"></li>
                                 <li><img src="{{ asset('images/olivetree.png') }}"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

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



        </div>

 

       

    





    <script type="text/javascript">

      $("#searchname").focus(function(){
          document.getElementById('home-search').style.top = '29px';
      });

      // $('#searchname').blur(function() {
      //   document.getElementById('home-search').style.top = '229px';
      // });


      $('#searchname').autocomplete({

        source : '{!!URL::route('autocomplete')!!}',
        minlength:1,
        autoFocus:true

      });

    </script>

@endsection
