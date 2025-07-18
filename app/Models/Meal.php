<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    //
     protected $fillable = ['name,price,image,category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}


