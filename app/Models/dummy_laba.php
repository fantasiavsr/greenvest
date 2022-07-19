<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dummy_laba extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_green_id',
        'laba',
    ];

    public function produk_green()
    {
        return $this->belongsTo(produk_green::class);
    }
}
