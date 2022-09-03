<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Phoneotp extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'phone_number',
        'isverified',
        'otp',

    ];
}
