@extends('layouts.app')


@section('content')
<div class="container">
        <center>
            <h1 class="mt-5">Edit Kategori</h1>
        </center>
        <form action="/simpanupdatekategori" method="post">
            @foreach ($kategori as $row)
            {{ csrf_field() }}
    <div class="input-group mt-5">
        <input type="hidden" name="id_kategori" value="{{ $row->id_kategori}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <span class="input-group-text" id="inputGroup-sizing-default">Nama Kategori</span>
        <input type="text" name="jenis" value="{{ $row->jenis}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <div class="input-group my-3">
                    <label class="input-group-text" for="inputGroupFile01">Gambar</label>
                    <input value="{{$row->gambark}}" type="file" class="form-control" name="gambark" id="inputGroupFile01">
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-sm mt-5">Simpan</button>
    <a href="/kategori" class="btn btn-primary btn-sm mt-5">Kembali</a>
     @endforeach
 </form>

</div>

@endsection