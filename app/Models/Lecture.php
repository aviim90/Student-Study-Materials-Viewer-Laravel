<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    public function files(){
        return $this->hasMany(File::class);
    }

    public function groups(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
