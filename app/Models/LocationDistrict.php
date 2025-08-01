<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocationDistrict extends Model
{
    use HasFactory;

   // protected $table = 'addresses';
    protected $primaryKey = 'district_id';

    //public $timestamps = true;

    protected $fillable = [
        'state_id',
        'district_name',
        'district_url'
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}







