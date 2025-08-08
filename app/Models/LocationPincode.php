<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocationPincode extends Model
{
    use HasFactory;

    /*protected $table = 'addresses';
    protected $primaryKey = 'address_id';*/

    //public $timestamps = true;

    protected $fillable = [
        'country',
        'country_code',
        'capital'
    ];

    // Relationships

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function states(){
        return $this->hasMany(LocationState::class);
    }
}

