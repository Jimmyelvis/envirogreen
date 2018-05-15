@extends('layouts.app')

@section('content')

<div class="bread-crumb-menu">

		<div class="container">

			<div class="row">

				<div class="col-xs-4">

				   <h2>Meet Our Team</h2>

				</div>

				<div class=".col-xs-4 .col-xs-offset-4">

					<ol class="breadcrumb pull-right">
					  <li><a href="#">Home</a></li>
					  <li><a href="">About Us</a></li>
					  <li class="active">Our Team</li>
					</ol>

				</div>

			</div>

		</div>

  </div>



 	<!-- <div id="team-nav">

 		<div class="container">

 			<ul class="team-nav">
 				<li><a href="#" class="active">All</a></li>
 				<li><a href="#">Founders</a></li>
 				<li><a href="#">Agents</a></li>
 				<li><a href="#">Sales</a></li>
 			</ul>

 		</div>

 	</div> -->



<div id="team-listing">

	<div class="container">



		<div class="row">

			@if($users)

				@foreach($users as $user)

					<div class="col-md-6 staff-member-entry">

						<img src="{{$user->photo? URL::to($user->photo->file) : 'http://placehold.it/400x400'}}" class="picmember img-thumbnail img-responsive" alt="">

						<h3><a href="staff-detail.html">{{$user->name}}</a></h3>
						<h4>{{$user->position ? $user->position->name : 'User has no position'}}</h4>

						<p>{{ str_limit($user->bio, 100, '...') }}</p>

						<div class="clearfix"></div>

					</div>

					@endforeach

			@endif



			</div>

		</div>


	</div>



</div>


@endsection
