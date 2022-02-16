<?php

namespace App\Http\Controllers;

use App\Transaction;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create()
    {
        return view('sms.create');
    }
    public function store(Request $request, $id)
    {
        $sms = Transaction::findOrFail($id);

        Nexmo::message()->send([
            'to' =>   '62' . $request->phone,
            'from' => 'Rental PS',
            'text'  => 'Halo kami dari Rental-PS ingin memberikan Tagihan'
            
           . 'Nama Peminjam:'.$request->nama_peminjam
           . 'Tanggal Pinjam:'. $request->tanggal_pinjam
           . 'Tanggal Kembali:'. $request->tanggal_kembali
           . 'Jumlah Barang:'. $request->jumlah
           . 'Harga:'. $request->idr
           . 'Terima Kasih'
            ]);

        return redirect()->back();
    }
}