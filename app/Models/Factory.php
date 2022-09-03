<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Factory extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'factory_name',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'building_condition',
        'fire_safety',
        'lift',
        'interior_condition',
        'drainage_system',
        'parking',
        'gas',
        'water',
        'electricity',
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
            $url = route('factory.show', $this->id);

            return new SearchResult(
                $this,
                $this->factory_name,
                $url
            );
        }

        function Factory_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
