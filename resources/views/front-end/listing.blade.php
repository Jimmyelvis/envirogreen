@extends('layouts.app')

@section('content')


<div class="props-search-menu">


    <div class="top-row row">

       <div class="container">

        <div class="col-xs-4">

           <h2>Properties</h2>

           <h3>Listings for Sale or Rent - <span class="count"></span> </h3>

        </div>

        <div class=".col-xs-4 .col-xs-offset-4">

          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li class="active">Listings</li>
          </ol>

        </div>

       </div>

    </div>


      <div class="bottom-row row">

               <div class="container">


          <select class="form-control listings-drop">
          <option class="listing-option" value="one">FOR SALE</option>
          <option value="two">FOR RENT</option>
        </select>


          <select class="form-control listings-drop">
          <option value="one">LOCATION</option>
          <option value="two">SPRINGFIELD</option>
          <option value="two">AGAWAM</option>
          <option value="two">EAST LONGMEADOW</option>
          <option value="two">HOLYOKE</option>
          <option value="two">LONGMEADOW</option>
          <option value="two">CHICOPEE</option>
        </select>


          <select class="form-control listings-drop">
          <option value="one">MIN BEDS</option>
          <option value="two">1</option>
          <option value="two">2</option>
          <option value="two">3</option>
          <option value="two">4</option>
          <option value="two">5</option>
          <option value="two">6</option>
        </select>

          <select class="form-control listings-drop">
          <option value="one">MIN PRICE</option>
          <option value="two">70,000</option>
          <option value="two">80,000</option>
          <option value="two">90,000</option>
          <option value="two">100,000</option>
          <option value="two">110,000</option>
          <option value="two">120,000</option>
        </select>


          <select class="form-control listings-drop">
          <option value="one">MAX PRICE</option>
          <option value="two">70,000</option>
          <option value="two">80,000</option>
          <option value="two">90,000</option>
          <option value="two">100,000</option>
          <option value="two">110,000</option>
          <option value="two">120,000</option>
        </select>



         <button type="button" class="btn btn-off-white">SEARCH NOW</button>


           </div>

      </div>


  </div>


  <div id="listings">

			<div class="container">

				<div class="row">

        @if($listings)

          @foreach($listings as $listing)

  					<div class="col-md-4 listing-card">


  						<h6>FOR SALE</h6>

  						<div class="card-img-container">

  							<!-- <img src="images/houses/pexels-photo-259600.jpeg" alt="" class="img-responsive"> -->

                <img src="{{$listing->photo ? $listing->photo->file : 'http://placehold.it/400x400' }}">

  						</div>

  						<h3>{{$listing->street}}</h3>
  						<h4>{{$listing->city}},{{$listing->state}}</h4>

  						<h5>${{$listing->price}}</h5>

  						<ul class="prop-attr">
  							<li>BEDS: <span class="price"> {{$listing->beds}}</span></li>
  							<li>BATHS: <span class="price"> {{$listing->baths}}</span></li>
  							<li>SQFT: <span class="price"> {{$listing->sqft}}</span></li>
  						</ul>



  				        <button type="button" class="btn btn-read-more"><a href="{{route('listing.detail',$listing->id)}}">READ MORE</a></button>


  			       </div>

          @endforeach

      @endif

				</div>

			</div>

	</div>


@endsection
