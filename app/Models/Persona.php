<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Persona extends Authenticatable
{
    use   HasFactory,Notifiable;

    protected $table = 't_usuarios';
    protected $prymaryKey = 'id_usuario';

    protected $fillable = [
        'nombre','email','password','confirm_password'
    ];
}
