<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use SoftDeletes;
    
    public function clothes()
    {
        return $this->hasMany('App\Clothes');
    }
    public function cotegory()
    {
        return $this->belongsTo('App\Cotegory');
    }
}
