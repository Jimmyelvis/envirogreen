@extends('layouts.admin')





@section('content')


<div id="staff">

  <div class="container">

      <div class="row">

        <h1>Cities</h1>


          <div class="col-sm-4">


            {!! Form::open(['method'=>'POST', 'action'=> 'AdminCityController@store']) !!}
               <div class="form-group">
                   {!! Form::label('name', 'Name:') !!}
                   {!! Form::text('name', null, ['class'=>'form-control'])!!}
               </div>

               <div class="form-group">
                   {!! Form::submit('Create City', ['class'=>'btn btn-primary']) !!}
               </div>
          {!! Form::close() !!}


          </div>

          <div class="col-sm-6">


            @if($cities)

                <table class="table">

                  <thead>
                    <tr>
                       <th>id</th>
                        <th>Name</th>
                        <th>Created date</th>
                    </tr>
                    </tr>
                  </thead>



                <tbody>
                  @foreach($cities as $city)

                      <tr>
                          <td>{{$city->id}}</td>
                          <td><a href="{{route('admin.cities.edit', $city->id)}}">{{$city->name}}</a></td>
                          <td>{{$city->created_at ? $city->created_at->diffForHumans() : 'no date'}}</td>
                      </tr>

                  @endforeach


                </tbody>

              </table>

           @endif



          </div>

      </div>

    </div>


</div>

@stop
