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
                    <th>No. Pengembalian</th>
                    <th>No. Faktur</th>
                    <th>Kode Barang</th>
                    <th>Nama Penyewa</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Lama Penyewaan</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $retrun)
                <tr>
                    <td>{{$retrun->no_pengembalian}}</td>
                    <td>{{$retrun->transaction->no_faktur}}</td>
                    <td>{{$retrun->item->kode}}</td>
                    <td>{{$retrun->transaction->nama_peminjam}}</td>
                    <td>{{$retrun->transaction->tanggal_pinjam}}</td>
                    <td>{{$retrun->transaction->tanggal_kembali}}</td>
                    <td>
                        <?php
                            $datetime2 = strtotime($retrun->transaction->tanggal_kembali) ;
                            $datenow = strtotime($retrun->transaction->tanggal_pinjam);
                            $durasi = ($datenow - $datetime2) / 86400 ;
                            $durasi2 = ($durasi);
                        ?>
                        @if ($datenow == $datetime2  ) 
                                <span class="text-danger">Waktunya mengembalikan</span> 
                            @elseif($datenow > $datetime2)
                                Sudah lewat {{$durasi}} Hari
                            @else
                            <?php $durasi1 = abs($durasi) ?> {{ $durasi1 }} Hari
                        @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>