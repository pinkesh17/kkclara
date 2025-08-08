<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\LocationPincode;
use App\Models\LocationDistrict;
use App\Models\LocationBlock;
use App\Models\LocationCity;



class LocationHelpeController extends Controller{

    public function __construct(){

    }




    public function zipcode(Request $request){

        $query = $request->input('q');
        $pincodes = LocationPincode::when($query, function ($q) use ($query) {
                return $q->where('pincode', 'like', $query . '%');
            })
           ->selectRaw('MIN(id) as id, pincode, MIN(office_name) as office_name, MIN(district) as district, MIN(state) as state, MIN(latitude) as latitude, MIN(longitude) as longitude')
            ->groupBy('pincode')
            ->orderBy('pincode')
            ->limit(50)
            ->get();

        return response()->json($pincodes);


    }

    public function posts(Request $request){

        $query = $request->input('zip');
        $pincodes = LocationPincode::when($query, function ($q) use ($query) {
                return $q->where('pincode', $query);
            })
           ->selectRaw('id, pincode, office_name, district, state, latitude, longitude')
            ->orderBy('office_name')
            ->limit(50)
            ->get();

        return response()->json($pincodes);


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

    /*public function blocks(Request $request){

        $district_id = $request->input('id');

        $blocks = LocationBlock::when($district_id, function ($q) use ($district_id) {
                        return $q->where('district_id', $district_id);
                    })->get(['block_id', 'block_name']);

        return response()->json($blocks);
    }*/
}


