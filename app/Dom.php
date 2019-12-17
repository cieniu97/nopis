<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dom extends Model
{
  protected $fillable = [
      'uczelnia', 'kierunek'
  ];

    public function users()
   {
       return $this->hasMany('App\User');
   }
   public function files()
   {
       return $this->hasMany('App\Files');
   }
   public function subjects(){
     return $this->hasMany('App\Subject');
   }
}
