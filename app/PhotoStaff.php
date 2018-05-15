<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoStaff extends Model
{
    //
    protected $uploads = '/images/people/';


    protected $fillable = ['file'];


    public function getFileAttribute($photo){


        return $this->uploads . $photo;

    }
}
