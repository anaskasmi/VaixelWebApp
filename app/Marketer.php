<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Marketer extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $hidden = [
        'password', 'remember_token',
    ];

}
