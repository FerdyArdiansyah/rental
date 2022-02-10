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
                                        
                                        <th>Options</th>
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
                                            <a href="http://" class="btn btn-danger btn-sm">Cetak</a>
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