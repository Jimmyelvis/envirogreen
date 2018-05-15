@extends('layouts.app')

@section('content')


<div class="bread-crumb-menu">

		<div class="container">

			<div class="row">

				<div class="col-xs-4">

				   <h2>Listing Detail</h2>

				</div>

				<div class=".col-xs-4 .col-xs-offset-4">

					<ol class="breadcrumb pull-right">
					  <li><a href="#">Home</a></li>
					  <li class="active">Listing Detail</li>
					</ol>

				</div>

			</div>

		</div>

  </div>




<div id="listing-detail">

	<div class="container">

			<div class="row">

				<div class="col-md-8 col-sm-8 col-xs-8">

					<img src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}" class="list-full-pic  img-responsive" alt="">

					<div class="col-md-10 col-xs-12">

							<ul class="listing-thumbnails">
									<li><a href=""><img src="{{$listing->extrapicone? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400'}}" alt=""></a></li>
									<li><a href=""><img src="{{$listing->extrapictwo? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400'}}" alt=""></a></li>
									<li><a href=""><img src="{{$listing->extrapicthree? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400'}}" alt=""></a></li>
									<li><a href=""><img src="{{$listing->extrapicfour? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400'}}" alt=""></a></li>
							</ul>

						 <div class="clearfix"></div>

					</div>

				</div>

				<div class="col-md-4 col-sm-4 col-xs-4 list-side-right">

                    <div class="row">
                        <h2>{{$listing->street}}</h2>
												<h4>{{$listing->city}},{{$listing->state ? $listing->state->name : 'Listing has no state'}}</h4>

                    </div>

                    <div class="row">
                        <h3><span class="listing-agent">Listing Agent:</span>  {{$listing->user->name}}</h3>
                    </div>

                    <div class="row">
                        <img src="{{$listing->user->photo->file? URL::to($listing->user->photo->file) : 'http://placehold.it/400x400'}}" alt="" class="list-agent-pic">
                    </div>

                    <div class="row">

                        <ul class="listing-attr">
                            <li>PRICE:</li>
                            <li>BEDS:</li>
                            <li>BATHS</li>
                            <li>SQ FT:</li>
                        </ul>

                        <ul class="listing-label">
                            <li>${{$listing->price}}</li>
                            <li>{{$listing->beds}}</li>
                            <li>{{$listing->baths}}</li>
                            <li>{{$listing->sqft}}</li>
                        </ul>

                        <div class="clearfix"></div>

                    </div>



				</div>

		    </div>

		    <div class="row">





		    </div>

            <div class="col-md-12 list-desc">

                <h3>Description:</h3>

                <p>
									{{$listing->descrip}}
								</p>

            </div>

            <!-- <div class="col-md-12 features">

               <h3>Features</h3>

                <ul>
                    <li>Deck</li>
                    <li>Air Conditioning</li>
                    <li>Balcony</li>
                    <li>Ocean View</li>
                </ul>

                <ul>
                    <li>Central Heating</li>
                    <li>Gym</li>
                    <li>Balcony</li>
                    <li>Steam Room</li>
                </ul>

                <div class="clearfix"></div>

            </div> -->



		<div class="form row">


			<h4>Do You Want To Send A Message?</h4>



			<div class="col-md-6">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-8 control-label">Name*</label>
					<div class="col-sm-12">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
					</div>
				  </div>

			</div>

			<div class="col-md-6">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-8 control-label">Email*</label>
					<div class="col-sm-12">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				  </div>

			</div>

			<div class="col-md-6">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-8 control-label">Phone Number*</label>
					<div class="col-sm-12">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="555-5555">
					</div>
				  </div>

			</div>

			<div class="col-md-6">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-8 control-label">Subject*</label>
					<div class="col-sm-12">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Subject">
					</div>
				  </div>

			</div>

			<div class="col-md-12">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-8 control-label">How Can I Help*</label>
					<div class="col-sm-12">
					  <textarea class="form-control" rows="3"></textarea>

		              <button type="submit" class="btn btn-success pull-right">Send Message</button>

					</div>
				 </div>



			</div>


		</div>


		</div>

	</div>


@endsection
