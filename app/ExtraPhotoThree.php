<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraPhotoThree extends Model
{
    //
    //
    protected $uploads = '/images/interiors/';


    protected $fillable = ['file'];


    public function getFileAttribute($photo){


        return $this->uploads . $photo;

    }
}
