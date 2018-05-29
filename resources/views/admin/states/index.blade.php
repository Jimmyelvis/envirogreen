@extends('layouts.admin')





@section('content')


<div id="staff">

  <div class="container">

      <div class="row">

        <h1>Cities</h1>


          <div class="col-sm-4">


            {!! Form::open(['method'=>'POST', 'action'=> 'AdminStateController@store']) !!}

               <div class="form-group">
                   {!! Form::label('name', 'Name:') !!}
                   {!! Form::text('name', null, ['class'=>'form-control'])!!}
               </div>

               <div class="form-group">
                   {!! Form::label('abbrev', 'Abbrev:') !!}
                   {!! Form::text('abbrev', null, ['class'=>'form-control'])!!}
               </div>

               <div class="form-group">
                   {!! Form::submit('Create State', ['class'=>'btn btn-primary']) !!}
               </div>
          {!! Form::close() !!}


          </div>

          <div class="col-sm-6">


            @if($states)

                <table class="table">

                  <thead>
                    <tr>
                       <th>Id</th>
                        <th>State</th>
                        <th>Abbrev</th>
                        <th>Created date</th>
                    </tr>
                    </tr>
                  </thead>



                <tbody>
                  @foreach($states as $state)

                      <tr>
                          <td>{{$state->id}}</td>
                          <td><a href="{{route('admin.states.edit', $state->id)}}">{{$state->name}}</a></td>
                          <td>{{$state->abbrev}}</td>
                          <td>{{$state->created_at ? $state->created_at->diffForHumans() : 'no date'}}</td>
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
