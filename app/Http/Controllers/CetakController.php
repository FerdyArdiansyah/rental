<?php

namespace App\Http\Controllers;

use PDF;
use App\Item;
use App\Transaction;
use App\Pengembalian;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function index(Request $request)
    {
        $barangs = Item::all();

        $pdf = PDF::loadView('laporan.index', compact('barangs'))->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan_barang.pdf');
    }

    public function edit(Request $request)
    {
        $barangs = Transaction::all();

        $pdf = PDF::loadView('laporan.edit', compact('barangs'))->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan_transaksi.pdf');
    }

    public function create(Request $request)
    {
        $barangs = Pengembalian::all();

        $pdf = PDF::loadView('laporan.create', compact('barangs'))->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan_pengembalian.pdf');
    }

    public function dashboard(Request $request)
    {
        $data = [
            'items' => Item::count(),
            'transactions' => Transaction::count(),
            'terlambat' => Transaction::where('durasi', 'Terlambat')->count(),
            'omset' => Transaction::sum('idr'),
        ];

        $pdf = PDF::loadView('laporan.dashboard', $data)->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan_dashboard.pdf');
    }
}