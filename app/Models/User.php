<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'is_primary',
        'prefix',
        'username',
        'first_name',
        'last_name',
        'phone',
        'phone_verified_at',
        'email',
        'password',
        'steps',
        'role',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function userRole(){

        /*
            return $this->belongsTo(
                UserRole::class => UserRole Modal, 
                'role => The column in the users table that holds the foreign key', 
                'role_id' => The column in the user_role table that the foreign key references
            );
        */

        return $this->belongsTo(UserRole::class, 'role', 'role_id');
    }

    public function userGender(){
        return $this->belongsTo(UserGender::class, 'gender', 'gender_id');
    }
    public function userStatus(){

        return $this->belongsTo(UserStatus::class, 'status', 'id');

    }

    public function userRelatives(){

        /*$this->hasMany(UserRelative::class, 'user_id', 'id');
        Argument    Value   Meaning
        $related    UserRelative::class The related model (table user_relatives)
        $foreignKey 'user_id'   The foreign key in the user_relatives table
        $localKey   'id'    The primary key in the current model (users.id)*/


        return $this->hasMany(UserRelative::class, 'user_id', 'id');
    }
/*
    hasManyThrough(
        string $related,       // Final target model (User)
        string $through,       // Intermediate model (UserRelative)
        string $firstKey,      // FK on through table that links to the current model (user_relatives.user_id)
        string $secondKey,     // FK on final model that links to through table (users.id ← user_relatives.relative_id)
        string $localKey,      // PK on current model (users.id)
        string $secondLocalKey // FK on through table to final model (user_relatives.relative_id)
    )


    return $this->hasManyThrough(
        User::class,           // Final model: users table
        UserRelative::class,   // Through/intermediate model: user_relatives
        'user_id',             // user_relatives.user_id (FK to current user)
        'id',                  // users.id (PK in final model)
        'id',                  // current user's primary key
        'relative_id'          // user_relatives.relative_id (FK to related user)
    );
*/

    public function relativeUsers(){
        return $this->hasManyThrough(User::class, UserRelative::class, 'user_id', 'id', 'id', 'relative_id');
    }


    /*
    public function relatives()
    {
        return $this->belongsToMany(User::class, 'user_relatives', 'user_id', 'relative_id')
                    ->withPivot('relationship');
    }

    public function relatedToMe()
    {
        return $this->belongsToMany(User::class, 'user_relatives', 'relative_id', 'user_id')
                    ->withPivot('relationship');
    }*/


}