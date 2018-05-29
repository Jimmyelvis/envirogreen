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

  <div id="team-detail">

	<div class="container">

			<div class="row">

				<div class="col-md-6">


          <img src="{{$user->photo? URL::to($user->photo->file) : 'http://placehold.it/400x400'}}" class="list-full-pic  img-responsive" alt="">



				</div>

				<div class="col-md-6">

					<h3>{{$user->name}}</h3>
          <h4>{{$user->position ? $user->position->name : 'User has no position'}}</h4>

					<p>{{$user->bio}}</p>

					<div class="staff-info col-md-4">

						<ul class="keys">
							<li>EMAIL:</li>
							<li>SKYPE ID:</li>
							<li>PHONE NUMBER:</li>
						</ul>

					</div>

					<div class="staff-info col-md-4">

						<ul class="info">
							<li>{{$user->email}}</li>
							<li>{{$user->skype}}</li>
							<li>{{$user->phone}}</li>
						</ul>

					</div>

				</div>


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

	</div>


@endsection
