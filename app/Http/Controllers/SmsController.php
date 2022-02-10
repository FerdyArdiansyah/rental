<?php

namespace App\Http\Controllers;

use App\Transaction;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function store(Request $request, $id)
    {
        $transaksi = Transaction::findOrFail($id);

        Nexmo::message()->send([
            'to' =>   $transaksi->phone,
            'from' => 'Rental PS',
            'text'  => 'Halo kami dari Rental-PS ingin memberikan Tagihan'
            
           . 'Nama Peminjam:'.$transaksi->nama_peminjam
           . 'Tanggal Pinjam:'. $transaksi->tanggal_pinjam
           . 'Tanggal Kembali:'. $transaksi->tanggal_kembali
           . 'Jumlah Barang:'. $transaksi->jumlah
           . 'Harga:'. $transaksi->idr
           . 'Terima Kasih'
            ]);

        return redirect()->back();
    }
}