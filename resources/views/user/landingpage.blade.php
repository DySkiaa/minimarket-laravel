@extends('layouts.app')
      
@section('content')
<div class="container">
    <center class="mt-5">
        <h3>Cari Sesuai Kategori</h3>
    </center>
    <div class="row">
             @foreach($kategori as $k)
            <div class="col-4">
                
                <div class="card mt-3" style="width: 18rem;">
                    <img src="{{ asset('images/'.$k->gambark)}}" class="card-img-top p-3" alt="...">
                    <div class="card-body"> 
                        <center><a href="sesuaikategori/{{$k->id_kategori}}" class="btn btn-primary">{{ $k->jenis}}</a></center>
                </div> 
            </div>
        </div>
  @endforeach
<center><a href="/kategoriuser" class="btn col-2 btn-primary mt-3">Lainnya</a></center>
 
  <center class="mt-5">
        <h3>Beberapa Produk</h3>
    </center>
    <div class="row">
             @foreach($produk as $p)
            <div class="col-4">
                
                <div class="card mt-3" style="width: 18rem;">
                    <img src="{{ asset('images/'.$p->gambar)}}" class="card-img-top p-3" alt="...">
                    <div class="card-body"> 
                        <center><a href="detailprodukuser/{{$p->produk_id}}" class="btn btn-primary">Detail</a></center>
                </div> 
            </div>
        </div>
  @endforeach
  <center><a href="/produkuser" class="btn col-2 btn-primary my-3">Lainnya</a></center>
    
</div>


@endsection