@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="height: 7rem; width: 16rem">
                    <div class="card-body">
                        <p>Barang</p>
                        <h3>{{$items}}</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16" style="margin-top: -150px">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                          </svg>
                    </div>
                </div>
             </div>   
                <div class="col-md-3">
                    <div class="card" style="height: 7rem; width: 16rem">
                        <div class="card-body">
                            <P>Transaksi</P>
                            <h3>{{$transactions}}</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16" style="margin-top: -150px">
                                <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                              </svg>
                        </div>
                    </div>
                 </div> 
                 <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="height: 7rem; width: 16rem">
                            <P>Terlambat</P>
                            <h3>{{$terlambat}}</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16" style="margin-top: -150px">
                                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                              </svg>
                        </div>
                    </div>
                 </div>   
                 <div class="col-md-3">
                    <div class="card">
                        <div class="card-body" style="height: 7rem; width: 16rem">
                            <P>Omset</P>
                            <h3>{{$omset}}</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16" style="margin-top: -150px">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                              </svg>
                        </div>
                    </div>
                 </div>   
        </div>
    </div>
@endsection