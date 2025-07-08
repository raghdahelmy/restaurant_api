<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // ترجع كل الأقسام

    public function index(){

        $categories= Category::all();
       return response()->json([
        'status' => true,
        'message' => 'تم جلب الأقسام بنجاح',
        'data' => $categories
        ],200);
    }

     // ترجع الأصناف التابعة لقسم معين
public function meals($id){
    $category = Category::with('meals')->findOrFail($id);

    $meals = $category->meals->map(
        function ($meal){
            return[
                 'id' => $meal->id,
        'name' => $meal->name,
        'price' => $meal->price,
            ];
        }
    );

    return response()->json([
        'status' => true,
        'message' => 'تم جلب الأصناف بنجاح',
        'category' => $category->name,
        'meals' => $meals,
    ], 200);

}
}
