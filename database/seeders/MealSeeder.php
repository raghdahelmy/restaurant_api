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
         Meal::insert([
            // بيتزا (category_id = 1)
            ['name' => 'بيتزا مارجريتا', 'price' => 85, 'category_id' => 1],
            ['name' => 'بيتزا بيبروني', 'price' => 100, 'category_id' =>1],
            ['name' => 'بيتزا خضار', 'price' => 90, 'category_id' => 1],

            // باستا (category_id = 2)
            ['name' => 'سباجيتي بولونيز', 'price' => 95, 'category_id' => 2],
            ['name' => 'لازانيا', 'price' => 110, 'category_id' => 2],
            ['name' => 'فيتوتشيني ألفريدو', 'price' => 105, 'category_id' => 2],

            // سناكس (category_id = 3)
            ['name' => 'بطاطس ويدجز', 'price' => 40, 'category_id' => 3],
            ['name' => 'موتزاريلا ستكس', 'price' => 60, 'category_id' => 3],
            ['name' => 'حلقات بصل', 'price' => 35, 'category_id' => 3],

            // حلويات (category_id = 4)
            ['name' => 'تيراميسو', 'price' => 75, 'category_id' => 4],
            ['name' => 'كيك شوكولاتة', 'price' => 55, 'category_id' => 4],
            ['name' => 'تشيز كيك', 'price' => 65, 'category_id' => 4],

            // مشروبات (category_id = 5)
            ['name' => 'بيبسي', 'price' => 20, 'category_id' => 5],
            ['name' => 'عصير برتقال فريش', 'price' => 35, 'category_id' => 5],
            ['name' => 'مياه معدنية', 'price' => 10, 'category_id' => 5],
  ]);
  }
}
