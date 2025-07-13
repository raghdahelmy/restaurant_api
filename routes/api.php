<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\MealController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CategoryController::class)->group(function(){
Route::get('/categories', 'index');         // للحصول على كل الأقسام
    Route::get('/categories/{id}/meals', 'meals'); // للحصول على الوجبات بقسم معين
});

Route::get('/meals',[MealController::class,'index']);
