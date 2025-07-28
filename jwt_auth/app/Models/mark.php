<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    protected $fillable=['user_id','subject','mark'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
