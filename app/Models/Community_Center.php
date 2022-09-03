<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Community_Center extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'user_id',
        'post_type',
        'community_name',
        'division',
        'district',
        'thana',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'interior_condition',
        'fire_safety',
        'lift',
        'wifi',
        'garden',
        'cooking',
        'sitting',
        'parking',
        'gas',
        'electricity',
        'water',
        'ac',
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
            $url = route('community.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Community_Center_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
