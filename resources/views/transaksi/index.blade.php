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
                                                <form action="{{route('kembali.store', $transaksi->id)}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="kode_id" class="form-control" value="{{$transaksi->item->id}}">
                                                    <input type="hidden" name="nofaktur_id" class="form-control" value="{{$transaksi->id}}">
                                                    <input type="hidden" name="namapeminjam_id" class="form-control" value="{{$transaksi->id}}">
                                                    <input type="hidden" name="tanggalpinjam_id" id="" class="form-control" value="{{$transaksi->id}}">
                                                    <input type="hidden" name="tanggalkembali_id" id="" class="form-control" value="{{$transaksi->id}}">
        
                                                    <button type="submit" class="btn btn-outline-primary btn-sm" style="width: 130px; height:-25px;">Buat pengembalian</button>
                                                <form action="{{route('sms.kirim', $transaksi->id)}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="phone" class="form-control" value="{{$transaksi->phone}}">
                                                    <button type="submit" class="btn btn-outline-primary btn-sm mt-2">Kirim notifikasi</button>
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