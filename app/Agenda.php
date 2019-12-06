<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
       //table Name
       protected $table='agendas';
       //Primary key
       public $primaryKey='id';
       //timestamps
       public $timestamps = true;


}
