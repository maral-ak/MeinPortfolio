<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatesUsers;

class Admin extends Model implements AuthenticatesUsers
{
    use Authenticatable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = ['password']; 
}
