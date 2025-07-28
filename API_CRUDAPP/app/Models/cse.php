<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cse extends Model
{
    protected $table='cses';
    protected $fillable=['name','email'];
}
