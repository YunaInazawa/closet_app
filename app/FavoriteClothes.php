<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteClothes extends Model
{
    use SoftDeletes;
    
    public function clothes()
    {
        return $this->belongsTo('App\Clothes');
    }
    public function favorite()
    {
        return $this->belongsTo('App\Favorite');
    }
}
