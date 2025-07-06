<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'group_id',
        'post_type',
        'title',
        'content',
        'image_url',
        'privacy',
        'created_at',
        'updated_at',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
