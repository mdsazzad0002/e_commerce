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

    // The table associated with the model
    // protected $table = 'flowers';

    // Define the relationship with colors (many-to-many)
    // public function flowercolors()
    // {
    //     return $this->belongsToMany(FlowerColor::class, 'custom_flowers', 'flower_id', 'color_id')->withPivot('price');
    // }
}
