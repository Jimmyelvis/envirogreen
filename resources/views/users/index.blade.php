@extends('layouts.admin')

@section('content')

<div id="staff">

        <div class="container">

              <h2>Staff</h2>

            <table class="table" >
              <thead>
                <tr>
                    <th class="id">Id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Position ID</th>
                    <th>Phone</th>
                    <th>Skype</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>

              </thead>


              <tbody>

               @if($users)

                 @foreach($users as $user)

                   <tr>
                     <td class="id">{{$user->id}}</td>
                     <td><img height="100" src="http://placehold.it/400x400"></td>
                     <td><a href="">{{$user->name}}</a></td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->role->name}}</td>
                     <td>{{$user->position_id}}</td>
                     <td>{{$user->phone}}</td>
                     <td>{{$user->skype}}</td>
                     <td>{{$user->created_at->diffForHumans()}}</td>
                     <td>{{$user->updated_at->diffForHumans()}}</td>
                   </tr>


                   @endforeach

               @endif



              </tbody>

            </table>


        </div>

    </div>




@endsection
