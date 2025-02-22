<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlowerColor extends Model
{
    use HasFactory;
    protected $guarded = [];


     // The table associated with the model
    //  protected $table = 'flower_colors';

     // Define the relationship with flowers (many-to-many)
    //  public function flowers()
    //  {
    //      return $this->belongsToMany(Flower::class, 'custom_flowers', 'color_id', 'flower_id')->withPivot('price');
    //  }


}
