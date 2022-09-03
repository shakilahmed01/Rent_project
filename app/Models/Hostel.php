<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hostel extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'hostel_name',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'address',
        'room_type',
        'room_size',
        'utilities',
        'attached_toilet',
        'attached_varanda',
        'hot_water',
        'laundry',
        'ac',
        'cable_tv',
        'wifi',
        'lift',
        'furnished',
        'parking',
        'fire_exit',
        'dining',
        'sports',
        'gym',
        'price',
        'photo',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6',
        'video',
        'active',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('hostel.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Hostel_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
