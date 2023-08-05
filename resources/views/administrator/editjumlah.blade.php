@extends('layouts.app')
 
@section('content')
<div class="container">
        <center>
            <h1 class="mt-5">Edit Jumlah</h1>
        </center>
    <form action="/savejumlah" method="post">
        @foreach ($detail_pesanan as $row)
        {{ csrf_field() }}
        
        <div class="form-floating mb-3">
            <input type="hidden" name="id_pesanandetail" value="{{ $row->id_pesanandetail}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <input name="jumlah" type="number" value="{{ $row->jumlah}}" class="form-control" id="floatingInput">
            <label for="floatingInput">Jumlah</label>
         </div>
         <button type="submit" class="btn btn-success btn-sm mt-5">Simpan</button>
         <a href="/pesanan" class="btn btn-primary btn-sm mt-5">Kembali</a>
         @endforeach
</form>
</div>

@endsection     