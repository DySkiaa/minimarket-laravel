@extends('layouts.app')



@section('content')
<div class="container">
    <center>
            <h1 class="mt-5">List Produk</h1>
    </center>   
        <div class="row">
             @foreach($produk as $p)
            <div class="col-4">
                
                <div class="card mt-3" style="width: 18rem;">
                    <img src="{{ asset('images/'.$p->gambar)}}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->nama_barang}}</h5>
                        <p class="card-text">Harga : Rp.{{ number_format($p->harga)}}</p>
                        <center><a href="detailprodukuser/{{$p->produk_id}}" class="btn btn-primary">Detail Produk</a></center>
                </div> 
            </div>
        </div>
  @endforeach
</div>
    
</div>


@endsection