<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function role()
//    {
//        return $this->hasOne(Role::class);
//    }

    public function scopeRole($query)
    {
        return $query->join('roles as r', 'users.role_id', '=', 'r.id');
    }

    public function scopeLevel($query)
    {
        return $query->join('levels as l', 'users.level_id', '=', 'l.id');
    }

//    public function levels()
//    {
//        return $this->hasOne(Level::class);
//    }
}
