<?php

namespace App\Http\Controllers;

use App\Item;
use App\Transaction;
use App\Pengembalian;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = \App\Transaction::with('item')->where('kategori', Null)->get();
        
        return view('transaksi.index', compact('transactions'));
    }

    public function create($id)
    {
        $transactions = Item::findOrFail($id);

        return view('transaksi.create', compact('transactions'));
    }

    public function store(Request $request, $id)
    {
        $transactions = Transaction::create([
            'kode_id' => $request->kode_id,
            'nama_id' => $request->nama_id,
            'nama_peminjam' => $request->nama_peminjam,
            'jumlah' => $request->jumlah,
            'idr'   => $request->idr,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'email' => $request->email,
            'phone' => $request->phone,
            'kategori' => $request->kategori,
        ]);

        if ($transactions->save()) {
            $harga = Item::findOrFail($transactions->kode_id);

            $jumlah = $transactions->jumlah * $harga->idr;

            $transactions->update ([
               'idr' => $jumlah
            ]);
        }

        if($transactions->save()) {
            $get = Item::findOrFail($transactions->kode_id);

            $hitung = $get->stock - $transactions->jumlah;

            $get->update([
               'stock' => $hitung
            ]);
       }
       
       if ($transactions->save()) {
        date_default_timezone_set("Asia/Jakarta");
        $datetime2 = strtotime($transactions->tanggal_kembali) ;
        $datenow = strtotime(date('Y-m-d'));
        $durasi = ($datenow - $datetime2) / 86400 ;
        $durasi2 = ($durasi).'Hari';
       
        if ($datenow > $datetime2) {
           $durasi2 = 'Terlambat';
        }
        if ($datenow == $datetime2) {
            $durasi2 = 'Kembalikan';
        }
        $transactions->update([
            'durasi' => $durasi2
        ]);

       }
       return redirect()->back();
    }
}
