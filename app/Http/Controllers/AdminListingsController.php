<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PhotoListing;
use App\ExtraPhotoOne;
use App\ExtraPhotoTwo;
use App\ExtraPhotoThree;
use App\ExtraPhotoFour;
use App\Photo;
use App\Category;
use App\State;
use App\City;
use App\Listing;
use App\Helpers;
use App\Http\Requests\ListingRequest;
use App\Http\Requests\ListingEditRequest;
use App\Http\Requests;

class AdminListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $listings = Listing::all();

        return view('admin/listings.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catagories = Category::lists('name','id')->all();
        $states = State::lists('name','id')->all();
        $cities = City::lists('name','id')->all();
        $users = User::lists('name','id','photo_id')->all();
        return view('admin.listings.create', compact('catagories', 'cities', 'states','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListingRequest $request)
    {

      //Request of the entire form

      $input = $request->all();


      if($file = $request->file('fullpic_id')) {

        $name = time() . $file->getClientOriginalName();
        $file->move('images/houses', $name);
        $fullpic = PhotoListing::create(['file'=>$name]);
        $input['fullpic_id'] = $fullpic->id;

      }

      if($file = $request->file('extrapicone_id')) {

        $name = time() . $file->getClientOriginalName();
        $file->move('images/interiors', $name);
        $extrapicone = ExtraPhotoOne::create(['file'=>$name]);
        $input['extrapicone_id'] = $extrapicone->id;

      }

      if($file = $request->file('extrapictwo_id')) {

        $name = time() . $file->getClientOriginalName();
        $file->move('images/interiors', $name);
        $extrapictwo = ExtraPhotoTwo::create(['file'=>$name]);
        $input['extrapictwo_id'] = $extrapictwo->id;

      }

      if($file = $request->file('extrapicthree_id')) {

        $name = time() . $file->getClientOriginalName();
        $file->move('images/interiors', $name);
        $extrapicthree = ExtraPhotoThree::create(['file'=>$name]);
        $input['extrapicthree_id'] = $extrapicthree->id;

      }

      if($file = $request->file('extrapicfour_id')) {

        $name = time() . $file->getClientOriginalName();
        $file->move('images/interiors', $name);
        $extrapicfour = ExtraPhotoFour::create(['file'=>$name]);
        $input['extrapicfour_id'] = $extrapicfour->id;

      }

      Listing::create($input);

      return redirect('/admin/listings');

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
        $listings = Listing::findOrFail($id);

        $catagories = Category::lists('name','id')->all();
        $states = State::lists('name','id')->all();
        $cities = City::lists('name','id')->all();
        $users = User::lists('name','id','photo_id')->all();

        return view('admin.listings.edit', compact('listings','catagories','states', 'cities', 'users'));
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

        $listings = Listing::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('fullpic_id')) {

          $name = time() . $file->getClientOriginalName();
          $file->move('images/houses', $name);
          $fullpic = PhotoListing::create(['file'=>$name]);
          $input['fullpic_id'] = $fullpic->id;

        }

        if($file = $request->file('extrapicone_id')) {

          $name = time() . $file->getClientOriginalName();
          $file->move('images/interiors', $name);
          $extrapicone = ExtraPhotoOne::create(['file'=>$name]);
          $input['extrapicone_id'] = $extrapicone->id;

        }

        if($file = $request->file('extrapictwo_id')) {

          $name = time() . $file->getClientOriginalName();
          $file->move('images/interiors', $name);
          $extrapictwo = ExtraPhotoTwo::create(['file'=>$name]);
          $input['extrapictwo_id'] = $extrapictwo->id;

        }

        if($file = $request->file('extrapicthree_id')) {

          $name = time() . $file->getClientOriginalName();
          $file->move('images/interiors', $name);
          $extrapicthree = ExtraPhotoThree::create(['file'=>$name]);
          $input['extrapicthree_id'] = $extrapicthree->id;

        }

        if($file = $request->file('extrapicfour_id')) {

          $name = time() . $file->getClientOriginalName();
          $file->move('images/interiors', $name);
          $extrapicfour = ExtraPhotoFour::create(['file'=>$name]);
          $input['extrapicfour_id'] = $extrapicfour->id;

        }

        $listings->update($input);

        return redirect('/admin/listings');

        // return $request->all();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


      $listings = Listing::findOrFail($id);


      $listings->delete();

      // Session::flash('deleted_user','The user has been deleted');

      return redirect('/admin/listings');

      // return "destroy";
    }


}
