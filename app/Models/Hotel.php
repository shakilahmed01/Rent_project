<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hotel extends Model implements Searchable

{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'hotel_name',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'location',
        'room_size',
        'wifi',
        'bathroom',
        'cctv',
        'lift',
        'furnished',
        'security',
        'parking',
        'fire_exit',
        'dining',
        'sports',
        'gym',
        'ac',
        'laundry',
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
            $url = route('hotel.show', $this->id);

            return new SearchResult(
                $this,
                $this->location,
                $url
            );
        }

        function Hotel_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
