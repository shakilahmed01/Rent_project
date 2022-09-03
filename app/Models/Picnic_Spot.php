<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Picnic_Spot extends Model implements Searchable
{
  use HasFactory;
  use SoftDeletes;
  protected $fillable = [
    'title',
    'date',
    'phone',
    's_charge',
    'description',
      'picnic_spot_name',
      'user_id',
      'post_type',
      'division',
      'district',
      'thana',
      'address',
      'price',
      'shed',
      'electricity',
      'gas',
      'water',
      'change_room',
      'dining',
      'toilet',
      'lift',
      'parking',
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
          $url = route('picnic_spot.show', $this->id);

          return new SearchResult(
              $this,
              $this->address,
              $url
          );
      }

      function Picnic_spot_relationBetweenUser()
            {
            return $this->hasOne('App\Models\User','id','user_id');
            }
}
