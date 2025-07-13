<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    //
     public function index(){

        $meals= Meal::all();
       return response()->json([
        'status' => true,
        'message' => 'تم جلب الأصناف بنجاح',
        'data' => $meals
        ],200);
    }
}
