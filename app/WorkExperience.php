<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
   //protected $primaryKey='id';
   protected $table='work_experience';
   protected $fillable=['company', 'activities', 'contract_starting_date', 'contract_end_date'];
}
