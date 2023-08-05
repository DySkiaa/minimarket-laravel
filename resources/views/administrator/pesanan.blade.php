@extends('layouts.app')


@section('content')
<div class="container">
    <center>
            <h1 class="mt-5">Pesanan</h1>
         </center>
        <a href="/tambahpesanan" class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Pesanan</a>
         <table class="table tabled-sm mt-3">
            <tr>
                <th class="col">id pesanan</th>
                <th class="col">Tanggal Pesan</th>
                <th class="col">Aksi</th>
            </tr>
            <tr>
                @foreach ($pesanan as $p)
                <td>{{$p->id_pesanan}}</td>
                <td>{{$p->created_at}}</td>
                <td><a href="detailpesanan/{{$p->id_pesanan}}" class="btn btn-sm btn-secondary mb-3"><i class="fa-solid fa-circle-info"></i> Detail</a>
                    <a href="cetak/{{$p->id_pesanan}}" target="blank" class="btn btn-sm btn-danger mb-3"><i class="fa-solid fa-print"></i> Cetak Pdf</a></td>
            </tr>
            @endforeach
        </table>
</div>
@endsection