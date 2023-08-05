<?php

namespace App\Http\Controllers;

use App\pesananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\produk;
use App\pesanan;

class PesananController extends Controller
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

    public function pesanan()
    {
        $pesanan = DB::table('pesanans')->get();

        return view('administrator.pesanan', compact('pesanan'))->with('n', '1');
    }
    public function tambahpesanan()
    {
        $produk = DB::table('produks')->get();
        return view('administrator.tambahpesanan', compact('produk'))->with('n', '1');

        // session()->forget("cart");
    }
    public function tambahcart($produk_id)
    {
        $cart = session("cart");
        $produk = produk::detail_produk($produk_id);
        $cart[$produk_id] = [
            "nama_barang" => $produk->nama_barang,
            "harga" => $produk->harga,
            "jumlah" => 1,
        ];

        session(["cart" => $cart]);

        return redirect('/cart');
    }

    function cart()
    {
        $cart = session("cart");
        return view('administrator.cart')->with("cart", $cart);
    }
    function hapuscart($produk_id)
    {
        $cart = session("cart");
        unset($cart[$produk_id]);
        session(["cart" => $cart]);

        return redirect('/cart');
    }

    function tambahtransaksi(request $request)
    {
        $cart = session("cart");
        $id_pesanan = pesanan::tambah_pesanan();

        $nama_pemesan = $request->input('nama_pemesan');
        $nomor_pemesan = $request->input('nomor_pemesan');
        $alamat_pemesan = $request->input('alamat_pemesan');

        foreach ($cart as $ct => $val) {

            $produk_id = $ct;
            $jumlah = $val["jumlah"];

            pesananDetail::tambah_pesanan_detail($produk_id, $id_pesanan, $jumlah, $nama_pemesan, $nomor_pemesan, $alamat_pemesan);
        }
        session()->forget("cart");
        return redirect('/pesanan');
    }

    function unsetcart()
    {
        session()->forget("cart");
        return redirect('/pesanan');
    }
    public function detailpesanan($id)
    {
        $pesanan = DB::table('pesanans')->where('id_pesanan', $id)->first();
        $detail_pesanan = DB::table('pesanan_details')
            ->join('produks', 'pesanan_details.produk_id', '=', 'produks.produk_id')
            ->where('pesanan_details.id_pesanan', $id)
            ->get();
        return view('administrator.detailpesanan', compact('pesanan', 'detail_pesanan'))->with('n', '1');
    }
    public function editjumlah($id)
    {
        $detail_pesanan = DB::table('pesanan_details')->where('id_pesanandetail', $id)->get();
        return view('administrator.editjumlah', compact('detail_pesanan'));
    }
    public function savejumlah(request $jumlah)
    {
        $data = [
            'jumlah' => $jumlah->jumlah
        ];
        $syarat = ['id_pesanandetail' => $jumlah->id_pesanandetail];
        DB::table('pesanan_details')->where($syarat)->update($data);
        return redirect('/pesanan');
    }

    public function cetakpesanan($id)
    {
        $pesanan = DB::table('pesanans')->where('id_pesanan', $id)->first();
        $detail_pesanan = DB::table('pesanan_details')
            ->join('produks', 'pesanan_details.produk_id', '=', 'produks.produk_id')
            ->where('pesanan_details.id_pesanan', $id)
            ->get();
        return view('administrator.cetakpdf', compact('pesanan', 'detail_pesanan'))->with('n', '1');
    }
}