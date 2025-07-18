<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //

    use ApiResponse;
    public function store(Request $request){

          $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = Subscriber::create([
           'email'=> $request->email,
        ]);

return $this->SuccessResponse(new SubscriberResource ($subscriber),'!تم الاشتراك بنجاح',201);


        // return response()->json([
        //      'message' => '!تم الاشتراك بنجاح',
        //     'data' => $subscriber
        // ],201);
    }
}
