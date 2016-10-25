<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Address extends Model
{
    //
    protected $table = 'address';
    protected $fillable=[
          'street_one',
          'street_two',
          'zipcode'
      ];
}
