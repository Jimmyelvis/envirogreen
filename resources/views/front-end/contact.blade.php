@extends('layouts.home-app')

@section('content')




<div id="contact">

	<div class="header headerStaff">

		<img src="{{ asset('images/detail.jpg') }}">

		<div class="overlay"></div>
		<h2>CONTACT US</h2>

	</div>

	<div class="container">


		<div class="form">

			<h4>Get in Touch with us.</h4>

			<div class="form-group">
				<label for="inputEmail3" class="control-label">Name*</label>
				<input type="email" class="form-control" id="inputEmail3" placeholder="Name">
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="control-label">Email*</label>
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="control-label">Phone Number*</label>
				<input type="email" class="form-control" id="inputEmail3" placeholder="555-5555">
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="control-label">Subject*</label>
				<input type="email" class="form-control" id="inputEmail3" placeholder="Subject">
			</div>

			<div class="form-group textarea">
				<label for="inputEmail3" class="control-label">How Can I Help*</label>
				<textarea class="form-control" rows="20"></textarea>
				<button type="submit" class="btn btn-green">Send Message</button>
			</div>

		</div>

	</div>

</div>


@endsection