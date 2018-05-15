<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'skype', 'phone', 'role_id', 'position_id', 'photo_id','',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
      return $this->belongsTo('App\Role');
  }

    public function position(){
      return $this->belongsTo('App\Position');
  }

    public function photo(){
      return $this->belongsTo('App\PhotoStaff');
  }

  public function isAdmin(){

      if($this->role->name  == "web-admin" || "data-entry"){

          return true;
      }

      return false;

  }

}
