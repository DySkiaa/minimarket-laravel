@extends('layouts.app')


@section('content')
<div class="container "style="margin-top:3rem; margin-left:25rem;">
    
    <center>
            <h1 class="mt-5">List Produk</h1>
    </center>

    <center>
         <table class="table tabled-sm mt-3">
            <th class="col">No</th>
            <th class="col">Nama</th>
            <th class="col">Harga</th>
            <th class="col">Kategori</th>
            <th class="col">Aksi</th>
            
            

            <tr>
                @foreach ($produk as $p)
                <td>{{ $n++ }}</td>
                <td>{{ $p->nama_barang}}</td>
                <td>Rp.{{ number_format($p->harga)}}</td>
                <td>{{ $p->jenis }}</td>
                <td><a href="detailproduk/{{$p->produk_id}}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-circle-info"></i> Detail</a>
                    <a href="editproduk/{{$p->produk_id}}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href="hapusproduk/{{$p->produk_id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin Dihapus?')"><i class="fa-solid fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
</center>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-solid fa-plus"></i>
            Tambah Produk
            </button>

            <!-- Modal -->
            <form action="simpanproduk" method="post" >
            {{ csrf_field() }}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nama Produk</span>
                <input type="text" class="form-control" name="nama_barang" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Harga Produk</span>
                <input type="number" class="form-control" aria-label="Sizing example input" name="harga" aria-describedby="inputGroup-sizing-default">
            </div>     
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Kategori</span>
                <select class="form-select form-select-sm" id="kode" name="id_kategori">
                    @foreach ($kategori as $row)
                    <option value="{{ $row->id_kategori }}">{{ $row->jenis }}</option>
                    @endforeach
                    </select>
            </div>   
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Gambar</span>
                <input type="file" class="form-control" name="gambar" accept=".jpg, .jpeg, .png" style="width: 305px;">
                <!-- <input type="hidden" name="filelama" id="filelama"> -->
            </div>        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
                </div>
            </div>
            </div>
</div>
@endsection