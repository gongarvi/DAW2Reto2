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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD:app/Models/User.php
        'email',
        'foto',
=======
        'foto',
        'progreso',
>>>>>>> origin/OrdoAlogo:app/Models/Usuario.php
        'administrador'
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
<<<<<<< HEAD:app/Models/User.php
        'email_verified_at' => 'datetime',
        'administrador'=> 'boolean'
=======
        'email_verified_at' => 'datetime','administrador'=>'boolean'
>>>>>>> origin/OrdoAlogo:app/Models/Usuario.php
    ];
    public function isAdmin(){
        return $this->administrador;
    }
}
