<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    //protected $table = 'address';
    protected $fillable=[
          'cost',
          'color',
          'name',
          'description'
      ];
}
