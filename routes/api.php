<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\AuthController;
// use App\Http\Controllers\Api\MealController;
// use App\Http\Controllers\Api\ContactController;
// use App\Http\Controllers\Api\CategoryController;
// use App\Http\Controllers\Api\SubscriberController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::controller(CategoryController::class)->group(function () {
//     Route::get('/categories', 'index');         // للحصول على كل الأقسام
//     Route::get('/categories/{id}/meals', 'mealsByCategory'); // للحصول على الوجبات بقسم معين
// });


//get all meals
// Route::get('/meals', [MealController::class, 'index']);


// Route::controller(SubscriberController::class)->group(function () {
//     Route::post('/subscribe', 'store');


//     Route::post('/contact', [ContactController::class, 'store']);
// });

// Route::prefix('auth')->group(function () {
//         Route::post('/register', [AuthController::class, 'register']);
//         Route::post('/login', [AuthController::class, 'login']);
//         Route::post('/logout', [AuthController::class, 'logout']);
//     });

    // Protected Routes
    // Route::middleware('auth:sanctum')->group(function () {
    //     Route::get('/profile', function (Request $request) {
    //         return response()->json([
    //             'status' => true,
    //             'message' => 'User profile',
    //             'user' => $request->user()
    //         ]);
    //     });
    // });



    use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MealController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\Api\SubscriberController;
use App\Models\Reservation;

// Auth Routes
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
});

// Protected Profile Route
Route::middleware('auth:sanctum')->get('/profile', function (Request $request) {
    return response()->json([
        'status' => true,
        'message' => 'User profile',
        'user' => $request->user()
    ]);
});

// Categories
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index');
    Route::get('/categories/{id}/meals', 'mealsByCategory');
});

// Meals
Route::get('/meals', [MealController::class, 'index']);

// Subscriber + Contact
Route::post('/subscribe', [SubscriberController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);
Route::Post('/My-reservation',[ReservationController::class,'store'])->middleware('auth:sanctum');
