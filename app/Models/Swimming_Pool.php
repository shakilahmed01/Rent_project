<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Swimming_Pool extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'type',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'address',
        'size',
        'toilet',
        'wifi',
        'laundry',
        'change_room',
        'shed',
        'parking',
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
            $url = route('swimmingpool.show', $this->id);

            return new SearchResult(
                $this,
                $this->type,
                $url
            );
        }

        function Swimming_Pool_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
