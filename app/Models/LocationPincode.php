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
        'office_name',
        'pincode',
        'district',
        'state',
        'latitude',
        'longitude'

    ];

    // Relationships

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function states(){
        return $this->hasMany(LocationState::class);
    }
}


