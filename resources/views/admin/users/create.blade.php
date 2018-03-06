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
                     {!! Form::email('email', null, ['required autocomplete' => 'off'])!!}
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
                     {!! Form::password('password', ['required autocomplete' => 'off'])!!}
                     {!! Form::label('password', 'Password:') !!}
                   </div>

                   <div class="form-entry select-label">
                          {!! Form::select('role_id',[''=>'Role:'] + $roles, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                   </div>

                   <div class="form-entry select-label">
                          {!! Form::select('position_id',[''=>'Position:'] + $positions, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                   </div>

                   <div class="form-photo">
                     {!! Form::label('photo_id', 'Photo:', ['class'=>'form-photo-label']) !!}
                     {!! Form::file('photo_id', null, ['class'=>'btn btn-upload'])!!}
                  </div>

                   <div class="form-group">
                     {!! Form::submit('Create User', ['class'=>'btn btn-submit']) !!}
                  </div>


                {!! Form::close() !!}

                @if(count($errors) > 0)

                    <div class="alert alert-danger">

                      <ul>

                        @foreach($errors->all()  as $error)

                          <li>$error</li>

                        @endforeach

                      </ul>

                    </div>

                @endif

       </div>

   </div>


 @stop
