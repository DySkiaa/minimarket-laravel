@extends('layouts.app')


@section('content')
<div class="container">
        <center>
            <h1 class="mt-5">Edit Produk</h1>
        </center>
        <form action="/simpanupdateproduk" method="post">
            @foreach ($produk as $row)
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="hidden" class="form-control" value="{{ $row->produk_id}}" name="produk_id" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <span class="input-group-text" id="inputGroup-sizing-default">Nama Produk</span>
                <input type="text" class="form-control" value="{{ $row->nama_barang}}" name="nama_barang" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Harga Produk</span>
                <input type="number" class="form-control" value="{{ $row->harga}}" aria-label="Sizing example input" name="harga" aria-describedby="inputGroup-sizing-default">
            </div>   
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Kategori</span>
                <select class="form-select form-select-sm" id="id_kategori" name="id_kategori">
                    @foreach ($kategori as $w)
                    <option  value="{{ $w->id_kategori }}" {{ ( $row->id_kategori == $w->id_kategori ) ? 'selected' : '' }}>{{ $w->jenis }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="custom-file">
                        Gambar Produk
                        <input value="{{$row->gambar}}" type="file" class="form-control" name="gambar" id="gambar" accept=".jpg, .jpeg, .png" style="width: 305px;">
                        <input type="hidden" name="filelama" id="filelama">
                    </div>
                </div>
            </div>
            
    <button type="submit" class="btn btn-success btn-sm mt-5">Simpan</button>
    <a href="/produk" class="btn btn-primary btn-sm mt-5">Kembali</a>
     @endforeach
 </form>

</div>

@endsection