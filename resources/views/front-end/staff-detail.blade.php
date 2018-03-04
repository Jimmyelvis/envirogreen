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

					<img src="images/people/asdfasdf.jpg" class="picmember img-thumbnail img-responsive" alt="">



				</div>

				<div class="col-md-6">

					<h3>Sam Kerrigan</h3>
					<h4>Co-Founder</h4>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, ab, accusantium. Veritatis tenetur expedita laboriosam fugit exercitationem, a nesciunt quidem, nulla repellendus doloribus mollitia hic sequi dolor! Aperiam ad nostrum, vel quibusdam, ratione accusantium officiis laborum eum a, molestiae minima nobis dolorum unde dolores, ab. Ullam molestiae iste aliquam veritatis nulla et provident praesentium, voluptates quidem, quod, natus, id deserunt facere eaque. Odit, aliquam culpa excepturi explicabo sed molestias maiores veritatis laborum, facilis beatae corporis vitae eveniet corrupti, delectus cupiditate non illo. Veritatis soluta ab provident nisi quia odit, recusandae tenetur. Sapiente quibusdam magnam pariatur ex id temporibus sequi tempora  </p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quis voluptatem deserunt officia ullam! Similique distinctio totam quibusdam quae repellendus. Repellat sapiente totam illum? Molestias sunt quidem dolorem ab eaque voluptatem, doloremque veniam harum earum culpa labore modi quas doloribus necessitatibus eveniet deserunt quaerat accusantium neque aliquid delectus laborum sequi rerum rem aut! Quibusdam iste illo velit nostrum dolorum ut laboriosam, id repellat impedit.</p>

					<div class="staff-info col-md-4">

						<ul class="keys">
							<li>EMAIL:</li>
							<li>SKYPE ID:</li>
							<li>PHONE NUMBER:</li>
						</ul>

					</div>

					<div class="staff-info col-md-4">

						<ul class="info">
							<li>samker@envirogreen.com</li>
							<li>Samker</li>
							<li>555-5555</li>
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
