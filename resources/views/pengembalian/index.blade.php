@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">
                            Pengembalian
                        </h5>
                        
                        <div class="table responsive">
                            <table class="table table-striped">
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
                                    @foreach ($returns as $retrun)
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection