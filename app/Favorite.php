<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use SoftDeletes;
    
    public function favorite_clothes()
    {
        return $this->hasMany('App\FavoriteClothes');
    }
}
