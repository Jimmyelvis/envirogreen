@extends('layouts.home-app')

@section('content')



<div id="listings">

  <div class="header">

    <div class="container">

      <div class="props-search-menu">

        {!! Form::open(['method' => 'GET', 'action' => 'ListingController@multiresults', 'role' => 'search']) !!}

        <div class="selector">
          <select name="loc" class="form-control" id="cityOptions">
            <option value="" selected>SELECT A CITY</option>
            @foreach ($cities as $cityId => $cityName)
            <option value="{{ $cityId }}">{{ $cityName }}</option>
            @endforeach
          </select>
          <div class="custom-arrow"></div>
        </div>

        <div class="selector">
          <select class="form-control" name="min">

            <option value="" disabled selected>MIN PRICE</option>
            <option value="100000">100,000</option>
            <option value="150000">100,000</option>
            <option value="200000">200,000</option>
            <option value="250000">250,000</option>
            <option value="300000">300,000</option>
            <option value="350000">350,000</option>

          </select>
          <div class="custom-arrow"></div>
        </div>

        <div class="selector">
          <select class="form-control" name="max">

            <option value="" disabled selected>MAX PRICE</option>
            <option value="100000">100,000</option>
            <option value="150000">100,000</option>
            <option value="200000">200,000</option>
            <option value="250000">250,000</option>
            <option value="300000">300,000</option>
            <option value="350000">350,000</option>
            <option value="400000">400,000</option>

          </select>
          <div class="custom-arrow"></div>
        </div>

        <div class="selector">
          <select class="form-control" name="beds">
            <option value="" disabled selected>MIN BEDS</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <div class="custom-arrow"></div>
        </div>


        <div class="selector">
          <select class="form-control" name="baths">
            <option value="" disabled selected>MIN BATHS</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <div class="custom-arrow"></div>
        </div>

        <button type="submit" class="btn btn-green submitSearch">SEARCH</button>

        {!! Form::close() !!}

      </div>

    </div>


    <div class="overlay"></div>
    <img src="{{ asset('images/real-estate-house-with-for-sale-sign-2021-08-29-03-29-26-utc.jpg') }}">


  </div>

  <div class="container">

    @if (isset($details))

    <div class="headline">

      <h2>TOTAL LISTINGS: <span class="countgreen">{{ $details->total() }} </span>
      </h2>
      <h3> Result(s) For: <span class="countgreen">{{ request()->input('q') }}</span>
      </h3>
    </div>


    <div class="items">

      @foreach ($details as $listing)

      <div class="card listing-card">

        <img class="card-img-top" src="{{ $listing->fullpic ? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400' }}" alt="Card image cap">


        <div class="card-body">

          <a href="{{ route('listings.detail', $listing->id) }}" class="street-price">
            <h4 class="street">{{ $listing->street }}</h4>
            <h4 class="price">{{ $listing->price }}</h4>
            <h5 class="city">
              {{ $listing->city ? $listing->city->name : 'Listing has no city' }}
            </h5>
          </a>

          <div class="listInfo">
            <div class="left">
              <ul class="entry">
                <li>BEDS:</li>
                <li class="number">{{ $listing->beds }}</li>
              </ul>
              <ul class="entry">
                <li>BATHS:</li>
                <li class="number">{{ $listing->baths }}</li>
              </ul>
            </div>

            <div class="right">
              <ul class="entry">
                <li>SQFT:</li>
                <li class="number">{{ $listing->sqft }}</li>
              </ul>

            </div>

          </div>

        </div>

      </div>

      @endforeach

    </div> <!-- ROW -->


    <div class="row">

      {{ $details->appends(Request::except('page'))->links() }}

      @elseif(isset($message))

      <div class="noDetails">
        <p>{{ $message }}</p>
      </div>

      @endif

    </div>


  </div>

</div>


@endsection