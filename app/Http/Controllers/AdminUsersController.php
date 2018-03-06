<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Photo;
use App\Role;
use App\Position;
use App\Http\Requests\UserRequest;
use App\Http\Requests;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();

        return view('admin/users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::lists('name','id')->all();
        $positions = Position::lists('name','id')->all();
        return view('admin.users.create', compact('roles','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //return $request->all();

        // User::create($request->all());

        $input = $request->all();

        if($file = $request->file('photo_id')) {

          $name = time() . $file->getClientOriginalName();
          $file->move('images/people', $name);
          $photo = Photo::create(['file'=>$name]);

          $input['photo_id'] = $photo->id;

        }

        $input['password'] = bcrypt($request->password);

        User::create($input);

        return redirect('/admin/users');

        // return redirect('admin/users');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
