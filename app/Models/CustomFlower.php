<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomFlower extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function flower()
    {
        return $this->belongsTo(Flower::class,'flower_id','id');
    }
    public function color()
    {
        return $this->belongsTo(FlowerColor::class,'color_id','id');
    }




        // The table associated with the model
        // protected $table = 'custom_flowers';
}
