<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Training extends Model
{

  use SoftDeletes;
    protected $guarded = array();



          public function steps()
    {
        return $this->hasMany('App\Models\Steps');
    }

}
