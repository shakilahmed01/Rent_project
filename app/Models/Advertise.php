<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'title',
      'photo',
      'active',
    ];
    function Advertise_relationBetweenUser()
          {
          return $this->hasOne('App\Models\User','id','user_id');
          }
}
