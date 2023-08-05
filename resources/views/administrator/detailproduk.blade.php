@extends('layouts.app')


@section('content')
<div class="container">
    <center>
            <h1 class="mt-5">Detail Produk</h1>
    </center>
     <div class="card p-3">
        <table class="mt-3">
        @foreach ($produk as $p)
        <center><img src="{{ asset('images/'.$p->gambar)}}" height="300" width="300" alt=""></center>
            <div class="card-body">
                    <tr>
                        <td class="col-2">Id Produk</td>
                        <td class="col-1">:</td>
                        <td >{{ $p->produk_id}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $p->nama_barang}}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>{{ $p->harga}}</td>
                    </tr>
                    <tr>               
                        <td>Kategori</td>
                        <td>:</td>
                        <td>{{ $p->jenis }}</td>                  
                    </tr>               
                     @endforeach
                    <tr>
                        <td><a href="/produk" class="btn btn-primary btn-sm ">Kembali</a></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                
            </div>
    </div>
</div>
@endsection