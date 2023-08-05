<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{

    protected $table = "pesanans";
    protected $primaryKey = "id_pesanan";
    protected $fillable = [
        'transaksi'
    ];
    public function pesanan_details()
    {
        return $this->hasMany(pesananDetail::class, 'id_pesanan', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    static function tambah_pesanan()
    {
        $transaksi = pesanan::create([
            "tanggal_transaksi" => date("Y-m-d")
        ]);

        return $transaksi->id_pesanan;
    }
}