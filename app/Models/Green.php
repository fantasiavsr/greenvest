<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class green extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function produk_green(){
        return $this->hasMany(produk_green::class);
    }
}
