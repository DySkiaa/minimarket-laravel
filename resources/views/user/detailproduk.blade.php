@extends('layouts.app')
   
@section('content')
<div class="container">
    <center>
            <h1 class="mt-5">Detail Produk</h1>
    <div class="card mt-3" style="width: 18rem;">
     @foreach ($produk as $p)
        <img src="{{ asset('images/'.$p->gambar)}}" class="card-img-top p-3" alt="...">
            <div class="card-body">
                <h5 class="card-title ">{{ $p->nama_barang}}</h5>
                <p class="card-text">Harga : Rp.{{ number_format($p->harga)}}</p>
                <p class="card-text">{{ $p->jenis}}</p>
                <a href="/produkuser" class="btn btn-sm btn-primary">Kembali</a>
                <a href=" https://wa.me/6281573692697" class="btn btn-sm btn-success">Order</a>
            </div>
    </div> 
    @endforeach
    </center>
    
</div>
@endsection