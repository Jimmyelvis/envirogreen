@extends('layouts.admin')

@section('content')

<div id="staff">

        <div class="container">

              <h2>Listings</h2>

              <table class="table" >
                <thead>
                  <tr>
                      <th class="id">Id</th>
                      <th>Photo</th>
                      <th>Listing Agent</th>
                      <th>Street</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Price</th>
                      <th>Beds</th>
                      <th>Baths</th>
                      <th>Squareft</th>
                      <th>For Sale/Rent</th>
                      <th>View</th>
                      <th>Edit</th>
                  </tr>

                </thead>



              <tbody>

                @if($listings)

                  @foreach($listings as $listing)

                  <tr>
                    <td class="id">{{$listing->id}}</td>
                    <td> <img height="70" src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}" alt="" ></td>
                    <td>{{$listing->user->name}}</td>
                    <td>{{$listing->street}}</td>
                    <td>{{$listing->city ? $listing->city->name : 'Listing has no city'}}</td>
                    <td>{{$listing->state ? $listing->state->name : 'Listing has no state'}}</td>
                    <td>{{$listing->price}}</td>
                    <td>{{$listing->beds}}</td>
                    <td>{{$listing->baths}}</td>
                    <td>{{$listing->sqft}}</td>
                    <td>{{$listing->category->name}}</td>
                    <td><a href="#">View</a></td>
                    <td><a href="{{route('admin.listings.edit', $listing->id)}}">Edit</a></td>
                  </tr>


                      @endforeach

                  @endif

                </tbody>

              </table>


        </div>

    </div>




@endsection
