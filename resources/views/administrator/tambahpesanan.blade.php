@extends('layouts.app')
 

@section('content')
     <div class="container">
    <center>
            <h1 class="mt-5">Buat Pesanan</h1>
         </center>
         <a href="/cart" class="btn btn-sm btn-primary"><i class="fa-solid fa-cart-shopping"></i> Lihat Keranjang</a>
         <table class="table tabled-sm mt-3">
            <th class="col">No</th>
            <th class="col">Produk</th>
            <th class="col">harga</th>
            <th class="col">Aksi</th>
             <tr>
                @foreach ($produk as $p)
                <td>{{ $n++ }}</td>
                <td>{{ $p->nama_barang}}</td>
                <td>Rp.{{ number_format($p->harga)}}</td>
                <td><a href="{{url('/cart/tambah/'. $p->produk_id)}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Ke keranjang</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection         