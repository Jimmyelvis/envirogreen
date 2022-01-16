@extends('layouts.home-app')

@section('content')



    <div id="team-detail">

        <div class="header ">

            <div class="container">

                <div class="userInfo">
                    <h2>{{ $user->name }}</h2>
                    <h3>{{ $user->position ? $user->position->name : 'User has no position' }}</h3>
                </div>

            </div>



            <img src="{{ asset('images/detail.jpg') }}">

            <div class="overlay"></div>




        </div>

        <div class="container">

            <img src="{{ $user->photo ? URL::to($user->photo->file) : 'http://placehold.it/400x400' }}"
                class="list-full-pic  img-responsive" alt="">


            <div class="card-layout staffInfo">

                <div class="contactInfo">

                    <h3>{{ $user->name }}</h3>
                    <h4>{{ $user->position ? $user->position->name : 'User has no position' }}</h4>

                    <p><i class="fas fa-phone-square"></i>{{ $user->phone }}</p>
                    <p><i class="fas fa-envelope-square"></i>{{ $user->email }}</p>

                </div>

                <div class="staffBio">
                    <h3>Biography</h3>
                    <p>{{ $user->bio }}</p>
                </div>

            </div>



            <div class="form">

                <h4>Do You Want To Send A Message?</h4>

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
