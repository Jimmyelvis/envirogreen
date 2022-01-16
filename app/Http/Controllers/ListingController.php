<?php

namespace App\Http\Controllers;

use App\Listing;
use App\User;
use App\City;
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


        $listings = Listing::paginate(9);

          $cities = City::all()->pluck('name' , 'id');


        return view('front-end.listing', compact('listings' , 'cities'));
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
        $user = User::all()->pluck('name' , 'email', 'phone');


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

        $cities = City::all()->pluck('name' , 'id');

        $pageinate = 9;

        $q = Input::get ( 'q' );
        $listing = Listing::join('cities', 'listings.city_id', '=', 'cities.id')
                         ->select('cities.id','listings.*', 'cities.name')
                         ->where ( 'name', 'LIKE', '%' . $q . '%' )
                         ->paginate($pageinate);

        if (count ( $listing ) > 0)
          return view ( 'front-end/listingsresults', compact('cities'))->withDetails ( $listing )->withQuery ( $q );
        else
          return view ( 'front-end/listingsresults', compact('cities'))->withMessage ( 'No Details found. Try to search again !' );


      }

    public function multiresults()
    {

        $pageinate = 9;

        $cities = City::all()->pluck('name' , 'id');

        $loc = Input::has('loc') ?  Input::get('loc') : null;
        $min = Input::has('min') ? Input::get('min') : $min = null;
        $max = Input::has('max') ? Input::get('max') : $max = null;
        $beds = Input::has('beds') ? Input::get('beds') : $beds = null;
        $baths = Input::has('baths') ? Input::get('baths') : $baths = null;

        // echo "CITY   " .  $loc .  "<br>" . "MIN PRICE " .  $min . "<br>" . "MAX PRICE " .  $max  .  "<br>" . "MIN beds "  . $beds .  "<br>" . "MIN baths " .  $baths .  "<br>";


        //CONDITIONS

        
        if(isset($min) && isset($max) && isset($loc) && isset($beds) && isset($baths) ){

          // echo "  ALL OPTIONS SET";

          $listing = Listing::where ( 'price', '>=',  $min )
                            ->where('price', '<=',  $max )
                            ->where('beds', '>=',  $beds )
                            ->where('baths', '>=',  $baths )
                            ->where ( 'city_id', '=',  $loc )->paginate($pageinate);
        }
        else if(isset($min) && isset($max) && isset($loc) ){
          // echo "  MIN/MAX PRICE & CITY SET";
          $listing = Listing::where ( 'price', '>=',  $min )
                          ->where('price', '<=',  $max )->paginate($pageinate);
        }
        else if(isset($min)){
          // echo "  MIN/MAX PRICE SET";
          $listing = Listing::where ( 'price', '>=',  $min )->paginate($pageinate);
        }
        else if(isset($max)){
          // echo "  MIN/MAX PRICE SET";
          $listing = Listing::where ( 'price', '<=',  $max )->paginate($pageinate);
        }
        else if(isset($min) && isset($max) ){
          // echo "  MIN/MAX PRICE SET";
          $listing = Listing::where ( 'price', '>=',  $min )
                          ->where('price', '<=',  $max )->paginate($pageinate);
        }
        else if(isset($min) && isset($max) && isset($beds)){
          // echo "  MIN/MAX PRICE MIN BEDS SET";
          $listing = Listing::where ( 'price', '>=',  $min )
                          ->where('price', '<=',  $max )
                          ->where('beds', '>=',  $beds )->paginate($pageinate);
        }
        else if(isset($min) && isset($max) && isset($baths)){
          // echo "  MIN/MAX PRICE MIN BATHS SET";
          $listing = Listing::where ( 'price', '>=',  $min )
                          ->where('price', '<=',  $max )
                          ->where('baths', '>=',  $baths )->paginate($pageinate);
        }
        else if(isset($beds)){
          // echo "  MIN BEDS SET";
          $listing = Listing::where('beds', '>=',  $beds )->paginate($pageinate);
        }
        else if(isset($baths)){
          // echo "  MIN BATHS SET";
          $listing = Listing::where('baths', '>=',  $baths )->paginate($pageinate);
        }
        else if(isset($loc)){
          // echo "  CITY SET";
          $listing = Listing::where ( 'city_id', '=',  $loc )->paginate($pageinate);
        }
      

        if (count ( $listing ) > 0)
          return view ( 'front-end/multiresults', compact('cities'))->withDetails ( $listing )->withQuery ( $min, $max, $loc, $beds, $baths );
        else
          return view ( 'front-end/multiresults', compact('cities'))->withMessage ( 'No Details found. Try to search again !' );

    }


  public function autocomplete(Request $request)
    {
      $term = $request->term; //jquery
      $data = City::where('name', 'LIKE', '%' .$term. '%')
      ->take(10)
      ->get();
      $result = array();

      foreach ($data as $key => $value) {
        $result[] = ['id'=>$value->id,'value'=>$value->name];
      }

      return response()->json($result);
      // return ($result);
  }

 

}
