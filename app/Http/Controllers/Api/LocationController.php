<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\LocationCountry;



class LocationController extends Controller{


    public function countries(){

        $response = [
            'success' => true,
            'message' => 'Country list',
            'countries' => LocationCountry::all(),
        ];


        return response()->json($response);


        /*return response()->json(
            'success'=> true,
            'message' => 'Ycountry list',
            LocationCountry::all()
        );
        */




        /*return Response(['success'=> false, 'message' => 'email or password wrong.'],401);*/

    }

  

    
}
