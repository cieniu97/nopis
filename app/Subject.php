<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = [
      'dom_id', 'name'
  ];
  public function dom()
 {
     return $this->belongsTo('App\Dom');
   }
}
