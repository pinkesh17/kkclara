<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Validator;

use Illuminate\Support\Carbon;

use App\Traits\ApiResponse;

class UserController extends Controller{

    use ApiResponse;


    /**
     * Display a listing of the resource.
     */


     public function countries(Request $request): Response{
        return Response(['success'=> false, 'message' => 'email or password wrong.'],401);

    }


    public function loginUser(Request $request): Response{
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:10',
            'password' => 'required|min:6',
        ]);
   
        if($validator->fails()){

            return Response(['success'=> false, 'message' => $validator->errors()],401);
        }
   
        if(Auth::attempt($request->all())){


           /* $user = Auth::user();
            $tokenResult = $user->createToken('auth_app_token');
            $token = $tokenResult->plainTextToken;*/


            $user = Auth::user();
            


            // For web app
           // $webToken = $user->createToken('web_app_token')->plainTextToken;

            // For mobile app
           // $mobileToken = $user->createToken('mobile_app_token')->plainTextToken;

            $user->tokens()->where('name', 'mobile_app_token')->delete(); 

            $tokenResult = $user->createToken('mobile_app_token');
            $token = $tokenResult->plainTextToken;



            // Set expiry manually
            $user->tokens()->latest()->first()->update([
                'expires_at' => now()->addDays(2), // Token expires in 7 days
            ]);

            $tokenModel = $user->tokens()->latest()->first();
            $tokenModel->update(['expires_at' => now()->addDays(7)]);

            //$token = $user->createToken('auth_token')->plainTextToken;

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
        
            /*return Response(['token' => $token],200);/*/

            $dp_name = getInitials($user->first_name, $user->last_name);
            $dp_name_first = getFirstLetter($user->first_name);


            return Response([
                'success'=> true,
                'message' => 'You are successfully logged in',
                'token' => $token,
                'expires_at' => $tokenModel->expires_at,

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

            /*return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ]);*/



            /*return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => [
                    'id' => $user->id,
                    'prefix' => $user->prefix,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'role' => $user->role,
                    'image' => $user->profile_picture,
                ]
            ]);*/
        }

        return Response(['success'=> false, 'message' => 'email or password wrong.'],401);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function userDetails(): Response{
        if (Auth::check()) {

            $user = Auth::user();

            return Response([
                    'success'=> true,
                    'message' => 'User dtails',
                    'data' => $user
            ],200);
        }




        return Response(['success'=> false, 'message' => 'Unauthorized user.', 'data' => 'Unauthorized.'],401);
    }





    /**
     * Display the specified resource.
     */
    public function logout(): Response{
        $user = Auth::user();

        $user->currentAccessToken()->delete();
        
        return Response(['success'=> true, 'message' => 'Logout successfully.', 'data' => 'User Logout successfully.'],200);
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
