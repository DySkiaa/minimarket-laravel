<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Pesanan</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-group">    
            <div class="container px-4 text-center">
                 <h1 class="mt-5">DyStore</h1>
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3">Nama Admin : {{ Auth::user()->name }}</div>
                    </div>
                    <div class="col">   
                        <div class="p-3">Tanggal Pesan : {{$pesanan->created_at}}</div>
                    </div>
                </div>
            </div>
            <h2 class="text-center mt-3">Detail</h2>
            <table border="1px" class="table table-striped-columns mt-3">
               
                <tr>
                    <th class="col">No</th>
                    <th class="col">Produk</th>
                    <th class="col">Nama Pemesan</th>
                    <th class="col">Nomor Telepon</th>
                    <th class="col">Alamat</th>
                    <th class="col">Harga</th>
                    <th class="col">Jumlah</th>
                    <th class="col">Sub Total</th>
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
                </tr>
                @endforeach
                <tr>
                    <th colspan="7">Total Harga</th>
                    <th>Rp.{{number_format($totalharga)}}</th>
                </tr>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        window.print();    
    </script>
</body>
</html>