<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasApiTokens;
   protected $fillable=['register_no','name','department','email','password'];
}
