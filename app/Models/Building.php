<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Building extends Model implements Searchable
{
    use HasFactory;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
      'building_name',
        'building_size',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'address',
        'price',
        'gas',
        'water',
        'electricity',
        'lift',
        'parking',
        'fire_exit',
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
            $url = route('building.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Building_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
