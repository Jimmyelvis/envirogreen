@extends('layouts.admin')

@section('content')

<section id="main">

            <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img class="main-logo" src="{{asset('images/lrg-green-logo.png')}}" alt="">
                        </div>


                    </div>

                    <div class="categ row">
                        <a href=""></a>
                        <div class="category col-md-3">
                            <img class="staff-img-cat" src="{{asset('images/staff.png')}}" alt="">
                            <h4><a href="admin-staff.html">STAFF</a></h4>
                        </div>

                        <div class="category col-md-3">
                            <img class="listing-img-cat" src="{{asset('images/house.png')}}" alt="">
                            <h4><a href="">LISTING</a></h4>
                        </div>


                        <div class="category col-md-3">
                            <img class="cat-img-cat" src="{{asset('images/sign.png')}}" alt="">
                             <h4><a href="">CATEGORIES</a></h4>
                        </div>

                        <div class="category col-md-3">
                            <img class="media-img-cat" src="{{asset('images/camara.png')}}" alt="">
                            <h4><a href="">MEDIA</a></h4>
                        </div>

                    </div>

               </div>

        </section>

@endsection
