<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['register_no','notes_title','subject_code'];
    public function Student(){
        return $this->belongsTo(Student::class,'register_no');
    }
}

