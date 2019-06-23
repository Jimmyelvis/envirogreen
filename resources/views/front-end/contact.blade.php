@extends('layouts.app')

@section('content')


  

  <div id="contact">

		<div class="header headerStaff">

				<img src="{{ asset('images/detail.jpg') }}">

				<div class="overlay"></div>
				<h2>CONTACT US</h2>

		</div>

	<div class="container">


		<div class="form row">

			<div class="col-md-12">

				<h4>Get in Touch with us.</h4>

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
					<label for="inputEmail3" class="col-sm-8 control-label">How Can We Help*</label>
					<div class="col-sm-12">
					  <textarea class="form-control" rows="3"></textarea>

		              <button type="submit" class="btn btn-green pull-right">Send Message</button>

					</div>
				 </div>



			</div>


		</div>


		</div>

	</div>


@endsection
