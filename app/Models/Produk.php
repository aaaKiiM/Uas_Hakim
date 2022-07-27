<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function tokos()
    {
        return $this->belongsTo(Toko::class,'tokos_id');
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }

}
