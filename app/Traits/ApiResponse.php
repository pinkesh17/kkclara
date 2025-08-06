<?php

namespace App\Traits;

trait ApiResponse{
	
    protected function errorResponse($message, $code){
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => null,
            'code' => $code
        ], $code);
    }
}