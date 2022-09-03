<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Shop extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
      'division',
      'district',
      'thana',
        'address',
        'user_id',
        'post_type',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'building_condition',
        'fire_safety',
        'lift',
        'interior_condition',
        'parking',
        'electricity',
        'gas',
        'water',
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
            $url = route('shop.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Shop_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
