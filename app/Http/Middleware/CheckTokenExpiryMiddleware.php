<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTokenExpiryMiddleware{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        $token = $request->user()?->currentAccessToken();

        if ($token && $token->expires_at && now()->greaterThan($token->expires_at)) {
            //$token->delete(); // Revoke the expired token
            //return response()->json(['message' => 'Token expired'], 401);



           /* return Response([
                'status' => 0,
                'message' => 'Token expired...',
                'data' => ''
            ], 401);*/
        }

        return $next($request);
    }

}


/*
return Response([
    'token' => $token,
    'user' => [
        'id' => $user->id,
        'first_name' => $user->first_name,
        'last_name' => $user->last_name,
        'dp_name' => $dp_name,
        'dp_name_first' => $dp_name_first,
        'email' => $user->email,
        'phone' => $user->phone,
        'role' => $user->role,
        'image' => $user->profile_picture,
    ]
], 200);

*/