<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Helpers\OtpHelperController;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */



    public function showRegistrationForm(){
        return view('users.auth.register');
    }

    public function register(Request $request){
        $this->phoneValidator($request->all())->validate();

        $otp =  OtpHelperController::printReport();

        $request->session()->put('user_otp', $otp);
        $request->session()->put('phone', $request->post('phone'));

        //return redirect('otp', [$otp]);

       // echo $otp;

        return redirect()->route('otp');





       /* event(new Registered($user = $this->otpCreate($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());*/
    }







    public function showRegistrationOtpForm(Request $request){
        $session_data = $request->session()->all();

        /*$user_otp = $request->session()->get('user_otp');*/

        //$user_otp = $request->session()->only(['user_otp','_token']);

        if ($request->session()->has('phone')) {
            return view('users.auth.otp', ['session_data'=>$session_data]);
        }else{
            return redirect()->route('register');
        }

    }

    public function showRegistrationOtpFormPost(Request $request){


        $this->otpValidator($request->all())->validate();

        $input_otp = $request->post('otp');
        $session_otp = $request->session()->get('user_otp');

        if($input_otp == $session_otp){

            echo "<p>OTP MATCH *** </p>";

                 //event(new Registered($user = $this->otpCreate($request->all())));

            event(new Registered($user = $this->otpCreate($request->all())));


            echo "<hr>";
            print_r($user->id);
            echo "<hr>";
            print_r($user->phone);


             $credentials = [
                'id' => $user->id,
                'password' => $session_otp,
            ];


            /*if(Auth::attempt($credentials)) {
                return redirect()->route('dashboard');       
            }*/


            $this->guard()->login($user);
            $this->updateUserId();

            $request->session()->forget(['user_otp', 'phone']);


            return redirect($this->redirectPath());



            /*if ($response = $this->registered($request, $user)) {
                return $response;
            }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());*/



        }else{
            echo "<p>OTP NOT MATCH ==== </p>";
        }


       

      echo "<p>i am otp = input_otp = $input_otp ,  session_otp = $session_otp</p>";




        

/*
        $session_data = $request->session()->all();

        /*$user_otp = $request->session()->get('user_otp');*

        //$user_otp = $request->session()->only(['user_otp','_token']);

        if ($request->session()->has('phone')) {
            return view('users.auth.otp', ['session_data'=>$session_data]);
        }else{
            return redirect()->route('register');
        }
*/
        
    }


    



    public function registrationOtpPost(Request $request){


        try {
            $validator = $request->validate([
                'phone' => 'required|min:10|max:10|unique:users',
            ]);



             $otp =  OtpHelperController::printReport();
             $arr=[];
             $arr['message'] = $otp;
             $arr['status'] = 1;

             $request->session()->put('otp', $otp);
             $request->session()->put('phone', $request->post('phone'));

             return response()->json($arr);

        } catch (\Illuminate\Validation\ValidationException $th) {
            //return $th->validator->errors();

            $arr=[];
            $arr['status'] = 0;
            $arr['message'] = $th->validator->errors()->first();


            return response()->json($arr);
        }


        /*$validator = $request->validate([
            'phone' => 'required|min:10|max:10|unique:users',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }else{

             $data =  OtpHelperController::printReport();
             $arr=[];
             $arr['javob'] = $data;
             $arr['status'] = 1;

             return response()->json($arr);
        }*/

        


       

        //return response()->json($arr, 204);


          /*$sen['success'] = $data;
          return Response::json($arr, 204);*/

          //return Response(['key' => 'value'], Response::HTTP_NOT_FOUND);

        /*$request->validate([
            'phone' => 'required|min:10|max:10|unique:users',
        ]);
   */
        /*$credentials = $request->only('email', 'password');*

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 10])) {
            return redirect()->intended('')->withSuccess('You have Successfully loggedin');
        }

        return back()->withErrors([
            'email' => 'Oppes! You have entered invalid credentials',
        ])->onlyInput('email');*/


        /*return back()->withErrors([
            'email' => 'Please fill all required fields',
        ])->withInput(array('phone','name','email'));*/

        /*$input = Request::only('username', 'password');
        $input = Request::except('credit_card');*/
  
        
    }

















    protected function phoneValidator(array $data){
        return Validator::make($data, [
            'phone' => ['required', 'digits:10'],

        ]);
    }

    protected function otpValidator(array $data){
        return Validator::make($data, [
            'otp' => ['required', 'digits:6'],

        ]);
    }


    



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 1,
            'status' => 1

            
        ]);
    }

    protected function otpCreate(array $data){
        return User::create([
            'phone' => $data['phone'],
            'phone_verified_at' => now(),
            'password' => Hash::make($data['otp']),
            'steps' =>0,
            'role' => 1,
            'status' => 1
 
        ]);
    }



    protected function updateUserId(){
        $id = Auth::user()->id;
        $saveData = ["username" => $id];
        User::updateOrCreate(['id' => $id], $saveData);
    }






}
