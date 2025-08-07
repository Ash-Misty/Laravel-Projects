<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hostellers extends Model
{
   protected $table='hostellers';
   protected $fillable=['Hostel_Serial_no','Name','Department','Year'];


}
