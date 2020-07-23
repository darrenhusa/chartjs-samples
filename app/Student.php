<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    public function getFtPtStatusAttribute()
    {
      if($this->credit_hours_enrolled >= 12)
      {
        $result = 'FT';
      }
      else
      {
        $result = 'PT';

      }
      return $result;

      //TODO Convert to ternary form???
    }

    public function getFullNameAttribute()
    {
      return $this->last_name . ', ' . $this->first_name;
    }

}
