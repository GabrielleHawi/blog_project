<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     *  Attributes that require user input (assignable)
     *
     * @var array
     */
    protected $fillable = [
        #defination of table columns
        'name',
        'email',
        'password',
    ];

    /**
     * Hidden attributes used for arrays.
     *
     * @var array
     */
    protected $hidden = [
        #defination of table columns
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        #defination of table columns
        'email_verified_at' => 'datetime',
    ];
}
