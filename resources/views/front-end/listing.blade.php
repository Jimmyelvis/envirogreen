@extends('layouts.app')

@section('content')


<div class="props-search-menu">


    <div class="top-row row">

       <div class="container">

        <div class="col-xs-4">

           <h2>Properties</h2>
            <h3>Listings for Sale or Rent - <span class="count">  {{ $listings->total() }}</span> </h3>

        </div>

        <div class=".col-md-4 .col-md-offset-4">

          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li class="active">Listings</li>
          </ol>

        </div>

       </div>

    </div>


      <div class="bottom-row row">

        {!! Form::open(['method'=>'GET', 'action'=> 'ListingController@multiresults','role'=>'search']) !!}

          <div class="container">

            <select name="loc" class="form-control listings-drop">
               <option value="" selected>SELECT A CITY</option>
               @foreach($cities as $cityId => $cityName)
                   <option value="{{ $cityId }}">{{ $cityName }}</option>
               @endforeach
           </select>


           <select class="form-control listings-drop" name="min">

             <option value="" disabled selected>MIN PRICE</option>
             <option value="100000">100,000</option>
             <option value="150000">100,000</option>
             <option value="200000">200,000</option>
             <option value="250000">250,000</option>
             <option value="300000">300,000</option>
             <option value="350000">350,000</option>

           </select>


           <select class="form-control listings-drop" name="max">

             <option value="" disabled selected>MAX PRICE</option>
             <option value="100000">100,000</option>
             <option value="150000">100,000</option>
             <option value="200000">200,000</option>
             <option value="250000">250,000</option>
             <option value="300000">300,000</option>
             <option value="350000">350,000</option>
             <option value="400000">400,000</option>
           </select>

           <select class="form-control listings-drop" name="beds">

             <option value="" disabled selected>MIN BEDS</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>

           </select>

           <select class="form-control listings-drop" name="baths">

             <option value="" disabled selected>MIN BATHS</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>

           </select>


      <button type="submit" class="btn btn-off-white">SEARCH NOW</button>

         </div>


        {!! Form::close() !!}



      </div>


  </div>


  <div id="listings">

			<div class="container">


				<div class="row">

          @if($listings)

          <h3>TOTAL LISTINGS: <span class="countgreen">{{ $listings->total() }}</span> </h3>
          <br>
          <h4>In this page: <span class="countgreen">{{ $listings->count() }}</span> Listings</h4>

            @foreach($listings as $listing)

              <div class="col-md-4 listing-card">


                <h6>{{$listing->category->name}}</h6>

                <div class="card-img-container">

                  <!-- <img src="images/houses/pexels-photo-259600.jpeg" alt="" class="img-responsive"> -->

                  <img src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}">

                </div>

                <h3>{{$listing->street}}</h3>
                <h4>
                  {{$listing->city ? $listing->city->name : 'Listing has no city'}},
                  {{$listing->state ? $listing->state->name : 'Listing has no state'}}
                </h4>

                <h5>${{$listing->price}}</h5>

                <ul class="prop-attr">
                  <li>BEDS: <span class="price"> {{$listing->beds}}</span></li>
                  <li>BATHS: <span class="price"> {{$listing->baths}}</span></li>
                  <li>SQFT: <span class="price"> {{$listing->sqft}}</span></li>
                </ul>



              <button type="button" class="btn btn-read-more">
                <a href="{{route('listings.detail', $listing->id)}}">READ MORE</a>
              </button>



                 </div>

            @endforeach


          @endif

				</div>

        {{ $listings->links() }}


			</div>

	</div>


@endsection
