<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class, 'user_id');
    }

    public function dummy_bankdef(){
        return $this->hasMany(dummy_bankdef::class);
    }
}
