<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [
      "brand" ,
      "model" ,
      "price_in_euro" ,
      "power" ,
      "hp"
    ];

}
