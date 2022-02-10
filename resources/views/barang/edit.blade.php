@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-danger">
                        <h5 class="font weight-bold">Perhatian!!!</h5>
                        <h5>Harap masukan data transaksi dengan benar</h5>
                    </div>
                    <form action="{{route('barang.update', $items->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="nama" id="" value="{{$items->nama}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">jumlah barang</label>
                                    <input type="text" name="stock" id="" value="{{$items->stock}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="idr" id="" value="{{$items->idr}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info">Simpan Barang</button>
                            <a href="" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection