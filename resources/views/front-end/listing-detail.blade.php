@extends('layouts.app')



@section('content')

<!-- 1. Add latest jQuery and fancyBox files -->

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>




<div class="listDetail card bg-dark text-white">



				<img class="card-img" src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}"
					alt="Card image">

				<div class="card-img-overlay">

					<div class="container">

						<div class="row">

							<div class="col-md-12">
								<h2>{{$listing->street}}</h2>
							</div>

							<div class="col-md-12">
								<h3>{{$listing->city ? $listing->city->name : 'Listing has no city'}},
									{{$listing->state ? $listing->state->name : 'Listing has no state'}}</h3>
							</div>

						</div>

						<div class="listingAttr row">

							<div class="col-md-4 col-sm-4 col-4">
								<span class="price">${{$listing->price}}</span>
							</div>

							<div class="col-md-4 col-sm-4 col-4">

								<img class="icon" src="{{ asset('images/icon-beds.png') }}">
								<h3>Beds:
									<span class="badge badge-green">
										{{$listing->beds}}
									</span>
								</h3>
							</div>

							<div class="col-md-4 col-sm-4 col-4">

								<img class="icon" src="{{ asset('images/icon-bathtub.png') }}">
								<h3>Baths:
									<span class="badge badge-green">
										{{$listing->baths}}
									</span>
								</h3>
							</div>


						</div>


					</div>



	</div>



</div>


<div class="wrapper container">

		<div id="listingDetails">

				<div class="container">
				
						<div class="row">
							<div class="col-md-12">
								<ul class="listing-thumbnails" >
								  <li>
										<a data-fancybox="gallery"
											href="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}"><img
												src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}"
												alt="">
										</a>
									</li>
									<li>
										<a data-fancybox="gallery"
											href="{{$listing->extrapicone? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400'}}"><img
												src="{{$listing->extrapicone? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400'}}"
												alt="">
										</a>
									</li>
									<li>
										<a data-fancybox="gallery"
											href="{{$listing->extrapictwo? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400'}}"><img
												src="{{$listing->extrapictwo? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400'}}"
												alt="">
										</a>
									</li>
									<li>
										<a data-fancybox="gallery"
											href="{{$listing->extrapicthree? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400'}}"><img
												src="{{$listing->extrapicthree? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400'}}"
												alt="">
										</a>
									</li>
									<li>
										<a data-fancybox="gallery"
											href="{{$listing->extrapicfour? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400'}}"><img
												src="{{$listing->extrapicfour? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400'}}"
												alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>


						<div class="listDesc row">

								<div class="left col-md-8">

									<div class="row">

										<div class="decscription col-md-12">

											<h3>Description</h3>	

											<p>{{$listing->descrip}}</p>
										</div>

									</div>
									<div class="row">

										<div class="labels col-md-3 col-sm-3">
											<ul>
												<li>PRICE:</li>
												<li>BEDS:</li>
												<li>BATHS:</li>
												<li>SQ FT:</li>
											</ul>
										</div>

										<div class="details col-md-3 col-sm-3">
											<ul>
												<li>${{$listing->price}}</li>
												<li>{{$listing->beds}}</li>
												<li>{{$listing->baths}}</li>
												<li>{{$listing->sqft}}</li>
											</ul>

										</div>

									</div>

								</div>

								<div class="right col-md-4">

										<div class="agentProfile row">
											<div class="agentPhoto">

													<div class="agentPhotoImg">
													<img src="{{$listing->user->photo->file? URL::to($listing->user->photo->file) : 'http://placehold.it/400x400'}}" alt="" >
													</div>

											</div>

											<div class="col-md-12">
												<h2>{{$listing->user->name}}</h2>
												<h3>Property Agent</h3>
											</div>
										</div>

										<div class="agentInfo row">

												<div class="col-md-10 offset-md-1">
													<p><i class="fas fa-phone-square"></i>{{$listing->user->phone}}</p>
													<p><i class="fas fa-envelope-square"></i>{{$listing->user->email}}</p>
												</div>

												<div class="col-md-12">
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

						</div>

						<div class="form row">

									<div class="col-md-12">
										<h4>Do You Want To Send A Message?</h4>
									</div>

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

												<button type="submit" class="btn btn-green">Send Message</button>

											</div>
										</div>



									</div>


						</div>
				
				</div>

				
		</div>


</div>




<!-- <div id="listing-detail">

	<div class="container">

			<div class="row">

				<div class="col-md-8 col-sm-8 col-xs-12">

					<img src="{{$listing->fullpic? URL::to($listing->fullpic->file) : 'http://placehold.it/400x400'}}" class="list-full-pic  img-responsive" alt="">

					<div class="col-md-10 col-xs-12">

							<ul class="listing-thumbnails">
									<li>
										<a data-fancybox="gallery" href="{{$listing->extrapicone? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400'}}"><img src="{{$listing->extrapicone? URL::to($listing->extrapicone->file) : 'http://placehold.it/400x400'}}" alt="">
										</a>
								  </li>
									<li>
										<a data-fancybox="gallery" href="{{$listing->extrapictwo? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400'}}"><img src="{{$listing->extrapictwo? URL::to($listing->extrapictwo->file) : 'http://placehold.it/400x400'}}" alt="">
										</a>
								  </li>
									<li>
										<a data-fancybox="gallery" href="{{$listing->extrapicthree? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400'}}"><img src="{{$listing->extrapicthree? URL::to($listing->extrapicthree->file) : 'http://placehold.it/400x400'}}" alt="">
										</a>
								  </li>
									<li>
										<a data-fancybox="gallery" href="{{$listing->extrapicfour? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400'}}"><img src="{{$listing->extrapicfour? URL::to($listing->extrapicfour->file) : 'http://placehold.it/400x400'}}" alt="">
										</a>
								  </li>
							</ul>

						 <div class="clearfix"></div>

					</div>

				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 list-side-right">

                    <div class="row listingaddress">
                        <h2>{{$listing->street}}</h2>
												<h4>
													{{$listing->city ? $listing->city->name : 'Listing has no city'}},{{$listing->state ? $listing->state->name : 'Listing has no state'}}
												</h4>

                    </div>

                    <div class="row agentinfo">
                        <h3><span class="listing-agent">Listing Agent:</span>  {{$listing->user->name}}</h3>
                    </div>

                    <div class="row listingpicrow">
                        <img src="{{$listing->user->photo->file? URL::to($listing->user->photo->file) : 'http://placehold.it/400x400'}}" alt="" class="list-agent-pic">
                    </div>

                    <div class="row listinginfo">

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

	</div> -->


@endsection
