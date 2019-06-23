@extends('layouts.app')

@section('content')


		<!-- 1. Add latest jQuery and fancyBox files -->

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>



    <section id="about-main">

					<div class="header headerStaff">

						<img src="{{ asset('images/detail.jpg') }}">

						<div class="overlay"></div>
						<h2>OUR BACKGROUND</h2>

					</div>

					<div class="container">

								<div class="whoweare row">

									<div class="left col-md-6">

										<h3>Who We Are</h3>

										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum mollitia perspiciatis, autem amet delectus
											consequuntur eligendi illum perferendis qui fugit, voluptas nisi incidunt sequi vel ipsum. Sint ipsam minus
											a. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex illum repudiandae rerum reiciendis earum
											ipsum! Eaque, veniam necessitatibus! Modi, magnam! Quod vero laudantium quisquam magnam?
										</p>

									</div>

									<div class="right col-md-6">

										<a data-fancybox="gallery" href="{{ asset('videos/introv2.mp4') }}">

											<img class="card-img-top" src="{{ asset('images/screen.jpg') }}"
												alt="Card image cap">

										</a>

									</div>

								</div>

					</div>


					<div class="ourleaders row">

							<div class="container">

									<div class="row">

										<div class="headline col-md-12">
											<h3>OUR FOUNDERS</h3>
											<h2>Meet Our Leaders</h2>
										</div>

										<div class="card col-md-6">

											<img src="{{ asset('images/people/luger.jpg') }}" class="card-img-top">

											<div class="card-body">
												<h5 class="card-title">Mike Luger</h5>
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus repellendus omnis
													tempore
													ipsam ab.</p>
											</div>

										</div>


										<div class="card col-md-6">

											<img src="{{ asset('images/people/sam.jpg') }}" class="card-img-top">

											<div class="card-body">
												<h5 class="card-title">Sam Kerrigan</h5>
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit natus repellendus omnis
													tempore
													ipsam ab.</p>
											</div>

										</div>

									</div>


							</div>

					</div>


							<div class="listedSlogan row">

									<div class="imgoverlay"></div>

									<div class="container">

											<div class="col-md-8 offset-md-2">

												<h4>
													We have listed over <span class="listedNumber">300</span> Properties.
												</h4>

												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida non metus.</p>

												<button class="btn btnflatgreen">Contact Us</button>

											</div>

									</div>

							</div>

						
				


    </section>







@endsection
