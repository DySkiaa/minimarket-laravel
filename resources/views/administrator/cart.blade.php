@extends('layouts.app')
 

@section('content')
     <div class="container">
        <center>
            <h1 class="mt-5">Pesanan</h1>
        </center>

        <a href="/tambahpesanan" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Produk Lainnya</a><br><br>
    @if(empty($cart) || count($cart) ==0)
        Tidak Ada Produk Apapun yang ditambahkan
    @else
    <form action="{{url('/transaksi/tambah')}}" method="POST">
    @csrf
     <div class="form-floating mb-3">
            <input name="nama_pemesan" type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Nama Pemesan</label>
         </div>
        <div class="form-floating mb-3">
            <input name="nomor_pemesan" type="number" class="form-control" id="floatingPassword" placeholder="">
             <label for= " floatingInput">Nomor Telepon</label>
        </div>
        <div class="form-floating mb-3">
             <input name="alamat_pemesan" type="text" class="form-control" id="floatingPassword" >
            <label for="floatingInput">Alamat</label>
        </div>

        
        <table class="table tabled-sm mt-3" cellpadding="10" border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Sub Total</th>
                <th>Aksi</th>
            </tr>    
            <?php 
                $no=1;
                $totalharga = 0;
            ?>
            @foreach($cart as $ct => $val)
            <?php 
                $subtotal = $val["harga"] * $val["jumlah"];
            ?>
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$val["nama_barang"]}}</td>
                    <td>Rp.{{ number_format($val["harga"]) }}</td>
                    <td>{{$val["jumlah"]}}</td>
                    <td class="col">Rp. {{ number_format($subtotal) }}</td>
                    <td><a href="{{url('/cart/hapus/'.$ct)}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Hapus Produk</a></td>
                </tr>
                <?php
                    $totalharga += $subtotal;
                ?>
            @endforeach
            
            <tr>
                <td colspan="4">Total Harga</td>
                <td class="col">Rp. {{ number_format($totalharga) }}</td>
            </tr>
        </table>
        <button type="submit" class="btn btn-sm btn-success">Beli Sekarang</a>
    @endif
    </div>
@endsection         