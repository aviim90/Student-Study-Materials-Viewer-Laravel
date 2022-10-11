<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

    public function lecturers(){
        return $this->belongsTo(User::class);
    }

    public function programs(){
        return $this->belongsTo(Program::class);
    }






}
