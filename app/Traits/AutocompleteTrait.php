<?php
  
namespace App\Traits;

use Illuminate\Http\Request;
use App\Models\User;




  
trait AutocompleteTrait{



    public function autocompleteUsername($search){

        $users = User::whereRaw("CONCAT(first_name, ' ', last_name) LIKE ?", ["%{$search}%"])
            ->select('id', 'first_name', 'last_name')
            ->limit(10)
            ->get();

        $results = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
            ];
        });
        return response()->json($results);

    }
}
