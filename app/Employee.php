<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   //protected $primaryKey='id';
   //protected $table='employees';
   protected $fillable=['names', 'lastnames', 'email', 'address', 'availability'];
}
   
