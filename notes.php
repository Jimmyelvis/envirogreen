
<h3>Listings for Sale or Rent - <span class="count">  {{ $listings->count() }}</span> </h3>



@if($listings)

  @foreach($listings as $listing)

    <div class="col-md-4 listing-card">


      <h6>{{$listing->category->name}}</h6>

      <div class="card-img-container">

        <!-- <img src="images/houses/pexels-photo-259600.jpeg" alt="" class="img-responsive"> -->

        <img src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}">

      </div>

      <h3>{{$listing->street}}</h3>
      <h4>{{$listing->city}},{{$listing->state ? $listing->state->name : 'Listing has no state'}}</h4>

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
