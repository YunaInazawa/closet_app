<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use SoftDeletes;
    
    public function clothes()
    {
        return $this->hasMany('App\Clothes');
    }
}
