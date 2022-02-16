@extends('layouts.app')

@section('content')


<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-body">
                    <form action="{{route('sms.kirim', $sms->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Massukan Nomer</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col md-6">
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection