<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function produks()
    {
        return $this->hasMany(produk::class, 'id_kategori', 'id');
    }
}