<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoListing extends Model
{
    //
    //
    protected $uploads = '/images/houses/';


    protected $fillable = ['file'];


    public function getFileAttribute($fullpic){


        return $this->uploads . $fullpic;

    }
}
