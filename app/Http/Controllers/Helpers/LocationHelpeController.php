<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\LocationDistrict;
use App\Models\LocationBlock;
use App\Models\LocationCity;



class LocationHelpeController extends Controller{

    public function __construct(){

    }


    public function districts(Request $request){
        $state_id = $request->input('id');
        $districts = LocationDistrict::when($state_id, function ($q) use ($state_id) {
                        return $q->where('state_id', $state_id);
                    })->get(['district_id', 'district_name']);

        return response()->json($districts);
    }

    public function blocks(Request $request){

        $district_id = $request->input('id');

        $blocks = LocationBlock::when($district_id, function ($q) use ($district_id) {
                        return $q->where('district_id', $district_id);
                    })->get(['block_id', 'block_name']);

        return response()->json($blocks);
    }

    public function blocks(Request $request){

        $district_id = $request->input('id');

        $blocks = LocationBlock::when($district_id, function ($q) use ($district_id) {
                        return $q->where('district_id', $district_id);
                    })->get(['block_id', 'block_name']);

        return response()->json($blocks);
    }
}


