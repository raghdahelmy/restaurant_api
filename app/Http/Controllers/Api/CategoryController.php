<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\MealResource;

class CategoryController extends Controller
{

    use ApiResponse;

    // ترجع كل الأقسام

    public function index()
    {

        $categories = Category::all();

        return $this->SuccessResponse(CategoryResource::collection($categories),'تم جلب الاقسام بنجاح',200);
    }

    // ترجع الأصناف التابعة لقسم معين
    public function mealsByCategory($id)
    {

           $category = Category::with('meals')->find($id);
        $meals = MealResource::collection($category);

        return $this->SuccessResponse($meals, 'تم جلب الاصناف بنجاح', 200);

        // $category = Category::with('meals')->findOrFail($id);

        // $meals = $category->meals->map(
        //     function ($meal){
        //         return[
        //              'id' => $meal->id,
        //     'name' => $meal->name,
        //     'price' => $meal->price,
        //         ];
        //     }
        // );

        // return response()->json([
        //     'status' => true,
        //     'message' => 'تم جلب الأصناف بنجاح',
        //     'category' => $category->name,
        //     'meals' => $meals,
        // ], 200);


    }
}
