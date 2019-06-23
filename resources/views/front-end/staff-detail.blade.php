@extends('layouts.app')

@section('content')



  <div id="team-detail">

			<div class="header headerStaff">

				<img  src="{{ asset('images/detail.jpg') }}">
															
				<div class="overlay"></div>
				<h2>{{$user->name}}</h2>
				<h4>{{$user->position ? $user->position->name : 'User has no position'}}</h4>


			</div>

			<div class="container">

				<div class="row">

						<div class="col-md-12">


								<img src="{{$user->photo? URL::to($user->photo->file) : 'http://placehold.it/400x400'}}"
									class="list-full-pic  img-responsive" alt="">

						</div>

						<div class="staffInfo col-md-6">

								<h3>{{$user->name}}</h3>
								<h4>{{$user->position ? $user->position->name : 'User has no position'}}</h4>

								<p><i class="fas fa-phone-square"></i>{{$user->phone}}</p>
								<p><i class="fas fa-envelope-square"></i>{{$user->email}}</p>

						</div>

						<div class="staffBio col-md-6">

								<h3>Biography</h3>

								<p>{{$user->bio}}</p>

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


@endsection
