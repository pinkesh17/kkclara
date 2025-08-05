<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = 'user_addresses';
    protected $primaryKey = 'address_id';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'country',
        'state',
        'district',
        'block',
        'panchayat',
        'city',
        'postal_code',
        'address_line1',
        'address_line2',
        'landmark',
        'type',
        'created_at',
        'updated_at',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
