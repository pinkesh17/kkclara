<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGender extends Model{

    protected $table = 'user_gender';

    protected $fillable = ['gender'];

    // Optional: Relationship to users
    public function users(){
        return $this->hasMany(User::class, 'gender_id');
    }
}