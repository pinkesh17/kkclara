<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGender extends Model{
    use HasFactory;

    protected $table = 'user_gender';

    protected $fillable = ['gender'];

    // Optional: Relationship to users
    public function users(){
        return $this->hasMany(User::class, 'gender_id');
    }
}