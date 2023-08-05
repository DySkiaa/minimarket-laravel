@extends('layouts.app')


@section('content')
<div class="container" style="margin-top:8rem; margin-left:25rem;">
    
        <center>
            <h1 class="mt-5">List Kategori</h1>
        </center>
        
         <table class="table tabled-sm mt-3">
            <th class="col">Id</th>
            <th class="col">Jenis</th>
            <th class="col">Aksi</th>
            
            @foreach ($kategori as $k)

            <tr>
                <td>{{ $k->id_kategori }}</td>
                <td>{{ $k->jenis}}</td>
                <td>
                    <a href="editkategori/{{ $k->id_kategori}}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-solid fa-plus"></i>
            Tambah Kategori
            </button>

            <!-- Modal -->
            <form action="simpankategori" method="post" >
            {{ csrf_field() }}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nama Kategori</span>
                <input type="text" class="form-control" name="jenis" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <div class="input-group my-3">
                    <label class="input-group-text" for="inputGroupFile01">Gambar</label>
                    <input type="file" class="form-control" name="gambark" id="inputGroupFile01">
                </div>
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