<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = "produks";
    protected $primaryKey = "produk_id";
    protected $fillable = [
        'nama_barang',
        'harga',
        'id_kategori',
        'gambar'
    ];

    static function list_produk()
    {
        $data = produks::all();
        return $data;
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id');
    }
    public function pesanan_details()
    {
        return $this->hasMany(pesananDetail::class, 'produk_id', 'id');
    }

    static function detail_produk($produk_id)
    {
        $data = produk::where("produk_id", $produk_id)->first();

        return $data;
    }

}