<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // mass-assign
    protected $fillable = [
        'name', 'email', 'password', 'mobile_no', 'education'
    ];
    public function marks()
    {
        return $this->hasMany(Mark::class);
        }

 
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
