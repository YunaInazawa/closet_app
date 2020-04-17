<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use SoftDeletes;
    
    public function favorite_clothes()
    {
        return $this->hasMany('App\FavoriteClothes');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
