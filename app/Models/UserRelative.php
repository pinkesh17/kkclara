<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRelative extends Model{

    use HasFactory;

    protected $table = 'user_relatives';

    protected $fillable = ['user_id', 'relative_id', 'relationship'];

    // Optional: Relationship to users
    public function users(){
        return $this->hasMany(User::class, 'gender_id');
    }
}
      
