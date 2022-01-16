@extends('layouts.home-app')



@section('content')

<!-- 1. Add latest jQuery and fancyBox files -->

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>




<div id="listDetail">

    <div class="header">

        <div class="container">

            <div class="address">

                <h2>{{ $listing->street }}</h2>

                <h3>{{ $listing->city ? $listing->city->name : 'Listing has no city' }},
                    {{ $listing->state ? $listing->state->name : 'Listing has no state' }}
                </h3>

            </div>

            <div class="listingAttr">
                <span class="price">${{ $listing->price }}</span>

                <div class="entry">
                    <!-- <img class="icon" src="{{ asset('images/icon-beds.png') }}"> -->
                    <h3>Beds:</h3>
                    <h3>{{ $listing->beds }}</h3>
                </div>

                <div class="entry">
                    <!-- <img class="icon" src="{{ asset('images/icon-bathtub.png') }}"> -->
                    <h3>Baths:</h3>
                    <h3>{{ $listing->baths }} </h3>
                </div>

            </div>

        </div>

        <div class="overlay"></div>
        <img src="{{ $listing->fullpic ? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400' }}" alt="Card image">
    </div>

    <div class="container content">

        <ul class="card-layout listing-thumbnails">
            <li>
                <a data-fancybox="gallery" href="{{ $listing->fullpic ? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400' }}"><img src="{{ $listing->fullpic ? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400' }}" alt="">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="{{ $listing->extrapicone ? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400' }}"><img src="{{ $listing->extrapicone ? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400' }}" alt="">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="{{ $listing->extrapictwo ? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400' }}"><img src="{{ $listing->extrapictwo ? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400' }}" alt="">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="{{ $listing->extrapicthree ? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400' }}"><img src="{{ $listing->extrapicthree ? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400' }}" alt="">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="{{ $listing->extrapicfour ? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400' }}"><img src="{{ $listing->extrapicfour ? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400' }}" alt="">
                </a>
            </li>
        </ul>

        <div class="listDesc">

            <div class="card-layout left">

                <h3>Detail</h3>

                <div class="details">
                    <div class="labels">
                        <ul>
                            <li>PRICE:</li>
                            <li>BEDS:</li>
                            <li>BATHS:</li>
                            <li>SQ FT:</li>
                        </ul>
                    </div>

                    <div class="numbers">
                        <ul>
                            <li>${{ $listing->price }}</li>
                            <li>{{ $listing->beds }}</li>
                            <li>{{ $listing->baths }}</li>
                            <li>{{ $listing->sqft }}</li>
                        </ul>

                    </div>

                </div>

                <div class="decscription">
                    <h3>Description</h3>
                    <p>{{ $listing->descrip }}</p>
                </div>



            </div>

            <div class="card-layout right">

                <div class="agentProfile">
                    <div class="agentPhoto">

                        <div class="agentPhotoImg">
                            <img src="{{ $listing->user->photo->file ? URL::to($listing->user->photo->file) : 'http://placehold.it/400x400' }}" alt="">
                        </div>

                    </div>

                    <h2>{{ $listing->user->name }}</h2>
                    <h3>Property Agent</h3>

                </div>

                <div class="agentInfo">

                    <p><i class="fas fa-phone-square"></i>{{ $listing->user->phone }}</p>
                    <p><i class="fas fa-envelope-square"></i>{{ $listing->user->email }}</p>

                    <ul>
                        <li>
                            <img src="{{ asset('images/icon-facebook.png') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/icon-google.png') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/icon-twiterr.png') }}" alt="">
                        </li>
                    </ul>

                </div>

            </div>

        </div>

        <div class="form">

            <h4>Do You Want To Send A Message?</h4>

            <div class="form-group">
                <label for="inputEmail3" class="control-label">Name*</label>
                <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="control-label">Email*</label>
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="control-label">Phone Number*</label>
                <input type="email" class="form-control" id="inputEmail3" placeholder="555-5555">
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="control-label">Subject*</label>
                <input type="email" class="form-control" id="inputEmail3" placeholder="Subject">
            </div>

            <div class="form-group textarea">
                <label for="inputEmail3" class="control-label">How Can I Help*</label>
                <textarea class="form-control" rows="20"></textarea>
                <button type="submit" class="btn btn-green">Send Message</button>
            </div>

        </div>

    </div>

</div>






@endsection