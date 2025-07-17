<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SubscriberController;
use App\Http\Controllers\Api\MealController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CategoryController::class)->group(function(){
Route::get('/categories', 'index');         // للحصول على كل الأقسام
    Route::get('/categories/{id}/meals', 'mealsByCategory'); // للحصول على الوجبات بقسم معين
});


//get all meals
Route::get('/meals',[MealController::class,'index']);


Route::controller(SubscriberController::class)->group(function(){
Route::post('/subscribe','store');


Route::post('/contact', [ContactController::class,'store'] );


});
