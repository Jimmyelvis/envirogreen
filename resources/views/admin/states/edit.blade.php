@extends('layouts.admin')





@section('content')


    <h1>Cities</h1>


    <div class="col-sm-6">

        {!! Form::model($cities, ['method'=>'PATCH', 'action'=> ['AdminCityController@update', $city->id]]) !!}

             <div class="form-group">
                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name', null, ['class'=>'form-control'])!!}
             </div>

             <div class="form-group">
                 {!! Form::label('state', 'State:') !!}
                 {!! Form::text('state', null, ['class'=>'form-control'])!!}
             </div>


             <div class="form-group">
                 {!! Form::submit('Update City', ['class'=>'btn btn-primary col-sm-3']) !!}
             </div>
        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminCityController@destroy', $city->id]]) !!}


        <div class="form-group">
            {!! Form::submit('Delete City', ['class'=>'btn btn-danger col-sm-3 col-md-offset-1']) !!}
        </div>
        {!! Form::close() !!}



    </div>




    <div class="col-sm-6">




    </div>





@stop
