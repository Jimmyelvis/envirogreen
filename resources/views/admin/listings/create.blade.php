@extends('layouts.admin')

@section('content')

<div id="listing-create">

       <div class="container">

           <h2>Create Listing</h2>


             {!! Form::open(['method'=>'POST', 'action'=> 'AdminListingsController@store','files'=>true]) !!}

                   <div class="col-md-6">

                       <div class="form-entry">
                         {!! Form::text('street', null, ['required autocomplete' => 'off'])!!}
                         {!! Form::label('street', 'Street:') !!}
                       </div>

                       <div class="form-entry select-label">
                         {!! Form::select('city_id',[''=>'City:'] + $cities, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                       </div>

                       <div class="form-entry select-label">
                            {!! Form::select('state_id',[''=>'State:'] + $states, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                       </div>

                       <div class="form-entry select-label">
                            {!! Form::select('user_id',[''=>'Listing Agent:'] + $users, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                       </div>

                       <div class="form-entry">
                         {!! Form::text('price', null, ['required autocomplete' => 'off'])!!}
                         {!! Form::label('price', 'Price:') !!}
                       </div>

                       <div class="form-entry">
                         {!! Form::text('beds', null, ['required autocomplete' => 'off'])!!}
                         {!! Form::label('beds', 'Beds:') !!}
                       </div>

                       <div class="form-entry">
                         {!! Form::text('baths', null, ['required autocomplete' => 'off'])!!}
                         {!! Form::label('baths', 'Baths:') !!}
                       </div>

                       <div class="form-entry">
                         {!! Form::text('sqft', null, ['required autocomplete' => 'off'])!!}
                         {!! Form::label('sqft', 'Square Feet:') !!}
                       </div>

                       <div class="form-entry select-label">
                            {!! Form::select('category_id',[''=>'Category:'] + $catagories, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
                       </div>

                       <div class="form-descrip">

                         {!! Form::label('descrip', 'Description:') !!}
                         {!! Form::textarea('descrip', null, [
                           'required autocomplete' => 'off',
                           'rows' => '4',
                           'cols' => '20',
                           'wrap' => 'hard',

                         ])!!}

                       </div>


                   </div>

                   <div class="col-md-6">


                       <div class="form-photo">
                         {!! Form::label('fullpic_id', 'Full Pic:', ['class'=>'form-photo-label']) !!}
                         {!! Form::file('fullpic_id', null, ['class'=>'btn btn-upload'])!!}
                      </div>

                      <div class="extra form-photo">
                        {!! Form::label('extrapicone_id', 'Extra Pic 1:', ['class'=>'form-photo-label']) !!}
                        {!! Form::file('extrapicone_id', null, ['class'=>'btn btn-upload'])!!}
                     </div>

                      <div class="extra form-photo">
                        {!! Form::label('extrapictwo_id', 'Extra Pic 2:', ['class'=>'form-photo-label']) !!}
                        {!! Form::file('extrapictwo_id', null, ['class'=>'btn btn-upload'])!!}
                     </div>


                      <div class="extra form-photo">
                        {!! Form::label('extrapicthree_id', 'Extra Pic 3:', ['class'=>'form-photo-label']) !!}
                        {!! Form::file('extrapicthree_id', null, ['class'=>'btn btn-upload'])!!}
                     </div>

                      <div class="extra form-photo">
                        {!! Form::label('extrapicfour_id', 'Extra Pic 4:', ['class'=>'form-photo-label']) !!}
                        {!! Form::file('extrapicfour_id', null, ['class'=>'btn btn-upload'])!!}
                     </div>

                   <div class="form-group">
                     {!! Form::submit('Create Listing', ['class'=>'btn btn-submit pull-right']) !!}
                  </div>

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
