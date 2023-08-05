<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{

    protected $table = "pesanan_details";
    protected $primaryKey = "id_pesanandetail";
    protected $fillable = [
        'produk_id',
        'id_pesanan',
        'jumlah',
        'nama_pemesan',
        'nomor_pemesan',
        'alamat_pemesan'
    ];
    public function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'id_pesanan', 'id');
    }
    public function produk()
    {
        return $this->belongsTo(produk::class, 'produk_id', 'id');
    }

    static function tambah_pesanan_detail($produk_id, $id_pesanan, $jumlah, $nama_pemesan, $nomor_pemesan, $alamat_pemesan)
    {
        pesananDetail::create([
            "produk_id" => $produk_id,
            "id_pesanan" => $id_pesanan,
            "jumlah" => $jumlah,
            "nama_pemesan" => $nama_pemesan,
            "nomor_pemesan" => $nomor_pemesan,
            "alamat_pemesan" => $alamat_pemesan
        ]);
    }
}