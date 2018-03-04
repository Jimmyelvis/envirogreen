@extends('layouts.admin')

@section('content')

<div id="staff-create">

       <div class="container">

           <h2>Create Staff</h2>


             {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}

                   <div class="form-entry">
                     {!! Form::text('name', null, ['required autocomplete' => 'off'])!!}
                     {!! Form::label('name', 'Name:') !!}
                   </div>

                   <div class="form-entry">
                     {!! Form::text('email', null, ['required autocomplete' => 'off'])!!}
                     {!! Form::label('email', 'Email:') !!}
                   </div>

                   <div class="form-entry">
                     {!! Form::text('phone', null, ['required autocomplete' => 'off'])!!}
                     {!! Form::label('phone', 'Phone:') !!}
                   </div>

                   <div class="form-entry">
                     {!! Form::text('skype', null, ['required autocomplete' => 'off'])!!}
                     {!! Form::label('skype', 'Skype:') !!}
                   </div>

                   <div class="form-entry">
                     {!! Form::text('password', null, ['required autocomplete' => 'off'])!!}
                     {!! Form::label('password', 'Password:') !!}
                   </div>



                   <div class="form-group">
                     {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                  </div>


                {!! Form::close() !!}



       </div>

   </div>


 @stop
