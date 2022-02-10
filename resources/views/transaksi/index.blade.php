@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">
                            Data Transaksi
                        </h5>
                        <div class="table responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No. Faktur</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Penyewa</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Durasi</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaksi)
                                    <tr>
                                        <td>{{$transaksi->no_faktur}}</td>
                                        <td>{{$transaksi->item->kode}}</td>
                                        <td>{{$transaksi->item->nama}}</td>
                                        <td>{{$transaksi->nama_peminjam}}</td>
                                        <td>{{$transaksi->tanggal_pinjam}}</td>
                                        <td>{{$transaksi->tanggal_kembali}}</td>
                                        <td>
                                        <?php
                                        $datetime2 = strtotime($transaksi->tanggal_kembali) ;
                                        $datenow = strtotime($transaksi->tanggal_pinjam);
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
                                            <td>
                                                <a href="{{route('kembali.create', $transaksi->id)}}" class="btn btn-outline-info btn-sm mb-2">Buat Pengembalian</a>
                                                <form action="{{route('sms.post', $transaksi->id)}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="phone" class="form-control" value="{{$transaksi->phone}}">
                                                    <button type="submit" class="btn btn-outline-primary btn-sm mb-2" style="width: 130px; height:25px">Kirim notifikasi</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection