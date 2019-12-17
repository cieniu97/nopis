<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
  protected $fillable = [
      'dom_id', 'nazwa', 'data', 'przedmiot', 'rodzaj', 'semestr','user_id','path'
  ];
    public function dom()
   {
       return $this->belongsTo('App\Dom');
     }
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
