<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model{

    use HasFactory;
    protected $table = 'user_role';
    
    protected $fillable = ['role_name'];



    // Optional: Relationship to users
    public function users(){
        return $this->hasMany(User::class, 'role_id');
    }
}