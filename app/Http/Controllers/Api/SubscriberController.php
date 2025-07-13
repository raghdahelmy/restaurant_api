<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //
    public function store(Request $request){

          $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = Subscriber::create([
            'email'=> $request->email,
        ]);
        return response()->json([
             'message' => '!تم الاشتراك بنجاح',
            'data' => $subscriber
        ],201);
    }
}
