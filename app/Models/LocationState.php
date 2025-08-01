<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocationState extends Model{
    use HasFactory;

    /*protected $table = 'addresses';
   

    public $timestamps = true;*/

     protected $primaryKey = 'state_id';

    protected $fillable = [
        'country_id',
        'state_name',
        'state_url'
    ];

    // Relationships

   /* public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}

