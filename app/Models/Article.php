<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function brands(){
        return $this->belongsToMany('App\Models\Brand', 'brand_article');
    }
}
