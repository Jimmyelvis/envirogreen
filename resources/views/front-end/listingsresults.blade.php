@extends('layouts.app')

@section('content')


<div class="props-search-menu">


    <div class="top-row">

      <div class="container">

        <div class="col-md-12">

          <h3>Listings for Sale or Rent </h3>

        </div>

      </div>

    </div>


    <div class="bottom-row">

      <form action="/multisearch" method="GET" role="search">
        {{ csrf_field() }}

        <div class="container">

          <select name="loc" class="form-control listings-drop">
             <option value="" selected>SELECT A CITY</option>
             @foreach($cities as $cityId => $cityName)
                 <option value="{{ $cityId }}">{{ $cityName }}</option>
             @endforeach
         </select>


        <select class="form-control" name="min">

            <option value="" disabled selected>MIN PRICE</option>
            <option value="100000">100,000</option>
            <option value="150000">100,000</option>
            <option value="200000">200,000</option>
            <option value="250000">250,000</option>
            <option value="300000">300,000</option>
            <option value="350000">350,000</option>

        </select>


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

         <button type="submit" class="btn btn-off-white">SEARCH</button>

       </div>


      </form>



    </div>


  </div>


  <div id="listings">

        <div class="container">

            <div class="row">

                  @if(isset($details))


                  <div class="headline col-md-4">

                      <h2>
                        TOTAL LISTINGS: <span class="countgreen">{{ $details->total() }} </span>
                      </h2>
                      <h3>
                        Result(s) For: <span class="countgreen">{{ request()->input('q') }}</span>
                      </h3>

                  </div>

            </div>

            <div class="row">

              @foreach($details as $listing)

                    <div class="card col-md-4">

                          <div class="card-img-container">

                            <img class="card-img-top" src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}"
                                  alt="Card image cap">

                          </div>

                          <span class="forsale">{{$listing->category->name}}</span>

                          <div class="card-body"> 

                              <h4>{{$listing->street}}</h4>
                              <h5>
                                {{$listing->city ? $listing->city->name : 'Listing has no city'}},
                                {{$listing->state ? $listing->state->name : 'Listing has no state'}}
                              </h5>

                              <div class="col-md-12">
                                  <span class="price">${{$listing->price}}</span>
                              </div>

                              <div class="col-md-12">

                                  <ul class="listInfo">
                                    <li>BEDS: <span class="listnumber">{{$listing->beds}}</span></li>
                                    <li>BATHS: <span class="listnumber">{{$listing->baths}}</span></li>
                                    <li>SQFT: <span class="listnumber">{{$listing->sqft}}</span></li>
                                  </ul>

                              </div>

                              <a href="{{route('listings.detail', $listing->id)}}" class="btn btn-green">Read More</a>

                          </div>

                    </div>

                  @endforeach

              </div> <!-- ROW -->


          
            <div class="row">

                {{ $details->appends(Request::except('page'))->links()}}

                  @elseif(isset($message))

                  <div class="noDetails">
                      <p>{{ $message }}</p>
                  </div>

                  @endif

            </div>
                  


        </div>

	</div>


@endsection
