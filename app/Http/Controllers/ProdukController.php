<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    //PRODUK
    public function produk()
    {
        $produk = DB::table('produks')->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id_kategori')->get();
        $kategori = DB::table('kategoris')->get();
        return view('administrator.produk', compact('produk', 'kategori'))->with('n', '1');
    }
    public function simpanproduk(request $simpan)
    {
        $data = $simpan->all();
        unset($data['_token']);
        DB::table('produks')->insert($data);
        return redirect('/produk');
    }
    public function editproduk($id)
    {
        // $kategori = DB::table('kategoris')->where('id_kategori', $id)->get();
        // return view('administrator.editkategori', compact('kategori'));
        $produk = DB::table('produks')->where('produk_id', $id)->get();
        $kategori = DB::table('kategoris')->get();
        return view('administrator.editproduk', compact('produk', 'kategori'));
    }
    public function simpanupdateproduk(request $produk)
    {
        $data = [
            'nama_barang' => $produk->nama_barang,
            'harga' => $produk->harga,
            'id_kategori' => $produk->id_kategori,
            'gambar' => $produk->gambar
        ];
        $syarat = ['produk_id' => $produk->produk_id];
        DB::table('produks')->where($syarat)->update($data);
        return redirect('/produk');
    }

    public function detailproduk($id)
    {
        $produk = DB::table('produks')->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id_kategori')->where('produk_id', $id)->get();
        $kategori = DB::table('kategoris')->get();
        return view('administrator.detailproduk', compact('produk', 'kategori'));
    }

    public function hapusproduk($id)
    {
        DB::table('produks')->where('produk_id', $id)->delete();
        return redirect('/produk');
    }
    //BATAS PRODUK
}