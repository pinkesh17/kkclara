<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use Carbon\Carbon;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

use App\Traits\SettingTrait;
//use App\Models\User;

//use App\Traits\BlogHelper;

class SettingController extends Controller{

   use SettingTrait; // Import the trait

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){

        $user = Auth::user()->select('id','is_primary','first_name','last_name','email','email_verified_at','phone','phone_verified_at', 'date_of_birth', 'profile_picture', 'role', 'status')
        ->with([
            'userAddress:address_id,state,district,block,city,panchayat,postal_code',
            'userGender:gender_id,gender',
            'userRole:role_id,role_name,role'
        ])
        ->find(Auth::id());



        dd($user);

       return view('admin.settings.profile');
    }




    public function  saveProfile(Request $request){


            print_r($request->all());

   
      
    }









    public function  profileInfo(Request $request){

      $prefixes =  $this->getPrefixes();
     /* $years =  $this->getYears();
      $days =  $this->getDates();
      $months =  $this->getMonths();*/

      
       return view('users.dashboard.settings.profile-information', ['prefixes'=>$prefixes]);
    }

    public function  profileInfoPost(Request $request){


            print_r($request->all());

     /* $this->validator($request->all())->validate();


      $convertedDate = Carbon::createFromFormat('d-m-Y', $request->post('date_of_birth'))->format('Y-m-d');


         User::where('id', $request->post('id'))->update([
             'prefix' => $request->post('prefix'),
             'first_name' => $request->post('first_name'),
             'last_name' => $request->post('last_name'),
             'date_of_birth' => $convertedDate,
             'gender' => $request->post('gender'),
         ]);

         return redirect()->route('profile-information');
**/
      
    }


    




 

    public function  addressUpdate(Request $request){

      $prefixes =  $this->getPrefixes();
      $years =  $this->getYears();
      $days =  $this->getDates();
      $months =  $this->getMonths();

      
       return view('users.dashboard.settings.address-update', ['prefixes'=>$prefixes, 'years'=>$years, 'days'=>$days, 'months'=>$months]);
    }



    protected function validator(array $data){
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'date_of_birth' => 'required', 'date',
            'gender' => 'required',
            
        ]);
     }



    
}
