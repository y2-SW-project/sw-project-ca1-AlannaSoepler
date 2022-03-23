<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function clothing_article(){
        return $this->belongsToMany('App\Models\Article', 'brand_article');
    }
}
