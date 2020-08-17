<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillables = ['cat_name'];

   public function products(){
       return $this->hasMany(Product::class);
   }
}
