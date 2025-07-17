<?php

namespace App\Http\Controllers\Api;

use App\Models\Meal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MealResource;
use App\Traits\ApiResponse;

class MealController extends Controller
{

    use ApiResponse;

    public function index()
    {
        // $meals = Meal::all();

        // return response()->json([
        //     'status' => true,
        //     'message' => 'تم جلب الأصناف بنجاح',
        //     'data' => $meals
        // ], 200);

        $meals = Meal::with('category')->get();
        return $this->SuccessResponse(MealResource::collection($meals),'تم جلب الاصناف بنجاح',200);
    }
}
