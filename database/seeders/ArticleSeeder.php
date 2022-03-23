<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Brand;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title_brand = Brand::where('title','Desigual')->first();

        $ca = new Article();
        $ca->name = 'Jeans';
        $ca->save();

        $ca->brands()->attach($title_brand);
    }
}
