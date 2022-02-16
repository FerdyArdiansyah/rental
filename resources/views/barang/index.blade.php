@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">
                            Data Barang
                        </h5>
                        <div class="mt-3 mb-3">
                            <a href="{{route('tambah-data.barang') }}" class="btn btn-outline-info">
                                Tambah Data
                            </a>
                        </div>
                        <div class="table responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stock Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{$item->kode}}</td>
                                            <td><a href="{{route('transaksi.create', $item->id)}}" class="btn btn-outline-info btn-sm">{{$item->nama}}</a></td>
                                            <td>{{$item->stock}}</td>
                                            <td>{{$item->idr}}</td>
                                            <td>
                                                <form action="{{route('barang.delete', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                <a href="{{route('edit-data.barang', $item->id)}}" class="btn btn-warning btn-sm">edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">hapus</button>
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