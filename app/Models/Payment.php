<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_type',
        'package_type',
        'amount',
        'duration',
        'isverified',

    ];

    function Payment_relationBetweenUser()
          {
          return $this->hasOne('App\Models\User','id','user_id');
          }
}
