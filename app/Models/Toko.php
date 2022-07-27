<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    public function produks()
    {
        return $this->hasMany(Produk::class, 'tokos_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
