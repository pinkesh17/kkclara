<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Validator;

use Illuminate\Support\Carbon;

class UserController extends Controller{


    /**
     * Display a listing of the resource.
     */
    public function loginUser(Request $request): Response{
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:10',
            'password' => 'required|min:6',
        ]);
   
        if($validator->fails()){

            return Response(['message' => $validator->errors()],401);
        }
   
        if(Auth::attempt($request->all())){


            $user = Auth::user();
            $tokenResult = $user->createToken('flutter-app-token');
            $token = $tokenResult->plainTextToken;

            // Set expiry for token (e.g., 7 days from now)
           // $tokenResult->accessToken->expires_at = Carbon::now()->addDays(7);
           // $tokenResult->accessToken->save();

            /*return response()->json([
                'user' => $user,
                'token' => $token,
                'expires_at' => $tokenResult->accessToken->expires_at
            ]);*/




















           // $user = Auth::user(); 

            //$tokenResult = $user->createToken('flutter-app-token');

           // $token = $tokenResult->plainTextToken;
            //$success =  $user->createToken('MyApp')->plainTextToken; 

            // Set expiry for token (e.g., 7 days from now)
            //$tokenResult->accessToken->expires_at = Carbon::now()->addDays(7);
           // $tokenResult->accessToken->save();
        
            return Response(['token' => $token],200);
        }

        return Response(['message' => 'email or password wrong'],401);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function userDetails(): Response{
        if (Auth::check()) {

            $user = Auth::user();

            return Response(['data' => $user],200);
        }

        return Response(['data' => 'Unauthorized'],401);
    }

    /**
     * Display the specified resource.
     */
    public function logout(): Response{
        $user = Auth::user();

        $user->currentAccessToken()->delete();
        
        return Response(['data' => 'User Logout successfully.'],200);
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
