<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
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
    public function homeadmin()
    {
        $kategori = DB::table('kategoris')->take(1)->get();
        $produk = DB::table('produks')->take(1)->get();
        return view('administrator.home', compact('kategori', 'produk'));
    }

    public function kategori()
    {
        $kategori = DB::table('kategoris')->get();

        return view('administrator.kategori', compact('kategori'))->with('n', '1');
    }
    public function editkategori($id)
    {
        $kategori = DB::table('kategoris')->where('id_kategori', $id)->get();
        return view('administrator.editkategori', compact('kategori'));
    }
    public function simpanupdatekategori(request $kategori)
    {
        $data = [
            'jenis' => $kategori->jenis,
            'gambark' => $kategori->gambark
        ];
        $syarat = ['id_kategori' => $kategori->id_kategori];
        DB::table('kategoris')->where($syarat)->update($data);
        return redirect('/kategori');
    }
    public function simpankategori(request $simpan)
    {
        $data = $simpan->all();
        unset($data['_token']);
        DB::table('kategoris')->insert($data);
        return redirect('/kategori');
    }
    public function tambahkategori()
    {
        return view('administrator.tambahkategori');
    }
    //BATAS KATEGORI
}