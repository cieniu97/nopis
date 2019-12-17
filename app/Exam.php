<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
      protected $fillable = [
          'dom_id', 'nazwa', 'data', 'przedmiot', 'rodzaj', 'semestr', 'materialy','user_id'
      ];
      public function user()
     {
         return $this->belongsTo('App\User');
     }
     public function dom(){
       return $this->belognsTo('App\Dom');
     }
}
