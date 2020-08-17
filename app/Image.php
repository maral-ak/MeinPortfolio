<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillables = ['img_name'];
    
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
