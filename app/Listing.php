<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    //
      protected $fillable = [

        'street',
        'city',
        'state',
        'price',
        'beds',
        'baths',
        'sqft',
        'descrip',
        'path'

      ];

      protected $primaryKey = 'id';

      public function user(){

          return $this->belongsTo('App\Staff');

      }

      public function category(){

        return $this->belongsTo('App\Category');

      }

      public function photo(){

        return $this->belongsTo('App\Photo');

      }


}
