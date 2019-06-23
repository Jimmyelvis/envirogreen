@extends('layouts.app')

@section('content')



<div id="team-listing">

	<div class="header headerStaff">

			<img  src="{{ asset('images/pexels-photo-280232.jpg') }}">
                            
			<div class="overlay"></div>
			<h2>Our Staff</h2>

	</div>

	<div class="container">



		<div class="row">

			@if($users)

				@foreach($users as $user)

					<div class="col-md-6 col-sm-12 staff-member-entry">

						<div class="user-pic">

								<img src="{{$user->photo? URL::to($user->photo->file) : 'http://placehold.it/400x400'}}" class="picmember" alt="">

						</div>

						<div class="user-info">

							<h3><a href="{{route('staff.detail', $user->id)}}">{{$user->name}}</a></h3>
							<h4>{{$user->position ? $user->position->name : 'User has no position'}}</h4>

							<p>{{ str_limit($user->bio, 100, '...') }}</p>

						</div>


						<div class="clearfix"></div>

					</div>

					@endforeach

			@endif



			</div>

		</div>


	</div>



</div>


@endsection
