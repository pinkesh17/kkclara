<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model{
    use HasFactory;

    protected $table = 'user_notifications';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'title',
        'message',
        'type',
        'is_read'
    ];
}
