<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillables = ['title_pd', 'title_img_pd', 'description_pd', 'frame_pd', 'material_pd', 'quantity_pd'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    
    public function dimensiones(){
        return $this->belongsToMany(Dimensione::class)->withTimestamps();
    }
}
