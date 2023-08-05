@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Produk</div>
                @foreach($produk as $p)
                <div class="card-body">
                    <img src="{{ asset('images/'.$p->gambar)}}" class="card-img-top p-3" alt="...">
                    <center><a href="/produk" class="btn btn-primary mt-4">Produk</a></center>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-header text-center">Kategori</div>
                @foreach($kategori as $k)
                <div class="card-body">
                    <img src="{{ asset('images/'.$k->gambark)}}" class="card-img-top p-3" alt="...">
                    <center><a href="/kategori" class="btn btn-primary mt-4">Kategori</a></center>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">Pesanan</div>

                <div class="card-body">
                    <img src="{{ asset('images/keranjang.png')}}" height="385" class="card-img-top p-3" alt="...">
                    <center><a href="/pesanan" class="btn btn-primary mt-4">Pesanan</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
