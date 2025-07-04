<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use App\Traits\BlogHelper;

class DashboardController extends Controller{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){

       return view('users.dashboard.home');
    }



    
}
