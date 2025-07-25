<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model{
    use HasFactory;

    protected $table = 'user_jobs';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'start_date',
        'end_date',
        'is_current',
        'description',
    ];
}
 