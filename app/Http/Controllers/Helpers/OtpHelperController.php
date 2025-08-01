<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
/*use Illuminate\Http\Request;*/

class OtpHelperController extends Controller{

   public static function  printReport() {

        $six_digit_random_number = random_int(101010, 999999);
        return $six_digit_random_number;
    }

    


    //
}






