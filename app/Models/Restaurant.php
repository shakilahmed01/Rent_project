<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Restaurant extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'resort_name',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'address',
        'room_type',
        'room_size',
        'star_rating',
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
        'dining',
        'spa',
        'gym',
        'sports',
        'swimmingpool',
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
            $url = route('restaurant.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Restaurant_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
