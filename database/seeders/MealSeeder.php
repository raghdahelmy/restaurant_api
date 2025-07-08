<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Meal::create([
            'name' => 'كفتة',
            'price' => 80,
            'category_id' => 1
        ]);

        Meal::create([
            'name' => 'شيش طاووق',
            'price' => 90,
            'category_id' => 1
        ]);

        Meal::create([
            'name' => 'أم علي',
            'price' => 50,
            'category_id' => 2
        ]);
    }
}
