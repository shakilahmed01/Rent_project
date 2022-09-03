<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Ghat extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
      'title',
      'date',
      'phone',
      's_charge',
      'description',
        'ghat_name',
        'user_id',
        'post_type',
        'division',
        'district',
        'thana',
        'address',
        'toilet',
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
            $url = route('ghat.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Ghat_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
