<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customFlowers()
{
    return $this->hasMany(CustomFlower::class);
}

public function attribute_price()
{
    return $this->hasMany(FlowerAttribute::class,'flower_id', 'id');
}

    // The table associated with the model
    // protected $table = 'flowers';

    // Define the relationship with colors (many-to-many)
    // public function flowercolors()
    // {
    //     return $this->belongsToMany(FlowerColor::class, 'custom_flowers', 'flower_id', 'color_id')->withPivot('price');
    // }
}
