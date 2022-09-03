<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Exibution_Center extends Model implements Searchable
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
        'exibution_center_name',
        'division',
        'district',
        'thana',
        'address',
        'room_type',
        'room_size',
        'toilet',
        'fire_exit',
        'lift',
        'parking',
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
            $url = route('exibution.show', $this->id);

            return new SearchResult(
                $this,
                $this->exibution_center_name,
                $url
            );
        }

        function Exibution_Center_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
