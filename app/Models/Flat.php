<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flat extends Model implements Searchable
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
        'flat_size',
        'description',
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
        'gas',
        'water',
        'electricity',
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
            $url = route('flat.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Flat_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
