<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
        ]);

   $contact= Contact::create($request->only('name','email','phone','message'));

return response()->json([
       'status' => true,
            'message' => 'تم إرسال الرسالة بنجاح',
            'data' => $contact,
], 201);
    }
};
