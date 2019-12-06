<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{

    protected $table='adds';
    public $primarykey='id';
    public $timestamps=true;

     public function user(){
      return $this->belongsTo('App\User') ;
   }
}
