<?php

namespace App\Http\Controllers;

use App\Item;
use App\Transaction;
use App\Pengembalian;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function index()
    {
        $returns = Pengembalian::With('item', 'transaction')->get();
        return view('pengembalian.index', compact('returns'));
    }
    public function create($id)
    {
        $transactions = Transaction::findOrFail($id);
        return view('pengembalian.create', compact('transactions'));
    }

    public function store(Request $request, $id)
    {
        $returns = Pengembalian::create([
            'kode_id' => $request->kode_id,
            'nofaktur_id' => $request->nofaktur_id,
            'namapeminjam_id' => $request->namapeminjam_id,
            'tanggalpinjam_id' => $request->tanggalpinjam_id,
            'tanggalkembali_id' => $request->tanggalkembali_id,
        ]);
        return redirect()->back();
    }
    
}
