<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlowerAttribute extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['color'];

    public function getColorAttribute()  {
        $data =  $this->hasOne(FlowerColor::class, 'id', 'color_id');
        if($data){
            return $data;
        }else{
            return null;
        }
    }
}
