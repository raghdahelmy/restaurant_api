<?php

namespace App\Http\Controllers\Api;

use App\Models\Meal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::all();

        return response()->json([
            'status' => true,
            'message' => 'تم جلب الأصناف بنجاح',
            'data' => $meals
        ], 200);
    }
}
