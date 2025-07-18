<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Traits\ApiResponse;

class ContactController extends Controller
{
    //

    use ApiResponse;
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
        ]);

   $contact= Contact::create($request->only('name','email','phone','message'));

return $this->SuccessResponse(new ContactResource($contact),'تم إرسال الرسالة بنجاح',201);

// return response()->json([
//        'status' => true,
//             'message' => 'تم إرسال الرسالة بنجاح',
//             'data' => $contact,
// ], 201);
    }
};
