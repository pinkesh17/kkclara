<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocationBlock extends Model
{
    use HasFactory;

    //protected $table = 'addresses';
    protected $primaryKey = 'block_id';

   // public $timestamps = true;

    protected $fillable = [
        'district_id',
        'block_name',
        'block_url'
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}







