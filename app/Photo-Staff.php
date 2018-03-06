<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo-Staff extends Model
{
    //
    protected $uploads = '/images/people/';


    protected $fillable = ['file'];


    public function getFileAttribute($photoStaff){


        return $this->uploads . $photoStaff;

    }
}
