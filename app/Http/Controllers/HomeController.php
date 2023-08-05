<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategoris')->take(3)->get();
        $produk = DB::table('produks')->take(3)->get();
        return view('user.landingpage', compact('kategori', 'produk'));
    }
    public function tampilkategori()
    {
        $kategori = DB::table('kategoris')->get();
        return view('user.kategoriuser', compact('kategori'));
    }
    public function tampilproduk()
    {
        $produk = DB::table('produks')->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id_kategori')->get();
        $kategori = DB::table('kategoris')->get();
        return view('user.produkuser', compact('produk', 'kategori'));
    }
    public function detailproduk($id)
    {
        $produk = DB::table('produks')->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id_kategori')->where('produk_id', $id)->get();
        $kategori = DB::table('kategoris')->get();
        return view('user.detailproduk', compact('produk', 'kategori'));

    }
    public function carisesuaikategori($id)
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id_kategori')
            ->where('kategoris.id_kategori', $id)
            ->get();

        $kategori = DB::table('kategoris')->get();
        return view('user.sesuaikategori', compact('kategori', 'produk'));
    }



}