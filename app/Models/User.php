<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail   
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function isAdmin()
    {
        return $this->role_id == 1;
    }
    public function isUserActive()
    {
        return $this->role_id == 3;
    }

    public function hasAllow($permission)
    {
        $role= $this->role()->first();

        return $role->permissions()->whereName($permission)->first() ? true : false;
    }

    public function role()
    {
	    return $this->belongsTo('App\Models\Role');
    }
}

