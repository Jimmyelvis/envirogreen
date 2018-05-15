@extends('layouts.admin')

@section('content')

<div id="staff-create">

       <div class="container">

           <h2>Edit Staff</h2>


             {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}

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
                          {!! Form::select('role_id', $roles, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                   </div>

                   <div class="form-entry select-label">
                          {!! Form::select('position_id', $positions, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                   </div>

                   <div class="form-photo">
                     {!! Form::label('photo_id', 'Photo:', ['class'=>'form-photo-label']) !!}
                     {!! Form::file('photo_id', null, ['class'=>'btn btn-upload'])!!}

                     <div class="col-sm-3">
                        <img src="{{$user->photo? URL::to($user->photo->file) : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
                    </div>

                  </div>



                   <div class="form-group">
                     {!! Form::submit('Update User', ['class'=>'btn btn-submit col-sm-2']) !!}



                {!! Form::close() !!}

                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

                     {!! Form::submit('Delete user', ['class'=>'btn btn-danger col-sm-offset-3 col-sm-2']) !!}
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
