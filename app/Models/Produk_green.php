<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_green extends Model
{
    use HasFactory;

    public function green(){
        return $this->belongsTo(green::class, 'green_id');
    }

    public function charttest(){
        return $this->hasMany(charttest::class, 'produk_green_id');
    }

    public function produk_image(){
        return $this->hasMany(produk_image::class, 'produk_green_id');
    }

    public function dummy_laba(){
        return $this->hasMany(dummy_laba::class, 'produk_green_id');
    }

    public function google_finance(){
        return $this->hasMany(google_finance::class, 'produk_green_id');
    }

}
