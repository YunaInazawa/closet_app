<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotegory extends Model
{
    use SoftDeletes;
    
    public function genres()
    {
        return $this->hasMany('App\Genre');
    }
}
