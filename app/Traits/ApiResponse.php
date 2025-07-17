<?php

namespace App\Traits;

trait ApiResponse{
    public function SuccessResponse($data=null , $message='success' , $code=200){

return response()->json([
    'status'=>true,
    'message'=>$message,
    'data'=>$data

],$code);
    }


  public function ErrorResponse($message = 'Error', $code = 400, $data = null)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data
        ], $code);
    }

}


