<?php

namespace App\Http\Controllers;

use App\Listing;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Http\Requests;

class ListingController extends Controller
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

        // $cities = Listing::lists('city')->all();
        $cities = Listing::all()->pluck('city');


        return view('front-end.listing', compact('listings' , 'cities'));
        // return view('front-end.listing', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return('create yep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $listing = Listing::findOrFail($id);

        return view('front-end/listing-detail', compact('listing','user'));
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



    public function listingsresults()
    {

      $q = Input::get ( 'q' );
      $listing = Listing::where ( 'city', 'LIKE', '%' . $q . '%' )
                        ->orwhere( 'street', 'LIKE', '%' . $q . '%' )
                        ->paginate(3);

      if (count ( $listing ) > 0)
        return view ( 'front-end/listingsresults' )->withDetails ( $listing )->withQuery ( $q );
      else
        return view ( 'front-end/listingsresults' )->withMessage ( 'No Details found. Try to search again !' );

      // $listings = Listing::all();
      // return view('front-end/listingsresults', compact('listings'));

    }

    public function multiresults()
    {

        // $loc = Input::get ( 'loc' );
        // $min = Input::get ( 'min' );
        // $max = Input::get ( 'max' );



        $loc = Input::has('loc') ?  Input::get('loc') : null;
        $min = Input::has('min') ? Input::get('min') : $min = null;
        $max = Input::has('max') ? Input::get('max') : $max = null;
        $cat = Input::has('cat') ? Input::get('cat') : $cat = null;

        // echo $loc . " " . $min . "  " . $max . " " . $cat;
        echo $loc. " " . "<br>";


        if(isset($min) && isset($max) && isset($loc) && isset($cat)){

          echo "  first";

          $listing = Listing::where ( 'price', '>=',  $min )
                          ->where('price', '<=',  $max )
                          ->where('category_id', 'LIKE', '%' . $cat . '%' )
                          ->where( 'city', 'LIKE', '%' . $loc . '%' )->paginate(3);

        }else if(isset($min) && isset($max) ){

          echo "  second";

          $listing = Listing::where ( 'price', '>=',  $min )
                          ->where('price', '<=',  $max )->paginate(3);

        }else if(isset($loc) && isset($cat) ){

          echo "  third";

          $listing = Listing::where ('category_id', 'LIKE', '%' . $cat . '%' )
                          ->where( 'city', 'LIKE', '%' . $loc . '%' )->paginate(3);

        }else if(isset($loc)){

          echo "  four";

          $listing = Listing::where( 'city', 'LIKE', '%' . $loc . '%' )->paginate(3);

        }else if(isset($cat)){

          echo "  four";

          $listing = Listing::where ('category_id', 'LIKE', '%' . $cat . '%' )->paginate(3);

        }


        if (count ( $listing ) > 0)
          return view ( 'front-end/multiresults', compact('cities'))->withDetails ( $listing )->withQuery ( $min, $max, $loc );
        else
          return view ( 'front-end/multiresults' )->withMessage ( 'No Details found. Try to search again !' );

    }



}
