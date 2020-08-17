<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimensione extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
