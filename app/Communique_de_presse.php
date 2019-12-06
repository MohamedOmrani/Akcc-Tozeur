<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communique_de_presse extends Model
{
    //table Name
    protected $table='communique_de_presses';
    //Primary key
    public $primaryKey='id';
    //timestamps
    public $timestamps = true;
}
