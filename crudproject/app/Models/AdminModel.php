<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminModel extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $table='admin_login';
    protected $guard='admin';
    protected $fillable=[
        'email',
        'password'
    ];
    protected $hidden=[
        'password'
    ];
}
