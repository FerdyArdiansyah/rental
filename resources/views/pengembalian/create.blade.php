@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border">
                    <div class="card-body">
                        <form action="{{route('kembali.store', $transactions->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kode Barang</label>
                                        <input class="form-control" type="text" value="{{$transactions->item->kode}}" disabled>
                                        <input type="hidden" name="kode_id" class="form-control" value="{{$transactions->item->id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kode Faktur</label>
                                        <input class="form-control" type="text" value="{{$transactions->no_faktur}}" disabled>
                                        <input type="hidden" name="nofaktur_id" class="form-control" value="{{$transactions->id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Peminjam</label>
                                        <input class="form-control" type="text" value="{{$transactions->nama_peminjam}}" disabled>
                                        <input type="hidden" name="namapeminjam_id" class="form-control" value="{{$transactions->id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Pinjam</label>
                                        <input class="form-control" type="text" value="{{$transactions->tanggal_pinjam}}" disabled>
                                        <input type="hidden" name="tanggalpinjam_id" class="form-control" value="{{$transactions->id}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tanggal Kembali</label>
                                        <input class="form-control" type="text" value="{{$transactions->tanggal_kembali}}" disabled>
                                        <input type="hidden" name="tanggalkembali_id" class="form-control" value="{{$transactions->id}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info">Buat Pengembalian</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection