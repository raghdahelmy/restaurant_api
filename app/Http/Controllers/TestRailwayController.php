<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRailwayController extends Controller
{
    //
      public function ping()
    {
        return response()->json([
            'message' => 'Railway is working 🎉'
        ]);
    }
}
