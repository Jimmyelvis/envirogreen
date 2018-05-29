<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ForRentScope;

class Listing extends Model
{

    //
      protected $fillable = [

        'street',
        'city_id',
        'state_id',
        'price',
        'beds',
        'baths',
        'sqft',
        'descrip',
        'category_id',
        'user_id',
        'state_id',
        'fullpic_id',
        'extrapicone_id',
        'extrapictwo_id',
        'extrapicthree_id',
        'extrapicfour_id',
        '',

      ];

      // protected $primaryKey = 'id';

      public function user(){

          return $this->belongsTo('App\User');

      }

      public function state(){

          return $this->belongsTo('App\State');

      }

      public function city(){

          return $this->belongsTo('App\City');

      }

      public function category(){

        return $this->belongsTo('App\Category');

      }

      public function fullpic(){

        return $this->belongsTo('App\PhotoListing');

      }

      public function extrapicone(){

        return $this->belongsTo('App\ExtraPhotoOne');

      }

      public function extrapictwo(){

        return $this->belongsTo('App\ExtraPhotoTwo');

      }

      public function extrapicthree(){

        return $this->belongsTo('App\ExtraPhotoThree');

      }

      public function extrapicfour(){

        return $this->belongsTo('App\ExtraPhotoFour');

      }

      //scopes

      public function scopeCitySearch($query, $s)
      {
          return $query->where('city', 'like', '%' .$s. '%');
      }

      public function scopeLessThanthreehundred($query)
      {
        return $query->where('price', '<', 300000);
      }

      public function scopeGreatThanthreehundred($query)
      {
        return $query->where('price', '>', 300000);
      }

      public function scopeOrderedBy($query)
      {
        return $query->orderBy('price', 'asc');
      }


}
