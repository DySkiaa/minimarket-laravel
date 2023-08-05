@extends('layouts.app')


@section('content')
<div class="container">
     <center>
            <h1 class="mt-5">Pesanan</h1>
         </center>
        <a href="/pesanan" class="btn btn-sm btn-secondary mb-3">Kembali</a>
         <table class="table tabled-sm mt-3">
            <tr>
                <th class="col">No</th>
                <th class="col">Produk</th>
                <th class="col">Nama Pemesan</th>
                <th class="col">Nomor Telepon</th>
                <th class="col">Alamat</th>
                <th class="col">Harga</th>
                <th class="col">Jumlah</th>
                <th class="col">Sub Total</th>
                <th class="col">Aksi</th>
            </tr>
            <?php 
                $totalharga = 0;
            ?>
            @foreach($detail_pesanan as $dp)
            <?php 
            $subtotal = $dp->harga * $dp->jumlah;
            $totalharga += $subtotal;
        ?>
            <tr>
                <td class="col">{{$n++}}</td>
                <td class="col">{{$dp->nama_barang}}</td>
                <td class="col">{{$dp->nama_pemesan}}</td>
                <td class="col">{{$dp->nomor_pemesan}}</td>
                <td class="col">{{$dp->alamat_pemesan}}</td>
                <td class="col">Rp.{{ number_format($dp->harga)}}</td>
                <td class="col">{{$dp->jumlah}}</td>
                <td class="col">Rp. {{ number_format($subtotal) }}</td>
                <td class="col"><a href="/editjumlah/{{$dp->id_pesanandetail}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Jumlah</a></td>
            </tr>
            @endforeach
            <tr>
                <th colspan="7">Total Harga</th>
                <th>Rp.{{number_format($totalharga)}}</th>
            </tr>
        </table>
</div>

@endsection