<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan Semua Barang</h3>
            <h5 class="text-muted">RENTAL-PS</h5>
            <h5 class="text-muted">JL. Yon Armed No.07</h5>
        </div>
        <div class="mb-3">
            @if(request('awal'))
                <small>Dari Tanggal {{request('awal')}} sampa tanggal {{request('akhir')}}</small>
            @endif
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Stock Barang</th>
                    <th>Harga Satuan</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $item)
                    <tr>
                        <td>{{$item->kode}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->stock}}</td>
                        <td>{{$item->idr}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>